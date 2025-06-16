<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
<title>Contact</title>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="im">
        <img src="pic2.png" alt="" width="150px" height="150px">
    </div>
    <div class="menu-bar">        
        <ul>
            <li><a href="homepage.html">Home</a></li>
            <li><a href="vehicle fleed.html">Vehicle Fleet<i class="fas fa-caret-down"></i></a>
                <div class="drop-down">
                    <ul>
                        <li><a href="luxury car.html">Luxury cars</a></li>
                        <li><a href="premium car.html">Premium cars</a></li>
                        <li><a href="#">General cars</a></li>
                        <li><a href="4wd.html">4WD & Sav</a></li>
                        <li><a href="#">Van & Bus</a></li>
                        <li><a href="#">Classic & Wedding</a></li>
                        <li><a href="#">Motorbikes</a></li>
                        <li><a href="#">Tuk Tuk</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="services.html">Services</a></li>
            <li><a href="about us.html">About Us</a></li>
            <li><a href="contact.php">Contac Us</a></li>
        </ul>
    </div>
 
<div class="background_picture">
    <img src="shutterstock_1620719071.jpg" alt="background_picture" width="100%">
</div>


<div class="boader">
    <div class=" column Vehicle-column" >
        All copyrights reserved by AutoWay Rent-A-Vehicle - © 2023
    </div>
    <div class="column web-column"> Website Designed & Developed by @@@@@@@</div>
</div>

<div class="heading">
<h3>Contact AutoWay Vehicle Rent</h3>
</div>

<div class="paragraph">
<h4>Autoway vehicle rent (pvt) 361,<br>Thalangam North, Koswtta, <br>Malabe. Sri Lanka.</h4><br>




<h4>Hotline: +94 11 4 444 7565</h4>,<br>

<h4>Fax:+94 11 444 644</h4><br>

<h4>Email:Autowayinfo@gmail.com</h4>



</div>

<div class="image-column">
    <img src="map.jpg" alt="map">
</div>

<div class="paragrph">

</div>
<div class="container">
    <form>
        <h1>Contact Us</h1>
        <input type="text" id="firstName" placeholder="First Name" required>
        <input type="text" id="LasttName" placeholder="Last Name" required>
        <input type="Email" id="email" placeholder="Email" required>
        <input type="text" id="mobile" placeholder="Mobile" required>
        <h4>Type Your Massage Here....</h4>
        <textarea required></textarea>
        <input type="submit" value="send" id="button">
    </form>
</div>
</body>
</html> 

<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="booking15";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);
}



if (isset($_POST['REQUEST_METHOD'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    // Validate the data
    if (empty($firstName) || empty($lastName) || empty($email) || empty($mobile) || empty($message)) {
        echo "Please fill in all the fields.";
        exit;
    }

    // Send the email
    $to = "thanurathilakzoon.com";
    $subject = "Contact Form Submission";
    $body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nMobile: $mobile\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Failed to send the email.";
    }
}
?>

