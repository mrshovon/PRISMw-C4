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
            
            public function add($data)
            {
                $sqlText = "INSERT INTO `tbl_homeloan`(`auth_id`,`action_type`,`action_date`,`name`,`phone_number`,`email`,`property_id`)
                            VALUES('".$data['email']."','insert',now(),'".$data['name']."','".$data['phone']."','".$data['email']."','".$data['property_id']."')"; 
                try {
                    $query =  $this->db->query($sqlText);
                    return  $this->db->affectedRows();
                    // return  null;
                } 
                catch (\Throwable  $e) {
                    // exit($e->getMessage());
                    // $e->getMessage(); exit;
                    // return  $e->getMessage(); 
                    return  0; 
                }
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($email,$action_date) {
                $sqlText = "DELETE FROM `tbl_homeloan` WHERE `email` = '".$email."' AND `action_date` = '".$action_date."'"; 
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