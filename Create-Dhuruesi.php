<?php 
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Nrtelefonit = $_POST['Nrtelefonit'];
    $Gjinia = $_POST['Gjinia'];
    $Datelindja = $_POST['Datelindja'];
    $Kurkenidhuruargjakpërherëtëfundit = $_POST['Kurkenidhuruargjakpërherëtëfundit'];
    $Akenipërdorurbarna10ditëtefundit = $_POST['Akenipërdorurbarna10ditëtefundit'];
    $covid_vaksine = $_POST['covid_vaksine'];
    $GrupiGjakut = $_POST['GrupiGjakut'];
    $Qyteti = $_POST['Qyteti'];
    

    if (!empty($Emri) && !empty($Mbiemri) && !empty($Nrtelefonit)&& !empty($Gjinia)
     && !empty($Datelindja) && !empty($Kurkenidhuruargjakpërherëtëfundit) && !empty($Akenipërdorurbarna10ditëtefundit) && !empty($covid_vaksine) && !empty($GrupiGjakut) && !empty($Qyteti)  && !is_numeric($Emri)) {
        // save to database
        $query = "INSERT INTO dhuruesit (Emri, Mbiemri, Nrtelefonit, Gjinia,Datelindja,Kurkenidhuruargjakpërherëtëfundit,Akenipërdorurbarna10ditëtefundit,covid_vaksine,GrupiGjakut,Qyteti) 
        VALUES ('$Emri','$Mbiemri','$Nrtelefonit','$Gjinia','$Datelindja', '$Kurkenidhuruargjakpërherëtëfundit' , '$Akenipërdorurbarna10ditëtefundit' , '$covid_vaksine' , '$GrupiGjakut' , '$Qyteti')";

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

<h2>Shto Dhurues   <li><a href="Dashboard-Dhuruesit.php" class="link " style="color:White;">Back</a></li></h2></h2>


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
      <label for="Datelindja">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datelindja:</label> &nbsp;
      <input id="Datelindja" type="date"  name="Datelindja"><br>
      <br>
      
      <label for="Kurkenidhuruargjakpërherëtëfundit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kur keni dhuruar gjak p&euml;r her&euml; t&euml; fundit?</label>  &nbsp;
        <input type="date" id="Kurkenidhuruargjakpërherëtëfundit" name="Kurkenidhuruargjakpërherëtëfundit"><br>
      <br>
    


      <label for="fbarna">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A keni p&euml;rdorur barna 10 dit&euml;t e fundit?</label> &nbsp; &nbsp;
       
                     <input type="radio" name="Akenipërdorurbarna10ditëtefundit" value="PO"> PO  &nbsp;
                    <input type="radio" name="Akenipërdorurbarna10ditëtefundit" value="JO"> JO
                    <br>
                    <br>
                    <label for="VAKSINA">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A jeni vaksinuar kunder COVID-19?</label> &nbsp; &nbsp;
                      <input type="radio" name="covid_vaksine" value="PO"> PO  &nbsp;
                    <input type="radio" name="covid_vaksine" value="JO"> JO
      <br>
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
        <input type="submit" name="submit" value="Shto Dhuruesin">
    </fieldset>
</form>

</body>
</html>
