<!DOCTYPE html>
<!--Brenden-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Map page">
  <meta name="author" content="Brenden Latham">
  <link rel="stylesheet" type="text/css" href="map_style.css" media="screen"/>
</head>
<body>
  <iframe src="https://www.google.com/maps/d/embed?mid=1Kk8RqqbcMoZmuCJjmurzh_J19qDyIA6X" width="100%" height="520"></iframe>
  <hr>
  <table bgcolor="#f2f2f2" style="padding:50px" align="center" width="100%">
    <th>Have a location you want others to know about? <br> Leave us a comment and it could get featured on our map!</th>
    <form action="" method="post">
      <tr>
        <td><input type="text" name="name" placeholder="your name"></td>
      </tr>
      <tr>
        <td><textarea name="comment" rows="2" cols="50" placeholder="your location recommendation"></textarea></td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="submit"></td>
      </tr>
    </form>
  </table>
  <!--sending info to our database-->
  <?php include 'comments.php' ?>
</body>
</html>
