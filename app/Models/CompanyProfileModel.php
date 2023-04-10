<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class CompanyProfileModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($company_name,$company_vision,$company_address,$company_email,$privecy_policy,$terms_and_condition) {
                
                $sqlText = "select ifnull( max(company_id), 0) +1 as maxid from tbl_company_profile"; 
                $query =  $this->db->query($sqlText);
                $row = $query->getRow();
                
                
                $sqlText = "INSERT INTO `tbl_company_profile`(`maker_id`,`auth_id`,`action_type`,`action_date`,`company_name`,`company_vision`,`company_address`,`company_email`,`privecy_policy`,`terms_and_condition`,`company_id`)
                            VALUES('1730020@iub.edu.bd',null,'insert',now(),'".$company_name."','".$company_vision."','".$company_address."','".$company_email."','".$privecy_policy."','".$terms_and_condition."',".$row->maxid.")";
                
                $query =  $this->db->query($sqlText);
                return  $this->db->affectedRows();

            }
            public function erase($company_id) {
                $sqlText = " DELETE FROM `tbl_company_profile` WHERE `company_id` =  '".$company_id."'";
                $query = $this ->db->query($sqlText);
                return $this->db->affectedRows();
            }
            public function edit($company_id) {
                $sqlText = "UPDATE `tbl_company_profile`
                SET
                `maker_id` = '1730020@iub.edu.bd',
                `auth_id` = '',
                `action_type` = 'update',
                `action_date` = now(),
                `company_name` = 'PRISM',
                `company_email` = 'email@company.com',
                `company_id` = ".$company_id."
                WHERE `company_id` = ".$company_id."";
                
                $query = $this ->db->query($sqlText);
                return $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_company_profile" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>