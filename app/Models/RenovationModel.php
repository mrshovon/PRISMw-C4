<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class RenovationModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($property_id)
            {

                $sqlText = "INSERT INTO `prism`.`tbl_renovation`(`auth_id`,`action_type`,`action_date`,`property_size`,`email`,`property_id`,`renovation_type_code`)
                            VALUES(null,'insert',now(),'1200.00','shovon@gmail.com','".$property_id."','1')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($property_id,$email,$renovation_type_code) {
                $sqlText = "DELETE FROM `prism`.`tbl_renovation` WHERE `email` = '".$email."' AND  `property_id` = ".$property_id." AND `renovation_type_code` = ".$renovation_type_code.""; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function edit($property_id,$email,$renovation_type_code,$property_size) {
                $sqlText = "UPDATE `prism`.`tbl_renovation`
                SET
                `auth_id` = 'null',
                `action_type` = 'update',
                `action_date` = now(),
                `property_size` = ".$property_size."
                WHERE `email` = '".$email."' AND `property_id` = ".$property_id." AND `renovation_type_code` = ".$renovation_type_code.""; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_renovation" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>