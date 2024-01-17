<?php
include "connection.php";

// if the form's update button is clicked, we need to process the form
if (isset($_POST['update'])) {
    $user_id = $_POST['user_id'];
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Nrtelefonit = $_POST['Nrtelefonit'];
    $GrupiGjakut = $_POST['GrupiGjakut'];
    $Qyteti = $_POST['Qyteti'];

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        // write the update query with the new image
        $sql = "UPDATE `dhuruesit` SET `Emri`='$Emri', `Mbiemri`='$Mbiemri', `Nrtelefonit`='$Nrtelefonit', 
           `GrupiGjakut`='$GrupiGjakut', `Qyteti`='$Qyteti', `image`='$image'
            WHERE `user_id`='$user_id'";
    } else {
        // write the update query without changing the image
        $sql = "UPDATE `dhuruesit` SET `Emri`='$Emri', `Mbiemri`='$Mbiemri', `Nrtelefonit`='$Nrtelefonit', 
           `GrupiGjakut`='$GrupiGjakut', `Qyteti`='$Qyteti'
            WHERE `user_id`='$user_id'";
    }

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
            $GrupiGjakut = $row['GrupiGjakut'];
            $Qyteti = $row['Qyteti'];
            $image = $row['image'];
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

        <form action="" method="post" enctype="multipart/form-data">
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
                <input type="text" name="Nrtelefonit" placeholder="Nrtelefonit" value="<?php echo $Nrtelefonit; ?>">
                <br>
                GrupiGjakut:<br>
                <input type="text" name="GrupiGjakut" placeholder="GrupiGjakut" value="<?php echo $GrupiGjakut; ?>">
                <br>
                Qyteti:<br>
                <input type="text" name="Qyteti" placeholder="Qyteti" value="<?php echo $Qyteti; ?>">
                <br>
                <br>
                Foto:<br>
                <input type="file" name="image" accept="image/*" required><br>
                <br>
                <br>
                <input type="submit" value="Update" name="update">
            </fieldset>
        </form>
    </body>
    </html>

    <?php
    } else {
        // If the 'id' value is not valid, redirect the user back to view.php page
        header('Location: Dashboard-Dhuruesit.php');
    }
}
?>
