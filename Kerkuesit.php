<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Kerkuesit.css">
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
                       <li><a href="ballina.php" class="link  ">Ballina</a></li>
                       <li><a href="Dhuruesit.php" class="link ">Dhuruesit</a></li>
                       <li><a href="Kerkuesit.php" class="link active">Kerkuesit</a></li>
                       <li><a href="RrethNesh.php" class="link">Rreth Nesh</a></li>
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
<br>

      
<!----------------------------------------------------------------------->
<div class="courses-container">
	<div class="course">
		<div class="course-preview">
			<div class="container-1">
                <div class="box-1">
                
                    
                    <b>
             <h3> Keni nevoj per gjak ---- Kerko gjak </h3>
           
              <br>

              <br>
              <div class="card-footer">
                <a href="Kerkogjak.php">
                    <button class="btn" >Vazhdo</button>
                        </a>
            </div>
            </b>     
            </div> 
            </div> 
     		</div>
	</div>
</div>



<!---------------------------------------------->
<section id="section1">
<div class="container">
<div class="card card-1">

    <!-- card-header -->
    <div class="card-header">
      <img src="Foto/Dhuruesi1.jpg" class="card-img" />
    </div>
    
    <!------->

    <!-- card-body -->
    <div class="card-body">
      
      <h3 class="card-title">Emri-Mbiemri</h3>
      <p class="card-text">
         Grupi Gjakut: -- <br><br>
         Qyteti: Gjilan <br><br>
         Data : ----- <br><br>
         Nr-Telefonit: 044-444-333

      </p>
    </div>
   
  
  </div>
  <!-- Card 1 -->


  <!-- Card 2 -->
  <div class="card card-2">
    <!-- card-header -->
    <div class="card-header">
      <img src="Foto/Dhuruesi2.jpg" class="card-img" />
    </div>
    <!-- card-header -->

    <!-- card-body -->
    <div class="card-body">
     
        <h3 class="card-title">Emri-Mbiemri</h3>
        <p class="card-text">
           Grupi Gjakut: -- <br><br>
           Qyteti: Gjilan <br><br>
           Data : ----- <br><br>
           Nr-Telefonit: 044-444-333
  
        </p>
    </div>
    <!-- card-body -->

  
   
  </div>
  <!-- Card 2 -->

  <!-- Card 3 -->
  <div class="card card-3">
    <!-- card-header -->
    <div class="card-header">
      <img src="Foto/Dhuruesi3.jpg" class="card-img" />
    </div>
    <!-- card-header -->

    <!-- card-body -->
    <div class="card-body">
     
        <h3 class="card-title">Emri-Mbiemri</h3>
        <p class="card-text">
           Grupi Gjakut: -- <br><br>
           Qyteti: Gjilan <br><br>
           Data : ----- <br><br>
           Nr-Telefonit: 044-444-333
  
        </p>
    </div>
    <!-- card-body -->

   
  
    <!-- card-footer -->
  </div>
</div>
</section>

<section id="section1">
    <div class="container">
    <div class="card card-1">
    
        <!-- card-header -->
        <div class="card-header">
          <img src="Foto/Dhuruesi4.jpg" class="card-img" />
        </div>
        
        <!------->
    
        <!-- card-body -->
        <div class="card-body">
          
            <h3 class="card-title">Emri-Mbiemri</h3>
            <p class="card-text">
               Grupi Gjakut: -- <br><br>
               Qyteti: Gjilan <br><br>
               Data : ----- <br><br>
               Nr-Telefonit: 044-444-333
      
            </p>
        </div>
     
       
      </div>
   
    
    
      <!-- Card 2 -->
      <div class="card card-2">
        <!-- card-header -->
        <div class="card-header">
          <img src="Foto/Dhuruesi5.jpg" class="card-img" />
        </div>
        <!-- card-header -->
    
        <!-- card-body -->
        <div class="card-body">
         
            <h3 class="card-title">Emri-Mbiemri</h3>
            <p class="card-text">
               Grupi Gjakut: -- <br><br>
               Qyteti: Gjilan <br><br>
               Data : ----- <br><br>
               Nr-Telefonit: 044-444-333
      
            </p>
        </div>
        <!-- card-body -->
      </div>
      <!-- Card 2 -->
    
      
      <!-- Card 3 -->
      <div class="card card-3">
        <!-- card-header -->
        <div class="card-header">
          <img src="Foto/Dhuruesi6.jpg" class="card-img" />
        </div>
        <!-- card-header -->
    
        <!-- card-body -->
        <div class="card-body">
         
            <h3 class="card-title">Emri-Mbiemri</h3>
            <p class="card-text">
               Grupi Gjakut: -- <br><br>
               Qyteti: Gjilan <br><br>
               Data : ----- <br><br>
               Nr-Telefonit: 044-444-333
      
            </p>
        </div>
        <!-- card-body -->
  
      </div>
    </div>
    </section>
<!------------------------------------------------------------------------------->
          <footer class="footer">
            <div class="container">
        
              <p class="copyright">
                &copy; 2023 All Rights Reserved by <a href="#" class="copyright-link">Dhuro Gjake</a>
              </p>
        
            </div> 
          </footer>


        <script>
   
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



         </script>
</body>
</html>