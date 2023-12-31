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
    <link rel="stylesheet" href="Dhuruesit.css">
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
                       <li><a href="Dhuruesit.php" class="link active">Dhuruesit</a></li>
                       <li><a href="Kerkuesit.php" class="link">Kerkuesit</a></li>
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
                
                    <p>
                    <b>
                    Për të gjetur se cilit grup mund ti dhuroni gjak-Selektoni grupin e gjakut tuaj :   
                    </b>
                    
                    </p>
                
                                   <br>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="a_pozitiv()">A+</button>
             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="a_negativ()">A-</button>
              &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="b_pozitiv()">B+</button>
             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="b_negativ()">B-</button>
             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="ab_pozitiv()">AB+</button>
             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="ab_negativ()">AB-</button>
            &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="o_pozitiv()">O+</button>
            &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="o_negativ()">O-</button>
                                   <br>
                                   <br>
             <p id="demo"> Ju lutem shtypni njërin nga butonet:</p>                
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
      
      <h2 class="card-title">Anesa Hoti</h2>
      <p class="card-text">
         Grupi Gjakut: AB+ <br><br>
     Dhurues i Rregullt: 2+ vite <br><br>
     Qyteti: Gjilan

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
     
      <h4 class="card-title">Agon-Besa Krasniqi</h4>
      <p class="card-text">
         Grupi Gjakut: AB+ , B- <br><br>
         Dhurues Të Rregullt: 4+ vite <br><br>
         Qyteti: Prishtinë
    
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
     
      <h2 class="card-title">Tringa Jashari</h2>
      <p class="card-text">
        Grupi Gjakut: A+ <br><br>
         Dhurues i Rregullt: 2+ vite<br><br>
         Qyteti: Pejë
    
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
          
          <h2 class="card-title">Alban Kosumi</h2>
          <p class="card-text">
             Grupi Gjakut: 0+ <br><br>
            Dhurues i Rregullt: 3+ vite<br><br>
            Qyteti: Mitrovicë
       
          </p>
        </div>
     
       
      </div>
      <!-- Card 1 -->
    
    
      <!-- Card 2 -->
      <div class="card card-2">
        <!-- card-header -->
        <div class="card-header">
          <img src="Foto/Dhuruesi5.jpg" class="card-img" />
        </div>
        <!-- card-header -->
    
        <!-- card-body -->
        <div class="card-body">
         
          <h2 class="card-title">Enkeleda Gashi</h2>
          <p class="card-text">
             Grupi Gjakut: B+ <br><br>
             Dhurues i Rregullt: 5+ vite<br><br>
             Qyteti: Istog
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
         
          <h2 class="card-title">Trim Ademi</h2>
          <p class="card-text">
              Grupi Gjakut: B- <br><br>
              Dhurues i Rregullt: 2+ vite<br><br>
              Qyteti: Prizeren

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


/* javascript per grupet e gjakut*/

                                function a_pozitiv() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve: A+ dhe AB+ Dhe mund të merrni nga:A+, A-, O+ dhe O-";
                               }
                               function a_negativ() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:A-, A+, AB- dhe AB+ Dhe mund të merrni nga:A- dhe O-";
                               }
                               function b_pozitiv() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:B+ dhe AB+ Dhe mund të merrni nga:B+, B-, O+ dhe O-";
                               }
                               function b_negativ() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:AB-, AB+, B- dhe B+ Dhe mund të merrni nga:B- dhe O-";
                               }
                               function ab_pozitiv() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:AB+ Dhe mund te merrni nga të gjitha grupet";
                               }
                               function ab_negativ() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:AB+ dhe AB- Dhe mund të merrni nga:AB+, A-, B- dhe O-";
                               }
                               function o_pozitiv() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:O+, A+, B+ dhe AB+ Dhe mund të merrni nga:O+ dhe O-";
                               }
                               function o_negativ() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni the gjitha grupeve Dhe mund të merrni vetem nga O-";
                               }

         </script>
</body>
</html>