<?php namespace App\Models;

    use CodeIgniter\Model;

    class LookTypeModel extends Model
    { 
        public function __construct()
        {
            parent::__construct();
            $this->db = db_connect();
        }
        
        public function add($look_type_name) {
            $sqlText = "select ifnull( max(look_type_id), 0) +1 as maxid from tbl_look_type"; 
            $query =  $this->db->query($sqlText);
            $row = $query->getRow();

            $sqlText = "INSERT INTO `prism`.`tbl_look_type`(`maker_id`, `auth_id`, `action_type`, `action_date`, `look_type_id`, `look_type_name`)
                        VALUES ('1730020@iub.edu.bd',null,'insert',NOW(),".$row->maxid.",'".$look_type_name."')";
            $query =  $this->db->query($sqlText);

            return  $this->db->affectedRows();
        }

        public function erase($look_type_id) {
            $sqlText = "DELETE FROM `tbl_look_type` WHERE `look_type_id`= ".$look_type_id."";
            $query =  $this->db->query($sqlText);

            return  $this->db->affectedRows();
        }

        public function edit() {
            $sqlText = "UPDATE `tbl_look_type`
                        SET
                       
                        `auth_id` = <{auth_id: }>,
                        `action_type` = 'update',
                        `action_date` = <{action_date: }>,
                        `look_type_id` = <{look_type_id: }>,
                        `look_type_name` = <{look_type_name: }>
                        WHERE `look_type_id` = <{expr}>";
            $query =  $this->db->query($sqlText);

            return  $this->db->affectedRows();

        }
        public function search() {
    

        }
        public function searchByCriteria() {
    

        }

    }
 ?>