 <?php
$nm=$_GET["nm"];

if($nm=="")
{

}
else
{

mysql_connect("localhost","root","");
mysql_select_db("unique_fly");
$res=mysql_query("select * from table1 where destination like('$nm%')");
echo "<center>";
echo "<table border='1'>";

echo"<th>Flight Name</th>";
echo"<th>From</th>";
echo"<th>Time</th>";
echo"<th>Prize$$</th>";
echo"<th>Stops</th>";
echo"<th>Trip</th>";
echo"<th>Ratings</th>";
echo"<th>Children Prize</th>";
echo"<th>Infants Prize</th>";
echo"<th>Book Now</th>";
echo"<tr>";
while($row=mysql_fetch_array($res))
{
	echo "<tr>";
	echo "<td>"; echo $row["name"]; echo "</td>";
	echo "<td>"; echo $row["destination"]; echo "</td>";
	echo "<td>"; echo $row["time"]; echo "</td>";
	echo "<td>"; echo $row["prize"]; echo "</td>";
	echo "<td>"; echo $row["stops"]; echo "</td>";
	echo "<td>"; echo $row["trip"]; echo "</td>";
	echo "<td>"; echo $row["ratings"]; echo "</td>";
	echo "<td>"; echo $row["children"]; echo "</td>";
	echo "<td>"; echo $row["infants"]; echo "</td>";




	echo '<td><a href="book.php">click here to book now...</a></td>';

	echo "<tr>";

	
}
echo "</table>";
echo "</center>";

}

?>  