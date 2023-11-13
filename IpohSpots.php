<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, ($_POST['password']));
 
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');
 
    if(mysqli_num_rows($select) > 0){
       $row = mysqli_fetch_assoc($select);
       $_SESSION['user_id'] = $row['id'];
       header('location:profile.php');
    }else{
       $message[] = 'incorrect email or password!';
    }
 
 }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome To TravelBunch</title>
        <link rel="stylesheet" href="Ipoh/Ipoh_styles.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>

    <body>
    
        <header>
            <div id="menu-bar" class="fas fa-bars"></div>
            <a href="index.php" class="logo"><span>T</span>ravelbunch</a>

            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="what_to_do.php">What To Do</a>
                <a href="about_contact.php">About Us</a>
            </nav>

            <div class="icons">
                <i class="fas fa-search" id="search-btn"></i>
                <i class="fas fa-user" id="login-btn"></i>
            </div>

            <div class="search-bar-container">
                <div class="search-box"> 
                    <input type="search" id="search-bar" placeholder="Search Here...">
                    <label for="search-bar" class="fas fa-search" id="search-icon"></label>
                </div>
                <div class="result-box-container">
                    <div class="result-box"></div>
                </div>
            </div>
        </header>
    
    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

            <form action="" method="post" enctype="multipart/form-data">
                <h3>login now</h3>
                <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<div class="message">'.$message.'</div>';
                    }
                }
                ?>
                <input type="email" name="email" placeholder="enter email" class="box" required>
                <input type="password" name="password" placeholder="enter password" class="box" required>
                <input type="submit" name="submit" value="login now" class="btn">
                <p>Don't have an account? <a href="register.php">Register Now</a></p>
                <p>Merchant? <a href="merc_reg.php">Click Here</a></p>
            </form>

    </div>

        
            <nav class="navbar2">
                <div class="nav-buttons">
                <button onclick="scrollToSection('sec1')">Summary</button>
                <button onclick="scrollToSection('destination')">Tourist Spots</button>
                <button onclick="scrollToSection('activities')">Activities</button>
                <button onclick="scrollToSection('packages')">Travel Packages</button>
                </div>
            </nav>
    
            <div class="parallax"></div>
    
            <div class="image-text">Ipoh, Perak</div>
    
    
            <div id="sec1">
                <div class="title2">
                    <br>
                    <br>
                    <h2><b>Origins</b></h2>
                    <br>
                </div>
    
                <div class="summary-text">
                    <p>
                         Ipoh is located was originally a village that's inhabited by the Orang Asli indigenous people. The modern development of Ipoh began when tin ore was discovered in the Kinta Valley in 1880. Ipoh was soon declared as a city in 1988. 
                    </p>
                    <br>
                    <p>
                        Located in the state of Perak in Peninsular Malaysia. It is situated in the Kinta Valley and is approximately 180 kilometers north of Kuala Lumpur, the capital of Malaysia. </p>
                </div>
    
            </div>
    
            <br>
            <br>
            <br>
            <br>
    
            <section class="destination" id="destination">
                <div class="title2">
                    <br>
                    <br>
                    <h2><b>Tourist Destinations</b></h2>
                    <br>   
                </div>
    
                <div class="box-container">
    
                    <div class="box">
                        <div class="image">
                            <img src="Ipoh/KC.jpg" alt ="">
                        </div>
                
                        <div class="content">
                            <h3 style="font-size:2rem; color:black;">Kellie's Castle</h3>
                            <BR>
                            <P> A partially completed mansion built in the early 20th century, Kellie's Castle is a fascinating architectural wonder surrounded by beautiful gardens.</P>
                            <BR>
                            <a href="#">Read More<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
    
                    <div class="box">
                        <div class="image">
                            <img src="Ipoh/LWOT.jpg" alt ="">
                        </div>
                
                        <div class="content">
                            <h3 style="font-size:2rem; color:black;">Lost World of Tambun</h3>
                            <BR>
                            <P>A water park in Kinta, Perak, is a popular tourist attraction. This theme park offers a range of attractions, including water slides,
                                 a petting zoo, hot springs, and a tiger valley. </P>
                            <BR>
                            <a href="#">Read More<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
    
                    <div class="box">
                        <div class="image">
                            <img src="Ipoh/SPT.jpg" alt ="">
                        </div>
                
                        <div class="content">
                            <h3 style="font-size:2rem; color:black;">Sam Poh Tong Temple</h3>
                            <BR>
                            <P>The oldest and the main cave temple in Ipoh, Perak, Malaysia.
                                 The temple was built in a raw limestone cave in the mountains located about 5 km from the city centre.</P>
                            <BR>
                            <a href="#">Read More<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
    
                </div>
            </section>
    
            <br>
            <br>
            <br>
            <br>
    
            <section class="activities" id="activities">
                <div class="title2">
                    <br>
                    <br>
                    <h2><b>Things To Do In Ipoh</b></h2>
                    <br>   
                </div>
    
                <div class="act-box-container">
    
                    <div class="act-box">
                        <div class="act-image">
                            <img src="Ipoh/QXLIpoh.jpg" alt ="">
                        </div>
                
                        <div class="act-content">
                            <h3 style="font-size:2rem; color:black;">Leisure Vacations</h3>
                            <BR>
                            <p> Explore the stunning recreational park that features a cultural village.  </p>
                            <BR>
                            <a href="#">Read More<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
    
                    <div class="act-box">
                        <div class="act-image">
                            <img src="Ipoh/GuaTempurung.jpg" alt ="">
                        </div>
                
                        <div class="act-content">
                            <h3 style="font-size:2rem; color:black;">Go spelunking</h3>
                            <BR>
                            <P> As you explore the cave make sure to look out for the underground streams and waterfalls and the huge natural domes in the roof of the cave. </P>
                            <BR>
                            <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
    
                    <div class="act-box">
                        <div class="act-image">
                            <img src="Ipoh/riverRaft.jpg" alt ="">
                        </div>
                
                        <div class="act-content">
                            <h3 style="font-size:2rem; color:black;">Adrenaline Rush: Rafting</h3>
                            <BR>
                            <P> Get up close and personal with nature, experience an exotic and mystifying rainforest where the fastest butterflies swarm by the riverbank.</P>
                            <BR>
                            <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
    
                </div>
            </section>
    
            <br>
            <br>
            <br>
            <br>
    
            <section class="packages" id="packages">
    
                <div class="title2">
                    <br>
                    <br>
                    <h2><b>Travel Packages</b></h2>
                    <br>   
                </div>
    
                <div class="package-container">
    
                    <div class="p-box">
                        <div class="p-image">
                            <img src="Ipoh/CavePackage.jpg" alt="">
                        </div>
                        <div class="p-content">
                            <h3>Ipoh Full-Day City Tour</h3>
                            <p> Embark on a captivating journey through renowned heritage and 
                                vibrant culture, exploring iconic landmarks and immersing in local traditions. </p>
                            <a href="https://www.expedia.com.my/things-to-do/ipoh-full-day-city-tour-from-kuala-lumpur.a949214.activity-details?endDate=2023-07-23&location=Ipoh%2C%20Perak%2C%20Malaysia&rid=1618&sort=RECOMMENDED&startDate=2023-07-09&swp=on" class="p-btn">Book Now</a>
                        </div>
                    </div>
    
                    <div class="p-box">
                        <div class="p-image">
                            <img src="Ipoh/abseiling.jpg" alt="">
                        </div>
                        <div class="p-content">
                            <h3>Waterfall Abseiling Adventure</h3>
                            <p>This is an activity that we can guarantee will be both challenging and exciting! 
                                Head to Perak and enjoy a safety briefing before stepping into your gear</p>
                            <a href="https://www.expedia.com.my/things-to-do/waterfall-abseiling-adventure-at-gopeng-from-kl.a1271107.activity-details?endDate=2023-07-23&location=Ipoh%2C%20Perak%2C%20Malaysia&rid=1618&sort=RECOMMENDED&startDate=2023-07-09&swp=on" class="p-btn">Book Now</a>
                        </div>
                    </div>
                    
                    <div class="p-box">
                        <div class="p-image">
                            <img src="Ipoh/kanduCave.jpg" alt="">
                        </div>
                        <div class="p-content">
                            <h3>Discover Perak Kandu Cave</h3>
                            <p> Kandu Cave is not just an ordinary cave; in fact this wondrous cave is full with its own history. 
                                Head to Perak and enjoy a safety briefing before stepping into your gear.</p>
                            <a href="https://www.expedia.com.my/things-to-do/discover-perak-kandu-cave-from-kl.a1271110.activity-details?&rid=1618&location=Ipoh%2C+Perak%2C+Malaysia&startDate=2023-07-09&endDate=2023-07-23&sort=RECOMMENDED&swp=on" class="p-btn">Book Now</a>
                        </div>
                    </div>
    
                </div>
            </section>

            <br><br><br>

                    
    <!-- footer section start-->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p> Founded in 2012, TravelBunch has been in operation for several years. We are a non-profit organization with the goal of promoting Tourism in Malaysia. Over the years, TravelBunch has earned a strong reputation for assisting new tourists exploring Malaysia, discovering the true beauty of Malaysia.</p>
            </div>

            <div class="box">
                <h3>home links</h3>
                <a href="index.php">Home Page</a>
                <a href="what_to_do.php">What To Do</a>
                <a href="about_contact.php">About Us</a> 
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a> 
            </div>

            <h2 class="credit">
            created by <span> TravelBunch </span> | All Rights Reserved 
            </h2>

        </div>


    </section>

