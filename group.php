<?php 
    
    require_once "functions.php";
    StartLoginSession();
    $userdata = GetUserData($_SESSION["username"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            display : flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header{
            display : flex;
            justify-content : space-between;
            flex-direction: row;
            align-items : center;
            padding-inline : 2vw;
            border-bottom: 1px solid black;
            background-color: #F14A16;
            color:#3A3845;
        }

        .header-right {
            display:flex;
            flex-direction:row;
            align-items : center;
            
        }

        .header-right a, .header-right form{
            padding-inline:1vw;
            color:white;
        }

        .content {
            display : flex;
            flex-direction: column;
            height : 100vh;
            margin-inline: 3vw;
            margin-block : 5vh;
        }

        .footer {
            border-top : 1px solid black;
            text-align : center;
            align-items : center;
            background-color : #041562;
            color : white;
        }

        .header form > button {
            background-color:#35589A;
            border-radius:13px;
            border:0px solid black;
            padding:5px;
            color:white;
        }
        
        .header form > button:hover {
            background-color:darkred;
        }

    </style>
</head>
<body>

<div class="header">
        <div class="header-left">
            <h1>Assigner</h1>
        </div>

        <div class="header-right">   
            <a href="index.php">Home</a>
            <a href="">My Profile</a>
            <a href="mygroup.php">My groups</a>
            <a href="">Notifications</a>
            <form action="logout.php" method="post">
                <button type="submit" name="logout" onclick="return confirm('Confirm Logout');">Logout</button>
            </form>
        </div>
    </div>


    <div class="content">
        
        

    </div>

    <div class="footer">
        <p>Created by : TESLA TEAM</p>
    </div>

</body>
</html>