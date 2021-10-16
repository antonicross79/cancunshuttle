
 <!DOCTYPE html>
<?php 
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$is_safari = false;
	$is_mobile_iphone = false;
	if(stripos($user_agent,'Chrome') !== false){
		$is_safari = false;
	}
	elseif(stripos($user_agent,'Safari') !== false){
		$is_safari = true;
	}

	if(stripos($user_agent,'iPhone') || stripos($user_agent,'iPod') || stripos($user_agent,'iPad')){
		$is_mobile_iphone = true;
	}

	$destinos = array();
	$destinos[1] = 'Round Trip: Airport-Hotel-Airport';
	$destinos[2] ='Arrival: Airport-Hotel';
	$destinos[3] ='Departure: Hotel-Airport';
	$destinos[4] ='Transfer: Hotel-Hotel';

									
	//ESTO ES PARA EL CASO QUE APLIQUE USANDO BASE DE DATOS CON UNA TABLA SENCILLA.
	

   	$conexion = mysqli_connect("127.0.0.1","u327298531_cancunshutt","cM2~hmMMjsWr","u327298531_cancunshutt");
	//$conexion = mysqli_connect("127.0.0.1","root","6101696","transfer");
	$sql = "SELECT n_ubicacion FROM ubicaciones;";
	$respuesta= mysqli_query($conexion,$sql);

?>



<html lang="en">
   <head><meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<meta name="revisit-after" content="1 days"/>
	
	<meta name="author" content="bytedex.com">

   <!---Este es el link de conexion de pinterest-->
	<meta name="p:domain_verify" content="3663ea1d28e06e36f8be2af599a3e8ad"/>

	<!---fin de pinterest-->
	
	<title>Taxi Airport Cancun - CancunShuttleAirport.com</title>
    <meta name="description" content="Taxi Airport Cancun.Traslados Aeropuerto Cancun y traslado taxi a Playa del Carmen, taxi aeropuerto cancun Tulum y Riviera Maya Contamos con taxi Aeropuerto Cancún y Shuttle Cancún Realizamos traslados de Aeropuerto Cancún, Zona hotelera, Riviera Maya, Tulum y más."/>
	
	<link rel="stylesheet" href="../css/styleslideshow.css" />
	<link rel="stylesheet" href="../css/whatsapp.css" />

	
	<link rel="stylesheet" href="../css/theme-dblue.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/animate.css" />
	<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'> -->
	<link rel="shortcut icon" href="../images/favicon.ico" />
	

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php
    if($is_safari == true){
    	?>
    	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    	<?php
    }
    ?>
    
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0&appId=393071095180655&autoLogAppEvents=1" nonce="zk4ilA0O"></script>
<!-- Latest compiled and minified CSS -->
	<style type="text/css">
		.dropdown-toggle{
		    margin-top: 5px;
		    border: 1px solid #cecece;
		    padding-top: 12px;
		}

		.dropdown-toggle:hover{
		    color:black !important;
		    background: white !important;
		}
	</style>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-199836743-2">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-199836743-2');
</script>

<!-- fin - Google Analytics -->



  </head>
  
  <body>
      
         
		<!-- Header -->
		<?php
		include "header.php";
		
		?>
		<!-- //Header -->
	
	<!-- Main -->
	<main class="container-fluid">
	    
	    		<!-- Page info -->
		<header class="site-title color" >
			<div class="wrap">
				<div class="container">
					<h1 class= "text-center">Quintana Roo destinations</h1>
					
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
	    
