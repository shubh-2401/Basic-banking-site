<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
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
                        <li class="nav-item text-center">
                            <a class="nav-link active" href="transaction histroy.php" aria-current="page">
                            <h5>Transactions History</h5>
                            </a>
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
    <?php
       if ($_SERVER['REQUEST_METHOD'] == 'POST')
       {
         $sender = $_POST['sender'];
         $receiver = $_POST['receiver'];
         $amount = $_POST['amount'];
        
      
           // Connecting to the Database
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "shubh bank";
  
             $conn = mysqli_connect($servername, $username, $password, $dbname);
  
             if(!$conn){
               die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
             }
              else{ 
              // Submit these to a database
              // Sql query to be executed 
               $sql = "INSERT INTO `transactions history` ( `Sender`, `Receiver`, `Amount`, `Date & Time`) VALUES ('$sender', '$receiver', '$amount', current_timestamp());";
               $result = mysqli_query($conn, $sql);
        

 
              if($result){
               echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> Your entry has been submitted successfully!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
              </div>';
              }
              else{
               // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
              </div>';
                 }

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "shubh bank";
    
              $conn = mysqli_connect($servername, $username, $password, $dbname);
    
              if(!$conn){
                  die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
               }
              else{
        
              $sql= "UPDATE `bank details` SET `Balance` = `Balance`+'$amount' WHERE `bank details`.`Name` = '$receiver'";
              $result = mysqli_query($conn, $sql);
              $sql= "UPDATE `bank details` SET `Balance` = `Balance`-'$amount' WHERE `bank details`.`Name` = '$sender'";
              $result = mysqli_query($conn, $sql);
               if($result)
               {
                echo "<h3> Transaction Succesful </h3>";
              }
              else{
                echo "not updated";
               }

              }   
            }

    }

       
    ?>
 <div class="container mt-3" >
 <h1>Easy and Fast Money Transfer..</h1>
    <form action="Transaction.php" method="post">
    <div class="form-group" style=" margin-top: 3rem;">
        <label for="sender"><h4>Sender's Name</h4></label>
        <input type="text" name="sender" class="form-control" id="sender" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="receiver"><h4>Receiver's Name</h4></label>
        <input type="text" name="receiver" class="form-control" id="receiver" aria-describedby="emailHelp"> 
        
    </div>

    <div class="form-group">
        <label for="amount"><h4>Amount</h4></label>
        <input type="integer" class="form-control" name="amount" id="amount"> 
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 </div>

 <footer class="text-center mt-2 py-3">
        <p>&copy 2021 <b>Shubham Thakur</b></p>
        <p>This is an intern-based-project.</p>
    </footer>
 

 </body>
</html>