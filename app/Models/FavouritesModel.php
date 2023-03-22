<?php namespace App\Models;

    use CodeIgniter\Model;

    class FavouritesModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add()
            {

                $sqlText = "INSERT INTO `tbl_favourites`(`auth_id`,`action_type`,`action_date`,`creation_date`,`email`,`property_id`)
                            VALUES('null','insert',now(),now(),'shovon@gmail.com','1')"; 
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