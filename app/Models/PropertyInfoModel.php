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
            public function erase($property_id) {
                $sqlText = "DELETE FROM `tbl_property_info` WHERE `property_id` = ".$property_id."";
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function edit($property_id,$name,$description,$city,$property_area,$property_size,$beds,$baths,$price,$is_occupied,$floor_plan,$phone,$address,$level,$email) {
                $sqlText = "UPDATE `tbl_property_info`
                            SET
                            `auth_id` = 'null',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `property_id` = ".$property_id.",
                            `property_name` = '".$name."',
                            `description` = '".$description."',
                            `city` = '".$city."',
                            `property_area` = '".$property_area."',
                            `property_status` = ".$property_size.",
                            `beds` = ".$beds.",
                            `baths` = ".$baths.",
                            `price` = ".$price.",
                            `is_occupied` = '".$is_occupied."',
                            `floor_plan` = '".$floor_plan."',
                            `phone_number` = '".$phone."',
                            `property_address` = '".$adrdress."',
                            `level` = ".$level.",
                            `email` = '".$email."',
                            `purpose_code` = 1,
                            `property_type_code` = 1,
                            `descriptive_status_code` = 1,
                            `amenities_code` = 1,
                            `property_status_code` = 1
                            WHERE `property_id` = <{expr}>";
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function get() {
                $sqlText = "SELECT * FROM tbl_property_info" ;
                $query =  $this->db->query($sqlText);
                return $query->getResult();
            }
            public function searchByCriteria() {
         

            }

        }
 ?>