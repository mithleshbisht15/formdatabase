
<html>
<title>data</title>
<header></header>
<body>
<table border=2>
<caption>Information</caption>
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>CONTACT</th>
<th>ADDRESS</th>
</tr>

<?php

include 'connection.php';

$selectquery = "select * from employee";

$query = mysqli_query($con, $selectquery);



while ($res = mysqli_fetch_array($query)) {
  
  ?>

<tr>
<td> <?php  echo $res['uname']  ?> </td>
<td> <?php  echo $res['email']  ?> </td>
<td> <?php  echo $res['phno']  ?> </td>
<td> <?php  echo $res['address']  ?> </td>

</tr>	


<?php

}

?>



</table>
</body>
</html>