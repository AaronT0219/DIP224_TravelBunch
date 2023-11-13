<?php
include ('config.php');
session_start();
$merc_id = $_SESSION['merc_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Travel Package</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="packages.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class = "container">
            <div class = "profile">
            <?php
            $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$merc_id'") or die('query failed');
            if(mysqli_num_rows($select) > 0){
                $fetch = mysqli_fetch_assoc($select);
            }
        ?>
            <h1>Create Travel Package</h1>
            <form method="post" action="process_package.php">
                <label for="destination">Destination:</label>
                <select name="destination">
                    <option value="Langkawi">Langkawi</option>
                    <option value="Ipoh">Ipoh</option>
                    <option value="Melaka">Melaka</option>
                    <option value="GeorgeTown">GeorgeTown</option>
                </select>
                <br>

                <label for="transportation">Transportation:</label>
                <select name="transportation">
                    <option value="Bus">Bus</option>
                    <option value="Plane">Plane</option>
                </select>
                <br>

                <label for="pax">Number of Persons (Pax):</label>
                <input type="number" name="pax" min="1">
                <br>

                <label for="price">Price:</label>
                <input type="number" name="price" step="10" min="10">
                <br>

                <label for="image">Location Image: </label><br>
                <input type="file" name="image" id="image" class="box" accept="image/jpg, image/jpeg, image/png">
                <br>

                <label for="description">Description: </label><br>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Descript Your Package...." maxlength="1000"></textarea>

                <button type="submit">Create Package</button>
                <a href="index.php" class="btn-link">Back</a>
            </form>
        </div>
    </div>
</body>
</html>
