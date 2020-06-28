<?php

    session_start();
    
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
    {
        header("location: welcome.php");
        exit;
    }
    
    require_once "config.php";
    
    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty(trim($_POST["username"])))
        {
            $username_err = "Please enter username.";
        } 
        else
        {
            $username = trim($_POST["username"]);
        }

        if(empty(trim($_POST["password"])))
        {
            $password_err = "Please enter your password.";
        } 
        else
        {
            $password = trim($_POST["password"]);
        }
        
        // Validate credentials
        if(empty($username_err) && empty($password_err))
        {
            $sql = "SELECT id, username, password FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($link, $sql))
            {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = $username;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt))
                {
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt))
                        {
                            if(password_verify($password, $hashed_password))
                            {
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;                            
                                header("location: welcome.php");
                            } 
                            else 
                            {
                                $password_err = "The password you entered was not valid.";
                            }
                        }
                    } 
                    else
                    {
                        $username_err = "No account found with that username.";
                    }
                } 
                else
                {
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
    }

    include_once('header.php');
?>
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h2>Login</h2>
                    <p>Please fill in your credentials to login.</p>
                    <div class="form-gp <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <i class="ti-user"></i>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Username">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>    
                    <div class="form-gp <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <i class="ti-lock"></i>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="submit-btn-area">
                        <button type="submit" class="btn btn-primary" >LOGIN</button>
                    </div>
                    <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                    <a href="../members/adminLogin.php">Administration</a>
                </form>
            </div>
        </div>    
    </div>
<?=
    include_once('footer.php');
?>