<?php namespace App\Models;

    use CodeIgniter\Model;

    class LegalServicesModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($data) {
 
                $sqlText = "INSERT INTO `tbl_legal_services`(`auth_id`,`action_type`,`action_date`,`name`,`phone_number`,`email`,`service_code`)
                            VALUES('".$data['email']."','insert',now(),'".$data['name']."','".$data['phone']."','".$data['email']."','".$data['service_code']."')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($email,$service_code) {
                $sqlText = "DELETE FROM `tbl_legal_services` WHERE `email`= '".$email."' AND `service_code` = '".$service_code."'"; 
                $query =  $this->db->query($sqlText);
            
                return  $this->db->affectedRows();

            }
            public function edit($data) {
                $sqlText = "UPDATE `tbl_legal_services`
                            SET
                            `auth_id` = '".$data['email']."',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `name` = '".$data['name']."',
                            `phone_number` = '".$data['phone']."'
                            WHERE `email` = '".$data['email']."' AND `service_code` = '".$data['service_code']."'"; 
                $query =  $this->db->query($sqlText);
            
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT pi.name,pi.email, pi.phone_number, pi.auth_id, pi.action_date, 
                            pi.service_code, lsc.look_up_name AS service_name
                            FROM tbl_legal_services as pi
                            INNER JOIN tbl_look_up AS lsc ON pi.service_code = lsc.look_up_id" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>