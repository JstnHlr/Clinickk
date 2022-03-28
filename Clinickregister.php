<?php

    include ("config.php");

    error_reporting(0);

    if  (isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $cpassword = md5($_POST['cpassword']);

            if ($password == $cpassword)
                {
                    $sql = "SELECT * FROM users WHERE email='$email'";
                    $result = mysqli_query($conn, $sql);
                    
                    if (!$result -> num_rows > 0)
                        {
                            $sql = "INSERT INTO users(username, email, password)
                                    VALUES ('$username', '$email', '$password')";

                            $result = mysqli_query($conn, $sql);

                            if ($result)
                                {
                                echo "<script>alert('Nice! Nakapagregister na ampota')</script>";
                                $username = "";
                                $email = "";
                                $_POST['password'] = "";
                                $_POST['cpassword'] = "";
                                }
                                else
                                    {
                                        echo "<script>alert('Parang may hindi tama')</script>";
                                    }
                            }
                            else 
                                {
                                    echo "<script>alert('Awtz! May ganyang email na dito')</script>";
                                }
                }
                else 
                {
                    echo "<script>alert('Magkaiba ung password ampota')</script>";
                }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
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
                    <h2> Register <br> here </h2>
                </section>

                <div id="input-container">
                    <label> Username </label>
                    <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
                </div>

                <div id="input-container">
                    <label> Email </label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>

                <div id="input-container">
                    <label> Password </label>
                    <input type="password" id="password" name="password" value="<?php echo $_POST['password']; ?>" required> 
                </div>

                <div id="input-container">
                    <label> Confirm Password </label>
                    <input type="password" id="cpassword" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                </div>

                <button class="login" name="submit"> register </button>>
                <p> Already have account? <a href="Clinicklogin.php"> Login Here</a></p>

            </form>
            
        </div>
    </div>
</body>
</html>