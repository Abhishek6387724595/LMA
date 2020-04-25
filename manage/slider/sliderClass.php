<?php
require_once ( dirname(  __FILE__). '/../functions/connectionClass.php' );
class SliderClass extends connectionClass{
    public function listSlider(){
        $select="select * from carousal order by id desc limit 5";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
            while ($row = $result->fetch_array()) {
                $rows[]=$row;
            }
            return $rows;
        }
    }
}