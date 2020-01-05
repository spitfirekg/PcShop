<?php include 'templates/header.php'; ?>

<div class="container-alert">
  <h1 style="text-align:center;margin-top:5%;margin-bottom:5%;padding-top:2%;padding-bottom:2%;
             background-color:#007BFF;color:white;">Niste ulogovani<br>
             <small>Samo Ulogovani korisnici mogu poruciti ONLINE!</small><br>
             <small>Ukoliko niste nas clan molimo vas da se registrujete</small></h1>


  <div class="login-btn-div">
    <h2 class="login-header">Login</h2>
    <input type="text" name="username" placeholder="Korisnicko ime" class="login-input"><br>
    <input type="password" name="password" placeholder="Password" class="login-input"><br>
    <input type="submit" name="login" value="Login" class="login-btn">
  </div>

  <div class="register-btn-div">
    <h2 class="login-header">Registracija</h2>
    <input type="text" name="username" placeholder="Korisnicko ime" class="register-input"><br>
    <input type="email" name="email" placeholder="Email adresa" class="register-input"><br>
    <input type="password" name="password1" placeholder="Password" class="register-input"><br>
    <input type="password" name="password2" placeholder="Potvrdi password" class="register-input"><br>
    <input type="submit" name="register" value="Registruj  se" class="register-button">

  </div>

</div>


<?php include 'templates/footer.php'; ?>
