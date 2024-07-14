<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Animate navigation links on hover
            $("nav a").hover(function() {
                $(this).css("color", "#ffcc00"); // Change text color
                $(this).animate({ fontSize: "20px" }, "fast"); // Increase font size
            }, function() {
                $(this).css("color", "#fff"); // Revert text color
                $(this).animate({ fontSize: "16px" }, "fast"); // Revert font size
            });
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="title">Dashboard - Railway Ticket Booking</title>
    <style>
        .title{
            padding: 50px;
        }
        .content {
            background: url('dash.jpg');
            background-size: cover;
            background-size: cover;
            background-position: center;
            padding: 10px; /* Adjust horizontal padding */
            margin: 0;
            min-height: 100vh;
            height: calc(100vh - 120px);
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center vertically */
            align-items: center;
            width: 100%;
        }

        .content p{
            color: white;
            text-align:center;
            padding-bottom: 500px;
            padding-right: 70px;
            font-size: 20px;
        }
        .content h1{
            color: white;
            text-align:center;
            font-size: 36px; /* Increased font size */
            margin-top: 10px; /* Reduced space above the title */
            margin-bottom: 600px; /* Reduced space below the title */
        }
        

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            background-color: #f5f5f5;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 0px;
            margin-top: -120px;
            text-align: center;
            width: 100%;
            position: relative;
        }
        nav {
            background-color: #444;
            padding: 10px ;
            text-align: center;
            display:flex;
            justify-content: space-between;
            align-items: center;
            width: 100%; 
        }
        
        .logo-left{
            /*top: 50%;*/
            transform: translateY(100%);
            padding-right:1700px ;
            padding-left:170px ;
            align-items: center;
            width:150px;
            height:150px;
        }
        .logo-right {
            padding-left:1100px ;
            padding-right:170px ;
            align-items: center;
            width:150px;
            height:150px;
            transform: translateY(-50%);
        }

        .left-logo {
            left: 10px; /* Adjust the left distance as needed */
        }

        .right-logo {
            width:30px;
            height:40px;
            right: 20px; /* Adjust the right distance as needed */
        }
            
        nav a {
            color: #fff;
            text-decoration: none;
            margin:  10px;
            padding-left: 50px;
            padding-right:100px;
        }
        section {
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            top: 70px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        form {
            margin-top: 20px;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <header>
        <img class="logo-left" src="indianrail.png" alt="Left Logo"> 
        <h1>Railway Ticket Booking</h1>
        <img class="logo-right" src="irctc.png" alt="Right Logo">
    </header>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="#book">Book Ticket</a>
        <a href="#manage">Manage Booking</a>
        <a href="#contact">Contact</a>
        <a href="my_bookings.html">My Bookings</a>
    </nav>
    <div class="content" >
        <h1>Welcome, <?php echo $username; ?> !!!</h1>
        
    </div>
    <section id="book" class="container" margin-top=20px>
        <h2>Book Ticket</h2>
        <form action="book_ticket.php" method="post" onsubmit="return validateForm()">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="starting_station">Starting Station:</label><br>
            <input type="text" id="starting_station" name="starting_station" required><br>
            <label for="destination">Destination:</label><br>
            <input type="text" id="destination" name="destination" required><br>
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" required><br>
            <label for="class">Class:</label><br>
            <select id="class" name="class">
                <option value="economy">Economy</option>
                <option value="business">Business</option>
                <option value="first">First Class</option>
            </select><br>
            <input type="submit" value="Book Ticket">
        </form>
    </section>
    <section id="manage" class="container">
        <h2>Manage Booking</h2>
        <form action="manage_booking.php" method="post">
            <label for="booking_number">Booking Number:</label><br>
            <input type="text" id="booking_number" name="booking_number" required><br>
            <input type="submit" value="Manage Booking">
        </form>
    </section>
    <section id="contact" class="container">
        <h2>Contact Us</h2>
        <p>For any inquiries or support, please contact us:</p>
        <p>Email: info@railwaybooking.com</p>
        <p>Phone: 123-456-7890</p>
    </section>

    <script>
        function validateForm() {
            var startingStation = document.getElementById("starting_station").value;
            var destination = document.getElementById("destination").value;

            if (!isNaN(startingStation) || !isNaN(destination)) {
                alert("Stations cannot have a numeric value.");
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
</body>
</html>
