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
                VALUES('".$data['email']."',null,'insert',NOW(),'".$data['name']."','".$data['password']."','".$data['phone']."','".$data['email']."','customer','Mr.')";

                $query =  $this->db->query($sqlText);
                // $query1 = $this->db->getLastQuery();
                // echo (string) $query1;

                return  $this->db->affectedRows();
            }
            public function erase($email) {
                $sqlText = "DELETE FROM `tbl_user_info` WHERE `email` = '".$email."'";
                $query =  $this->db->query($sqlText);

                return  $this->db->affectedRows();

            }
            public function edit($email,$name,$password,$phone) {
                $sqlText = "UPDATE `tbl_user_info`
                            SET
                            `maker_id` = '".$email."',
                            `auth_id` = NULL,
                            `action_type` = 'update',
                            `action_date` = now(),
                            `name` = '".$name."',
                            `password` = '".$password."',
                            `phone` = '".$phone."',
                            `email` = '".$email."'
                            WHERE `email` = '".$email."'";
                $query =  $this->db->query($sqlText);

                return  $this->db->affectedRows();

            }

            public function IsExist($email){
                $sqlText = "SELECT * FROM tbl_user_info where `email` = '".$email."'";
                $query =  $this->db->query($sqlText);
                $row = $query->getRowArray(); 
                // if (isset($row) && $row->emailcount >= 1) {
                //     return true; 
                // }
                // return  false;
                return $row;
            }

            public function search() {
         

            }
            public function searchByCriteria() {
         

            }

        }
 ?>