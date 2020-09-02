<?php

    include('includes/array.php');
    function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
	if(isset($_GET['val'])) {
		$teamMem = strip_bad_chars( $_GET['val'] );
		$team = $teamMembers[$teamMem];
	}
?>
<html>
    <head>
        <title> Team</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/scripts.js"></script>
    </head>
    <body id="team-page">
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
                
                <h1>Timings</h1>
                <h2>  Monday's Closed</h2>
                <h2>  Tuesday - Friday: 03:00 pm to 09:00 pm</h2>
                <h2>  Saturday - Sunday: 02:00 pm to 11:00 pm</h2>
                <h3>  Timings according to GMT(+05:30) Asia/Kolkatta<br><br><br><br><br><br><br><br></h3>
            
                <h1>Location</h1>
                <h2> 6th Main Road,</h2>
                <h2> Jayanagar, Bangalore</h2>
                <h3> Karnataka, India- 080</h3>
                
        
            
            </aside>
        
            <article class="main">
            
             <!--   <img src="http://placeholder.it/300x300" alt="">           -->
               <div id="teammem"> 
                    <h4><?php echo $team["name"]; ?> <br></h4>
                   <br><br>
                        <img src="restaur_images/<?php echo $team["img"]; ?>.jpg" alt="<?php echo $team["name"]; ?>" width="500" height="600">
                   <br><br><br>
                     <h4>   <?php echo $team["designation"]; ?></h4>
                   
                    <p> &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $team["bio"]; ?></p>
                    <br>

            </div><!-- team -->   

	<hr>
	
	<a href="about.php" class="button_previous">&laquo; Back to About Page</a>
            <br><br><br>
            </article>
        
        
            <footer>
            
                &copy; <?php echo date("Y");?> <?php echo "Easement's Restaurant"; ?> &nbsp;<span class="seperator">|</span> Design by <a href="http://www.shweta.com">Shweta Naik</a>
            
            
            
            </footer>
        
        
    
        </div>
    </body>
</html>