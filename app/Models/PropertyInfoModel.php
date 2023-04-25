<?php namespace App\Models;

    use CodeIgniter\Model;
    use CodeIgniter\Exception;

    class PropertyInfoModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($data) {
 
                $sqlText = "SELECT ifnull(MAX( CAST(property_id AS UNSIGNED) ),0) +1 AS maxid FROM tbl_property_info"; 
                $query =  $this->db->query($sqlText);
                $row = $query->getRow();
                
                $sqlText = "INSERT INTO `tbl_property_info`(`auth_id`,`action_type`,`action_date`,`property_id`,`property_name`,`description`,`city`,`property_area`,`property_size`,`beds`,`baths`,`price`,`is_occupied`,`floor_plan`,`phone_number`,`property_address`,`level`,`email`,`purpose_code`,`property_type_code`,`descriptive_status_code`,`amenities_code`,`property_status_code`)
                            VALUES('".$data['email']."','insert',now(),'".$row->maxid."','".$data['property_name']."','".$this->db->escapeString($data['description'])."','".$data['city']."','".$data['property_area']."','".$data['property_size']."','".$data['beds']."','".$data['baths']."',".$data['price'].",".$data['is_occupied'].",'".$data['floor_plan']."','".$data['phone']."','".$data['property_address']."','".$data['level']."','".$data['email']."','".$data['purpose_code']."','".$data['property_type_code']."','".$data['descriptive_status_code']."','".$data['amenities_code']."','".$data['property_status_code']."')"; 
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();
            }
            public function erase($property_id) {
                $sqlText = "DELETE FROM `tbl_property_info` WHERE `property_id` = ".$property_id."";
                try {
                    $query =  $this->db->query($sqlText);
                    // return  $this->db->affectedRows();
                    return  null;
                } 
                catch (\Throwable  $e) {
                    // exit($e->getMessage());
                    // $e->getMessage(); exit;
                    return  $e->getMessage(); 
                }
               
                
            }
            public function edit($data) {
                 $sqlText = "UPDATE `tbl_property_info`
                            SET
                            `auth_id` = '".$data['email']."',
                            `action_type` = 'update',
                            `action_date` = now(),
                            `property_name` = '".$data['property_name']."',
                            `description` = '".$this->db->escapeString($data['description'])."',
                            `city` = '".$data['city']."',
                            `property_area` = '".$data['property_area']."',
                            `property_size` = '".$data['property_size']."',
                            `beds` = ".$data['beds'].",
                            `baths` = ".$data['baths'].",
                            `price` = ".$data['price'].",
                            `is_occupied` = '".$data['is_occupied']."',
                            `floor_plan` = '".$data['floor_plan']."',
                            `phone_number` = '".$data['phone']."',
                            `property_address` = '".$data['property_address']."',
                            `level` = ".$data['level'].",
                            `email` = '".$data['email']."',
                            `purpose_code` = '".$data['purpose_code']."',
                            `property_type_code` = '".$data['property_type_code']."',
                            `descriptive_status_code` = '".$data['descriptive_status_code']."',
                            `amenities_code` = '".$data['amenities_code']."',
                            `property_status_code` = '".$data['property_status_code']."'
                            WHERE `property_id` = ".$data['property_id']."";
                $query =  $this->db->query($sqlText);
               
                return  $this->db->affectedRows();

            }
            public function get($property_id,$property_area,$purpose) {
                
                $sqlText = "SELECT pi.action_date,pi.property_id, pi.property_name, pi.city, pi.property_area, pi.property_size, pi.beds, pi.baths, 
                pi.price, pi.is_occupied, pi.floor_plan, pi.phone_number, 
                pi.property_address, pi.level, pi.email, pi.description,
                pi.purpose_code, ppc.look_up_name AS purpose_name,
                pi.property_type_code, ptc.look_up_name AS property_type_name,
                pi.descriptive_status_code, dsc.look_up_name AS descriptive_status_name,
                pi.amenities_code, amc.look_up_name AS amenities_name, 
                pi.property_status_code, psc.look_up_name AS property_status_name
                FROM tbl_property_info as pi
                INNER JOIN tbl_look_up AS psc ON pi.property_status_code = psc.look_up_id
                INNER JOIN tbl_look_up AS amc ON pi.amenities_code = amc.look_up_id
                INNER JOIN tbl_look_up AS ppc ON pi.purpose_code = ppc.look_up_id
                INNER JOIN tbl_look_up AS dsc ON pi.descriptive_status_code = dsc.look_up_id
                INNER JOIN tbl_look_up AS ptc ON pi.property_type_code = ptc.look_up_id" ;
                

                $condition = "";
                if(isset($property_area) && isset($purpose)) {
                    $condition =  $condition." AND pi.property_area = '".$property_area."' AND ppc.look_up_name = '".$purpose."'";
                }
                if(isset($property_id)) {
                    $condition = $condition." AND pi.property_id = ".$property_id;
                }
                
                if(!empty($condition)) {
                     $condition = ' WHERE '.substr($condition, 5, strlen($condition)-5);
                }
                $condition = $condition.' ORDER BY pi.property_id';
                $sqlText = $sqlText.$condition;
                $query =  $this->db->query($sqlText);
                return $query->getResult();
            }
            public function getByCriteria($look_type_id) {
                $sqlText = "SELECT look_up_id, look_up_name, short_name FROM tbl_look_up WHERE `look_type_id`=".$look_type_id;
                $query =  $this->db->query($sqlText);
                return $query->getResult();
            }

        }
 ?>