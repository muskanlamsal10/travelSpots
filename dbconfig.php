<!--php from https://www.android-examples.com/create-php-comment-box-using-mysql-database and adjusted for our needs-->
<!--this script configurates our php to send to our comment database-->
<?php
//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "bdsjgrku_comments";

//Define your database password here.
$password = "comments@map";

//Define your database name here.
$dbname = "bdsjgrku_comment_table";

  //this connects our php to our sql database!
  //the @ before "mysql_connect()" is to eliminate the error message because I am using php 5.4 like a scrub.
  $conn = @mysql_connect($hostname, $username, $password);

 //and if we can't connect our script dies and errors out.
 if (!$conn)

 {

 die('Could not connect: ' . mysql_error());

 }

 mysql_select_db($dbname, $conn);
?>
