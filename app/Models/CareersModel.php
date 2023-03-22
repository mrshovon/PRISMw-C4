<?php namespace App\Models;

    use CodeIgniter\Model;

    class CareersModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($job_title,$job_description,$phone,$email) {
 
                $sqlText = "INSERT INTO `tbl_careers`(`maker_id`,`auth_id`,`action_type`,`action_date`,`job_title`,`job_description`,`phone`,`email`)
                VALUES('1',null,'insert',now(),'".$job_title."','".$job_description."','".$phone."','".$email."')"; 
                $query =  $this->db->query($sqlText);
               
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