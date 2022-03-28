<?php 

    include ("config.php");
    error_reporting(0);

    session_start();

    if (isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);

            if ($result -> num_rows > 0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['username'];
                    header("Location: listdoctor.php");
                }
                else 
                    {
                        echo "<script> alert('Wtf! Mali ung email mo o kaya password')</script>";
                    }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="clinickloginregister.css">
</head>
<body>

    <div class="split-screen">

        <div class="left">
            <section class="header">
                <h1> Project Clinick </h1>
             </section>
        </div>


        <div class="right">
            <form action="" method="POST">

                <section class="header">
                    <h2> Login your <br> account </h2>
                </section>

                <div class="input-container">
                    <label> Email </label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>

                <div class="input-container">
                    <label> Password </label>
                    <input type="password" id="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>

                <button class="login" type="submit" name="submit"> login </button>>
                <p> No account? <a href="Clinickregister.php"> Register Here</a></p>


                <div class="input-container-socialmedia">
                    <button class="facebook" type="submit"> login to facebook </button><br>
                    <button class="google" type="submit" name="submit"> login to google </button>
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>