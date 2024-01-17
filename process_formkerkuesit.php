

<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 
	</head

<body>
<?php
//including the database connection file
include "connection.php";

if(isset($_POST['upload'])){

   $Emri=$_POST['Emri'];
   $Mbiemri=$_POST['Mbiemri'];
$Nrtelefonit=$_POST['Nrtelefonit'];
$Grupigjakut = $_POST['Grupigjakut'];
$Qyteti= $_POST['Qyteti'];
$image = $_FILES['image']['tmp_name'];
	
	$image =addslashes (file_get_contents($_FILES['image']['tmp_name']));
	
	
	 $maxsize = 10000000; //set to approx 10 MB
	

	
	
	// checking empty fields
	if(empty($Emri) || empty($Mbiemri)|| empty($Nrtelefonit) || empty($Grupigjakut)|| empty($Qyteti)|| empty($image)) {
				
		if(empty($Emri)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($Mbiemri)) {
			echo "<font color='red'>Mbiemri field is empty.</font><br/>";
		}
		
		if(empty($Nrtelefonit)) {
			echo "<font color='red'>Nrtelefonit field is empty.</font><br/>";
		}
		if(empty($Grupigjakut)) {
			echo "<font color='red'>Grupigjakut field is empty.</font><br/>";
		}
		if(empty($Qyteti)) {
			echo "<font color='red'>Qyteti field is empty.</font><br/>";
		}if(empty($image)) {
			echo "<font color='red'>image field is empty.</font><br/>";
		}
      
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($con, "INSERT INTO `kerkuesit`( `Emri`, `Mbiemri`, `Nrtelefonit`,`Grupigjakut`,`Qyteti`,`image`) VALUES ('$Emri','$Mbiemri','$Nrtelefonit','$Grupigjakut','$Qyteti','$image')");
		
		//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'Dashboard-Kerkuesit.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
	
	}
}
?>

</body>
</html>
