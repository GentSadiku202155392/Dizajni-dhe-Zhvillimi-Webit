
<?php 
include "connection.php";

// if the form's update button is clicked, we need to process the form
if (isset($_POST['update'])) {
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
    $user_id = $_POST['user_id']; 

    // write the update query
    $sql = "UPDATE `dhuruesit` SET `Emri`='$Emri', `Mbiemri`='$Mbiemri', `Nrtelefonit`='$Nrtelefonit', `Gjinia`='$Gjinia',
        `Datelindja`='$Datelindja', `Kurkenidhuruargjakpërherëtëfundit`='$Kurkenidhuruargjakpërherëtëfundit', 
        `Akenipërdorurbarna10ditëtefundit`='$Akenipërdorurbarna10ditëtefundit', `covid_vaksine`='$covid_vaksine', 
        `GrupiGjakut`='$GrupiGjakut', `Qyteti`='$Qyteti'
        WHERE `user_id`='$user_id'";

    // execute the query
    $result = $con->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // write SQL to get user data
    $sql = "SELECT * FROM `dhuruesit` WHERE `user_id`='$user_id'";

    // Execute the sql
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user_id = $row['user_id'];
            $Emri = $row['Emri'];
            $Mbiemri = $row['Mbiemri'];
            $Nrtelefonit = $row['Nrtelefonit'];
            $Gjinia = $row['Gjinia'];
            $Datelindja = $row['Datelindja'];
            $Kurkenidhuruargjakpërherëtëfundit = $row['Kurkenidhuruargjakpërherëtëfundit'];
            $Akenipërdorurbarna10ditëtefundit = $row['Akenipërdorurbarna10ditëtefundit'];
            $covid_vaksine = $row['covid_vaksine'];
            $GrupiGjakut = $row['GrupiGjakut'];
            $Qyteti = $row['Qyteti'];
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

       
    </style>
</head>
<body>
		<h2>Dhuruesi Update Form <li><a href="Dashboard-Dhuruesit.php" class="link " style="color:White;">Back</a></li></h2>
        
        <form action="" method="post">
          <fieldset>
           <legend>Personal Information:</legend>
            Emri:<br>
            <input type="text" name="Emri" placeholder="Emri" value="<?php echo $Emri; ?>">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <br>
            Mbiemri:<br>
            <input type="text" name="Mbiemri" placeholder="Mbiemri" value="<?php echo $Mbiemri; ?>">
            <br>
            Nrtelefonit:<br>
            <input type="text" name="Nrtelefonit"  placeholder="Nrtelefonit" value="<?php echo $Nrtelefonit; ?>">
            <br>
            Gjinia:<br>
            <input type="text" name="Gjinia" placeholder="Gjinia" value="<?php echo $Gjinia; ?>">
            <br>
            Datelindja:<br>
            <input type="text" name="Datelindja" placeholder="Datelindja" value="<?php echo $Datelindja; ?>">
            <br>
            Kur keni dhuruar gjak për herë të fundit:<br>
            <input type="text" name="Kurkenidhuruargjakpërherëtëfundit" placeholder="Kurkenidhuruargjakpërherëtëfundit" value="<?php echo $Kurkenidhuruargjakpërherëtëfundit; ?>">
            <br>
            Akeni përdorur barna 10 ditët e fundit:<br>
            <input type="text" name="Akenipërdorurbarna10ditëtefundit" placeholder="Akenipërdorurbarna10ditëtefundit" value="<?php echo $Akenipërdorurbarna10ditëtefundit; ?>">
            <br>
            covid_vaksine:<br>
            <input type="text" name="covid_vaksine" placeholder="covid_vaksine" value="<?php echo $covid_vaksine; ?>">
            <br>
            GrupiGjakut:<br>
            <input type="text" name="GrupiGjakut" placeholder="GrupiGjakut" value="<?php echo $GrupiGjakut; ?>">
            <br>
            Qyteti:<br>
            <input type="text" name="Qyteti" placeholder="Qyteti" value="<?php echo $Qyteti; ?>">
            <br>
            <br>
            <input type="submit" value="Update" name="update">
          </fieldset>
        </form>
		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: Dashboard-Dhuruesit.php');
	}

}
?>