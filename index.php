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
	

   //	$conexion = mysqli_connect("127.0.0.1","u327298531_cancunshutt","cM2~hmMMjsWr","u327298531_cancunshutt");
	//$conexion = mysqli_connect("127.0.0.1","root","6101696","transfer");
	$sql = "SELECT n_ubicacion FROM ubicaciones;";
	//$respuesta= mysqli_query($conexion,$sql);
	

			


?>



<html lang="en">
   <head><meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<meta name="revisit-after" content="1 days"/>
	
	<meta name="author" content="bytedex.com">

   <!---Este es el link de conexion de pinterest-->
	<meta name="p:domain_verify" content="3663ea1d28e06e36f8be2af599a3e8ad"/>

	<!---fin de pinterest-->
	
	<title>cancun shuttle airport - cancunshuttleairport.com</title>
    <meta name="description" content="cancun shuttle airport.Transfer Cancun Aeropuerto and Playa del Carmen Transfer,Tulum and Riviera Maya.We have taxi airport cancun and Shuttle Cancun.Realizamos traslados de Aeropuerto Cancun, Zona hotelera,Riviera Maya, Tulum y más."/>
	
	<link rel="stylesheet" href="css/styleslideshow.css" />
	<link rel="stylesheet" href="css/whatsapp.css" />

	
	<link rel="stylesheet" href="css/theme-lblue.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'> -->
	<link rel="shortcut icon" href="images/favicon.ico" />
	
	
		   <!-- Begin Mailchimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
            
            <!-- fin mailchimp -->

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
	<main class="main" role="main">
		<!-- Intro -->
		
		
		<!-- slide principal -->
		<div class="container-fluid">
			 <div class="row">
				
				<!-- <img src="images/hotel-airport-cancun.jpg"  alt="hotel airport Cancun" class= "rounded mx-auto img-fluid"/> -->
				     
				  <div class= "col-md-12 col-md-offset-3 mb-3"> 
                    
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="images/foto1.jpeg" class="d-block w-100" alt="Cancun shuttle">
                        </div>
                        <div class="carousel-item">
                          <img src="images/foto2.jpeg" class="d-block w-100" alt="taxi aeropuerto cancun">
                        </div>
                        <div class="carousel-item">
                          <img src="images/hotel-airport-cancun.jpg" class="d-block w-100" alt="hotel airport cancun">
                        </div>
                      </div> <!--
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>  -->
                   
                     </div>
                     </div>
		<!-- fin slide -->
		

		
		<!-- //Intro -->
		<div class="container-fluid" style="background: #4bb5c1;" id="uno">
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
	    	<!-- Call to action -->
	    	<br>
	    	
	    	
				
	    	
		<div class="container-fluid text-center mt-5">
			
				
				<h1>Cancun Shuttle Airport</h1>
				
				<p>Welcome to Cancun Airport Transportation. At Cancun Airport Transportation we have more than 20 years of experience providing Transportation from Cancun Airport, and Tours in Cancun and Riviera Maya. We know what you need.
                    We provide private, safe and reliable Transportation from the Cancun Airport to your hotel or lodging in the Cancun Hotel Zone, Downtown Cancun, Playa Mujeres, Puerto Morelos, Playa del Carmen, Puerto Aventuras, Akumal, Tulum or any part of the Riviera Maya.</p>
                    
                    <div class="text-center"> 
                   	    <h3>The best prices for airport Transfers - Cancun, Riviera maya, Playa mujeres, Tulum</h3> 
                   	        <p><img src="/images/calidad.png" alt="transfer cancun riviera maya" width="200" higth="200" class="img-fluid" /></p>
                   	    
                   	 </div>
                   	    
                    </div>      
	 
                	<!--camionetas -->
            <div class="container-fluid my-5 ">   
			 <div class ="row" >
				 <div class="col-12 col-sm-6 col-md-3 mx-auto d-block mt-3"> 
					<div class="card" style="width: 22rem;">
					  <img class="card-img-top" src="images/camioneta1.jpeg"  alt="Card image cap">
					  <div class="card-body">
						<h5 class="card-title">Airport Hotel Zone Cancun</h5>
						<p class="card-text"> Airport -Cancun Hotel Zone Round trip for up to 1-6 passengers</p>
						<h4>$45,00 USD</h4>
						<a href="https://cancunshuttleairport.com/#uno" class="btn btn-primary">Book</a>
					</div>
					
						</div>	
				 </div>
					
					<div class="col-12 col-sm-6 col-md-3 mx-auto d-block mt-3">
					<div class="card" style="width: 22rem;">
					  <img class="card-img-top" src="images/camioneta3.jpeg" alt="Card image cap">
					  <div class="card-body">
						<h5 class="card-title">Taxi airport - Riviera Maya</h5>
						<p class="card-text"> Airport - Riviera Maya One away for up to 1-16 passengers </p>
						<h4>$95,00 USD</h4>
						<a href="https://cancunshuttleairport.com/#uno" class="btn btn-primary">Book</a>
					</div>
				
							</div>	
						</div>
					
					<div class="col-12 col-sm-6 col-md-3 mx-auto d-block mt-3">
					 <div class="card" style="width: 22rem;">
					  <img class="card-img-top" src="images/camioneta2.jpeg" alt="Card image cap">
					  <div class="card-body">
						<h5 class="card-title">Taxi airport - Tulum</h5>
						<p class="card-text"> Airport - Tulum one away for up to 1-6 passengers</p>
						<h4>$138,00 USD</h4>
						<a href="https://cancunshuttleairport.com/#uno" class="btn btn-primary">Book</a>
				 </div>
					</div>
			           </div>
			           
			           </div>
			
		
	         <!-- fin camionetas -->
		
		
		<!--Destinations -->

		<div class = "container-fluid mt-5 bg-light bg-gradient">
		    <h2>Cancun destinations</h2>
		    <div class = "row">
		    
		            <div class="col-md-3 col-md-offset-3 mb-3 mx-auto d-block">
		                
		             <div class="card" style="width: 20rem;">
                         <img src="images/islamujeres.jpeg" class="card-img-top" alt="Isla Mujeres Shuttle">
                         <div class="card-body">
                         <h5 class="card-title">Isla Mujeres Shuttle</h5>
                         <p class="card-text">Isla Mujeres is a Mexican island in the Caribbean Sea, 13 km off the coast of Cancun.</p>
                         
                         <a href="https://cancunshuttleairport.com/isla-mujeres-airport-transportation.php" class="btn btn-primary">Go</a>
                        </div>
                     </div>
                     
                    </div>
                    
                    <div class="col-md-3 col-md-offset-3 mb-3 mx-auto d-block">
		             <div class="card" style="width: 20rem;">
                         <img src="images/playa_del_carmen_med.jpg" class="card-img-top" width ="100" hight = "150"  alt="Playa del Carmen Shuttle">
                         <div class="card-body">
                         <h5 class="card-title">Playa del Carmen Shuttle</h5>
                         <p class="card-text">Playa del Carmen is a coastal resort in Mexico that is located along the Caribbean coast of the Riviera Maya, in the Yucatan Peninsula.</p>
                         <a href="https://cancunshuttleairport.com/playa-del-carmen-airport-transportation.php" class="btn btn-primary">Go</a>
                        </div>
                     </div>
                     
                    </div>
                    
                    <div class="col-md-3 col-md-offset-4 mb-3 mx-auto d-block">
		             <div class="card" style="width: 20rem;">
                         <img src="images/tulum-shuttle.jpg" class="card-img-top" alt="Tulum Shuttle">
                         <div class="card-body">
                         <h5 class="card-title">Tulum Shuttle</h5>
                         <p class="card-text">It is known for its well-preserved ruins of an ancient Mayan port. The main building is a large stone structure called El Castillo.</p>
                         <a href="https://cancunshuttleairport.com/shuttle-cancun-tulum.php" class="btn btn-primary">Go</a>
                        </div>
                     </div>
                     
                    </div>
                    
                    <div class="col-md-3 col-md-offset-4 mb-3 mx-auto d-block">
		             <div class="card" style="width: 20rem;">
                         <img src="images/hotel-airport-cancun.jpg" class="card-img-top" alt="cancun airport transportation">
                         <div class="card-body">
                         <h5 class="card-title">Cancun Airport Transportation</h5>
                         <p class="card-text">The Hotel Zone area encompasses several sub-districts and is home to all-inclusive resorts, international restaurants, and sandy beaches for relaxation.</p>
                         <a href="https://cancunshuttleairport.com/cancun-airport-transportation.php" class="btn btn-primary">Go</a>
                        </div>
                     </div>
                     
                    </div>
		        
		    </div>
		    

		    
		</div>
		     	 
	 
		
	         <!-- redes sociales -->
	            <div class="row mt-3">
	           <div class="col-sm-4">
	               
	               <h2> They recommend us </h2>
	
            	<div class="container-fluid">
            	    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/foto1.jpeg" class="d-block w-100" alt="cancun shuttle airport">
                </div>
                <div class="carousel-item">
                  <img src="images/canc1.jpg" class="d-block w-100" alt="cancun shuttle airport">
                </div>
                <div class="carousel-item">
                  <img src="images/canc2.jpg" class="d-block w-100" alt="cancun shuttle airport">
                </div>
                <div class="carousel-item">
                  <img src="images/canc3.jpg" class="d-block w-100" alt="cancun shuttle airport">
                </div>
                <div class="carousel-item">
                  <img src="images/canc4.jpg" class="d-block w-100" alt="cancun shuttle airport">
                </div>
                <div class="carousel-item">
                  <img src="images/canc5.jpg" class="d-block w-100" alt="cancun shuttle airport">
                </div>
                <div class="carousel-item">
                  <img src="images/canc6.jpg" class="d-block w-100" alt="cancun shuttle airport">
                </div>
                <div class="carousel-item">
                  <img src="images/canc7.jpg" class="d-block w-100" alt="cancun shuttle airport">
                </div>
                
                </div>
               
              </div>
               <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>  -->
            </div>
            	    
            	</div>
            
	               
	         
	           
	           <div class="col-sm-4">
	               <h2> What do our customers say </h2>
	
            	<div class="container-fluid">
            	    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12" aria-label="Slide 13"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="13" aria-label="Slide 14"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="14" aria-label="Slide 15"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="15" aria-label="Slide 16"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="16" aria-label="Slide 17"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="17" aria-label="Slide 18"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="18" aria-label="Slide 19"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="19" aria-label="Slide 20"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="20" aria-label="Slide 21"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="21" aria-label="Slide 22"></button>
               
                
              </div>
              
              
              
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/testimonio1.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio2.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio3.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio4.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio5.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio6.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio7.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio8.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio9.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio10.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio11.png" class="d-block w-100" alt="taxi aeropuerto cancun">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio12.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio13.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio14.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio15.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio16.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio17.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio18.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio19.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio20.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio21.png" class="d-block w-100" alt="playa del carmen shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio22.png" class="d-block w-100" alt="tulum shuttle">
                </div>
                <div class="carousel-item">
                  <img src="images/testimonio3.png" class="d-block w-100" alt="tulum shuttle">
                </div>
              </div>
               <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>  -->
            </div>
            	    
            	</div>
            	</div>
            	
            	<div class="col-md-4 col-md-offset-4 mb-3 mx-auto d-block">
            	    <h2>Our social networks</h2>
            	    <div class="fb-page" data-href="https://www.facebook.com/TransportationServiceinCancun/" data-tabs="timeline" data-width="440" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TransportationServiceinCancun/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TransportationServiceinCancun/">Cancun Transportation</a></blockquote></div>
			
            	    
            	</div>
	
	 </div>
	 
	 <!-- fin redes sociales -->

		
		
		
		
	
	</main>
	<!-- //Main -->
	
	
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
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/jquery.uniform.min.js"></script>
	
	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
	<script src="js/jquery.datetimepicker.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	
   
	
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
		  xmlhttp.open("GET","search-destination.php?q="+str,true);
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