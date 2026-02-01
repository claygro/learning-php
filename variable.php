<!-- Variables are the container which stores information. -->
 <!-- The variable in php is defined by $ symbol. For example $x, $y, $name, $age etc -->
  <!-- Variable in php are case sensitive means the variable can be written in different cases.
   For example,
   $total=10;
   $Total-20
   echo $total // value will be 10
   echo $Total // value will be 20
    
   $total doesnot affect the value of $Total.
  -->
<!-- lets look example of variable and how can we make variable in php -->
  
<!-- normal variable -->
<?php
   $x=40;
   $y=20;
   echo $x+$y;
?>
<!-- concatinating variable -->
<?php
   $name="Research";
   $age=16;
   echo $name." ".$age; // in php we use . to concatinate.

?>
<!-- finding the datatypes of the variable -->
<!-- To find the datatypes of the variable we use var_dump() function -->
 <?php 
   $x=10;
   $name="research";
   $isVerified=true;
   $arr=[2,3,4,"hello"];
   echo var_dump($x);
   echo var_dump($name);
   echo var_dump($isVerified);
   echo var_dump($arr);
  ?>
<!-- creating object variable -->
 <?php
      $obj=[
         "name"=>" research",
         "age"=>17
      ];
     echo "<pre>";
     print_r($obj);
     echo "</pre>"
  ?>