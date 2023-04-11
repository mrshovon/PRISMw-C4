<?php namespace App\Models;

    use CodeIgniter\Model;

    class PropertyInfoModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($data) {
 
                $sqlText = "select ifnull( max(property_id), 0) +1 as maxid from tbl_property_info"; 
                $query =  $this->db->query($sqlText);
                $row = $query->getRow();
                
                $sqlText = "INSERT INTO `tbl_property_info`(`auth_id`,`action_type`,`action_date`,`property_id`,`property_name`,`description`,`city`,`property_area`,`property_size`,`beds`,`baths`,`price`,`is_occupied`,`floor_plan`,`phone_number`,`property_address`,`level`,`email`,`purpose_code`,`property_type_code`,`descriptive_status_code`,`amenities_code`,`property_status_code`)
                            VALUES(null,'insert',now(),'".$row->maxid."','".$data['name']."','".$this->db->escapeString($data['description'])."','".$data['city']."','".$data['area']."','".$data['property_size']."','".$data['beds']."','".$data['baths']."',".$data['price'].",".$data['is_occupied'].",'".$data['floor_plan']."','".$data['phone']."','".$data['address']."','".$data['level']."','".$data['email']."','".$data['purpose_code']."','".$data['property_type_code']."','".$data['descriptive_status_code']."','".$data['amenities_code']."','".$data['property_status_code']."')"; 
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
                $sqlText = "SELECT pi.property_id, pi.property_name, pi.city, pi.property_area, pi.property_size, pi.beds, pi.baths, 
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
                $query =  $this->db->query($sqlText);
                return $query->getResult();
            }
            public function getByCriteria($look_type_id) {
                $sqlText = "SELECT look_up_id, look_up_name, short_name FROM tbl_look_up WHERE `look_type_id` = ".$look_type_id." ORDER BY sort_order"; 
                $query =  $this->db->query($sqlText);
                return $query->getResult();
            }

        }
 ?>