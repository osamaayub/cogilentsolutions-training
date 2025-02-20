<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  LastName:<input type="text" name="lname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  $lname=htmlspecialchars($_REQUEST['lname']);
  if (empty($name)&&empty("name")) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>