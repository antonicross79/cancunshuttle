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
	
	<title>Taxi Aeropuerto a isla Mujeres - CancunShuttleAirport.com</title>
    <meta name="description" content="Taxi Aeropuerto a Isla Mujeres.Traslados Aeropuerto Cancun y traslado taxi a Playa del Carmen, taxi aeropuerto cancun Tulum y Riviera Maya Contamos con taxi Aeropuerto Cancún y Shuttle Cancún Realizamos traslados de Aeropuerto Cancún, Zona hotelera, Riviera Maya, Tulum y más."/>
	
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
					<h1 class= "text-center">Taxi Aeropuerto Cancun a Isla Mujeres</h1>
					
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
	    	<!-- Call to action -->
	    	<br>
	
		
		 <div class="container-fluid col-10 mt-4">
			 <div class="row">
				
				<!-- <img src="images/hotel-airport-cancun.jpg"  alt="hotel airport Cancun" class= "rounded mx-auto img-fluid"/> -->
				     
				  <div class= "col-md-8 col-md-offset-3 mb-3 rounded"> 
                    
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="../images/islamujeres.jpeg" class="d-block w-100" alt="taxi aeropuerto cancun a isla mujeres">
                        </div>
                        
                      </div>
                      <!--
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button> -->
                   
                     </div>
                     </div>
                    <div class="mx-auto d-block">
                        <h4> ¿Por qué prefirnos?</h4>
                          <ul class="list-group">
                          <li class="list-group-item active">Servicio 24/7</li>
                          <li class="list-group-item">Gratis cancelación (24H antes)</li>
                          <li class="list-group-item">10 años de Experiencia</li>
                          <li class="list-group-item">Camionetas con Aire Acondicionado</li>
                          <li class="list-group-item">Operadores Certificados</li>
                    </ul>
                     
                     
                    
                         <div> <img src = "../images/visa-mastercad.png"  alt="hotel airport Cancun" class= "rounded float-left" width="170" higth="150">
                         
                         </div>
                    
                          
                            
                         <div>
                
                        <a href="https://api.whatsapp.com/send?phone=+529983545838" target="_blank" ><img src="/images/whats2.png"   alt="hotel airport Cancun" class="rounded " width="170" higth="180"></a>
                        </div>
                    
                            
                              </div>   
                                 
                    
                    
                    
                       </div>
                   </div>
                   </div>
                   
                 
			
		   	        <div class="container-fluid col-10 mt-4"> <h2 class="text-center mt-5" > Taxi Aeropuerto Cancun a Isla Mujeres </h2>
						        		             <p class="mt-3"><p>Es una hermosa isla en el Mar Caribe que se encuentra aproximadamente a 19 km de Cancún, deberías tomar el ferry en el <a href = "https://cancunshuttleairport.com/es/taxi-aeropuerto-cancun-a-zona-hotelera.php"> Hotel Zona Cancún </a> o en Puerto Juárez si no cuenta con transportación puede contactarnos somos Cancún Shuttle Airport somos una empresa de traslados desde el Aeropuerto a su hotel oa algún otro destino como Aeropuerto-Tulum, <a href = "https://cancunshuttleairport.com/es/taxi-aeropuerto-cancun-a-playa-del-carmen.php"> Aeropuerto-Playa del Carmen </a> entre otros. </p>
                             <p> Te sugerimos visitar la hermosa Playa Norte con aguas cristalinas y hermosos colores azul turquesa y arena blanca, también cuenta con otros atractivos como tomar tours en catamarán, tours de snorkel, poder tomar un yate de lujo y si visitas entre Mayo y agosto puedes tener la gran oportunidad de ver al Tiburón Ballena.</p>
                             
           
           			</div>


             </div>          
                                
		
		 <!--camionetas -->
            <div class="container-fluid my-5">   
			 <div class ="row mb-5" >
				 <div class="col-10 col-sm-6 col-md-3 mx-auto d-block mt-3"> 
					<div class="card" style="width: 22rem;">
					  <img class="card-img-top" src="../images/camioneta1.jpeg"  alt="Card image cap">
					  <div class="card-body">
						<h5 class="card-title"> Taxi Airpuerto Cancun a Zona Hotelera</h5>
						<p class="card-text"> Aeropuerto Cancun a Zona Hotelera Ida y vuelta 1-6 pasajeros</p>
						<h4>$45,00 USD</h4>
						<a href="#uno" class="btn btn-primary">Reservar</a>
					</div>
					
						</div>	
				 </div>
					
					<div class="col-10 col-sm-6 col-md-3 mx-auto d-block mt-3">
					<div class="card" style="width: 22rem;">
					  <img class="card-img-top" src="../images/camioneta3.jpeg" alt="taxi aeropuerto cancun a Riviera Maya">
					  <div class="card-body">
						<h5 class="card-title">Taxi aerpuerto Cancun a Riviera Maya</h5>
						<p class="card-text"> Aeropuerto de Cancun a Riviera Maya Ida de 1-16 pasajeros </p>
						<h4>$95,00 USD</h4>
						<a href="#uno" class="btn btn-primary">Reservar</a>
					</div>
				
							</div>	
						</div>
					
					<div class="col-10 col-sm-6 col-md-3 mx-auto d-block mt-3">
					 <div class="card" style="width: 22rem;">
					  <img class="card-img-top" src="../images/camioneta2.jpeg" alt="Card image cap">
					  <div class="card-body">
						<h5 class="card-title">Taxi airport - Tulum</h5>
						<p class="card-text"> Aeropuerto de Cancun a Tulum Ida de 1-6 pasajeros</p>
						<h4>$138,00 USD</h4>
						<a href="#uno" class="btn btn-primary">Reservar</a>
				 </div>
					</div>
			           </div>
			           
			           </div>
			    </div>
		
	         <!-- fin camionetas -->  
		
		<!-- destinations -->
		<div class = "container-fluid mt-3 mb-5">
		    <h2>Otros Destinos</h2>
		    <div class = "row">
		        
		           <div class="col-md-3 col-md-offset-3 mb-3">
		             <div class="card" style="width: 20rem;">
                         <img src="../images/hotel-airport-cancun.jpg" class="card-img-top" alt="Taxi aeropuerto de Cancun a Hotel Zona Hotelera">
                         <div class="card-body">
                         <h5 class="card-title">Taxi Aeropuerto de Cancun a Zona Hotelera</h5>
                         <p class="card-text">La Zona Hotelera abarca varios subdistritos y alberga complejos turísticos con todo incluido, restaurantes internacionales y playas de arena para relajarse.</p>
                         <a href="https://cancunshuttleairport.com/es/taxi-aeropuerto-cancun-a-zona-hotelera.php" class="btn btn-primary">Visitar</a>
                        </div>
                     </div>
                     
                    </div>
		    
		            
                    
                    <div class="col-md-3 col-md-offset-3 mb-3">
		             <div class="card" style="width: 20rem;">
                         <img src="../images/playa_del_carmen_med.jpg" class="card-img-top"  alt="taxi aeropuerto de Cancun a Playa del Carmen">
                         <div class="card-body">
                         <h5 class="card-title">Taxi Aeropuerto Cancun a Playa del Carmen</h5>
                         <p class="card-text">Playa del Carmen es un paraiso costero en México que se encuentra a lo largo de la costa caribeña de la Riviera Maya, en la Península de Yucatán.</p>
                         <a href="https://cancunshuttleairport.com/es/taxi-aeropuerto-cancun-a-playa-del-carmen.php" class="btn btn-primary">Visitar</a>
                        </div>
                     </div>
                     
                    </div>
                    
                    <div class="col-md-3 col-md-offset-3 mb-3">
		             <div class="card" style="width: 20rem;">
                         <img src="../images/tulum-shuttle.jpg" class="card-img-top" alt="taxi aeropuerto de Cancun a Tulum">
                         <div class="card-body">
                         <h5 class="card-title">Taxi Aeropuerto de Cancun a Tulum</h5>
                         <p class="card-text">Es conocido por sus ruinas bien conservadas de un antiguo puerto maya. El edificio principal es una gran estructura de piedra llamada El Castillo.</p>
                         <a href="https://cancunshuttleairport.com/es/taxi-aeropuerto-cancun-a-tulum.php" class="btn btn-primary">Visitar</a>
                        </div>
                     </div>
                     
                    </div>
                    
                    <div class="col-md-3 col-md-offset-3 mb-3 ">
		                
		             <div class="card" style="width: 20rem;">
                         <img src="../images/islamujeres.jpeg" class="card-img-top"  alt="Taxi Aeropuerto Cancun a Isla Mujeres">
                         <div class="card-body">
                         <h5 class="card-title">Taxi Aeropuerto Cancun a Isla Mujeres</h5>
                         <p class="card-text">Isla Mujeres es una isla mexicana en el Mar Caribe, a 13 km de la costa de Cancún.</p>
                         
                         <a href="https://cancunshuttleairport.com/es/taxi-aeropuerto-cancun-a-isla-mujeres.php" class="btn btn-primary">Visitar</a>
                        </div>
                     </div>
                     
                    </div>
		        
		    </div>
		    

		    
		</div>
			
	<!-- fin destinations -->
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