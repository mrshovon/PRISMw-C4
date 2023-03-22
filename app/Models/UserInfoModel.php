<?php namespace App\Models;

    use CodeIgniter\Model;

    class UserInfoModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($name,$password,$phone,$email) {
                
                $sqlText = "INSERT INTO `tbl_user_info`(`maker_id`,`auth_id`,`action_type`,`action_date`,`name`,`password`,`phone`,`email`,`user_type`,
                `title`)
                VALUES('".$email."',null,'insert',NOW(),'".$name."','".$password."','".$phone."','".$email."','customer','Mr.')";

                $query =  $this->db->query($sqlText);
                // $query1 = $this->db->getLastQuery();
                // echo (string) $query1;

                return  $this->db->affectedRows();
            }
            public function erase() {
         

            }
            public function edit() {
         

            }
            public function search() {
         

            }
            public function searchByCriteria() {
         

            }

        }
 ?>