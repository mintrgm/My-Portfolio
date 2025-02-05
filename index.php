<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "artgallery";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Connection fail");
} 

if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $message= $_POST["message"];

    $sql="insert into contactme(name,email,message) values('$name','$email','$message')";
    $result = mysqli_query($conn, $sql);
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mint's Art Gallery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/styles.css">
    
    <script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>
    <script type="importmap">
      {
        "imports": {
          "three": "https://unpkg.com/three@v0.163.0/build/three.module.js",
          "three/addons/": "https://unpkg.com/three@v0.163.0/examples/jsm/"
        }
      }
    </script>
</head>

<body>
    <section id="header" class="fade-in">
        <video autoplay loop muted playsinline src="video/your_name.mp4" class="vid"></video>
        <nav>
            <a href="#"><img src="img/logo.png" alt="Logo"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="#header">HOME</a></li>
                    <li><a href="#gallery">GALLERY</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </nav>

        <div class="text-box">
            <h1>Welcome to Mint's Art Gallery</h1>
            <p>proudly showcasing the things I’ve overthought, redone, and finally declared ‘done’… at 3 a.m.</p>
            <a href = "#gallery" class="hero-btn">Visit Mint's Art Gallery</a>
        </div>
    </section>


    <section id="gallery" class="fade-in">
        <video class="vid" autoplay loop playsinline>
        <source src="video/galleryy.mp4" type="video/mp4">
        </video>    
    </section>

    <section id="about" class="fade-in">
        <div class="containers">
            <div class="left-side">
                <h1>四宮 かぐや</h1>
                <h3>Manita Thapa</h3>
                <div class="mint-box">
                    <h1 contenteditable="true">MINT</h1>
                </div>
                <div class="typewriter">
                    <h2>I'm a <span class="auto-type"></span></h2>
                </div>
                <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                <script>
                    var typed = new Typed(".auto-type", {
                        strings: ["Graphics Designer", "3D Artist", "Digital Artist", "UI/UX Designer", "Front-end Developer", "Video Editor"],
                        typeSpeed: 25,
                        backSpeed: 25,
                        loop: true
                    })
                </script>
            </div>
            <div class="content1">
                <div class="image-container">
                    <img src="img/me.jpg" alt="Mint">
                </div>
            </div>
            <div class="right-side">
                <div class="about-box">
                    <h3>ABOUT</h3>
                    <p>Hi, I’m Mint – your go-to for 3D magic and motion graphics. When I'm not creating digital wonders or gaming, I'm perfecting my nap game. Anime and movies are my jam, and my workspace is my happy place. Let’s make something awesome together!</p>
                </div>
                <div class="vertical-dots">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                    <div class="slider-wrapper">
                            <img src="img/1.jpg" alt="dhapdamtree" />
                    <a href="#" class="view-btn" onclick="showPopup(event)">View</a>
                    </div>       
            </div>
        </div>
        <div class="popup" id="popup" onclick="hidePopup(event)">
            <div class="popup-content" onclick="event.stopPropagation()">
                <div class="popup-slider">
                    <div class="slide">
                        <img id="popup-slide-1" src="img/1.jpg" alt="dhapdamtree" />
                        <p class="description"><b>23.03.2023 - Hike to Dhapdam</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-2" src="img/2.jpg" alt="roadtrip" />
                        <p class="description"><b>14.06.2024 - Roadtrip to Jhapa</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-3" src="img/3.jpg" alt="tiharlights" />
                        <p class="description"><b>27.10.2024 - Tihar lights at Mamaghar</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-4" src="img/4.jpg" alt="sunsetclouds" />
                        <p class="description"><b>29.09.2024 - Sunset clouds looked like an explosion</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-5" src="img/5.jpg" alt="dharantree" />
                        <p class="description"><b>11.03.2024 - Budhasubba temple visit</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-6" src="img/6.jpg" alt="dharantree" />
                        <p class="description"><b>01.10.2022 - Hike to Champadevi</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-7" src="img/7.jpg" alt="dharantree" />
                        <p class="description"><b>12.06.2024 - Exploring Ghopacamp</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-8" src="img/8.jpg" alt="dharantree" />
                        <p class="description"><b>13.09.2019 - Full moon shot from my small camera</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-9" src="img/9.jpg" alt="dharantree" />
                        <p class="description"><b>10.06.2024 - Sakela dance at Bhedetar</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-10" src="img/10.jpg" alt="dharantree" />
                        <p class="description"><b>31.10.2023 - Visit to Golden temple</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-11" src="img/11.jpg" alt="dharantree" />
                        <p class="description"><b>15.06.2024 - Returning from Ilam</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-12" src="img/12.jpg" alt="dharantree" />
                        <p class="description"><b>14.09.2020 - Morning Walk to Bhootkhel</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-13" src="img/13.jpg" alt="dharantree" />
                        <p class="description"><b>12.10.2024 - Didn't know my android had this power</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-13" src="img/sunset.jpg" alt="dharantree" />
                        <p class="description"><b>14.10.2024 - I found my new hobby-riding</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-13" src="img/diyo.jpg" alt="dharantree" />
                        <p class="description"><b>28.03.2023 - Swyambhu with Dino</b></p>
                    </div>
                    <div class="slide">
                        <img id="popup-slide-13" src="img/comiccafe.jpg" alt="dharantree" />
                        <p class="description"><b>18.12.2021 - Comic cafe with Janu</b></p>
                    </div>
                </div>
                <div class="popup-slider-nav">
                    <a class="prev" onclick="prevSlide(event)"><b>&lt;</b></a>
                    <a class="next" onclick="nextSlide(event)"><b>&gt;</b></a>
                </div>
            </div>
        </div>
    
        <script>
            let currentSlideIndex = 0;
    
            function showPopup(event) {
                event.preventDefault();
                document.getElementById('popup').classList.add('show');
                showSlide(currentSlideIndex);
            }
    
            function hidePopup(event) {
                event.preventDefault();
                document.getElementById('popup').classList.remove('show');
            }
    
            function showSlide(index) {
                const slides = document.querySelectorAll('.popup-slider .slide');
                if (index >= slides.length) {
                    currentSlideIndex = 0;
                } else if (index < 0) {
                    currentSlideIndex = slides.length - 1;
                } else {
                    currentSlideIndex = index;
                }
                slides.forEach((slide, i) => {
                    slide.style.display = i === currentSlideIndex ? 'block' : 'none';
                });
            }
    
            function prevSlide(event) {
                event.preventDefault();
                showSlide(currentSlideIndex - 1);
            }
    
            function nextSlide(event) {
                event.preventDefault();
                showSlide(currentSlideIndex + 1);
            }
    
            showSlide(currentSlideIndex);
            document.addEventListener('keydown', function(event) {
                if (event.key === 'ArrowLeft') {
                    prevSlide(event);
                } else if (event.key === 'ArrowRight') {
                    nextSlide(event);
                }
            });
        </script>
    </section>

    <section id="services" class="fade-in">
        <video autoplay loop muted playsinline src="video/restro.mp4" class="vid"></video>
        <div class="container0">
            <h1>My Services</h1>
            <p>Skillz to Pay the Billz</p>
            <div class="process-grid">
                <!-- Videos Box -->
                <div class="process-item" id="videos-box">
                    <lottie-player 
                        src="animated-icons/videos.json" 
                        background="transparent" 
                        speed="1" 
                        style="width: 80px; height: 80px; margin-bottom: 20px;" 
                        loop autoplay>
                    </lottie-player>
                    <h3>Videos</h3>
                    <p>I turn random footage into ‘Wow, did you actually make this?</p>
                </div>
        
                <!-- Projects Box -->
                <div class="process-item" id="projects-box">
                    <lottie-player 
                        src="animated-icons/projects.json" 
                        background="transparent" 
                        speed="1" 
                        style="width: 80px; height: 80px; margin-bottom: 20px;" 
                        loop autoplay>
                    </lottie-player>
                    <h3>Projects</h3>
                    <p>A collection of tasks I managed to finish before procrastination took over.</p>
                </div>
        
                <!-- Designs Box -->
                <div class="process-item" id="designs-box">
                    <lottie-player 
                        src="animated-icons/designs.json" 
                        background="transparent" 
                        speed="1" 
                        style="width: 80px; height: 80px; margin-bottom: 20px;" 
                        loop autoplay>
                    </lottie-player>
                    <h3>Designs</h3>
                    <p>Turning ‘meh’ ideas into jaw-dropping visuals since forever. You’re welcome.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal for Videos -->
