<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['Amount'];

    $sql = "SELECT * from anand where cstID=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from anand where cstID=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("error ! Negative values cannot be transferred please enter the valid amount")';
        echo '</script>';
    }
    else if($amount > $sql1['Balance']) 
    {   echo '<script type="text/javascript">';
        echo ' alert(" error ! Insufficient Balance")';
        echo '</script>';
    }
    else if($amount == 0)
    {    echo "<script type='text/javascript'>";
         echo "alert('error! Zero amount cannot be transferred')";
         echo "</script>";
     }

     else {
                $newbalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE anand set Balance=$newbalance where cstID=$from";
                mysqli_query($conn,$sql);

                $newbalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE anand set Balance=$newbalance where cstID=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO history(`Sender`, `Reciever`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);
                if($query)
                {   echo "<script> alert('Congratulation ! Transaction is Successful ');
                    window.location='history.php';
                    </script>";
                }
                $newbalance= 0;
                $amount =0;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="stylesheet" href="moneytransfer.css">
    <link rel="stylesheet" href="footer.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    <title>Transfer MONEY</title>
    <link rel="icon" href="transaction.png" type="image/x-icon">
</head>
<body style="margin-top" 52px; class="mainbg">
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
    <div class="container">
        <h2 class="center">Easy Money Transfer</h2>
            <?php
                include "connection.php";
                $sid=$_GET["id"];
                $sql ="SELECT * FROM anand where cstID=$sid";
                $output=mysqli_query($conn,$sql);
                if(!$output)
                {
                    echo "Error : ".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($output); 
            ?>
        <form method="post" name="tcredit" class="tabletext" ><br>
            <div>
                <table border="2" class="table">
                    <tr>
                        <th class="text-center">Account No.</th>
                        <th class="text-center">Account Name</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Account Balane(in Rs.)</th>
                    
                    </tr>
                    <tr>
                        <td class="tabledata"><?php echo $rows['cstID'] ?></td>
                        <td class="tabledata"><?php echo $rows['Name'] ?></td>
                        <td class="tabledata"><?php echo $rows['E-mail ID'] ?></td>
                        <td class="tabledata"><?php echo $rows['Balance'] ?></td>
                    </tr>
                </table>
            </div>
            <br><br><br>
            <div class="transferto">
                <label><b>Transfer To:</b></label>
                <select name="to" class="control-select" required>
                    <option value="" disabled selected>Choose account</option>
                    <?php
                       include "connection.php";
                        $sid=$_GET['id'];
                        $sql = "SELECT * FROM anand where cstID!=$sid";
                        $output=mysqli_query($conn,$sql);
                        if(!$output)
                        {
                            echo "Error ".$sql."<br>".mysqli_error($conn);
                        }
                        while($rows = mysqli_fetch_assoc($output)) {
                    ?>
                        <option class="table" value="<?php echo $rows['cstID'];?>" >
                        
                            <?php echo $rows['Name'] ;?> ( Available Balance: 
                            <?php echo $rows['Balance'] ;?> ) 
                    
                        </option>
                    <?php 
                        } 
                    ?>
                </select>
            </div>
            
                <div class="amountclass">
                        <label><b>Amount:</b></label>
                        <input type="number" class="form-control" name="Amount" required>   
                        <br><br>
                    <div class="cntbtn">
                        <button class="btn btnmt" name="submit" type="submit" id="submit" >Transfer Money</button>
                            
                    </div>
                </div>
        </form>
    </div>
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

