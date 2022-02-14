<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .container-fluid-sm ul li:hover{
          background-color:  #00C1FE
         }
        
      </style>
</head>
<body style="overflow-x: hidden; ">
    <div class="row align-items-start">
      <?php
        include 'sidebarpart.php';
      ?>
      <div class="col" style="padding: 0;width: 100%; background-color: #E5E5E5; height: 100vh;">
        <?php
          include 'navebar.php';
        ?>
        <div class="col" style="background-color: #E5E5E5; height: auto;">
            <nav class="navbar navbar-light px-3">
                <div class="container-fluid">
                  <a class="navbar-brand fw-bold">Payment Details</a>
                  <form class="d-flex">
                    <a class="me-5 mt-1" href="#"><img src="Vector.png" alt=""></a>
                    <a class="btn btn-outline-white text-white bg-info" href="addpayment.php">ADD</a>
                  </form>
                </div>
            </nav>
            <div class="container border-top border-2 ps-5" id="row">
                <div class="row row-cols-7 py-3 text-muted" style="font-size: 90%;">
                  <div class="col">Name</div>
                  <div class="col">Payment Schedule</div>
                  <div class="col">Bill Number</div>
                  <div class="col">Amount Paid</div>
                  <div class="col">Balance amount</div>
                  <div class="col">Date </div>
                  <div class="col"></div>
                </div>
                <?php
                require 'connect.php';
                $requete="SELECT * from payment";
                $query=mysqli_query($con,$requete);
                while ($rowss=mysqli_fetch_assoc($query)) {
                   echo ' <div class="row row-cols-7 py-3 bg-white my-2 me-2">
                        <div class="col">'.$rowss['name'].'</div>
                        <div class="col">'.$rowss['payment_schedule'].'</div>
                        <div class="col">'.$rowss['bill_number'].'</div>
                        <div class="col">'.$rowss['amount_paid'].'</div>
                        <div class="col">'.$rowss['balance_amount'].'</div>
                        <div class="col">'.$rowss['date'].'</div>
                        <div class="col text-end">
                            <a href="#"><img class="pe-2" src="view.png" alt=""></a>
                        </div>
                        </div>';
                }
                ?>
            </div>
            <div class="container mt-3" id="cartes" style="height: auto; background-color: #E5E5E5;">
              <?php
                require 'connect.php';
                $requete="SELECT * from payment";
                $query=mysqli_query($con,$requete);
                while ($rowss=mysqli_fetch_assoc($query)) {
                  echo ' <div class="card" style="width: 100%;">
                            <div class="card-body">
                              <h5 class="card-title text-center">'.$rowss['name'].'</h5>
                              <p class="card-text text-center"> Payment schedule:'.$rowss['payment_schedule'].'</p>
                              <p class="card-text text-center">Bill number:'.$rowss['bill_number'].'</p>
                              <p class="card-text text-center">Amount Paid:'.$rowss['amount_paid'].'</p>
                              <p class="card-text text-center">Balance amount:'.$rowss['balance_amount'].'</p>
                              <p class="card-text text-center">'.$rowss['date'].'</p>
                              <a href="#" class="btn btn-info w-100"> <i style="color: white;" class="bi bi-eye  pe-3"></i></a>
                            </div>
                          </div>'; 
                }
              ?>
            </div>
        </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>