<!DOCTYPE html>
<html>

<body>
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,"ourdb");
if(!$conn)
{
die(' not connected'.'mysql_error()');
}
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$sql = "INSERT INTO userchat".
       "(username,chat,msg)".
       "VALUES".
       "('$b','$a','$c')";
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
die('not created'.mysqli_error($conn));
}
$sql = "select * from  store where c1='$a'";


$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) {
	
	
echo
	 "     <div class="."media msg".">
                    <a class="."pull-left"." href="."#".">
                        <img class="."media-object"." data-src="."holder.js/64x64"." alt="."64x64"." style="."width: 32px; height: 32px;"." src="."data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC".">
                    </a>
                    <div class="."media-body".">
                        <small class="."pull-right time"."><i class="."fa fa-clock-o"."></i> 12:10am</small>

                        <h5 class="."media-heading".">". $row['brand']."</h5>
                
                    </div>
                </div>";
	
   }

mysqli_close($conn);
?>



</body>
</html>