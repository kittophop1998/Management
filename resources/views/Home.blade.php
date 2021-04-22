<html lang="en">

<!-- Logo accl -->
<link rel="shortcut icon" type="image/x-icon" href="https://www.img.in.th/images/7722f7aaabce1aff9a3e2175d5d8d7ca.png" />

  <title>ระบบจัดการภายใน</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>


<title>Tutorialspoint.com</title>
<link href = "css/bootstrap.min.css" rel = "stylesheet">

<style>
            *{
  	            box-sizing: border-box;
  	            font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	            font-size: 16px;
  	            -webkit-font-smoothing: antialiased;
  	            -moz-osx-font-smoothing: grayscale;
            }
        body {
  	        background-color: #FFCC99;
        }
        .login {
  	        width: 400px;
  	        background-color: #ffffff;
  	        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	        margin: 100px auto;
        }
        .login h1 {
  	        text-align: center;
  	        color: #5b6574;
  	        font-size: 24px;
  	        padding: 20px 0 20px 0;
  	        border-bottom: 1px solid #dee0e4;
        }
        .login form {
  	        display: flex;
  	        flex-wrap: wrap;
  	        justify-content: center;
  	        padding-top: 20px;
        }
        .login form label {
  	        display: flex;
  	        justify-content: center;
  	        align-items: center;
  	        width: 50px;
  	        height: 50px;
  	        background-color: #3274d6;
  	        color: #ffffff;
        }
        .login form input[type="password"], .login form input[type="text"] {
            width: 310px;
            height: 50px;
            border: 1px solid #dee0e4;
            margin-bottom: 20px;
            padding: 0 15px;
        }
        .login form input[type="submit"] {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color: #3274d6;
            border: 0;
            cursor: pointer;
            font-weight: bold;
            color: #ffffff;
            transition: background-color 0.2s;
        }
        .login form input[type="submit"]:hover {
	        background-color: #2868c7;
            transition: background-color 0.2s;
        }
        
        </style>
        <link href="style.css" rel="stylesheet" type="text/css">

	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form method="get" action="/login">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text"   id="txtUsername" required name="txtUsername" placeholder="Username">
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password"   id="txtPassword" required name="txtPassword" placeholder="Password">
				<input type="submit" value="Login">
			</form>
		</div>


