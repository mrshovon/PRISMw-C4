<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class BookVisitModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($date,$Stime,$Etime,$remarks)
            {

                $sqlText = "INSERT INTO `tbl_book_visit`(`auth_id`,`action_type`,`action_date`,`date`,`start_time`,`end_time`,`remarks`,`email`,`property_id`)
                            VALUES('null','insert',now(),'".$date."','".$Stime."','".$Etime."','".$remarks."','shovon@gmail.com','1')"; 
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