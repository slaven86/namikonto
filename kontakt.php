<!DOCTYPE HTML>
<html>
<head>
<?php include ('includes/head.php'); ?>
</head>
<body onLoad="displayCalendar()">
<?php include ('includes/navigacija.php'); ?>
<div class="content">
  <div class="container">
    <h1> KONTAKT </h1>
    <div class="row">
      <div class="col-md-8">
         
          <form action="FormToEmail.php" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"> Ime</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Unesite ime" required />
                </div>
                <div class="form-group">
                  <label for="email"> Email</label>
                  <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span> </span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Unesite email" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"> Poruka</label>
                  <textarea name="message" id="message" class="form-control" rows="9" cols="25" required
                                placeholder="Unesite poruku"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary pull-right" id="btnContactUs"> Pošalji</button>
              </div>
            </div>
          </form>          

      </div>
      <div class="col-md-4">
        <h3> Nami konto d.o.o </h3>
        <address>
        <p> Niška 7, 11251 Železnik </span></p>
        <p> Tel: 011/2589-553</span></p>
        <p> Mob: 063/194-2304 </span> </p>
        <p> <a href="mailto: radmila.miljkovic56@gmail.com">radmila.miljkovic56@gmail.com</a></span></p>
        <p> Radno vreme: 09-17h Ponedeljak - Petak </p>
        </address>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Mapa -->
<div class="container">
<p>&nbsp;</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2835.116326795003!2d20.378718632976433!3d44.717237379099195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a72760eeaaed7%3A0x7056b8ea09488dd9!2sNi%C5%A1ka+7%2C+Beograd!5e0!3m2!1sen!2srs!4v1518028688473" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
<p>&nbsp;</p>
</div>
<!-- Mapa -->


<?php include ('includes/footer.php'); ?>
</body>
</html>