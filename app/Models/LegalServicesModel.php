<?php namespace App\Models;

    use CodeIgniter\Model;

    class LegalServicesModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add() {
 
                $sqlText = "INSERT INTO `tbl_legal_services`(`auth_id`,`action_type`,`action_date`,`name`,`phone_number`,`email`,`service_code`)
                            VALUES(null,'insert',now(),'shovon','01893258696','shovon@gmail.com','2')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($email,$service_code) {
                $sqlText = "DELETE FROM `tbl_legal_services` WHERE `email`= '".$email."' AND `service_code` = '".$service_code."'"; 
                $query =  $this->db->query($sqlText);
            
                return  $this->db->affectedRows();

            }
            public function edit($email,$service_code,$name,$phone) {
                $sqlText = "UPDATE `tbl_legal_services`
                            SET
                            `auth_id` = 'NULL',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `name` = '".$name."',
                            `phone_number` = '".$phone."'
                            WHERE `email` = '".$email."' AND `service_code` = ".$service_code.""; 
                $query =  $this->db->query($sqlText);
            
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_legal_services" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>