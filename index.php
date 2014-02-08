<!DOCTYPE html>
<!-- eu -->
<?php
$a = 0;
include 'contador.php';
   if (isset($_COOKIE['counte'])) {
      $counte = $_COOKIE['counte'] + 1;
   }else{
    $counte = 1;
    $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title> Sala de Estar - Carros </title>
	<link rel="stylesheet" type="text/css" href="meucss/style1.css">
	<link href="meucss/style2.css" rel="stylesheet" type="text/css" />
	<!--slide -->
	 <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	
	<META NAME="author" CONTENT="Sala de Estar - Carros">
    <META NAME="description" CONTENT="Sala de Estar Carros - Carros nacionais e Carros importados">
    <META NAME="keywords" CONTENT="carros, historia dos carros, carros nacionais, carros importados, tudo sobre carros,Opala,Dodge Charger R/T,Maverick">
	<META NAME="keywords" CONTENT="carros,Puma,PS2,Corcel,Bandeirante,Veraneio,Karmann-Ghia,Rural Willys,Fusca,Gurgel BR-800,Escort XR3,Chevette,Gol GTI 16V"/>
	<META NAME="keywords" CONTENT="carros,Bugatti Veyron,Porsche 918 Spyder,Lamborghini Gallardo Squadra Corse,Ford Mustang GT Premium,Porsche Cayenne"/>
	<META NAME="keywords" CONTENT="carros,Dodge Viper,Audi R8,Ferrari Enzo,Aston Martin AM 310 Vanquish,Ford GT,Corvette ZR1,Spyker c8,Ferrari 458,Nissan 370 Z,Pagani Zonda R"/>
	<meta name="msvalidate.01" content="8572EB2A11284153B077D39DD69777B0" />
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" class="logo">teste</a>
			<ul>
				<li class="current">
				    <a class="home" href="index.php">NACIONAIS</a>
				</li>
				<li>
					<a class="about" href="import.php">IMPORTADOS</a>
				</li>
				<!--<li>
					 <a class="blog" href="meublog.html">opção3</a> 
				</li>
				<li>
					<a class="services" href="meuservices.html">oção4</a>
				</li>-->
			</ul>
		</div>
	</div>
	
	<div id="background"> 
			  <div id="page">
			
					 <div class="header">
						<div class="footer">
							<div class="body">
							  
									<div id="sidebar">
									    <a href="index.php"><img id="logo" src="images/meulogo.png" with="200" height="110" alt="" title=""/></a>
									
										<ul class="navigation">
										    <li class="active" ><a href="index.php">Carros Nacionais</a></li>
											<li><a href="http://p.pw/pPK">Opala</a></li>
											<li><a href="http://p.pw/CqK">Dodge Charger R/T</a></li>
											<li><a href="http://p.pw/SHA">Maverick</a></li>
											<li><a href="carro3.php#carro2">Puma</a></li>
											<li><a href="carro4.php#carro2">PS2</a></li>
											<li><a href="carro5.php#carro2">Corcel</a></li>
											<li><a href="carro6.php#carro2">Bandeirante</a></li>
											<li><a href="carro7.php#carro2">Veraneio</a></li>
											<li><a href="carro8.php#carro2">Karmann-Ghia</a></li>
											<li><a href="carro9.php#carro2">Rural Willys</a></li>
											<li><a href="carro10.php#carro2">Fusca</a></li>
											<li><a href="carro11.php#carro2">Gurgel BR-800</a></li>
											<li><a href="carro12.php#carro2">Escort XR3</a></li>
											<li><a href="carro13.php#carro2">Chevette</a></li>
											<li class="last" ><a href="carro14.php#carro2">Gol GTI 16V</a></li>
											
										</ul>
										
									</div>
									<div id="content" >
									     
									    <img src="images/texto1.png" width="726" height="800" alt="" title="">
										<p> 
										<center><font color="black" face="verdana" size="3"></center>
										 GALERIA DE  FOTOS
										</p> 
										 <div id="sliderFrame">
															<div id="slider">
																<a href="http://www.menucool.com/javascript-image-slider" target="_blank">
																	<img src="images/f.bmp" alt="" />
																</a>
																<img src="images/f2.bmp"  />
																<img src="images/f3.bmp"  />
																
															</div>
														   
														</div>
														
										
															
															<!--facebook -->
															<div id="fb-root"></div>
															<DT>
															<P>
															COMENTÁRIOS:
															<P>
															</DT>
														<script>
														  window.fbAsyncInit = function() {
															// init the FB JS SDK
															FB.init({
															  appId      : 'YOUR_APP_ID',                                   // App ID from the app dashboard
															  channelUrl : 'http://saladeestarcarros.hol.es/',
														  // Channel file for x-domain comms
															  status     : true,                                            // Check Facebook Login status
															  xfbml      : true                                             // Look for social plugins on the page
															});

															// Additional initialization code such as adding Event Listeners goes here
														  };

														  // Load the SDK asynchronously
														  (function(d, s, id){
															 var js, fjs = d.getElementsByTagName(s)[0];
															 if (d.getElementById(id)) {return;}
															 js = d.createElement(s); js.id = id;
															 js.src = "//connect.facebook.net/pr_BR/all.js";
															 fjs.parentNode.insertBefore(js, fjs);
														   }(document, 'script', 'facebook-jssdk'));
														</script>


														<div id="fb-root"></div>
														<script>(function(d, s, id) {
														  var js, fjs = d.getElementsByTagName(s)[0];
														  if (d.getElementById(id)) return;
														  js = d.createElement(s); js.id = id;
														  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
														  fjs.parentNode.insertBefore(js, fjs);
														}(document, 'script', 'facebook-jssdk'));</script>

														<div class="fb-comments" data-href="http://saladeestarcarros.hol.es/" data-width="700" data-num-posts="10"></div>
														
														<!-- </li> -->
														<!--<li class="last">
															<br>
															  <center><font color="black" face="verdana" size="3"></center>
															  TESTE	
														    </br>
														</li> -->
														<a href="http://p.pw/?id=67290&utm_source=referrer&utm_medium=banner&utm_campaign=referral"> <img src = "http://p.pw/banners/728x90.gif" alt = "P.pw - encurtar URLs e ganhar dinheiro "! /> </ A>
												 </ul>
												 
									    </div>
										
										<!--<div class="featured"> 
										      <div class="header">
											     <ul>
														<li class="first">
															<!--<p>hi.</p> --> 
															<!--<img src="images/hi.jpg" width="50" height="62" alt="" title="" >
														</li>
														<li class="last">
															<p>
															  teste	
														    </p>
														</li>
												 </ul>
											  </div> -->
											  <!--<div class="body">
											    <p>
														teste 2 <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> preve texto.
												</p>
												
												<p>
														teste 3 <a href="http://www.freewebsitetemplates.com/">website template</a>, preve texto. 
												</p>
											  </div>
									    </div>
										-->
									</div>
						</div>
					 </div>
					 <div class="shadow">&nbsp;</div>
			  </div>    
	  </div> 
   </div>	  
		
	<div id="footer">
		<div class="logo">
			<a href="index.php"><img src="images/logo3.jpg" alt="Logo"></a>
		</div>
		<ul>
			<li>
				<a href="index.php">NACIONAIS</a>
			</li>
			<li>
				<a href="import.php">IMPORTADOS</a>
			</li>
			<!--<li>
				<a href="meublog.html">opção3</a>
			</li>
			<li>
				<a href="meuservices.html">opção4</a>
			</li> -->
		</ul>
		<p>
		    POWER BY Sala De Estar Carros &copy; Copyright 2014.
			<?php
              echo "<br>$a Pessoas visitaram esse site e você já visitou $counte vezes";
            ?>
			<?php $a=0; ?>
			<!--&copy; Copyright &grivaldo; 2014. Autor GRIVALDO  - POWER BY EU-->
		</p>
		<div id="connect">
			<a href="link facebook" target="_blank" id="facebook">Facebook</a>
			<a href="link twitter" target="_blank" id="twitter">Twitter</a>
			<a href="link google" target="_blank" id="googleplus">Google&#43;</a>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47255816-1', 'hol.es');
  ga('send', 'pageview');

</script>
		</div>
	</div>
</body>
</html>