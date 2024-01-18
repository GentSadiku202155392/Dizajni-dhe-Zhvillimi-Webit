<?php 
include "connection.php";
include("functions.php");


//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<header>
	<style>
  body{
   
	width: 100%; /* Or your desired width */
    height: 680px; /* Or your desired height */
     /* Add background image and set its properties */
	 background-image: url("Foto/Logo.png");/* Replace 'path_to_your_image.jpg' with the actual path */
    background-size: cover; /* This will cover the entire container */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Prevent image from repeating */
	backdrop-filter: blur(3px);
}
.container{
	color:black;
}
.link {
            color: white;
            font-size: 20px; /* Adjust the font size to your preference */
            text-decoration: none;
        }

        /* Style for the active link */
        .active {
            font-weight: bold; /* You can add additional styles for active links */
        }
    
    </style>
<body>



	<div class="menu">
          <div class="btn">
            <i class="fas fa-times close-btn"></i>
          </div>

	<div class="container">
	<a href="Ballina.php" class="link">Back</a>&nbsp&nbsp&nbsp
	<a href="Dashboard.php" class="link active">Users</a>&nbsp&nbsp&nbsp
    <a href="Dashboard-Contact.php" class="link">Contact us</a>&nbsp&nbsp&nbsp
	<a href="Dashboard-Dhuruesit.php" class="link ">Dhuruesit</a>&nbsp&nbsp&nbsp
	<a href="Dashboard-Kerkuesit.php" class="link ">Kerkuesit</a>
<table class="table">
	<thead>
		<tr>
		<th>User_id</th>
		<th>First-Name</th>
		<th>Last-Nmae</th>
		<th>Email</th>
		<th>Password</th>
	</tr>
	</thead>
	<tbody>	

	</header>
		<?php
			if ($result->num_rows > 0) {
				
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['Firstname']; ?></td>
					<td><?php echo $row['Lastname']; ?></td>
					<td><?php echo $row['Email']; ?></td>
					<td><?php echo $row['Password']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['user_id']; ?>">Edit</a>
					&nbsp;<a class="btn btn-danger" href="delete.php?user_id=<?php echo $row['user_id']; ?>">Delete</a>
					&nbsp;<a class="btn btn-info" href="create.php?id" style="color:black;"><b>Create</b></a></td>
					
      
				
				</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
	
	

</body>
</html>