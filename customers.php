<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    



</head>


    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h3>WESTERN BANK</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="indexx.php"><h5>Home</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="transaction histroy.php"><h5>Transaction Histroy</h5></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link active" href="#" aria-current="page">
                            <h5>About Us</h5>
                            </a>

                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    


    <body style="background-color: darkseagreen";>
    <?php
      include 'confiq.php';
     $sql = "SELECT * FROM `bank details`";
     $result = mysqli_query($conn,$sql);
  
    ?>

   <div class="container">
     <h1 class="text-center pt-4" style="color : black;">Our Customers</h1>
     <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:white;">
                    <thead style="color :black;">
                        <tr>
                        <th scope="col" class="text-center py-2">S.No.</th>
                        <th scope="col" class="text-center py-2">Account holder Name</th>
                        <th scope="col" class="text-center py-2">E-Mail</th>
                        <th scope="col" class="text-center py-2">Account No.</th>
                        <th scope="col" class="text-center py-2">Account Balance</th>
                        
                        </tr>
                    </thead>
                    <tbody>
            <?php 
               
                    while($rows=mysqli_fetch_assoc($result)){
            ?>
                <tr style="color : black;">
                   <td class="py-2"><?php echo $rows['S.No'] ?></td>
                   <td class="py-2"><?php echo $rows['Name']?></td>
                   <td class="py-2"><?php echo $rows['E-mail']?></td>
                   <td class="py-2"><?php echo $rows['Account No.']?></td>
                   <td class="py-2"><?php echo $rows['Balance']?></td>
                   
                </tr>
            <?php
                }
            ?>
        
                    </tbody> 
                </table>
                </div>
            </div>
        </div> 
    </div>

    <div class="buttons" style="margin: 40px;
    text-align: center; display: flex;
    justify-content: space-evenly; margin-right:300px">
  
   <a href=""></a>

  
<a href="Transaction.php" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">Money Transfer</a> 
<a href="transaction histroy.php" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">Transaction Histroy</a> 
  </div>
  

    <footer class="text-center mt-2 py-3">
        <p>&copy 2021 <b>Shubham Thakur</b></p>
        <p>This is an intern-based-project.</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>