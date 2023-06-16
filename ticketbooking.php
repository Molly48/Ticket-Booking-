<?php
include 'atas.php';
?>

<!DOCTYPE html>
<html>

<style>

	body {
        	background-image: url('https://images-ext-2.discordapp.net/external/YSvHTainhEFl4Em_2rZ48tkEdX4oJtuE53vJfV7nBUc/https/wallpaperaccess.com/full/1239386.jpg?width=936&height=585');
             background-repeat: no-repeat;
             background-size: cover;
        }

		.booking-container {

	       background-color: white;
            border: 5px solid black;
            padding: 25px;
            margin: 20px;
            width: 80%;
            max-width: 900px;
            margin: 0 auto;
            background-color: plum;

            }

        .information-container {
	        background-color: white;
            border: 5px solid black;
            padding: 25px;
            margin: 20px;
            width: 50%;
            max-width: 400px;
            margin: 0 auto;
            background-color: plum;
            border-radius: 25px;
        }

        .reservation-container {
	        background-color: white;
            border: 5px solid black;
            padding: 25px;
            margin: 20px;
            width: 50%;
            max-width: 400px;
            margin: 0 auto;
            background-color: plum;
            border-radius: 25px;
        }

        .error {
            color: red;
            font-weight: bold;
        }

	</style>

	<br>
	<br>

	<form method="post">

  <div class="booking-container">

    <fieldset>

        <legend><b>Enter your information below :</b></legend>

    <p><b>First Name:</b> <input type="text" name="fname" size="20" maxlength="40" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>" /></p>

    <p><b>Last Name:</b> <input type="text" name="lname" size="20" maxlength="40" value="<?php if (isset($_POST['lname'])) echo $_POST['lname']; ?>" /></p>

    <p><b>Phone:</b> <input type="text" name="phone" size="20" maxlength="11" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" /></p>

    <p><b>Email Address:</b> <input type="text" name="email" size="40" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></p>

    </fieldset>

    <br>
    <br>

    <fieldset>
    <legend><b>Select your event below :</b></legend>

    <br>

    <label for="event"><b>Select event:</b></label>

    <select id="event" name="event">

      <option value="Konsert Patah Hati">Konsert Patah Hati, 15 March, 8:00p.m., Zepp Kuala Lumpur, RM170.00</option>

      <option value="MPL Malaysia Season 11 Regular Season">MPL Malaysia Season 11 Regular Season, 10 March, 12:00 a.m., Stadium Juara, Bukit Kiara, RM10.00</option>

      <option value="Festival Aku Muzik & Kamu">Festival Aku Muzik & Kamu, 20 May, 2:00p.m., Educity Sports Complex, RM169.00</option>

    </select>

    <br>
    <br>

    <label for="tickets"><b>Number of tickets:</b></label>

    <input type="number" id="tickets" name="tickets" min="1" max="10">

    <br>

  </fieldset>

  <br>
  <br>

  <center>
    <input type="submit" name="submit" value="RESERVE TICKET">
  </center>

  </div>

  <br>
  <br>

</form>

<br>
<br>

	<div class="information-container">

		<?php

        $errors = array();
        $fname = '';
        $lname = '';
        $phone = '';
        $email = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!isset($_POST['fname']) || empty($_POST['fname'])) {
    $errors[] = 'You forgot to enter your first name!';
  } else {
    $fname = $_POST['fname'];
  }

  if (!isset($_POST['lname']) || empty($_POST['lname'])) {
    $errors[] = 'You forgot to enter your last name!';
  } else {
    $lname = $_POST['lname'];
  }

  if (!isset($_POST['phone']) || empty($_POST['phone'])) {
    $errors[] = 'You forgot to enter your phone number!';
  } else {
    $phone = $_POST['phone'];
    if (strlen($phone) > 11) {
      $errors[] = 'Your phone number must not exceed 11 characters long';
    }
  }

  if (!isset($_POST['email']) || empty($_POST['email'])) {
    $errors[] = 'You forgot to enter your email address!';
  } else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Invalid email address format!';
    }
  }

  if (empty($errors)) {
    echo "<b> First Name : </b> $fname <br />";
    echo "<b> Last Name : </b> $lname <br />";
    echo "<b> Phone No : </b> $phone <br />";
    echo "<b> Email Address: </b> $email <br />";
  } else {
    echo '<p><b>There were some errors with your input:</b></p>';
    echo '<ul>';
    foreach ($errors as $error) {
      echo "<li><span class='error'>$error</span></li>";
    }
    echo '</ul>';
  }
}
?>

	</div>

	<br>
	<br>

	<div class="reservation-container">

	<?php

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$event = $_POST["event"];

			$tickets = $_POST["tickets"];

			if ($event == "Konsert Patah Hati") {
				$event_name = "Konsert Patah Hati";
				$event_date = "15 March 2023";
				$event_time = "8:00 PM";
				$event_location = "Zepp Kuala Lumpur";
				$event_price = "170";

			} elseif ($event == "MPL Malaysia Season 11 Regular Season") {
				$event_name = "MPL Malaysia Season 11 Regular Season";
				$event_date = "10 March 2023";
				$event_time = "12:00 AM";
				$event_location = "Stadium Juara, Bukit Kiara";
				$event_price = "10";

			} elseif ($event == "Festival Aku Muzik & Kamu") {
				$event_name = "Festival Aku Muzik & Kamu";
				$event_date = "20 May 2023";
				$event_time = "2:00 PM";
				$event_location = "Educity Sports Complex";
				$event_price = "169";
			}


            function calculateTotalPrice($tickets, $event_price) {

                $total_price = intval($tickets) * intval($event_price);

                return $total_price;

            }

            $total_price = calculateTotalPrice($tickets, $event_price); 

			echo "<p><b>Event: </b>$event_name</p>";
			echo "<p><b>Date: </b>$event_date</p>";
			echo "<p><b>Time: </b>$event_time</p>";
			echo "<p><b>Location: </b>$event_location</p>";
			echo "<p><b>Number of tickets: </b>$tickets</p>";
			echo "<p><b>Total price: </b>RM$total_price</p>";
		}
?>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<br>
<br>

<?php
include 'footer.php';
?>



