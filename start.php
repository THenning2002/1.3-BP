<!DOCTYPE html>
<html>

<head>
    <title>Log in</title>
    <link rel="stylesheet" href="mijnstyle.css"/>
    <style>
        body{
            background-image: url("Login.png");
        }
    </style>
</head>

<body>
    <div class="Login">
    <form method="POST">
        <label for="username"> Username:</label>
        <input type="text" name="username" id="username" placeholder="Username"/>
        <br/> 
        <label for="wachtwoord"> Password:</label>
        <input type="password" name="wachtwoord" id="wachtwoord" placeholder="Password"/>
        <br/> 
        <input type="submit"name="btnLogin" value="Login"/>
    </form>
    </div>

    <?php

    if (isset($_POST['btnLogin']))
    {
        // de && is nodig om 2 dingen te koppelen dus gebruikersnaam en wachtwoord 
        if($_POST['username']=="Admin" && $_POST['wachtwoord']=="Geheim")
        {
            // Door verwijzen naar andere pagina
            Header("Location: home.php");
        }else echo "Uw gebruikersnaam en/of wachtwoord is onjuist!";
    }

    ?>







</html>