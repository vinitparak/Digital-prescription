<?php
require('conn.php');

error_reporting(E_ERROR | E_PARSE);
$sql ="SELECT * FROM productinfo WHERE 1";
$result = $conn->query($sql);


$numrows = mysqli_num_rows($result);
$y=0;
for($x=0; $x<$numrows; $x++){
$row_arrays[$x] = mysqli_fetch_array($result);
foreach($row_arrays[$x] as $count)
{$name[$x][$y]=$count;

if($y<25)
$y++;
else
	$y=0;
}
}
$conn->close();
?>


