<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'ipop');
$name = $_POST['text'];



$s = "select * from entry where text = '$name'";

$result = mysqli_query($con, $s);






$reg = " insert into entry(text) value ('$name')";

$result = mysqli_query($con, $reg);
echo "successfully registered";

?>
<script>
    alert(" Saved Successfully");
    window.location.href = "upload.php";
</script>