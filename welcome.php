<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="img/aslogo.jpg">


    <title>Bikes&mdash;AS Group</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
       <P style="    margin-right: 900px;
    font-size: x-large;
    font-family: cursive;">Before Booking you have to submit Documents!</P>
         <p style="font-family:cursive; margin-right: 1300px; font-size:large;"><b>Driving Licence</b></p>
        <form action="file.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="uploadfile" value="" />
         <input type="submit" name="upload" style="    margin-right: 800px;" />
      </form>
     <section class="bikes">
        <div class="bike">
            <img src="img/bike6.jpg" alt="Bike 1" class="bike__img">
            
            <h5 class="bike__name">Alibag</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Alibag</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>5 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>8 Km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>Rs 1,000.00</p>
            </div>
            <a href="booknow.html">
            <button class="btn bike__btn">Book Now </button></a>
        </div>
        <div class="bike">
            <img src="img/bike5.png" alt="Bike 2" class="bike__img">
            <svg class="bike__like">
                <use xlink:href="img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="bike__name">Pune</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Pune</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>6 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>8 Km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>Rs 1,000.00</p>
            </div>
            <a href="booknow.html">
            <button class="btn bike__btn">Book Now  </button></a>
        </div>
        <div class="bike">
            <img src="img/bike4.png" alt="Bike 3" class="bike__img">
            <svg class="bike__like">
                <use xlink:href="img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="bike__name">Jalgoan</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Jalgoan</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>4 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>10 km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>RS 1000.00</p>
            </div>
               <a href="booknow.html">
            <button class="btn bike__btn">Book Now  </button></a>
        </div>
        <div class="bike">
            <img src="img/bike6.jpg" alt="Bike 1" class="bike__img">
            
            <h5 class="bike__name">Nagoan</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Nagoan</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>5 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>8 Km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>Rs 1,000.00</p>
            </div>
               <a href="booknow.html">
            <button class="btn bike__btn">Book Now </button></a>
        </div>
        <div class="bike">
            <img src="img/bike5.png" alt="Bike 2" class="bike__img">
            <svg class="bike__like">
                <use xlink:href="img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="bike__name">Pimpri</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Pimpri</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>6 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>12 Km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>Rs 1,000.00</p>
            </div>
               <a href="booknow.html">
            <button class="btn bike__btn">Book Now  </button></a>
        </div>
        <div class="bike">
            <img src="img/bike4.png" alt="Bike 3" class="bike__img">
            <svg class="bike__like">
                <use xlink:href="img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="bike__name">Mandawa</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Mandawa</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>4 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>10 km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>RS 1000.00</p>
            </div>
               <a href="booknow.html">
            <button class="btn bike__btn">Book Now  </button></a>
        </div>
        <div class="bike">
            <img src="img/bike6.jpg" alt="Bike 1" class="bike__img">
            
            <h5 class="bike__name">Maval</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Maval</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>5 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>8 Km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>Rs 1,000.00</p>
            </div>
               <a href="booknow.html">
            <button class="btn bike__btn">Book Now </button></a>
        </div>
        <div class="bike">
            <img src="img/bike5.png" alt="Bike 2" class="bike__img">
            <svg class="bike__like">
                <use xlink:href="img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="bike__name">Revdanda</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Revdanda</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>6 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>10 Km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>Rs 1,000.00</p>
            </div>
               <a href="booknow.html">
            <button class="btn bike__btn">Book Now  </button></a>
        </div>
        <div class="bike">
            <img src="img/bike4.png" alt="Bike 3" class="bike__img">
            <svg class="bike__like">
                <use xlink:href="img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="bike__name">Chinchwad</h5>
            <div class="bike__location">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Chinchwad</p>
            </div>
            <div class="bike__rooms">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>4 Hrs</p>
            </div>
            <div class="bike__area">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-expand"></use>
                </svg>
                <p>10 km
                    
                </p>
            </div>
            <div class="bike__price">
                <svg>
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <p>RS 1000.00</p>
            </div>
               <a href="booknow.html">
            <button class="btn bike__btn">Book Now  </button></a>
        </div>
    </section>
</body>
</html>