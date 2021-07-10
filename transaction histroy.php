<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction histroy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    

</head>


    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h3>Western Bank</h3></a>
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
                            <a class="nav-link active" aria-current="page" href="customers.php"><h5>Our Customers</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><h5>About Us</h5></a>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </nav>
  </header>

     <body style="background-color: darkseagreen";>
      
      <div class="container">
      <h2 class="text-center pt-4" style="color : black;">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
      <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'confiq.php';

            $sql = " SELECT * FROM `transactions history` ";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['S.No']; ?></td>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Amount']; ?> </td>
            <td class="py-2"><?php echo $rows['Date & Time']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
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