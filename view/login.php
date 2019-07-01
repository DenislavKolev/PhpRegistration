<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <nav>
        <div>
            <a href="../index.php">Home</a>
        </div>
        <div>
            <ul>
                <li>
                    <a href="../view/login.php">Login |</a>
                </li>
                <li>
                    <a href="../view/register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <form action="../php/login.php" method="POST">
        <h1>Login</h1>
        <div>
            <input type="text" id="username" name="username" placeholder="Username" >
        </div>
        <div>
            <input type="password" id="pass" name="pass" placeholder="Password" >
        </div>
        <?php
            if(session_status() == PHP_SESSION_ACTIVE){
                if($userData['password'] != md5($pass)){
                    echo "<div>Wrong username or password</div>";
                }else{
                    header( 'Location: ../view/home.php' ); //add home page
                }
            }
        ?>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</main>
</body>
</html>
