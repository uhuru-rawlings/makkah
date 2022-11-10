<?php
    class Imageuploads {
        public $image;
        public $location = "../../uploads/";
        private $image_n;

        public function upload_image()
        {
            $count = count($this -> image['name']);
            for($i = 0; $i < $count;$i++){
                $accepted = array("jpg","png","jpeg");
                $filename_array = explode(".",$this -> image['name'][$i]);
                if(in_array(end($filename_array),$accepted)){
                    $new_name   = strtolower($filename_array[0]).rand(100045,3225446).".".end($filename_array);
                    $this -> image_n  = $this -> image_n.",".$new_name;
                    $location   = $this -> location.$new_name;
                    move_uploaded_file($this -> image['tmp_name'][$i],$location);
                }else{
                    return false;
                }
                
            }
            return $this -> image_n;
        }

    }
?>