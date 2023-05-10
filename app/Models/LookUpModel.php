<?php namespace App\Models;

    use CodeIgniter\Model;

    class LookUpModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($data) {
                
                $sqlText = "select ifnull( max(look_up_id), 0) +1 as maxid from tbl_look_up"; 
                $query =  $this->db->query($sqlText);
                $row = $query->getRow();

                $format = "INSERT INTO `tbl_look_up`(`maker_id`,`auth_id`,`action_type`,`action_date`,`look_up_id`,`look_up_name`,`short_name`,`sort_order`,`look_type_id`,`ref_lookup_id`)
                VALUES('%s',NULL,'INSERT',NOW(),%d,'%s','%s',%d,%d,%s)";
                $sqlText = sprintf($format, $data['email'], $row->maxid, $data['look_up_name'], $data['short_name'], $data['sort_order'], $data['look_type_id'],$data['ref_lookup_id']);
            
                $query =  $this->db->query($sqlText);
                return  $this->db->affectedRows();

            }
            public function erase($look_up_id) {
                $sqlText = "DELETE FROM `tbl_look_up` WHERE `look_up_id` = ".$look_up_id."";
                try {
                    $query =  $this->db->query($sqlText);
                    // return  $this->db->affectedRows();
                    return  null;
                } 
                catch (\Throwable  $e) {
                    // exit($e->getMessage());
                    // $e->getMessage(); exit;
                    return  $e->getMessage(); 
                }
            }
            public function edit($data) {
              $format = " UPDATE `tbl_look_up`
                            SET
                            `auth_id` =' %s',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `look_up_name` = '%s',
                            `short_name` = '%s',
                            `sort_order` = %d,
                            `look_type_id` = %d,
                            `ref_lookup_id` = %s
                            WHERE `look_up_id` = %d";
                
                $sqlText = sprintf($format, $data['email'], $data['look_up_name'], $data['short_name'], $data['sort_order'], $data['look_type_id'],$data['ref_lookup_id'],$data['look_up_id']);
                
                $query =  $this->db->query($sqlText);

                return  $this->db->affectedRows();
            }
           
            public function get() {
                $sqlText = "SELECT * FROM tbl_look_up" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();
            }
            public function getById($look_up_id) {
                $sqlText = "SELECT * FROM tbl_look_up WHERE `look_up_id` = '".$look_up_id."'";
                $query =  $this->db->query($sqlText);
                return $query->getRow();
            }
            public function getByCriteria($look_type_id, $is_array) {
                $sqlText = "SELECT * FROM tbl_look_up ";

                $condition = "";
                if(isset($look_type_id)) {
                    $condition = $condition." AND look_type_id = ".$look_type_id;
                }
                if(!empty($condition)) {
                     $condition = ' WHERE '.substr($condition, 5, strlen($condition)-5);
                }
                $condition = $condition.' ORDER BY sort_order';
                $sqlText = $sqlText.$condition;
                $query =  $this->db->query($sqlText);
                if($is_array){
                    return $query->getResultArray();
                }
                else{
                    return $query->getResult();
                }
            }
        }
 ?>