<div id="videos-modal" class="popup-hidden">
    <div class="pop-up">
        <span class="close-button" data-modal="videos-modal">&times;</span>
        <div class="media-grid">
            <video controls class="media-video">
                <source src="video/dharan.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/kokushibo.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/my_quiet_world.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/rps.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/noisy_world.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/mixed.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/loved.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/markhu.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/gorkha.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/gorkha2.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/swyambhu.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/bhundole.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/fungfung.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/funland.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/yasuragi.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/seagull.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/pupupu.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/temples.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/pathivara.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/indrajatra.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/catcafe.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/ganesh.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/bfa.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/black_friday.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/jgm3.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/cthd.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/gbp.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/gr1.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/gr2.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/gbp2.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/eps.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/liberty.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/blues.mp4" type="video/mp4">
            </video> 
            <video controls class="media-video">
                <source src="video/jg2.mp4" type="video/mp4">
            </video> 
        </div>
    </div>
</div>

<!-- Modal for Projects -->
<div id="projects-modal" class="popup-hidden">
    <div class="pop-up">
        <span class="close-button" data-modal="projects-modal">&times;</span>
        <div class = "media-grid">
            <img src="img/100.jpg" alt="Design 1" width="100%">
            <img src="img/99.png" alt="Design 2" width="100%">
            <img src="img/98.jpg" alt="Design 3" width="100%">
            <img src="img/97.jpg" alt="Design 4" width="100%">
            <img src="img/96.jpg" alt="Design 5" width="100%">
            <img src="img/95.jpg" alt="Design 6" width="100%">
            <img src="img/94.jpg" alt="Design 7" width="100%">
            <img src="img/93.jpg" alt="Design 8" width="100%">
            <img src="img/92.jpg" alt="Design 9" width="100%">
            <img src="img/91.jpg" alt="Design 10" width="100%">
            <img src="img/90.jpg" alt="Design 11" width="100%">
            <img src="img/89.jpg" alt="Design 12" width="100%">
        </div>
    </div>
