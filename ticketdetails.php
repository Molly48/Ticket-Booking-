<?php
include 'atas.php';
?>

<!DOCTYPE html>
<html>
  

<head>
	<title>Ticket Booking System</title>
</head>

<style>        
	
	body {
        	background-image: url('https://wallpaperaccess.com/full/1239386.jpg');
             background-repeat: no-repeat;
             background-size: cover;
        }

		img {
			border: 3px solid black;
		}

		figcaption {
			font-size: 120%;
			text-align: center;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		.container > div {
			margin: 15px;
			text-align: center;
			flex-basis: calc(20% + 200px);
			display: flex;
			flex-direction: column;
			align-items: center;
			background-color: mediumpurple;
			border-radius: 25px;
		}
	</style>
</head>
</html>

<body>

	<div class="container">
		<div>
			<figure>
				<img src="https://images.t2u.io/upload/event/listing/0-29702-AWSS35e2d23d2-befa-4660-901d-5cda370f9d5f-Fziw.jpeg" alt="Konsert Patah Hati" width="350" height="300" >
				<figcaption>
					<b>Name : Konsert Patah Hati</b> </br>
					<b>Date : 15 March 2023</b> </br>
					<b>Time : 8:00 p.m.</b> </br>
					<b>Location : Zepp Kuala Lumpur</b> </br>
					<b>Price : RM170.00</b>
				</figcaption>
			</figure>
		</div> 

		<div>
			<figure>
				<img src="https://images.t2u.io/upload/event/listing/0-30195-AWSS3acd6175f-2c24-45c9-b113-88947af9a683-eNZl.jpg" alt="MPL Malaysia S11 Regular Season" width="350" height="300" >
				<figcaption>
					<b>Name : MPL Malaysia Season 11 Regular Season</b> </br>
					<b>Date : 10 March 2023</b> </br>
					<b>Time : 12:00 a.m.</b> </br>
					<b>Location : Stadium Juara, Bukit Kiara</b> </br>
					<b>Price : RM10.00</b>
				</figcaption>
			</figure>
		</div>

		<div>
			<figure>
				<img src="https://images.t2u.io/upload/event/listing/0-30729-AWSS33e8ec3d5-ba5c-4646-ad5a-7f2b9123b2a2-gFmW.jpg" alt="Festival Aku Muzik & Kamu" width="350" height="300">
				<figcaption>
					<b>Name : Festival Aku Muzik & Kamu</b> </br>
					<b>Date : 20 May 2023</b> </br>
					<b>Time : 2:00 p.m.</b> </br>
					<b>Location : Educity Sports Complex</b> </br>
					<b>Price : RM169.00</b>
				</figcaption>
			</figure>
		</div>
	</div>

	</body>


</center>
 </html>

 <?php
include 'footer.php';
?>


