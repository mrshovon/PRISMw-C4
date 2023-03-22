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
            
            public function add($property_id)
            {

                $sqlText = "INSERT INTO `tbl_homeloan`(`auth_id`,`action_type`,`action_date`,`name`,`phone_number`,`email`,`property_id`)
                            VALUES('null','insert',now(),'shovon','01723568944','shovon@gmail.com','".$property_id."')"; 
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