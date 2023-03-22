<?php namespace App\Models;

    use CodeIgniter\Model;

    class LegalServicesModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add() {
 
                $sqlText = "INSERT INTO `tbl_legal_services`(`auth_id`,`action_type`,`action_date`,`name`,`phone_number`,`email`,`service_code`)
                            VALUES(null,'insert',now(),'shovon','01893258696','shovon@gmail.com','2')"; 
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