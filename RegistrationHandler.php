<?php 
if (isset($_POST["btnSubmit"]))
{
    $name = $_POST["txtName"];
		$email = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];

	$con = mysqli_connect("localhost", "root", "", "sa23124912", "3306"); //connect to the DB

    if(!$con) {
        die ("Sorry we are facing some tech issues"); // If error occurs pause the page
    }

    // Step 2: Retrieve the last customerID from the database
    $sql = "SELECT id FROM tableaccount ORDER BY id DESC LIMIT 1";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastCustomerID = $row['id'];
    } else {
        $lastCustomerID = 'CS999'; // Assuming no customerIDs exist yet
    }

    // Step 3: Extract the numeric part of the customerID
    $numericPart = (int)substr($lastCustomerID, 2);

    // Step 4: Generate the next customerID
    $newNumericPart = $numericPart + 1;
    $newCustomerID = 'CS' . str_pad($newNumericPart, 4, '0', STR_PAD_LEFT);

    // Now, $newCustomerID will contain the auto-generated customerID

    $sql = " INSERT INTO `tableaccount` (`id`,`name`,`email`,`password`) VALUES ('".$newCustomerID."','".$name."','".$email."', '".$password."' );" ;
    
    if (mysqli_query($con, $sql)) {
        echo '<script>alert("Data added successfully.");</script>';
        header('Location:login.php');
    } else {
        echo '<script>alert("Error adding data: ' . $conn->error . '");</script>';
    }
}
else {
    echo "Unsuccessful";
}
?>
