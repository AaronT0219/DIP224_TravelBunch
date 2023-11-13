<?php

include 'config.php';
session_start();
$merc_id = $_SESSION['merc_id'];

if(!isset($merc_id)){
   header('location:index.php');
};

if(isset($_GET['logout'])){
   unset($merc_id);
   session_destroy();
   header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style2.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `merc_form` WHERE id = '$merc_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">Update profile</a>
      <a href="profile.php?logout=<?php echo $merc_id; ?>" class="delete-btn">Logout</a>
      <a href="index.php" class="btn2">Back</a>
      <a href="merc_act.php" class="btn2">Activities</a>
      <p>new <a href="index.php">login</a> or <a href="register.php">register</a></p>
   </div>

</div>

</body>
</html>