<html>
    <head>
        <title> Today's Menu</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/scripts.js"></script>
    </head>
    <body id="menu-page">
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
                <h1>Dated:</h1>
                <h2><?php echo date('d-M-Y');?></h2>
                <br><br><br><br><br>
                <h1>For Orders</h1>
                <h2>For Home delivery orders, Contact:1234567890</h2>
                <h2>Available during open hours</h2>
            
            </aside>
        
            <article class="main">
            
             <!--   <img src="http://placeholder.it/300x300" alt="">           -->
                <div id="home-image">
                
                   <!--<img src="restaur_images/image_2.jpg" alt="Home image">  --> 
                    <video width="400" height="300" controls autoplay>
                    <source src="restaur_images/restaurant_food1jpg.mp4" type="video/mp4">
                    <!-- <source src="movie.ogg" type="video/ogg">   -->
                    Your browser does not support the video tag.
                    </video>
                
                </div>
                
                <div id="profile-info">
                
                    <h4>Veg Menu</h4>
                
                </div>
                
                <div class="description">
                
                </div>
                
            <table style="width:100%">
            <tr>
                <th>ITEMS</th>
                <th>PRICE</th>
            </tr>
            <tr>
                <td>Veg. Tomato Soup</td>
                <td>60</td>
            </tr>
            <tr>
                <td>Gobi Manchurian</td>
                <td>90</td>
                </tr>
            <tr>
                <td>Veg Noodles</td>
                <td>60</td>
                </tr>
            <tr>
                <td>Veg. Kolhapuri</td>
                <td>100</td>
                </tr>
            <tr>
                <td>Butter Naan</td>
                <td>25</td>
                </tr>
            </table>
                
            
            <div id="profile-info">
                
                    <h4>Non-Veg Menu</h4>
                
                </div>
                
            <table style="width:100%">
            <tr>
                <th>ITEMS</th>
                <th>PRICE</th>
            </tr>
            <tr>
                <td>Chicken Soup</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Special Fish Curry<sup>&reg;</sup></td>
                <td>80</td>
                </tr>
            <tr>
                <td>Mutton Handi</td>
                <td>180</td>
                </tr>
            <tr>
                <td>Chicken Kalmi Kabab</td>
                <td>160</td>
                </tr>
            <tr>
                <td>Chicken Biryani</td>
                <td>180</td>
                </tr>
            </table>
                
             <div id="profile-info">
                
                    <h4>Desserts</h4>
                
                </div>
            
            <table style="width:100%">
            <tr>
                <th>ITEMS</th>
                <th>PRICE</th>
            </tr>
            <tr>
                <td>Mango+Vanilla Icecream</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Orange Juice</td>
                <td>40</td>
                </tr>
            <tr>
                <td>Lassi</td>
                <td>30</td>
                </tr>
            <tr>
                <td>Gulab Jamun</td>
                <td>60</td>
                </tr>
            <tr>
                <td>Kheer</td>
                <td>70</td>
                </tr>
            </table>
                
                
            <p><br><br>For Orders and Home Delivery, <br>
                <h4>Contact: 1234567890</h4></p>
            
            </article>
        
        
            <footer>
            
                &copy; <?php echo date("Y");?> <?php echo "Easement's Restaurant"; ?> &nbsp;<span class="seperator">|</span> Design by <a href="http://www.shweta.com">Shweta Naik</a>
            
            
            
            </footer>
        
        
    
        </div>
    </body>
</html>