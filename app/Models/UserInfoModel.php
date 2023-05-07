<?php namespace App\Models;

    use CodeIgniter\Model;

    class UserInfoModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($data) {
                
                $sqlText = "INSERT INTO `tbl_user_info`(`maker_id`,`auth_id`,`action_type`,`action_date`,`name`,`password`,`phone`,`email`,`user_type`,
                `title`)
                VALUES('".$data['email']."',null,'insert',NOW(),'".$data['name']."','".$data['password']."','".$data['phone']."','".$data['email']."','".$data['user_type']."','".$data['title']."')";

                // echo '<pre>'; print_r($data); echo '</pre>'; exit;
                try {
                    // echo 'ok'; 
                    $query =  $this->db->query($sqlText);
                    // echo '<pre>'; print_r($query); echo '</pre>'; exit;
                    // echo 'ok2';
                    return  $this->db->affectedRows();
                    // return null ;
                } 
                catch (\Throwable  $e) {
                    // exit($e->getMessage());
                    // $e->getMessage(); exit;
                    return  0; 
                }
                // $query1 = $this->db->getLastQuery();
                // echo (string) $query1;

                // return  $this->db->affectedRows();
                // $query =  $this->db->query($sqlText);
               
                // return  $this->db->affectedRows();
            }
            public function erase($email) {
                $sqlText = "DELETE FROM `tbl_user_info` WHERE `email` = '".$email."'";
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
                $sqlText = "UPDATE `tbl_user_info`
                            SET
                            `auth_id` = '".$data['email']."',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `name` = '".$data['name']."',
                            `password` = '".$data['password']."',
                            `user_type` = '".$data['user_type']."',
                            `title` = '".$data['title']."',
                            `phone` = '".$data['phone']."'                            
                            WHERE `email` = '".$data['email']."'";
                $query =  $this->db->query($sqlText);

                return  $this->db->affectedRows();

            }

            public function IsExist($email,$phone){
                
                if(isset($email)){
                    $sqlText = "SELECT * FROM tbl_user_info where `email` = '".$email."'";
                    $query =  $this->db->query($sqlText);
                    $row = $query->getRowArray(); 
                    // if (isset($row) && $row->emailcount >= 1) {
                    //     return true; 
                    // }
                    // return  false;
                    return $row;
                }
                else if(isset($phone)){
                    $sqlText = "SELECT * FROM tbl_user_info where `phone` = '".$phone."'";
                    $query =  $this->db->query($sqlText);
                    $row = $query->getRowArray(); 
                    // if (isset($row) && $row->emailcount >= 1) {
                    //     return true; 
                    // }
                    // return  false;
                    return $row;
                }
            }

            public function get() {
                $sqlText = "SELECT * FROM tbl_user_info" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();
            }
            public function getByCriteria($email) {
                $sqlText = "SELECT * FROM tbl_user_info WHERE `email` = '".$email."'";
                $query =  $this->db->query($sqlText);
                return $query->getRow();
            }

        }
 ?>