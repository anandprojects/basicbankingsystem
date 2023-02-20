<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="stylesheet" href="customer.css"> 
    <link rel="stylesheet" href="footer.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    <title>Customer</title>
    <link rel="icon" href="customers.jpg" type="image/x-icon">
</head>
    <section>
        <nav class="navbar">
                <ul class="list-nav">
                <div class="logo"><a href="main.php" class="logohead"><img src="logoo.png" alt="logo" class="logotxt"> ADS BANK</a> </div>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="main.php">About Us</a></li>
                    <li><a href="customer.php">Customer</a></li>
                    <li><a href="history.php">History</a></li>
                </ul>
                <div class="rightnav">
                    <input type="text" name="search" id="search">
                    <button style="margin-bottom: 10px;" class="btn">Search</button>
                </div>
    </nav>
    </section>


<body>
    <?php
            include "connection.php";
			$sql = "SELECT * FROM anand";
            $output=mysqli_query($conn,$sql);
    ?>
    <section class="container">
        <div>
            <h1> Customer List </h1>
            
            <table class="table" border="1">
                <thead>
                    <tr style="background-color: green;">
                    <th class="thead1" scope="col">Cust ID</th>
                    <th class="thead1" scope="col">Name</th>
                    <th class="thead1" scope="col">E-Mail</th>
                    <th class="thead1" scope="col">Balance (Rs.)</th>
                    <th class="thead1" scope="col">Transfer</th> 
                   </tr>
                </thead>
                
                <tbody>
                    <?php 
                        while($rows=mysqli_fetch_assoc($output)){
                    ?>
                    <tr class="thead">
                        <td class="thead"><?php echo $rows['cstID'] ?></td>
                        <td class="thead"><?php echo $rows['Name']?></td>
                        <td class="thead"><?php echo $rows['E-mail ID']?></td>
                        <td class="thead"><?php echo $rows['Balance']?></td> 
                        <td> <a href="moneytransfer.php?id=<?php echo $rows['cstID']?>"> <button  type="button" class="btn">Transfer money </button> </a></td> 
                    </tr>

                    <?php
                        }
                    ?>
                
                </tbody>

            </table>
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