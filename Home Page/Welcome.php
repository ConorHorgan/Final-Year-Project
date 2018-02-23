
<?php
    session_start();
?>
<!Doctype html> 
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="/Home Page/Welcome.css">
    </head>
        <body>
            <header>
                <nav>
                    <div class="main.wrapper">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                        </ul>
                        
                        <div class="nav-login">
                           <form action="login.inc.php" method="POST">
                               <input type="text" name="uid" placeholder="Employee Id or e-mail">
                               <input type="password" name="pwd" placeholder="password">
                               <button type="submit" name="submit">Login</button>
                              
                               <input type="button" onclick="location.href='internsignup.php';" value="Sign Up" />
                           </form>
                        </div>
                    </div>
                </nav>
            </header>
            <?php
                if(isset($_SESSiON['u_id'])) {
                    echo "Welcome {$_SESSiON['u_first']}";  
                }
            
            ?>
            
            
        </body> 
</html>
