<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/scripts.js"></script>
    </head>
    <body id="contact">
        <div class="container">
            <header class="header">
            
            
                <a class="link-title" href="/">EASEMENT'S RESTAURANT</a>
            
            
            
            </header>
        
        
            <nav class="menu">
            
                <a href="/">Home</a>&nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;
                 <a href="menu.php">Today's Menu</a>&nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;
                <a href="about.php">About us</a>&nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; 
                <a href="contact.php">Contacts</a>
                
            
            
            
            
            </nav>
        
            <aside>
            
                <h1>Hope you enjoyed our service</h1>
                <h2>Please Leave your review or any thoughts and Feedbacks for us..</h2>
                <br><br><br><br><br>
                <h1>For Orders</h1>
                <h2>For Home delivery orders, Contact:1234567890</h2>
                <h2>Available during open hours</h2>
            
            </aside>
        
            <article class="main">
            
                <?php
    

                        $name = trim($_POST['name']);
                        $email = trim($_POST['email']);
                        $stars = trim($_POST['stars']);
                        $message = $_POST['message'];

                        if(!empty($email)){

                            $conn = new mysqli("localhost","root","","restform");

                            if(mysqli_connect_error()){
                                die('Connect error .('.mysqli_connect_errno().')'.mysqli_connect_error());
                            }
                            else
                            {
                                $sql = "INSERT INTO restform1(name,email,stars,message) values('$name','$email','$stars','$message')";
                                if($conn->query($sql)){
                                  //  echo "New record inserted Successfully";
                        ?>
                
                <h4>Thank you for your Reviews!!</h4>
                <p>We appreciate your effort to take out your time for sending us your reviews. We will work for it...</p>
                
                <h3><a href="index.php">&laquo; Go back to Home Page</a></h3>
                
                 <img src="restaur_images/image_home.jpg" alt="Home image" width="400" height="300">
                
                        <?php
                
                             }
                                else
                                {
                                    echo "Error: ".$sql."".$conn->error;
                                }
                                $conn->close();

                            }

                        }
                        else
                        {
                            echo '<h4 class="error">All fields required.<br><br><br></h4><a href="contact.php">Try again</a> <br><br><br><img src="restaur_images/image_home.jpg" alt="Home image" width="400" height="300">';
				        exit;
                        }


                    ?>

                  
             
                
              
                
             
            </article>
        
        
            <footer>
            
                &copy; <?php echo date("Y");?> <?php echo "Easement's Restaurant"; ?> &nbsp;<span class="seperator">|</span> Design by <a href="http://www.shweta.com">Shweta Naik</a>
            
            
            
            </footer>
        
        
    
        </div>
    </body>
</html>


