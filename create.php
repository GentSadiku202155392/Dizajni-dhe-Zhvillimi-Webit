<?php 
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if (!empty($Firstname) && !empty($Lastname) && !empty($Email) && !empty($Password) && !is_numeric($Email)) {
        // save to database
        $query = "INSERT INTO users (Firstname, Lastname, Email, Password) VALUES ('$Firstname','$Lastname','$Email','$Password')";

        mysqli_query($con, $query);

        header("Location: Dashboard.php");
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

<h2>Shto Perdorues  <li><a href="Dashboard.php" class="link " style="color:White;">Back</a></li></h2>


<form action="" method="POST">
    <fieldset>
        <legend>Infromatat personale:</legend>
        Firstname:<br>
        <input type="text" name="Firstname" placeholder="Firstname"><br>
        Lastname:<br>
        <input type="text" name="Lastname" placeholder="Lastname"><br>
        Email:<br>
        <input type="text" name="Email" placeholder="Email"><br>
        Password:<br>
        <input type="password" name="Password" placeholder="Password"><br><br>
        <input type="submit" name="submit" value="Dergo">
    </fieldset>
</form>

</body>
</html>
