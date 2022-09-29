<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="/Logos & Grafiken/UnicornBitmap.png" sizes="96x96">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="/GymSite/style.css">


<title>Email</title>
</head>
<body>
	
	
	<!--==============-->
	<!-- 	Header    -->
	
	
	<nav>
		<a id="Logo1" href="index.html"><img  src="/Logos & Grafiken/Logo1.png" alt=""/></a>
		
		
		<ul>
			
			<li><a class="nav-li-a" href="/GymSite/index.html" > Startseite</a></li>
			<li><a class="nav-li-a" href="/GymSite/Bilder.html"> Bilder</a></li>
      <li><a class="nav-li-a" href="/GymSite/Preise.html">Preise</a></li>
			<li><a class="nav-li-a" href="/GymSite/ÜberUns.html"> Über uns</a></li>
		</ul>
		
	</nav>
		
	
	<!-- 	Header    -->
	<!--==============-->

<?php
$to = htmlentities($_POST["Email"]);
$subject = "Muckibude";
$txt = '
<html>
<head>
<title>Muckibude Feenstaub</title>
<meta charset="UTF-8">
</head>
<body style="background-color:#ffccaaff">


    <div style="display: flex; justify-content: center;">
        <h1>Willkommen bei der Muckibude Fennstaub </h1>
    </div>
    
    <p style="margin-left: 10%; margin-right:10%">In dieser Email sind noch einmal alle für dich wichtigen Infos zur Eröffnung enthalten.</p>
        
    <p style="margin-left: 10%; margin-right:10%">Das wichtigste zuerst. Die Eröffnung ist am <b>3.10.2022</b> in der Horststraße 13, 58093 Hagen.
        Am Tag der Eröffnung erwartet dich ein tolles Angebot. Solltest du nämlich am Tag der Eröffnung deine Mitgliedschaft abschließen, erhälst du 50% Rabatt.</p>    

</body>
</html>
';
$headers = "From: Muckibude@Feenstaub.de" . "\r\n" .
"CC: ";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail($to,$subject,$txt,$headers);

echo "<center><p style='margin-top:10%; margin-bottom:10%;'> Glückwunsch, eine Email mit den wichtigsten Infos wurde gerade eben an <b>$to</b> gesendet.</p></center>";
	
	
?>	



	
	
<div id="Test" class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-2">
        
      </div>

      <div id="Links" class="col-2">
        <h5>Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="/GymSite/index.html" class="nav-link p-0 text-muted">Startseite</a></li>
          <li class="nav-item mb-2"><a href="/GymSite/Bilder.html" class="nav-link p-0 text-muted">Bilder</a></li>
          <li class="nav-item mb-2"><a href="/GymSite/Preise.html" class="nav-link p-0 text-muted">Preise</a></li>
          <li class="nav-item mb-2"><a href="/GymSite/ÜberUns.html" class="nav-link p-0 text-muted">Über Uns</a></li>
          <li class="nav-item mb-2"><a href="/GymSite/Impressum.html" class="nav-link p-0 text-muted">Impressum</a></li>
        </ul>
      </div>

      <div class="col-2">
        <img src="/Logos & Grafiken/UnicornBitmap.png" width="140px" alt="Leider konnte das Bild nicht geladen werden"/>
      </div>

      <div class="col-4 offset-1">
        <form action="/GymSite/PHP/senden.php" method="post">
          <h5>Erhalte eine Email</h5>
          <p>Einmalige Email mit allen wichtigen Infos zur Eröffnung</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="email" name="Email" class="form-control" placeholder="Email" style="background-color: transparent; border-color: #2b1100ff;">
            <button class="btn btn-primary" type="submit" id="Button-Submit">Senden</button>
            <input type="checkbox" id="Bot-Control" name="Bot-Control" value="Bot-Control" onchange="DisableButton()" hidden /> <!-- Hidden CheckBox as Captcha for Bots-> A Bot would 
            check a hidden field. A normal person not.-->
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top" style="border-top-color: #2b1100ff!important">
      <p>© <span id="copyright-year">2021</span> Muckibude Feenstaub</p>
	 <a id="Impressum" href="Impressum.html"> Impressum</a>
      
    </div>
  </footer>
</div>
	
	
	
	
	
	<script>
    document.querySelector('#copyright-year').innerText = new Date().getFullYear();

    //Bot Protection for Email
    function DisableButton(){ 
      const button = document.getElementById('Button-Submit');
      var checkBox = document.getElementById("Bot-Control");
      if (checkBox.checked == true){
        button.disabled = true;
      } else {
        button.disabled = false;
      } 
    } 
    
    
</script>
</body>
</html>