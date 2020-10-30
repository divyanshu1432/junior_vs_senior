<!DOCTYPE html>
<html>
<head>
	<title> junior vs senior  </title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1.0">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 

<link rel="stylesheet" type="text/css" href="main.css">


</head>
<body>

<!-- HEADER STARTED HERE --> 

<header class="text-center" style="background-color: #34495e; width: 100vw; height: 20vh;"> <h1 class="text-light text-capitalize d-flex" style=" font-weight: bolder;"> 🏏 JUNIOR vs SENIOR 🏏 </h1> <h5 class="text-danger "> 15/11/2020 (sunday) </h5> </header>

<!-- important buttons --> 


<div class="important_buttons container-fluid" style="height: 5vh;">
<button class="btn btn-sm btn-warning ">live score</button>
<button class="btn btn-sm btn-warning "> scorecard </button>
<button class="btn btn-sm btn-warning "> last year photos </button>


</div>





<!-- HEADER STARTED FINISHED HERE -->

<section class="" style="width: 100vw; height:75vh; background-color: #4cd137; display: flex;"> 



<div class="main d-flex justify-content-center align-items-center"> 
	<div class="center mt-5"  style=" width: 90vw; background-color: transparent; border: 2px solid #fff; border-radius: 100%;">


<div class="main_content d-flex justify-content-between"> 

<div class="junior">
	 <img style=" width: 300px; height: 300px; border:none; border-radius: 50%; object-fit: cover;" src="https://scontent.flko3-1.fna.fbcdn.net/v/t1.0-9/121324665_4675606845844177_4358168380437805108_o.jpg?_nc_cat=109&ccb=2&_nc_sid=84a396&_nc_ohc=D5ekxjtf3eMAX_BirK2&_nc_ht=scontent.flko3-1.fna&oh=023c59f845830b4c559c281aca1ea12b&oe=5FC0337B"> 

	 	 <h3 class="text-center bg-light"> Arpit</h3> </div>



 <div class="vs text-center mt-5">
<h1 class="" style="font-size: 100px; animation: vs 1s linear infinite;"> VS </h1>
<h4 class="mt-4"> 15-11-2020 (sunday)  </h4> </div>





<div class="senior">

	 <img style=" width: 300px; height: 300px; border:none; border-radius: 50%; object-fit: cover;" src="https://scontent.flko3-1.fna.fbcdn.net/v/t1.0-9/120522960_842078329932140_8758442980358218881_o.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_ohc=q2GTApRoC_4AX_gKLUs&_nc_ht=scontent.flko3-1.fna&oh=f74c2cebf5f19cc78090858a51d390cb&oe=5FC0F0A1">
	 <h3 class="text-center border-dark bg-light"> Shivam </h3> </div>
 


   </div>

<div class="for_medium d-lg-none d-xl-none">
<h5 class="text-center mt-5"> 15-11-2020(sunday) </h5>
</div>




		<div class="mt-5 text-center" style="animation: remain 1s linear infinite;">
	<h4>
		<?php
	$time = date_default_timezone_set("asia/kolkata");
	#echo date("h:i:s");
$current = date("Y-m-d");

$date1=date_create($current.date("h:i:s"));
$date2=date_create("2020-11-15". "10:00 AM");
$diff=date_diff($date1,$date2);



echo  "wait till". "  " . "" . "". "".$diff-> d."". "". ""."days". "  " . "" . "". "" .$diff-> h. "". "". "". "hours" . "  " . "" . "". "".$diff->m."minutes". "  " . "" . "". "" .$diff-> s. "". "". ""."seconds";

 ?> </h4>
</div>








	</div>











 </div>


















</section>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

