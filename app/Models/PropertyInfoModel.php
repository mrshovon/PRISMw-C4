<?php namespace App\Models;

    use CodeIgniter\Model;

    class PropertyInfoModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($name,$description,$city,$size,$property_status,$beds,$baths,$price,$is_occupied,$floor_plan,$phone,$address,$level,$email) {
 
                $sqlText = "select ifnull( max(property_id), 0) +1 as maxid from tbl_property_info"; 
                $query =  $this->db->query($sqlText);
                $row = $query->getRow();
                
                $sqlText = "INSERT INTO `tbl_property_info`(`auth_id`,`action_type`,`action_date`,`property_id`,`property_name`,`description`,`city`,`property_area`,`property_status`,`beds`,`baths`,`price`,`is_occupied`,`floor_plan`,`phone_number`,`property_address`,`level`,`email`,`purpose_code`,`property_type_code`,`descriptive_status_code`,`amenities_code`,`property_status_code`)
                            VALUES(null,'insert',now(),'".$row->maxid."','".$name."','".$description."','".$city."','".$size."','".$property_status."','".$beds."','".$baths."',".$price.",".$is_occupied.",'".$floor_plan."','".$phone."','".$address."','".$level."','".$email."','1','1','1','1','1')"; 
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