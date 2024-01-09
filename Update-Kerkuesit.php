
<?php 
include "connection.php";

// if the form's update button is clicked, we need to process the form
if (isset($_POST['update'])) {
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Nrtelefonit = $_POST['Nrtelefonit'];
    $Gjinia = $_POST['Gjinia'];
    $Koha = $_POST['Koha'];
    $Grupigjakut = $_POST['GrupiGjakut'];
    $Qyteti = $_POST['Qyteti'];
    $user_id = $_POST['user_id']; 

    // write the update query
    $sql = "UPDATE `kerkuesit` SET `Emri`='$Emri', `Mbiemri`='$Mbiemri', `Nrtelefonit`='$Nrtelefonit', `Gjinia`='$Gjinia',
        `Koha`='$Koha', `GrupiGjakut`='$Grupigjakut', `Qyteti`='$Qyteti'
        WHERE `user_id`='$user_id'";

    // execute the query
    $result = $con->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $con->error;
    }
}

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // write SQL to get user data
    $sql = "SELECT * FROM `kerkuesit` WHERE `user_id`='$user_id'";

    // Execute the sql
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user_id = $row['user_id'];
            $Emri = $row['Emri'];
            $Mbiemri = $row['Mbiemri'];
            $Nrtelefonit = $row['Nrtelefonit'];
            $Gjinia = $row['Gjinia'];
            $Koha = $row['Koha'];
            $Grupigjakut = $row['Grupigjakut'];
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
		<h2>Kerkuesit Update Form <li><a href="Dashboard-Kerkuesit.php" class="link " style="color:White;">Back</a></li></h2>
        
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
            Koha:<br>
            <input type="text" name="Koha" placeholder="Koha" value="<?php echo $Koha; ?>">
            <br>
            Koha:<br>
            <input type="text" name="Koha" placeholder="Koha" value="<?php echo $Koha; ?>">
            <br>
            GrupiGjakut:<br>
            <input type="text" name="GrupiGjakut" placeholder="GrupiGjakut" value="<?php echo $Grupigjakut; ?>">
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
		header('Location: Dashboard-Kerkuesit.php');
	}

}
?>