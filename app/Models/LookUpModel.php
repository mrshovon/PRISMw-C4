<?php namespace App\Models;

    use CodeIgniter\Model;

    class LookUpModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($look_up_name,$short_name,$sort_order,$look_type_id) {
                
                $sqlText = "select ifnull( max(look_up_id), 0) +1 as maxid from tbl_look_up"; 
                $query =  $this->db->query($sqlText);
                $row = $query->getRow();

                $sqlText = "INSERT INTO `tbl_look_up`(`maker_id`,`auth_id`,`action_type`,`action_date`,`look_up_id`,`look_up_name`,`short_name`,`sort_order`,`look_type_id`)
                            VALUES('1730020@iub.edu.bd','NULL','INSERT',NOW(),".$row->maxid.",'".$look_up_name."','".$short_name."','".$sort_order."','".$look_type_id."')";

                $query =  $this->db->query($sqlText);
                return  $this->db->affectedRows();

            }
            public function erase($look_up_id) {
                $sqlText = "DELETE FROM `tbl_look_up` WHERE `look_up_id`= ".$look_up_id."";
                $query =  $this->db->query($sqlText);

                return  $this->db->affectedRows();

            }
            public function edit($look_up_id,$look_up_name,$short_name) {
              $sqlText = " UPDATE `tbl_look_up`
                            SET
                            `maker_id` = '1730020@iub.edu.bd',
                            `auth_id` = 'NULL',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `look_up_id` = ".$look_up_id.",
                            `look_up_name` = '".$look_up_name."',
                            `short_name` = '".$short_name."',
                            `sort_order` = 2,
                            `look_type_id` = 3
                            WHERE `look_up_id` = ".$look_up_id."";
                
                $query =  $this->db->query($sqlText);

                return  $this->db->affectedRows();
            }
           
            public function get() {
                $sqlText = "SELECT * FROM tbl_look_up" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>