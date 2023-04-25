<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class HomeLoanModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($property_id)
            {

                $sqlText = "INSERT INTO `tbl_homeloan`(`auth_id`,`action_type`,`action_date`,`name`,`phone_number`,`email`,`property_id`)
                            VALUES('null','insert',now(),'shovon','01723568944','shovon@gmail.com','".$property_id."')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($property_id, $email) {
                $sqlText = "DELETE FROM `prism`.`tbl_homeloan` WHERE `property_id` = ".$property_id." AND `email` = '".$email."'"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function edit($property_id,$email,$name,$phone) {
                $sqlText = "UPDATE `prism`.`tbl_homeloan`
                            SET
                            `auth_id` = 'null',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `name` = '".$name."',
                            `phone_number` = '".$phone."'
                            WHERE `email` = '".$email."' AND `property_id` = ".$property_id.""; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_homeloan" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>