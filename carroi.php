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
									    <a href="import.php"><img id="logo" src="images/meulogo1.png" with="200" height="110" alt="" title=""/></a>
									
										<ul class="navigation">
										    <li><a href="import.php">Carro importado 1</a></li>
											<li class="active"><a href="carroi.php#carro2">Carro 0</a></li>
											<li><a href="carro1.imp.php#carro2">Carro 1</a></li>
											<li><a href="carro2.imp.php#carro2">Carro 2</a></li>
											<li><a href="carro3.imp.php#carro2">Carro 3</a></li>
											<li><a href="carro4.imp.php#carro2">Carro 4</a></li>
											<li><a href="carro5.imp.php#carro2">Carro 5</a></li>
											<li><a href="carro6.imp.php#carro2">Carro 6</a></li>
											<li><a href="carro7.imp.php#carro2">Carro 7</a></li>
											<li><a href="carro8.imp.php#carro2">Carro 8</a></li>
											<li><a href="carro9.imp.php#carro2">Carro 9</a></li>
											<li><a href="carro10.imp.php#carro2">Carro 10</a></li>
											<li><a href="carro11.imp.php#carro2">Carro 11</a></li>
											<li><a href="carro12.imp.php#carro2">Carro 12</a></li>
											<li><a href="carro13.imp.php#carro2">Carro 13</a></li>
											<li class="last" ><a href="carro14.imp.php#carro2">Carro 14</a></li>
											
										</ul>
										
									</div>
									<div id="content" >
									
									    <img src="images/minhaimagen11.jpg" width="726" height="800" alt="" title="">
										
										<div class="body">
											    <ul>
														<!--<li class="first"> -->
															<p> 
															 <center><font color="black" face="verdana" size="3"></center>
															 GALERIA DE  FOTOS
															</p> 
														<!--	<img src="images/c1.jpg" width="200" height="144" alt="" title="" >
															<img src="images/c2.jpg" width="200" height="144" alt="" title="" >
															<img src="images/c3.jpg" width="200" height="144" alt="" title="" >
															
															<center><font color="black" face="verdana" size="3"></center>
															____|Perua DKW|___________|Romi-Isetta|_________|Sedan DKW|____
														-->
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
												 </ul>
									    </div>
										
										
										<!--<div class="featured">
										      <div class="header">
											     <ul>
														<li class="first">
															<!--<p>hi.</p> -->
											<!--				<img src="images/hi.jpg" width="50" height="62" alt="" title="" >
														</li>
														<li class="last">
															<p>
															  teste	
														    </p>
														</li>
												 </ul>
											  </div>
											  <div class="body">
											    <p>
														teste 2 <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> preve texto.
												</p>
												
												<p>
														teste 3 <a href="http://www.freewebsitetemplates.com/">website template</a>, preve texto. 
												</p>
											  </div>
									    </div> -->
									</div>
						</div>
					 </div>
					 <div class="shadow">&nbsp;</div>
			  </div>    
	  </div> 
   </div>	  
		
	<div id="footer">
		<div class="logo">
			<a href="import.php"><img src="images/logo3.jpg" alt="Logo"></a>
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