
<html>
<head>
  <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="createuser.css">
</head>
   <body style="background-image: url('sid.jpg'); background-size: 1500px 1200px; background-repeat: no-repeat;">

<?php include('nav.php') ?>

<div class="container">

        <h1 style="font-family: Times New Roman,Times, serif; height: 100px; padding-top: 30px;" >Welcome To I-Bank</h1>

  <div>
 
    <div class="bg" style="background-image: url('vi.jpg'); background-size: 600px 800px ; background-repeat: no-repeat ;">
         
  
    <br>
    <br>
    <br>
    <div class="center" style="margin-top: 100px; padding-top: 300px;">
      <ul>
        <li class="operations"><a href="transfer_money.php" style="text-decoration: none;"><button class="btn" id="red"><img src="user1.jpg" height="90px"><b><br>View All Users</b></button></a></li>
        <li class="operations"><a href="transfer_money.php" style="text-decoration: none;"><button class="btn" id="blue"><img src="e.jpg" height="90px"><br><b>Transfer Money</b></button></a></li>
        <li class="operations"><a href="transactionhistory.php"style="text-decoration: none;"><button class="btn" id="green"><img src="history.png" height="90px"><b><br>Transfer History</b></button></a></li>
      </ul>
    </div>
    </div>
  </div>
</div>

  <?php include('footer.php') ?>
  
</body>
</html>