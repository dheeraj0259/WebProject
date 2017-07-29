<?php
$to = 'pulamala@gmail.com';
 // prepare header
 
 $from = $_REQUEST['reservationEmail'];
 $name = $_REQUEST['reservationName'];
 $number = $_REQUEST['reservationPhone'];
 $address = $_REQUEST['reservationAddress'];
 $seats = $_REQUEST['numberofSeats'];
 $time = $_REQUEST['timepicker'];
 $date = $_REQUEST['datepicker'];
 $header = 'From: '. $_REQUEST['reservationEmail'] . "\r\n";
 $header .= 'X-Mailer: PHP/' . phpversion();
 $message = "From: " . $name . "\r\n ";
 $message .= "Email id: " . $from . "\r\n ";
 $message .= "Number:" . $number . "\r\n ";
  $message .= "Address:" .  $address . "\r\n ";
   $message .= "Number of seats :" . $seats . "\r\n ";
     $message .= "Time :" . $time . "\r\n ";
	   $message .= "Date :" . $date . "\r\n ";
 // Send contact information
   $mail = mail( $to, "Reservation request", $message, $header );
 header("Location: reservation.php?reserve=true");  
?>