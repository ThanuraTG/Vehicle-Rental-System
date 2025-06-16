<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking Form</title>
        <link rel="stylesheet" href="booking form.css">
    </head>
    <body>
        
        <!-- <a href="" target="_blank" >Next</a> -->
        <h1>Autoway Vehicle </h1>
        <h2>Booking Form</h2>
        <form action="" method="post">
            <!-- Your form fields go here -->
        
            <div class="personal">
                <h2>personal Information</h2>
                <div class="name">
                    <input type="text" placeholder="Your Full Name" name="fullName">
                </div>
                <div class="emali">
                    <input type="email" placeholder="Your E-Mail" name="email">
                </div>
                <div class="phone">
                    <input type="tel" placeholder="Phone Number" name="phoneNumber">
                </div>
                <div class="address">
                    <input type="text" placeholder="Address" rows="2" name="address">
                </div>
                <div class="nic">
                    <input type="text" placeholder="NIC Number" name="nicNumber">
                </div>
                <div class="vtype">
                     <input type="text" placeholder="Vehicle Type" name="vtype">
                </div>
                <div class="pul">
                     <input type="text" placeholder="Pick Up Location" name="plocation">
                 </div>
                 <div class="date">
                     <input type="date" placeholder="Pick Up Date" name="pdate">
                </div>
                 <div class="time">
                 <label>Pick Up Time :</label>
                    <input type="time" placeholder="Pick Up Time" name="ptime">
                 </div>
                 <div class="country-city">
                    <input type="text" placeholder="Country" name="country">
                    <input type="text" placeholder="City" name="city">
                 </div>
                 <div class="btn">
                    <input type="submit" class="btn" name="btn" value="Book Now">
                </div>
            </div>
        </form>
        <p>* 2023 Autoway Vehicle Booking Form. All Rights Reserved.</p>
    </body>
</html>
<?php


$servername ="localhost";
$username ="root";
$password ="";
$dbname ="booking";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);
}

if (isset($_POST['btn'])) {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $address = $_POST["address"];
    $nicNumber = $_POST["nicNumber"];
    $vtype = $_POST["vtype"];
    $plocation = $_POST["plocation"];
    $pdate = $_POST["pdate"];
    $ptime = $_POST["ptime"];
    $country = $_POST["country"];
    $city = $_POST["city"];

    $sql = "INSERT INTO booking(fullName,email,phoneNumber,address,nicNumber,vtype,plocation,pdate,ptime,country, city)
    VALUES ('$fullName', '$email', '$phoneNumber', '$address', '$nicNumber','$vtype','$plocation','$pdate','$ptime','$country', '$city')";
    
    if($conn->query($sql) == TRUE) {
        echo "Booking Successfully";
    }else{
        echo "Error: ". $sql ."<br>" .$conn->error;
    }
}
$conn->close();
?>
  
