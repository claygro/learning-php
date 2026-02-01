<!-- We can print using echo and print. -->
<!-- For echo -->
 <!-- echo "hello" and echo("hello") both are valid -->
 <!-- print "hello" and print("hello") both are valid -->
  <!-- for echo -->
   <h3>This is echo example</h3>
<?php

    echo "hello world";
    echo "<br>";
    echo "</br>";
    // single or double quotes.
    // Double quotes variable can be inserted to the string like above example.
    // single quotes, variable can be inserted using . operator for example
    $name="Research";
    echo 'Hello'.$name.'How are you';

?>
<!-- for print -->
 <br/>
 <br/>
 <h3>This is print example</h3>
 <?php

    print "hello world";
    print "<br>";
    print "</br>";
    // single or double quotes.
    // Double quotes variable can be inserted to the string like above example.
    // single quotes, variable can be inserted using . operator for example
    $name="Research";
    
    print 'Hello'.$name.'How are you';

?>