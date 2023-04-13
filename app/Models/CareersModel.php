<?php namespace App\Models;

    use CodeIgniter\Model;

    class CareersModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($data) {
 
                $sqlText = "INSERT INTO `tbl_careers`(`maker_id`,`auth_id`,`action_type`,`action_date`,`job_title`,`job_description`,`phone`,`email`)
                VALUES('1',null,'insert',now(),'".$this->db->escapeString($data['job_title'])."','".$this->db->escapeString($data['job_description'])."','".$data['phone']."','".$data['email']."')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($career_id) {
                $sqlText = "DELETE FROM `tbl_careers` WHERE `career_id` = ".$career_id."";
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
                $sqlText =" UPDATE `tbl_careers`
                            SET
                            `auth_id` = '1',
                            `action_type` = 'Update',
                            `action_date` = now(),
                            `job_title` = '".$data['job_title']."',
                            `job_description` = '".$data['job_description']."',
                            `phone` = '".$data['phone']."',
                            `email` = '".$data['email']."'
                            WHERE `career_id` = ".$data['career_id']."";
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_careers" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function getByCriteria($career_id) {
                $sqlText = "SELECT * FROM tbl_careers WHERE `career_id` = '".$career_id."'";
                $query =  $this->db->query($sqlText);
                return $query->getRow();

            }

        }
 ?>