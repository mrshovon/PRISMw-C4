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