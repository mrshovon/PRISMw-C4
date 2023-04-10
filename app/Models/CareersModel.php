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
            public function erase($career_id) {
                $sqlText ="DELETE FROM `tbl_careers` WHERE `career_id` = ".$career_id."";
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function edit($career_id,$job_title,$job_description) {
                $sqlText =" UPDATE `prism`.`tbl_careers`
                            SET
                            `maker_id` = '1',
                            `auth_id` = 'NULL',
                            `action_type` = 'Update',
                            `action_date` = now(),
                            `job_title` = '".$job_title."',
                            `job_description` = '".$job_description."',
                            `phone` = 'company_phone',
                            `email` = 'company@email.com'
                            WHERE `career_id` = ".$career_id."";
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_careers" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>