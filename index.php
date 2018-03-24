<?php include 'includes/konekcija.php';?>

<!DOCTYPE HTML>
<html>
<head>
<?php include ('includes/head.php'); ?>
</head>
<body onLoad="displayCalendar()">

<?php include ('includes/navigacija.php'); ?>

<div class="baner">
<div class="container">
<p style="color:#FFFFFF; font-size:25px; margin-top:130px; text-align:center;"> <em><strong> " Nekada je književnost bila umetnost, a finansije zanat. <br> Danas je književnost zanat, a finansije umetnost." </strong></em></p>
<p>&nbsp;</p>
<h3 style="color: white; text-align: center;margin-right: 400px; margin-top: 10px;"><em><strong>W.LIPPMAN</strong></em></h3>

</div>
</div>

<div class="content">
<div class="container">
<div class="row">

<div class="col-md-8">

<?php 
$rezultat = mysql_query("set names 'utf8' ");
$rezultat = mysql_query("SELECT * FROM web_stranice WHERE id = '1' "); 
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