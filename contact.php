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
            
             <!--   <img src="http://placeholder.it/300x300" alt="">           -->
                <h4 class="page-heading">Leave your Feedback</h4>
                
                  
              <?php 
                     function has_header_injection($str) {
                        return preg_match("/[\r\n]/",$str);
                    }
                
                    if(isset($_POST['submit'])){
                        $name = trim($_POST['name']);
                        $email = trim($_POST['email']);
                        $stars = trim($_POST['stars']);
                        $msg = $_POST['message'];
                    
                
                    if (has_header_injection($name) || has_header_injection($email)) {
				        die(); // If true it will kill the text sent
				    }
                        
                    if (!$name || !$email || !$stars || !$msg ) {
				        echo '<h4 class="error">All fields required.<br><br><br></h4><a href="contact.php">Try again</a> <br><br><br><img src="restaur_images/image_home.jpg" alt="Home image" width="400" height="300">';
				        exit;
			         }
                
                /*   $to = "shwetamnk19@gmail.com";
                    $subject = "$name sent to a message via Eastment's Contact form";
                    
                    $message = "Name: $name\r\n";
                    $message .= "Email: $email\r\n";
                    $message .= "Stars: $stars\r\n\r\n";
                    $message .= "Message:\r\n$msg";
                
                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                    $headers .= "From: " . $name . " <" . $email . ">\r\n";
                    $headers .= "X-Priority: 1\r\n";
                    $headers .= "X-MSMail-Priority: High\r\n\r\n";
                
                    mail($to, $subject, $message, $headers);  */
                ?>
                
                <h4>Thank you for your Reviews!!</h4>
                <p>We appreciate your effort to take out your time for sending us your reviews. We will work for it...</p>
                
                <h3><a href="index.php">&laquo; Go back to Home Page</a></h3>
                
                 <img src="restaur_images/image_home.jpg" alt="Home image" width="400" height="300">
                
                <?php } else {   ?>  
                
             
                
              
                
              <?php/* */ ?>
                <center>
                <div id="form">
                <form name="myForm" action="dbcon.php" onsubmit="return validateForm()" method="post">
                    
                    <p>
                    <label for="name">Name:</label>
                    <input type="text" name="name" size="10" maxlength="11">
                    </p>
                    
                    <p>
                    <label for="email">Email:</label>
                    <input type="text" name="email" size="50" maxlength="51">
                    </p>
                    
                    <p>
                    <label for="stars">Stars:</label>
                     <input type="text" name="stars" placeholder="1 to 5" size="1" maxlength="1">
                    </p>
                    
                    <p>
                    <label for="message">Your Feedback:<br></label>
                    <textarea name="message" id="message" cols="20" rows="5"></textarea>
                    </p>
                    
                    <p>
                        <input id="submit" type="submit" name="submit" value="submit">
                    </p>
                    
                    </form>
                 
                    <?php   }  ?>      
                </div>
                </center>
                <br><br><br><br><br>
            </article>
        
        
            <footer>
            
                &copy; <?php echo date("Y");?> <?php echo "Easement's Restaurant"; ?> &nbsp;<span class="seperator">|</span> Design by <a href="http://www.shweta.com">Shweta Naik</a>
            
            
            
            </footer>
        
        
    
        </div>
    </body>
</html>