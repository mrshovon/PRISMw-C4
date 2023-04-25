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
            public function erase($email,$property_id) {
                $sqlText = "DELETE FROM `tbl_favourites` WHERE `email` = '".$email."' AND `property_id` = ".$property_id.""; 
                $query =  $this->db->query($sqlText);
   
                return  $this->db->affectedRows();

            }
            public function edit($email,$property_id) {
                $sqlText = "UPDATE `prism`.`tbl_favourites`
                            SET
                            `auth_id` = 'null',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `creation_date` = now()
                            WHERE `email` = '".$email."' AND `property_id` = ".$property_id.""; 
                $query =  $this->db->query($sqlText);
   
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_favourites" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();

            }
            public function searchByCriteria() {
         

            }

        }
 ?>