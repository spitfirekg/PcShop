<?php include('templates/header.php'); ?>


<div class="central-container">
  <div class="central-container-img">
    <img src="images/store1.png" id="container-img">


  </div>
  <h2 id="text">Veliki izbor racunara</h2>

</div>

<script type="text/javascript">
//javascript za promenu slika u odredjenom vremenskom intervalu
var image = document.getElementById("container-img");
            var currentPos = 0;
            var images = ["images/store1.png", "images/store2.png", "images/store3.png"]

            function volgendefoto() {
                if (++currentPos >= images.length)
                    currentPos = 0;

                image.src = images[currentPos];
            }

            setInterval(volgendefoto, 3000);

</script>

<!--Javascript za promenu naslova zajedno sa slikama-->
  <script type="text/javascript">
    var text = ["Kvalitetan servis racunara i komponenti", "Odlicna ONLINE prodavnica", "Veliki izbor racunara"];
    var pozicija = 0;
    var element = document.getElementById("text");
    var inst = setInterval(promeniText, 3000);

    function promeniText() {
      element.innerHTML = text[pozicija];
      brojac++;
        if (pozicija >= text.length) {
      brojac = 0;

  }
}

  </script>



<?php include('templates/footer.php'); ?>


  </body>
</html>
