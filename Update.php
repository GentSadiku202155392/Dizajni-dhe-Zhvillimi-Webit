<?php 
include "connection.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
        $user_id = $_POST['user_id'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
		

		 // write the update query
         $sql = "UPDATE `users` SET `Firstname`='$Firstname', `Lastname`='$Lastname', `Email`='$Email', `Password`='$Password' WHERE `user_id`='$user_id'";

		// execute the query
		$result = $con->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `users` WHERE `user_id`='$user_id'";

	//Execute the sql
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$user_id = $row['user_id'];
            $Firstname = $row['Firstname'];
            $Lastname = $row['Lastname'];
            $Email = $row['Email'];
            $Password = $row['Password'];
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
		<h2>User Update Form <li><a href="Dashboard.php" class="link " style="color:White;">Back</a></li></h2>
        
        <form action="" method="post">
          <fieldset>
            <legend>Personal Information:</legend>
            Firstname:<br>
            <input type="text" name="Firstname" placeholder="Firstname" value="<?php echo $Firstname; ?>">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <br>
            Lastname:<br>
            <input type="text" name="Lastname" placeholder="Lastname" value="<?php echo $Lastname; ?>">
            <br>
            Email:<br>
            <input type="text" name="Email"  placeholder="Email" value="<?php echo $Email; ?>">
            <br>
            Password:<br>
            <input type="password" name="Password" placeholder="Password" value="<?php echo $Password; ?>">
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
		header('Location: view.php');
	}

}
?>