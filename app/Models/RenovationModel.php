<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class RenovationModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($property_id)
            {

                $sqlText = "INSERT INTO `prism`.`tbl_renovation`(`auth_id`,`action_type`,`action_date`,`property_size`,`email`,`property_id`,`renovation_type_code`)
                            VALUES(null,'insert',now(),'1200.00','shovon@gmail.com','".$property_id."','1')"; 
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