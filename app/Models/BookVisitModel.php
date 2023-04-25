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
            public function erase($property_id,$date) {
                $sqlText = "DELETE FROM `tbl_book_visit` WHERE `property_id` = ".$property_id." AND `date` = '".$date."'"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function edit($property_id,$date,$Stime,$Etime,$remarks) {
                $sqlText = "UPDATE `prism`.`tbl_book_visit`
                            SET
                            `auth_id` = 'null',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `date` = '".$date."',
                            `start_time` = '".$Stime."',
                            `end_time` = '".$Etime."',
                            `remarks` = '".$remarks."'
                            WHERE `date` = '".$date."' AND `property_id` = ".$property_id.""; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_book_visit" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>