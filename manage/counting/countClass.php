<?php
require_once (dirname( __FILE__).'/../functions/connectionClass.php');
class countClass extends connectionClass{

    public function showtheCount(){
        $select="Select * from slider";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count < 1){
            return 0;
        }
        else
        {
            return $count;
        }
    }
    
}