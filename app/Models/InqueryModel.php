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
            
            public function add($data) {
 
                $sqlText = "INSERT INTO `tbl_inquery`(`maker_id`,`auth_id`,`action_type`,`action_date`,`customer_name`,`phone`,`address`,`query`)
                            VALUES(null,null,'insert',now(),'".$data['customer_name']."','".$data['phone']."','".$data['address']."','".$data['address']."')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($inquery_id) {
                $sqlText = "DELETE FROM `tbl_inquery` WHERE `inquery_id`= ".$inquery_id."";
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
            public function get() {
                $sqlText = "SELECT * FROM tbl_inquery" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();
            }
            public function searchByCriteria() {
         

            }

        }
 ?>