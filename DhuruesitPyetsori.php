<?php 
session_start();

	include("connection.php");
	include("functions.php");
  $user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Emri=$_POST['Emri'];
		$Mbiemri=$_POST['Mbiemri'];
    $Nrtelefonit=$_POST['Nrtelefonit'];
    $GrupiGjakut = $_POST['GrupiGjakut'];
    $Qyteti= $_POST['Qyteti'];
    $image= $_POST['image'];
	

    if( !empty($Emri) && !empty($Mbiemri) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into dhuruesit (Emri,Mbiemri,Nrtelefonit,GrupiGjakut,Qyteti) values ('$Emri','$Mbiemri','$Nrtelefonit','$GrupiGjakut','$Qyteti')";

			mysqli_query ($con, $query);


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
    <link rel="stylesheet" href="DhuruesitPyetsori.css">
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
                       
                       <li><a href="DhuruesitPyetsori.html" class="link active ">Dhuro Gjak</a></li>
                       <li><a href="Ballina.php" class="link ">Back</a></li>

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

<div class="form" id="Dhuro-form">
<form action="proces_formdhuruesit.php" method="post" enctype="multipart/form-data">
    
    <label for="Emri" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emri</label> &nbsp;
    <input type="text" id="Femri" name="Emri" placeholder="Emri.." border-radius="30"> 
    <br>
    <br>

    <label for="Mbiemri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mbiemri</label> &nbsp;
    <input type="text" id="LMbiemri" name="Mbiemri" placeholder="Mbiemri..">

    <br>
    <br>
    <label for="Nrtelefonit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nr telefonit</label> &nbsp;
    <input type="text" id="	Nrtelefonit" name="Nrtelefonit" placeholder="Nr telefonit..">
    <br>
    <br>
    <div>
        
                    
                    <label for="GrupiGjakut">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cakto grupin e gjakut</label>
       
                     <input type="radio" name="GrupiGjakut" value="A-"> A- &nbsp;
                    <input type="radio" name="GrupiGjakut" value="B+"> B+  &nbsp;
                    <input type="radio" name="GrupiGjakut" value="B-"> B-   &nbsp;
                    <input type="radio" name="GrupiGjakut" value="AB+"> AB+   &nbsp;
                    <input type="radio" name="GrupiGjakut" value="AB-"> AB-   &nbsp;
                    <input type="radio" name="GrupiGjakut" value="0+"> 0+  &nbsp;  
                    <input type="radio" name="GrupiGjakut" value="0-"> 0-   


      <br>
      <br>


    <label for="country">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qyteti</label>
    <select id="qyteti" name="Qyteti">
      <option value="none">Zgjedh Qytetin</option> 
      <option value="Gjilan">Gjilan</option>
      <option value="Prishtine">Prishtine</option>
      <option value="Ferizaj">Ferizaj</option>
      <option value="Prizeren">Prizeren</option>
      <option value="Istog">Istog</option>
      <option value="Pej&euml;">Pej&euml;</option>
      <option value="Gjakov">Gjakov</option>
      <option value="Skenderaj">Skenderaj</option>
      <option value="Lipjan">Lipjan</option>
      <option value="Deçan">Deçan</option>
      <option value="Suharek&euml;">Suharek&euml;</option>
      <option value="Podujev">Podujev</option>
    </select>
</div>
  <br>
  
     Image: <input type="file" name="image" accept="image/*" required><br>
  <br>
  <br>
  <div class="card-footer">
    <a href="#">
        
         <button  type="submit" name="upload">Dergo</button>
            </a>
</div>
  
</div>
</form>
</div>
<!---------------------------------------------->

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