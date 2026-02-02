<!-- Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

string (text values)
int (whole numbers)
float (decimal numbers)
bool (true or false)
array (multiple values)
object (stores data as objects)
null (empty variable)
resource (references external resources) --> 

<!-- to find the datatypes of the variable we use var_dump() function -->
<?php 
   $x="hello world";
   echo var_dump($x)
 ?>
 <?php 
    $arr=[1,2,3,"hello"];
    echo "<pre>";// pre is html tag uses mainly for formating.
    echo var_dump($arr);
    echo "</pre>";

 ?>