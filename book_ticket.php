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
    <title class="title">Manage Booking - Railway Ticket Booking</title>
    <style>
        .title{
            padding: 50px;
        }
        .parent-container{
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 10px;
            top: 70px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
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
            margin-bottom: 20px; /* Reduced space below the title */
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
            font-size:25px;
            margin-top: -120px;
            text-align: center;
            width: 100%;
            position: relative;
        }
        nav {
            background-color: #444;
            padding: 25px ;
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
            transform: translateY(-80%);
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
            text-align: center;
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
        .buttons {
            margin-top: 20px;
            padding-left:800px;
        }
        .buttons button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .buttons button:hover {
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
<nav></nav>
<div class="parent-container">
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $startingStation = $_POST["starting_station"];
    $destination = $_POST["destination"];
    $date = $_POST["date"];
    $class = $_POST["class"];

    // Add your validation and processing logic here

    // For now, let's just display the submitted data
    echo "<h2>Booking Confirmation</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Starting Station: $startingStation</p>";
    echo "<p>Destination: $destination</p>";
    echo "<p>Date: $date</p>";
    echo "<p>Class: $class</p>";
    }
    ?>
</div>
<div class="buttons">
        <button onclick="location.href='login_1.html'">Login to Continue</button>
        <button onclick="location.href='min_pro.html'">Back to Home</button>
</div>
</body>
</html>





