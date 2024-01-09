<?php 
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Nrtelefonit = $_POST['Nrtelefonit'];
    $Gjinia = $_POST['Gjinia'];
    $Koha = $_POST['Koha'];
    $GrupiGjakut = $_POST['GrupiGjakut'];
    $Qyteti = $_POST['Qyteti'];
    

    if (!empty($Emri) && !empty($Mbiemri) && !empty($Nrtelefonit)&& !empty($Gjinia)
     && !empty($Koha)  && !empty($GrupiGjakut) && !empty($Qyteti)  && !is_numeric($Emri)) {
        // save to database
        $query = "INSERT INTO kerkuesit (Emri, Mbiemri, Nrtelefonit, Gjinia,Koha,GrupiGjakut,Qyteti) 
        VALUES ('$Emri','$Mbiemri','$Nrtelefonit','$Gjinia','$Koha',  '$GrupiGjakut' , '$Qyteti')";

        mysqli_query($con, $query);

        header("Location: Dashboard-Dhuruesit.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            width: 100%;
            height: 680px;
            background-image: url("Foto/Logo.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            backdrop-filter: blur(3px);
        }

        .form {
            color: white;
        }
    </style>
</head>
<body>

<h2>Shto Kerkues Gjakau   <li><a href="Dashboard-Kerkuesit.php" class="link " style="color:White;">Back</a></li></h2></h2>


<form action="" method="POST">
    <fieldset>
        <legend>Infromatat personale:</legend>
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
    <label for="Gjinia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gjinia:</label> &nbsp; &nbsp;
       
                     <input id="Gjinia" type="radio" name="Gjinia" value="Mashkull"> Mashkull  &nbsp;
                    <input  id="Gjinia" type="radio" name="Gjinia" value="Femer"> Fem&euml;r 
      <br>
      <br>
      <label for="Koha">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Koha kur Nevojitet gjaku:</label> &nbsp;
      <input id="Koha" type="date"  name="Koha"><br>
      <br>
      
    
                    
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
    <br>
            <br>
        <input type="submit" name="submit" value="Shto Kerkuesin">
    </fieldset>
</form>

</body>
</html>
