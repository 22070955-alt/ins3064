<?php
include "connection.php";

$id=$_GET["id"];
mysqli_query($link,"delete from table1 where id=$id");
header("location.index.php");
?>

<h1>Are you sure</h1>

<script type="text/javascript">
 window.location="index.php";
    </script>



