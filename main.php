<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mainstyle.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <title>ADS BANK</title>
        <link rel="icon" href="logoo.png" type="image/x-icon">
        <style>
            
.footer {
    position: relative;
    width: 100%;
    background:#0790f1;
    min-height: 100px;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.social-icon,
.menu {
    position: relative;
    display: flex;
    justify-content: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
    list-style: none;
}

.social-icon__link {
    font-size: 22px;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
}
.social-icon__link:hover {
    transform: translateY(-10px);
}

.menu__link {
    font-size: 17px;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
    text-decoration: none;
    opacity: 0.75;
    font-weight: 300;
}

.menu__link:hover {
    opacity: 1;
}

.footer p {
    color: #fff;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 15px 0 10px 0;
    font-size: 13px;
    font-weight: 300;
}
        </style>
    </head>
        <body>
        <nav class="navbar">
                <ul class="list-nav">
                    <div class="logo"><a href="main.php" class="logohead"><img src="logoo.png" alt="logo" class="logotxt"> ADS BANK</a> </div>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="#footer">About Us</a></li>
                    <li><a href="customer.php">Customer</a></li>
                    <li><a href="history.php">History</a></li>
                </ul>
                <div class="rightnav">
                    <input type="text" name="search" id="search">
                    <button style="margin-bottom: 10px;" class="btn">Search</button>
                </div>
            </nav>
            <section class="backgroundof1st">
                    <div class="mainclass">
                        <div class="firstcol">
                            <h1 class="heading"> Welcome to ADS BANK </h1>
                            <p class="para1"> We are here to provide you an best Service. We are the in the Top 10 banks in the world at rank 4 and we are trying to be at position 1st. Our services and intrest rate are very efficient, and we recept our customer because the saying that customer are god for us . Thank You !!! </p>
                        </div>
                        <div class="secondcol">
                            <a href="customer.php"><img src="logoo.png" alt="img1""></a>
                        </div>
                    </div>
            </section>
            

            <section class="secmain">
                <span style="padding-right: 68px;" >
                    <h2 class="heading2">TRASACTION</h2>
                    <a href="customer.php"><button class="btn">Transfer Money</button></a>
                    <p class="subhead">By clicking on transaction button you will see the all customers list. you can make transaction by simply click on transfer now button and you will make the transction to any other customer in the bank. the process of an transaction is very simple and easy.</p>
                </span>
                <div class="otherimg">
                    <img src="transaction.png" alt="img2">
                </div>
            </section>
            
            <section class="secmain secleft">
                <div class="pad">
                    <h2 class="heading2">Customer's List</h2>
                    <a href="customer.php"><button class="btn">Customer List</button></a>
                    <p class="subhead">By clicking on the customer button you will seen the our customer list. the basic information that is their name , e-mail, available balance and most important the transfer money feature.you can make transaction by simply click on transfer now button and you will make the transction to any other customer in the bank. we are maintained the 10 customer record in our wesite. thank you! </p>
                </div>
                <div class="otherimg2">
                    <img src="customers.jpg" alt="img3">
                </div>
            </section>

            <section class="secmain">
                <span>
                    <h2 class="heading2">HISTORY</h2>
                    <a href="history.php"> <button class="btn">History</button> </a>
                    <p class="subhead"> By clicking on the history button you will see the all past transaction that will happen on the website and you can also view the available balance in the acoount of the customer. In the history section we maintain the wll defined table that contain the sender name , Receiver name , available balance and most important the date and time. beacuse you will seen on which date the transaction is Successful. Thank you !!!
                    </p>
                </span>
                <div class="otherimg3">
                    <img src="history.jpg" alt="img4">
                </div>
            </section>

            <section>
            <footer class="footer" id="footer">
                    <ul class="social-icon">
                      <li class="social-icon__item"><a class="social-icon__link" href="https://facebook.com/">
                          <ion-icon name="logo-facebook"></ion-icon>
                        </a></li>
                      <li class="social-icon__item"><a class="social-icon__link" href="https://twitter.com/">
                          <ion-icon name="logo-twitter"></ion-icon>
                        </a></li>
                      <li class="social-icon__item"><a class="social-icon__link" href="https://linkedin.com/">
                          <ion-icon name="logo-linkedin"></ion-icon>
                        </a></li>
                      <li class="social-icon__item"><a class="social-icon__link" href="https://instagram.com/">
                          <ion-icon name="logo-instagram"></ion-icon>
                        </a></li>
                    </ul>
                    <ul class="menu">
                      <li class="menu__item"><a class="menu__link" href="main.php">Home</a></li>
                      <li class="menu__item"><a class="menu__link" href="#footer">About</a></li>
                      <li class="menu__item"><a class="menu__link" href="moneytransfer.php">Services</a></li>
                      <li class="menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
                
                    </ul>
                    <p>&copy; 2025 www.adsbank.in | Made by ads with &#10084; | All Rights Reserved</p>
                  </footer>
            </section>

        </body>
</html>