</div>

<!-- Modal for Designs -->
<div id="designs-modal" class="popup-hidden">
    <div class="pop-up">
        <span class="close-button" data-modal="designs-modal">&times;</span>
        <div class = "media-grid">
            <img src="img/p1.png" alt="Design 1" width="100%">
            <video controls class="media-video">
                <source src="video/p2.mp4" type="video/mp4">
            </video>
            <video controls class="media-video">
                <source src="video/p3.mp4" type="video/mp4">
            </video>
            <img src="img/p4.jpg" alt="Design 4" width="100%">
            <img src="img/p5.jpg" alt="Design 5" width="100%">
            <img src="img/p6.jpg" alt="Design 6" width="100%">
            <img src="img/p7.jpg" alt="Design 7" width="100%">
            <img src="img/p8.jpg" alt="Design 8" width="100%">
            <img src="img/p9.jpg" alt="Design 9" width="100%">
            <img src="img/p10.jpg" alt="Design 10" width="100%">
            <img src="img/p11.jpg" alt="Design 11" width="100%">
            <img src="img/p12.jpg" alt="Design 12" width="100%">
        </div>
    </div>
</div>

    

    <section id="contact" class="fade-in">
        <div class="content">
            <h1>Contact Me</h1>
            <p>Reach out, or my website will start talking to itself!</p>
        </div>
    <div class = "container">
        <div class = "contactInfo">
            <div class="box">
                <div class = "icons"><i class="fa fa-map-marker"></i></div>
                <div class="text">
                  <h3>Address</h3>
                  <p>4460 Kathmandu, <br>Manamaiju, Indreni Pul</p>
                </div>
            </div>
            <div class="box">
                <div class = "icons"><i class="fa fa-phone"></i></div>
                <div class="text">
                  <h3>Phone</h3>
                  <p>9813674165</p>
                </div>
            </div>
            <div class="box">
                <div class = "icons"><i class="fa fa-envelope"></i></div>
                <div class="text">
                  <h3>Email</h3>
                  <p>manitathapa.mgr7@gmail.com</p>
                </div>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/mintrgm07" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/_minto.draws_" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://x.com/Mint_Rgm" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/in/manita-thapa-90376718b/" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://github.com/mintrgm" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-github"></i>
                </a>
                <a href="https://www.youtube.com/@mint-rgm" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-youtube"></i>
                </a>
                <a href="https://www.pinterest.com/mint0desu/" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-pinterest"></i>
                </a>
<style>
                /* Social Icons Styling */
.contactInfo .social-icons a {
    color: #fff; /* Default icon color */
    font-size: 40px; /* Icon size */
    margin-right: 50px; /* Space between icons */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Ensure inline-block for hover effects */
    transition: color 0.3s ease, transform 0.3s ease; /* Smooth transitions */
    animation: pop 0.5s ease-in-out; /* Animation on load */
}

.contactInfo .social-icons a:hover {
    color: #00bcd4; /* Change icon color on hover */
    transform: scale(2); /* Slight zoom effect */
}

/* Animation for icons when the page loads */
@keyframes pop {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    60% {
        transform: scale(1.3);
        opacity: 1;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

/* Responsive adjustments for smaller devices */
@media (max-width: 768px) {
    .contactInfo .social-icons a {
        font-size: 30px; /* Smaller size for mobile */
        margin-right: 20px; /* Adjust margin */
    }
}
</style>

            </div>
        </div>
            <div class="contactForm">
              <form method="POST" action="index.php">
                <h2>Send Message</h2>
                <div class = "inputBox">
                  <input type = "text" name = "name" id="name" required = "required">
                  <span>Full Name</span>
                </div>
                <div class = "inputBox">
                  <input type = "text" name = "email" id="email" required = "required">
                  <span>Email</span>
                </div>
                <div class = "inputBox">
                  <textarea  name = "message" id="message" required = "required"></textarea>
                  <span>Type your Message...</span>
                </div>
                <div class = "inputBox">
                  <input type = "submit" name = "submit" value = "Send">
                </div>
              </form>
            </div>
    </div>
        </section>

        <script src="main.js"></script>
<!-- Footer -->
<footer>
    <p>Copyright &copy; <a href="https://www.instagram.com/_minto.draws_">Mint</a>. All Rights Reserved.</p>
</footer>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>
