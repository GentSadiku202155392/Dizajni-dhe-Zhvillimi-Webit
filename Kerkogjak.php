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
    $Gjinia = $_POST['Gjinia'];
  $Koha = $_POST ['Koha'];
    $Grupigjakut = $_POST['Grupigjakut'];
    $Qyteti= $_POST['Qyteti'];


    if( !empty($Emri) && !empty($Mbiemri) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into kerkuesit (Emri,Mbiemri,Nrtelefonit,Gjinia,Koha,Grupigjakut,Qyteti) values ('$Emri','$Mbiemri','$Nrtelefonit','$Gjinia','$Koha','$Grupigjakut','$Qyteti')";

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
    <link rel="stylesheet" href="Kerkogjak.css">
    <title>Dhuro Gjak</title>
</head>
<body>
   
        <div class="wrapper">
           <nav class="nav">
               <div class="nav-logo">
                   <p> Kerko Gjak</p>
               </div>
               <div class="nav-menu" id="navMenu">
                   <ul>
                       
                       <li><a href="DhuruesitPyetsori.html" class="link active ">Kerko Gjak</a></li>
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

<div class="form" id="kerko-form">
<form  method="post">

    
    <label for="Emri" >Emri</label> &nbsp;
    <input type="text" id="fname" name="Emri" placeholder="Emri.."> 
    <br>
    <br>

    <label for="Mbiemri">Mbiemri</label> &nbsp;
    <input type="text" id="lname" name="Mbiemri" placeholder="Mbiemri..">

    <br>
    <br>
    <label for="Nrtelefonit">Nr telefonit</label> &nbsp;
    <input type="text" id="lname" name="Nrtelefonit" placeholder="Nr telefonit..">
    <br>
    <br>
    <label for="Gjinia">Gjinia:</label> &nbsp; &nbsp;
       
                     <input type="radio" name="Gjinia" value="Mashkull"> Mashkull  &nbsp;
                    <input type="radio" name="Gjinia" value="Femer"> Fem&euml;r
      <br>
      <br>
      <label for="Koha">Afati kohor:</label> &nbsp;
      <input type="date" id="Koha" name="Koha"><br>
      <br>
      
     
   
                  
   <label for="fname">Cakto grupin e gjakut q&euml; t&euml; duhet:</label>
       
                     <input type="radio" name="Grupigjakut" value="A-"> A- &nbsp;
                    <input type="radio" name="Grupigjakut" value="B+"> B+  &nbsp;
                    <input type="radio" name="Grupigjakut" value="B-"> B-   &nbsp;
                    <input type="radio" name="Grupigjakut" value="AB+"> AB+   &nbsp;
                    <input type="radio" name="Grupigjakut" value="AB-"> AB-   &nbsp;
                    <input type="radio" name="Grupigjakut" value="0+"> 0+  &nbsp;  
                    <input type="radio" name="Grupigjakut" value="0-"> 0-   
                    
      <br>
      <br>

      
    <label for="country">Vendndodhja</label>
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

  <br>
  <br>
  <div class="card-footer">
    <a href="#">
         <button class="btn" >Dergo</button>
            </a>
</div>
  
</div>
</form>
</div>
<!---------------------------------------------->
<br>
<br>

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