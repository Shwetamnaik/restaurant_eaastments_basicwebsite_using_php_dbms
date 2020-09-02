
<html>
    <head>
        <title> About</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/scripts.js"></script>
    </head>
    <body id="about-page">
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
                <div id="home-image">
                
                    <img src="restaur_images/image_2.jpg" alt="About us image"> &nbsp; &nbsp;<br/><br/>
                    <p><br/><br/></p>
                    <img src="restaur_images/image_home.jpg" alt="Home image">
                </div>
                
                <div id="profile-info">
                
                    <h4>DELICIOUS!!</h4>
                    <h4>EXOTIC!!</h4>
                    <h4>MOUTH WATERING!!!</h4>   
                    
                
                </div>
                
                <div class="description">
                
                </div>
                
            <p>Easement's Restaurant is one of the best exotic, traditional restaurant throughout the city. It has various dishes listed in the menu which has a pinch of traditional with exotic taste in every dishes made. </p>
                
            <p>The menu here is long and gives you everything the EASTMENT'S has to offer with huge discounts for every dishes, with 100% discount for birthday boy/girl. </p>
                
            <p>For Orders and Home Delivery, Contact: 1234567890</p>
                
            <p>Please Visit and Have Fun...!!!!<br/> ENJOY YOUR LIFE...!!!</p>
                
            <p>Our Average Reviews(out of 5):<br>
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </p>  
             
                    
            <?php include('includes/array.php');?>    
            <p><h4>Team Members:</h4>
                <br>
                Here are our dedicated team members of Eastment's Reataurant... Feel free to read about them. Just click on their names given below... 
                </p>
            <ul>
                <?php foreach($teamMembers as $team => $val){  ?>
                
                <li><a href="team.php?val=<?php echo $team;?>"><?php echo $val["name"];?></a> --> <?php echo $val["designation"];?></li>    
                
                <?php } ?>
                
            </ul>
            
            </article>
        
        
            <footer>
            
                &copy; <?php echo date("Y");?> <?php echo "Easement's Restaurant"; ?> &nbsp;<span class="seperator">|</span> Design by <a href="http://www.shweta.com">Shweta Naik</a>
            
            
            
            </footer>
        
        
    
        </div>
    </body>
</html>