<!-- footer section ends -->

        <script>
            function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
}

let searchBtn = document.querySelector('#search-btn')
let searchBar = document.querySelector('.search-bar-container')

let formBtn = document.querySelector('#login-btn')
let loginForm = document.querySelector('.login-form-container')
let formClose = document.querySelector('#form-close')

let menu = document.querySelector('#menu-bar')
let navbar = document.querySelector('.navbar')

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
})

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
})

formBtn.addEventListener('click', () =>{      //Add Form
    loginForm.classList.add('active');
})

formClose.addEventListener('click', () =>{    //Remove Form
    loginForm.classList.remove('active');
})

//Destinations Search Start Here

let destinations = ["Langkawi", "Ipoh", "Malacca", "Georgetown"]

const resultBox = document.querySelector(".result-box")
const searchInput = document.getElementById("search-bar")
const resultBoxContainer = document.querySelector(".result-box-container")
const searchIcon = document.getElementById("search-icon")

searchInput.onkeyup = function() {
    let result = []
    let value = searchInput.value.toLowerCase()
    if (value.length) {
        resultBoxContainer.style.display = "block"

        result = destinations.filter(keyword => {
            return keyword.toLowerCase().includes(value)
        })
    }
    display(result)

    if (!value.length || !result.length) {
        resultBoxContainer.style.display = "none"
    }
}