<!-- //Intro -->
		<div class="container-fluid"  id="uno">
		    	
		<form action="search-results.php" method="post">
		<div class="form-row p-5" style="border: 1px solid #00000059;border-radius: 20px;box-shadow: 5px 5px 10px 2px #00000042;background: white;">

			<div class="input-group mb-3 col-xs-12 col-md-2">
			  <label for="transfer_type" class="col-xs-12 col-md-12 pb-0 pl-0">Transfer Type</label>
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-road"></i></label>
			  </div>
			  <?php
				
					$num = count($destinos);
					$i=1;
					echo '<select name="modo" id="modo" class="form-control" style="height:auto"  required onchange="Validar()">';
					while ($i<= $num ) {
						echo "<option value='".$i."'>".$destinos[$i]."</option>";
						$i++;
					};
					echo '</select>';
				?>
			</div>
			<div class="input-group mb-3 col-xs-12 col-md-2">
			  <label for="transfer_type" class="col-xs-12 col-md-12 pb-0 pl-0">Destinations</label>
			  	<div class="input-group-prepend">
				    <label class="input-group-text" for="destination1"><i class="fa fa-building"></i></label>
				</div>
			    <input type="text" name="ubi1" id="destination1" placeholder="Type your destination here" class="form-control" style="height: auto;" onclick="document.getElementById('livesearch2').innerHTML=''" onkeyup="return showResult(this.value)" value="">	
				<div id="livesearch" style="max-height: 200px;overflow-x: auto;position: absolute;top:5em;z-index: 9;"></div>		  
			</div>
			<div class="input-group mb-3 col-xs-12 col-md-2" id="destination2">
			  <label for="transfer_type" class="col-xs-12 col-md-12 pb-0 pl-0">Destinations</label>
			  	<div class="input-group-prepend">
				    <label class="input-group-text" for="destinationextra"><i class="fa fa-building"></i></label>
				</div>
			    <input type="text" name="ubi2" id="destinationextra" placeholder="Type your destination here" class="form-control" style="height: auto;" onclick="document.getElementById('livesearch').innerHTML=''" onkeyup="return showResult(this.value)" value="">
			    <div id="livesearch2" style="max-height:200px;overflow-x: auto;position: absolute;top:5em;z-index: 9;"></div>		  
			</div>
			<div class="input-group mb-3 col-xs-9 col-md-1" id="arrival_date">
			  <label for="transfer_type" class="col-xs-12 col-md-12 pb-0 pl-0">Arrival</label>
			  <?php
			  	//safari mac
			    if($is_safari == true && $is_mobile_iphone == false){
			    	?>
			    	<div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-calendar"></i></label>
					  </div>
			    	<input type="text" name="dep-date" id="dep-date" placeholder="yyyy-mm-dd" class="form-control" style="height: auto;">
			    	<?php
			    }elseif($is_safari == true && $is_mobile_iphone == true){
			    	//chrome or firefox iPhone
			    	?>
			    	<div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-calendar"></i></label>
					  </div>
			    	<input type="date" class="form-control" name="dep-date" placeholder="yyyy-mm-dd" class="form-control" style="height: auto;">
			    	<?php
			    }elseif($is_safari == false){
			    	?>
			    	<input type="date" class="form-control" name="dep-date" min="<?php echo date('Y-m-d'); ?>">
			    	<?php
			    }
			    ?>
			  
			</div>
			<div class="input-group mb-3 col-xs-3 col-md-1" id="arrival_time">
			  <label for="pickup_hour" class="col-xs-12 col-md-12 pb-0 pl-0">time</label>
			  <select class="form-control input-shadow" name="pickup_hour_arrival" id="pickup_hour" style="height: auto;">
		    	<?php 
		    	$j = 0;
		    	for ($i=0; $i < 24; $i++) { 
		    		if($i > 12){
		    			$j = $i - 12;
		    		}
		    		?>
		    		<option value="<?php echo $i; ?>"><?php echo ($j>9?$j:'0'.$j); echo " "; echo ($i>11?'pm':'am') ?> </option>
		    		<?php
		    		$j++;
		    	}

		    	?>
		    </select>
			</div>
			<div class="input-group mb-3 col-xs-12 col-md-1" id="departure_date">
				<label for="transfer_type" class="col-xs-12 col-md-12 pb-0 pl-0">Departure</label>
			  <?php
			    if($is_safari == true && $is_mobile_iphone == false){
			    	?>
			    	<div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-calendar"></i></label>
					  </div>
			    	<input type="text" name="ret-date" id="ret-date" placeholder="yyyy-mm-dd" class="form-control" style="height: auto;">
			    	<?php
			    }elseif($is_safari == true && $is_mobile_iphone == true){
			    	?>
			    	<div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-calendar"></i></label>
					  </div>
			    	<input type="date" class="form-control" name="ret-date"placeholder="yyyy-mm-dd" class="form-control" style="height: auto;">
			    	<?php
			    }else{
			    	?>
			    	<input type="date" class="form-control" name="ret-date" min="<?php echo date('Y-m-d'); ?>">
			    	<?php 
			    }
			    ?>
			</div>
			<div class="input-group mb-3 col-xs-3 col-md-1" id="departure_time">
			  <label for="pickup_hour" class="col-xs-12 col-md-12 pb-0 pl-0">Time</label>
			  <select class="form-control input-shadow" name="pickup_hour_departure" id="pickup_hour" style="height: auto;">
		    	<?php 
		    	$j = 0;
		    	for ($i=0; $i < 24; $i++) { 
		    		if($i > 12){
		    			$j = $i - 12;
		    		}
		    		?>
		    		<option value="<?php echo $i; ?>"><?php echo ($j>9?$j:'0'.$j); echo " "; echo ($i>11?'pm':'am') ?> </option>
		    		<?php
		    		$j++;
		    	}

		    	?>
		    </select>
			</div>
			<div class="input-group mb-3 col-xs-12 col-md-3" id="number_passengers">
				<label for="transfer_type" class="col-xs-12 col-md-12 pb-0 pl-0">Passenger(s)</label>
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-user"></i></label>
			  </div>
			  <select class="form-control col-xs-12 col-md-6 mr-2" name="people" id="inputGroupSelect01" style="height:auto;">
			    <option value="1" selected>1 Passenger</option>
			    <option value="2">2 Passengers</option>
			    <option value="3">3 Passengers</option>
			    <option value="4">4 Passengers</option>
			    <option value="5">5 Passengers</option>
			    <option value="6">6 Passengers</option>
			    <option value="7">7 Passengers</option>
			    <option value="8">8 Passengers</option>
			    <option value="9">9 Passengers</option>
			    <option value="10">10 Passengers</option>
			    <option value="11">11 Passengers</option>
			    <option value="12">12 Passengers</option>
			    <option value="13">13 Passengers</option>
			    <option value="14">14 Passengers</option>
			    <option value="15">15 Passengers</option>
			    <option value="16">16 Passengers</option>
			  </select>
			  <button class="btn btn-primary col-xs-12 col-md-6" type="submit">Continue</button>
			</div>
		</div>	
		</form>
		</div>
	    </div>
	
	
	   <br>
	   
		<div class="container-fluid col-10 mt-4">
			<div class="row">
				<!--- Content -->
				<div class="three-fourth content">
					<div class="row">
						 <!-- post -->
						 <div class="full-width">
							<article class="hentry">
								<div class="entry-featured">
									<img src="../images/hotel-airport-cancun.jpg" high="200" alt="cancun airport transportation" />
									<div class="overlay">
										<a href="cancun-airport-transportation.php" class="expand">+</a>
									</div>
								</div>
								<div class="entry-content">
									<h2><a href="cancun-airport-transportation.php">Cancun Airport Transportation</a></h2>
									<p>In the hotel zone you will find a diversity of beautiful beaches, the beautiful viewpoint that is in Playa Delfines, and if you like to have a good night you will find several places such as Cocobongo, Hard Rock, La Vaquita etc. There are also water parks like Ventura Park and some hotels have their own like Casa Maya.</p>
									<a href="cancun-airport-transportation.php" title="Read more" class="more">Read more</a>
								</div>
							</article>
						</div>
						<!-- //Post -->
						
						<!-- Post -->
						<div class="full-width">
							<article class="hentry">
								<div class="entry-featured">
									<img src="../images/islamujeres.jpeg" alt="isla mujeres transportation" />
									<div class="overlay">
										<a href="isla-mujeres-airport-transportation.php" class="expand">+</a>
									</div>
								</div>
								<div class="entry-content">
									<h2><a href="isla-mujeres-airport-transportation.php">Isla mujeres Transportation</a></h2>
									<p>We suggest you visit the beautiful North Beach with crystal clear waters and beautiful turquoise blue colors and white sand, it also has other attractions such as taking catamaran tours, snorkeling tours.</p>
									<a href="isla-mujeres-airport-transportation.php" title="Read more" class="more">Read more</a>
								</div>
							</article>
						</div>
						<!-- //Post -->
						
						<!-- Post -->
						<div class="full-width">
							<article class="hentry">
								<div class="entry-featured">
									<img src="../images/tulumm.jpeg" alt="Shuttle Cancun Tulum" />
									<div class="overlay">
										<a href="shuttle-cancun-tulum.php" class="expand">+</a>
									</div>
								</div>
								<div class="entry-content">
									<h2><a href="shuttle-cancun-tulum.php">Shuttle Cancun Tulum</a></h2>
									<p>It is a city on the coast of the Riviera Maya an hour and a half from Cancun Airport, if you do not have transportation for your next vacation you can contact us we are Cancun Shuttke Airport we have transfers from Airport-Hotel to the city of Tulum or Hotel-Akumall or some other place that you would like to know.</p>
									<a href="shuttle-cancun-tulum.php" title="Read more" class="more">Read more</a>
								</div>
							</article>
						</div>
						<!-- //Post -->
						
						
						<!-- Post -->
						<div class="full-width">
							<article class="hentry">
								<div class="entry-featured">
								<img src="../images/playa-del-carmen.jpeg" alt="Playa del Carmen Airport Transportation" />
									<div class="overlay">
										<a href="playa-del-carmen-airport-transportation.php" class="expand">+</a>
									</div>
								</div>
								<div class="entry-content">
									<h2><a href="playa-del-carmen-airport-transportation.php">Playa del Carmen Airport Transportation</a></h2>
									<p>It is a beautiful coastal city that is located 55 km from Cancun Airport, if you do not have transportation you can contact us we are Cancun Shuttle Airport we have transfers from Airport-Hotel, or Hotel-Tulum, Hotel-Holbox, or some other destination you would like to visit. </p>
									<a href="playa-del-carmen-airport-transportation.php" title="Read more" class="more">Read more</a>
								</div>
							</article>
						</div>
						<!-- //Post -->
						
					</div> 
					
					
				
					
					<!-- Pager -->
				<!-- 	<div class="pager">
						<a href="#">1</a>
						<a href="#" class="current color">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
					</div> 
					<!-- //Pager -->
				</div> 
				<!--- //Content -->
				
				
			<!--- Sidebar -->
				<?php
				include "sidebar.php";
				
				?>
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
	<!-- //Main -->
	
