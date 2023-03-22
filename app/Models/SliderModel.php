<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class SliderModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
                $this->db = db_connect();
            }
            
            public function add($img_path,$title,$sub_title,$priority) {
               
                $sqlText = "select ifnull( max(slider_id), 0) +1 as maxid from tbl_slider"; 
                $query =  $this->db->query($sqlText);
                $row = $query->getRow();
                
                
                $sqlText = "INSERT INTO `tbl_slider`(`auth_id`,`action_type`,`action_date`,`slider_id`,`img_path`,`title`,`sub_title`,`priority`,`company_id`)
                            VALUES(null,'insert',now(),".$row->maxid.",'".$img_path."','".$title."','".$sub_title."','".$priority."','1')";
                
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