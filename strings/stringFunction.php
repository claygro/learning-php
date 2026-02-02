<!-- strlen() function -->
<?php 
   $x="hello";
   echo strlen($x);  //to find the length of the string.
?>
<!-- str_word_count() function. To count the word of the string -->
 <?php 
   $x="hello world";
   echo str_word_count($x);  //to find the count of the word.
?>
<!-- str_contains() to find the this word or string is contains or not -->
<?php 
   $x="hello world world";
   echo str_contains($x,"hello");  //to find the length of the string.
   //it gives output 1 if it contains the word, character or substring in the string and nothing if it doesnot contains the word.
?>
<!-- Note: This function performs a case-sensitive search.

The following example will return a boolean false, 
because "World" is not found in the main string: -->
<?php 
   $x="hello world";
   echo var_dump(str_contains($x,"World"))
?>
<!-- str_starts_with() function -->
 <br/>
<?php 
   $x="hello world";
   echo str_starts_with($x,"hello");
?>