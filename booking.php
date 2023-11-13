<?php
     $conn = mysqli_connect('localhost', 'root', '', 'booking') or die('Connection failed');
     $departure = $_POST["departure"];
     $destination = $_POST["destination"];
     $transport = $_POST["transportation"];  
     $num_people = $_POST["pax"];
     $arrival = $_POST["arrivingDate"];  
     $leave = $_POST["leavingDate"];         
 
  
     if ($conn->connect_error) {
         die('Connection Failed: ' . $conn->connect_error);
     } else {
         $stmt = $conn->prepare("INSERT INTO user_book (departure, destination, transportation, pax, arrivingDate, leavingDate) VALUES (?, ?, ?, ?, ?, ?)");  // corrected table name and column names
         $stmt->bind_param("ssssss", $departure, $destination, $transport, $num_people, $arrival, $leave);
         $stmt->execute();
         echo "Successfully booked";
         $stmt->close();
         $conn->close();
     }
?>
