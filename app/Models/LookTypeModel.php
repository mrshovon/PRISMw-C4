<?php namespace App\Models;

    use CodeIgniter\Model;

    class LookTypeModel extends Model
    { 
        public function __construct()
        {
            parent::__construct();
            $this->db = db_connect();
        }
        
        public function add($data) {
            $sqlText = "select ifnull( max(look_type_id), 0) +1 as maxid from tbl_look_type"; 
            $query =  $this->db->query($sqlText);
            $row = $query->getRow();

            $sqlText = "INSERT INTO `tbl_look_type`(`maker_id`, `auth_id`, `action_type`, `action_date`, `look_type_id`, `look_type_name`)
                        VALUES ('1730020@iub.edu.bd',null,'insert',NOW(),".$row->maxid.",'".$data['look_type_name']."')";
            $query =  $this->db->query($sqlText);

            return  $this->db->affectedRows();
        }

        public function erase($look_type_id) {
            $sqlText = "DELETE FROM `tbl_look_type` WHERE `look_type_id` = ".$look_type_id."";
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
            $sqlText = "UPDATE `tbl_look_type`
                        SET
                       
                        `auth_id` = '1',
                        `action_type` = 'update',
                        `action_date` = now(),
                        `look_type_name` = '".$data['look_type_name']."'
                        WHERE `look_type_id` = ".$data['look_type_id']."";
            $query =  $this->db->query($sqlText);

            return  $this->db->affectedRows();

        }
        public function get() {
            $sqlText = "SELECT * FROM tbl_look_type";
            $query =  $this->db->query($sqlText);
            return $query->getResult();
        }

        public function getByCriteria($look_type_id) {
            $sqlText = "SELECT * FROM tbl_look_type WHERE `look_type_id` = '".$look_type_id."'";
            $query =  $this->db->query($sqlText);
            return $query->getRow();
        }

    }
 ?>