<!-- Services iconic -->
		<div class="container-fluid col-10 mt-4">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="ico pig"></span></span>
						<h4>FIXED RATES</h4>
						<p>Book your transportation service with us, what you see is what you pay.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="ico lock"></span></span>
						<h4>PRIVATE TRANSFERS</h4>
						<p>All our services are private, travel codomely with us.</p>
					</div>
					<!-- //Item -->
					
	
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="ico shuttle"></span></span>
						<h4>QUALITY VEHICLES</h4>
						<p>Our vehicles are inspected to provide a safe service, travel without worry.</p>
					</div>
					<!-- //Item -->
				</div>
			</div>
		</div>
		<!-- //Services iconic -->
	
	
	<!-- Footer -->
	<?php
	
	      include "footer.php";
		?>
		
	<!-- //Footer -->
	
	<!-- Preloader 
	<div class="preloader">
		<div id="followingBallsG">
			<div id="followingBallsG_1" class="followingBallsG"></div>
			<div id="followingBallsG_2" class="followingBallsG"></div>
			<div id="followingBallsG_3" class="followingBallsG"></div>
			<div id="followingBallsG_4" class="followingBallsG"></div>
		</div>
	</div>
	-->
	<!-- //Preloader -->
	
	 <!-- jQuery -->
	 
	 <?php
	if ($is_safari == true) {
		?>
		<script src="js/jquery.min.js"></script>
		
		<?php
	}else{
		?>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<?php
	}

	?>
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	
	<script src="../js/jquery.uniform.min.js"></script>
	<script src="../js/jquery.datetimepicker.js"></script>
	<script src="../js/jquery.slicknav.min.js"></script>
	
   
	
	  <script type="text/javascript">
		window.onload = function () {
			$("#destination2").hide();
        	Validar();
        	$('#dep-date').datetimepicker({timepicker:false,startDate:"<?php echo '+'.date('Y/m/d')?>"});
        	$('#ret-date').datetimepicker({timepicker:false,startDate:"<?php echo '+'.date('Y/m/d')?>"});
      	}
		function MostrarMensaje(){
			alert('El Horario debe ser Entre las 06:00 y las 22:00');
		}
           
		function Validar(){

			var modo_de_viaje  = $("#modo").val();
        	if (modo_de_viaje == 1) {
        		$("#destination2").hide();
        		$("#arrival_date").show(500);
        		$("#arrival_time").show(500);
        		$("#departure_date").show(500);
        		$("#departure_time").show(500);
        	}
        	if (modo_de_viaje == 2) {
        		$("#destination2").hide();	
        		$("#arrival_date").show(500);
        		$("#arrival_time").show(500);
        		$("#departure_date").hide();
        		$("#departure_time").hide();
        	}
        	if (modo_de_viaje == 3) {
        		$("#destination2").hide();
        		$("#arrival_date").hide();
        		$("#arrival_time").hide();
        		$("#departure_date").show(500);
        		$("#departure_time").show(500);
        	}
        	if (modo_de_viaje == 4) {
        		$("#destination2").show(500);
        		$("#arrival_date").hide();
        		$("#arrival_time").hide();
        		$("#departure_date").show(500);
        		$("#departure_time").show(500);
        	}
		}


	</script>
	<script type="text/javascript">
		var target = "";
		var livesearch = ""
		function showResult(str) {
		  target = event.target.id;
		  if (target == 'destinationextra') {
		  	livesearch = "livesearch2";
		  }else{
		  	livesearch = "livesearch";
		  }
		  if (str.length==0) {
		    document.getElementById(livesearch).innerHTML="";
		    document.getElementById(livesearch).style.border="0px";
		    return;
		  }
		  var xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange=function() {
		    if (this.readyState==4 && this.status==200) {
		      document.getElementById(livesearch).innerHTML=this.responseText;
		      document.getElementById(livesearch).style.border="1px solid #A5ACB2";
		    }
		  }
		  xmlhttp.open("GET","../search-destination.php?q="+str,true);
		  xmlhttp.send();
		}

		function selectDestination(destino){
			$("#"+target).val(destino);
			document.getElementById(livesearch).innerHTML="";
			document.getElementById(livesearch).style.border="0px";
			return false;
		}
	</script>
	
		
	<a href="https://api.whatsapp.com/send?phone=+529983545838" class="btn-wsp" target="_blank">
	<i class="fa fa-whatsapp icono"></i>
	</a>
         
	
  </body>
</html>