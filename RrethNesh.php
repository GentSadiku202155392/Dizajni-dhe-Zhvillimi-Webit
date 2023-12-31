<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastname'];
     $Email = $_POST['Email'];
    $Koment = $_POST['Koment'];

if( !empty($Firstname) && !empty($Lastname) &&!empty($Email) && !empty($Koment))
    {

        //save to database
        $user_id = random_num(20);
        $query = "insert into kontakt (Firstname,Lastname,Email,Koment) values ('$Firstname','$Lastname','$Email','$Koment')";

        mysqli_query($con, $query);
    }
    else
    {
        echo "Please enter some valid information!";
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> 
    <link rel="stylesheet" href="AboutUs.css">
    <title>Dhuro Gjak</title>
</head>
<body>

<div class="wrapper">
           <nav class="nav">
               <div class="nav-logo">
                   <p> Dhuro Gjak</p>
               </div>
               <div class="nav-menu" id="navMenu">
                   <ul>
                       <li><a href="ballina.php" class="link">Ballina</a></li>
                       <li><a href="Dhuruesit.php" class="link">Dhuruesit</a></li>
                       <li><a href="Kerkuesit.php" class="link">Kerkuesit</a></li>
                       <li><a href="RrethNesh.php" class="link active">Rreth Nesh</a></li>
                       <li><a href="logout.php" class="link ">logout</a></li>
                   </ul>
               </div>
            
               <div class="nav-menu-btn">
                   <i class="bx bx-menu" onclick="myMenuFunction()"></i>
               </div>
           </nav>
        </div>
<br>
<br>
<br>
<br>


 <!-- pjesa e kontaktit -->
 <section id="contact-section">
    <div class="container">
    <div class="contact-form">

           <!-- pjesa pare -->
        <div>
          <i class="fa fa-map-marker"></i><span class="form-info">  Lagjja Kalabria,10000 Prishtine, Kosovo </span><br>
          <i class="fa fa-phone" > </i><span class="form-info"> +383 44-888-999</span><br>
          <i class="fa fa-envelope"></i><span class="form-info"> Dhuro.Gjak@gmail.com</span>
        </div>
        
            <!-- pjesa dyte -->
            <div class="contact-container" id="contact">
                <h1>Na Kontaktoni</h1>
                <form id="contactForm" method="post">
                <div class="two-forms">

                    <div class="input-box">
                        <input type="text" id="Firstname" class="input-field" placeholder="Emri" name="Firstname" required>
                    </div>

                    <div class="input-box">
                        <input type="text" id="Lastname" class="input-field" placeholder="Mbiemri" name="Lastname" required>
                     </div>
                </div>

                <div class="input-box">
                    <input type="text" id="Email" class="input-field" placeholder="Email" name="Email" required>
                </div>

                <div class="input-box">
                    <textarea type="text" id="Koment" class="input-field" rows="5" placeholder="Shkruani mesazhin tuaj!" name="Koment" required></textarea>
                </div>

                <div class="input-box">
                    <input type="submit" id="Submit" class="submit" value="Dergo">
                </div>

                   </form>   
                </div>
           </div>
       </div>
    </section>

<div class="slider">
        <div class="images">
        <img src="Foto/Slider5.jpg" alt="Image 5">
            <img src="Foto/Slider1.jpg" alt="Image 1">
            <img src="Foto/Slider2.jpg" alt="Image 2">
            <img src="Foto/Slider3.jpg" alt="Image 3">
            <img src="Foto/Slider4.jpg" alt="Image 4">
        </div>
        <div class="dots">
        <label for="img5"></label>
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
        </div>
    </div>

    <footer class="footer">

<div class="container">
  <p class="copyright">
    &copy; 2023 All Rights Reserved by <a href="#" class="copyright-link">Dhuro Gjake</a>
  </p>
</div> 

</footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            var slideIndex = 0;

            function showSlides(n) {
                var slides = $('.images');
                var slideWidth = $('.images img').width();

                slides.css('transform', 'translateX(' + (-slideWidth * n) + 'px)');
            }

            $('.dots label').on('click', function () {
                var index = $(this).index();
                slideIndex = index;
                showSlides(slideIndex);
            });

            function slideShow() {
                slideIndex++;
                if (slideIndex >= $('.images img').length) {
                    slideIndex = 0;
                }
                showSlides(slideIndex);
            }

            var slideInterval = setInterval(slideShow, 3000);

            $('.slider').mouseenter(function () {
                clearInterval(slideInterval);
            }).mouseleave(function () {
                slideInterval = setInterval(slideShow, 3000);
            });
        });
          
        function myMenuFunction() {
             var i = document.getElementById("navMenu");
             if(i.className === "nav-menu") {
                 i.className += " responsive";
             } else {
                 i.className = "nav-menu";
             }
            }
        /*  Javascript per me bo hide navbar kur jem scrool posht*/

            let lastScrollTop = 0;
     window.addEventListener('scroll', function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Kur Bojm Scrool down
        document.querySelector('.nav').classList.add('nav-hidden');
    } else {
        // Kur Bojm Scroll up
        document.querySelector('.nav').classList.remove('nav-hidden');
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; 
}, false);
/*==========================================================================*/

</script>
</body>
</html>