function display(result) {
    const content = result.map(list => {
        return "<li onclick=inputSelect(this)>" + list + "</li>"
    })

    resultBox.innerHTML = "<ul>" + content.join("") + "</ul>"
}

function inputSelect(list) {
    selectedInput = searchInput.value = list.innerHTML
    resultBoxContainer.style.display = "none"
}

searchIcon.addEventListener('click', () => {
    identifyDestinations()
})

searchInput.addEventListener("keydown", e => {
    if (e.key === "Enter") {
        identifyDestinations()
    }
})

function identifyDestinations() {
    let searchLocation = searchInput.value.toLowerCase()

    if (searchLocation === "langkawi") {
        window.location.href = "Langkawi.php"
    } else if (searchLocation === "malacca") {
        window.location.href = "Malacca.php"
    } else if (searchLocation === "georgetown") {
        window.location.href = "base.php"
    } else if (searchLocation === "ipoh") {
        window.location.href = "IpohSpots.php"
    }
}

//Destinations Search End Here

<?php
            if (isset($_SESSION['user_id'])) {
                $id = $_SESSION['user_id'];
                echo"
                formBtn.addEventListener('click', () =>{      //Add Form
                    window.location.href = 'profile.php'
                })
                ";
                
                
            } else {
                echo"
                formBtn.addEventListener('click', () =>{      //Add Form
                    loginForm.classList.add('active');
                })
        
                formClose.addEventListener('click', () =>{    //Remove Form
                        loginForm.classList.remove('active');
                    })
                ";
            }
?>
        </script>
    </body>
</html>