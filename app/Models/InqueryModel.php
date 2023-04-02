<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class InqueryModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($name,$phone,$address,$query) {
 
                $sqlText = "INSERT INTO `tbl_inquery`(`maker_id`,`auth_id`,`action_type`,`action_date`,`customer_name`,`phone`,`address`,`query`)
                            VALUES(null,null,'insert',now(),'".$name."','".$phone."','".$address."','".$query."')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($inquery_id) {
                $sqlText = "DELETE FROM `prism`.`tbl_inquery` WHERE `inquery_id`= ".$inquery_id."";
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function edit($inquery_id,$name) {
                $sqlText = "UPDATE `tbl_inquery`
                            SET
                            `maker_id` = 'shovon@gmail.com',
                            `auth_id` = 'NULL',
                            `action_type` = 'Update',
                            `action_date` = now(),
                            `inquery_id` = ".$inquery_id.",
                            `customer_name` = '".$name."'
                            WHERE `inquery_id` = ".$inquery_id."";

                $query =  $this->db->query($sqlText);
                            
                return  $this->db->affectedRows();
            }
            public function search() {
         

            }
            public function searchByCriteria() {
         

            }

        }
 ?>