<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="../../03 Archiv - Logos  Grafiken/Logos & Grafiken/FeeBitmap.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css" >

<title>Email</title>
</head>
<body style="min-height: 500px;">
    
<!--==============-->
	<!-- 	Header    -->
	
	
	<nav>
		<a id="Logo1" href="index.html"><img  src="../../../03 Archiv - Logos  Grafiken/Logos & Grafiken/Logo1.png" alt=""/></a>
		
		
		<ul>
			
			<li><a class="nav-li-a" href="" > ---</a></li>
			<li><a class="nav-li-a" href="Index.html">Preise</a></li>
			<li><a class="nav-li-a" href="Motto.html"> Über uns</a></li>
		</ul>
		
	</nav>
		
	
	<!-- 	Header    -->
	<!--==============-->

<?php
$to = htmlentities($_POST["Email"]);
$subject = "Muckibude";
$txt = "Willkommen bei der Muckibude Feenstaub. Schön das du dich für unserer Angebot interessierst. Denk unbedingt an den Eröffnungstermin am 3.10.2022 in Hagen. 
Auch wichtig zu wissen, wenn du dich am Tag der Eröffnung anmeldest, zahlst du für deine Mitgliedschaft nur den halben Preis.";
$headers = "From: Muckibude@Feenstaub.de" . "\r\n" .
"CC: ";

mail($to,$subject,$txt,$headers);

echo "<p style='margin-top:20%; margin-left:35%;'> Glückwunsch, eine Email mit den wichtigsten Infos wurde gerade eben an <b>$to</b> gesendet.</p>";
	
	
?>	



	
	
<div id="Test" class="container" style="margin-top: 29%;">
  <footer class="py-5">
    <div class="row">
      <div class="col-2">
        
      </div>

      <div class="col-2">
        <h5>Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Startseite</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Preise</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Über Uns</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">---</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Impressum</a></li>
        </ul>
      </div>

      <div class="col-2">
        
      </div>

      <div class="col-4 offset-1">
        <form>
          <h5>Erhalte eine Email</h5>
          <p>Einmalige Email mit allen wichtigen Infos zur Eröffnung</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email" style="background-color: transparent; border-color: #2b1100ff;">
            <button class="btn btn-primary" type="button" id="Button-Submit">Senden</button>
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
</script>
</body>
</html>