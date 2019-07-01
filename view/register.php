<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
    <form action="../php/register.php"  method="POST">
        <h1>Register</h1>
        <div>
            <input type="text" id="username" name="username" placeholder="Username" required>
        </div>
        <?php
           if(session_status() == PHP_SESSION_ACTIVE){
               if($queryCheckName -> num_rows != 0){
                   echo '<div>The name is already used!</div>';
               }
           }
        ?>
        <div>
            <input type="email" id="email" name="email" placeholder="E-mail" required>
        </div>
        <?php
           if(session_status() == PHP_SESSION_ACTIVE){
               if ($queryCheckEmail -> num_rows !=0){
                   echo '<div>The email is already used!</div>';
               }
               if($query){
                   header( 'Location: ../view/home.php' ); //add home page
               }
           }
        ?>
        <div>
            <input type="password" id="pass" name="pass" placeholder="Password" required minlength=8>
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</main>
</body>
</html>





