<?php include 'includes/konekcija.php';?>

<!DOCTYPE HTML>
<html>
<head>
<?php include ('includes/head.php'); ?>
</head>
<body onLoad="displayCalendar()">

<?php include ('includes/navigacija.php'); ?>



<div class="content">
<div class="container">
<div class="row">

<div class="col-md-8">

<?php 
$rezultat = mysql_query("set names 'utf8' ");
$rezultat = mysql_query("SELECT * FROM web_stranice WHERE id = '2' "); 
?>
                    
<?php 
while($row = mysql_fetch_array($rezultat))
{
$naslov=$row['naslov'];
$tekst=$row['tekst'];
?>         
     
<?php echo $naslov; ?>
<?php echo $tekst; ?>

<?php 
}
?>

</div>

<?php include ('includes/desna-kolona.php'); ?>


</div>
</div>
</div>

<?php include ('includes/footer.php'); ?>

</body>
</html>