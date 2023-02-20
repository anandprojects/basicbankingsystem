<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="stylesheet" href="historystyle.css">
    <link rel="stylesheet" href="footer.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    <title>HISTORY</title>
    <link rel="icon" href="history.jpg" type="image/x-icon">
</head>
<body class="mainback">
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
<section  class="container">

        <h2 class="head">Transfer History</h2>
        <br>
        <div class="tableback">
        <table border='1' class="table">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date and Time</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                include "connection.php";
                $sql ="select * from history";
                $query =mysqli_query($conn, $sql);
                while($rows = mysqli_fetch_assoc($query))
                {
            ?>
                <tr style="color : black;">
                <td class="py-2"><?php echo $rows['ID']; ?></td>
                <td class="py-2"><?php echo $rows['Sender']; ?></td>
                <td class="py-2"><?php echo $rows['Reciever']; ?></td>
                <td class="py-2"><?php echo $rows['Amount']; ?> </td>
                <td class="py-2"><?php echo $rows['Date and Time']; ?> </td>
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