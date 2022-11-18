<?php 

class Test{
   // private $output = '';
    public static function count_string($str){
        $lower_string = strtolower($str);
        $len = strlen($lower_string)-1;
        
        for($i=0;$i<=$len;$i++){
          echo $lower_string[$i].":"."*".",";
        }

    }
}
Test::count_string('HARSHAD');
echo "<br>";
// Test::count_string('KAPADIYA');

