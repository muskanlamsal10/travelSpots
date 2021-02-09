<!--php from https://www.android-examples.com/create-php-comment-box-using-mysql-database and edited for our needs-->
<!--this script sends comments to comment_table in the database bdsjgrku_comment_table-->
<!--we use things defined in dbconfig.php-->
<?php
if(isset($_POST["submit"]))
{

 //Including dbconfig file.
include 'dbconfig.php';

$name = $_POST["name"];
$comment = $_POST["comment"];


mysql_query("INSERT INTO comment_table (name,comment) VALUES ('$name','$comment')");

echo '<center> Comment Successfully Submitted </center>';

}

?>
