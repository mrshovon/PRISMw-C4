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
            
            public function add($data)
            {

                $sqlText = "INSERT INTO `tbl_renovation`(`auth_id`,`action_type`,`action_date`,`property_size`,`property_area`,`property_city`,`property_address`,`name`,`email`,`phone`,`renovation_type_code`)
                VALUES ('".$data['email']."','insert',now(),'".$data['property_size']."','".$data['property_area']."','".$data['property_city']."','".$this->db->escapeString($data['property_address'])."','".$data['name']."','".$data['email']."','".$data['phone']."','".$data['service_code']."')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($request_id) {
                $sqlText = "DELETE FROM `prism`.`tbl_renovation` WHERE `request_id` = ".$request_id.""; 
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
                $sqlText = "SELECT pi.request_id,pi.name,pi.email, pi.phone, pi.name, pi.auth_id, pi.action_date, pi.property_size, pi.property_area, pi.property_city, pi.property_address, 
                            pi.renovation_type_code, lsc.look_up_name AS service_name
                            FROM tbl_renovation as pi
                            INNER JOIN tbl_look_up AS lsc ON pi.renovation_type_code = lsc.look_up_id";
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>