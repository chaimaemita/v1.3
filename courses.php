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
<body style="overflow-x:hidden; width: 100%; height: fit-content;">
    <div class="row align-items-start">

      <?php
        include 'sidebarpart.php';
      ?>

      <div class="col" style="padding: 0;width: 100%; background-color: #E5E5E5; height: 100vh;">

        <?php
          include 'navebar.php';
        ?>

        <div class="col px-5" id="row" style="background-color: #E5E5E5; ">
            <nav class="navbar navbar-light px-3" style="width: 100%;">
                <div class="container-fluid">
                  <a class="navbar-brand fw-bold">Courses program</a>
                  <form class="d-flex">
                    <a class="me-5 mt-1" href="#"><img src="Vector.png" alt=""></a>
                    <a class="btn btn-outline-white text-white bg-info" href="addcourses.php">ADD NEW Courses</a>
                  </form>
                </div>
            </nav>
            <div class="container border-top border-2 m-2" style="width: 100%; height: auto; ">
            <div class="row  py-1 text-muted" style="font-size: 80%;">
              <div class="col">Name</div>
              <div class="col">Time</div>
              <div class="col">Signed by</div>
              <div class="col">Signed at</div>
              <div class="col"></div>
            </div>
            <?php
            require 'connect.php';
            $requete="SELECT * from courses";
            $query=mysqli_query($con,$requete);
            while($row=mysqli_fetch_assoc($query)){
                $id=$row['id'];
                echo ' <div class="row row-cols-7 py-3 bg-white my-2 me-2">
                            <div class="col">'.$row['name'].'</div>
                            <div class="col">'.$row['time'].'</div>
                            <div class="col">'.$row['signed_by'].'</div>
                            <div class="col">'.$row['signed_at'].'</div>
                            <div class="col text-end py-3">
                                <a href="addcourses.php?id='.$id.'"><img class="pe-2"  src="modif.png" alt="icon"></a>
                                <a href="deletcs.php?id='.$id.'"><img src="poub.png" alt="icon"></a>
                            </div>
                        </div>'; 
            }
            ?>
    </div>
    </div>
      <div id="cartes" class="container mt-3" style=" background-color: #E5E5E5;">
      <?php
        require 'connect.php';
        $requete="SELECT * from courses";
        $query=mysqli_query($con,$requete);
        while($row=mysqli_fetch_assoc($query)){
            $id=$row['id'];
            echo ' 
            <div class="card text-center my-2" style="width: 18rem; width: 100%;">
              <div class="card-body">
              <h5 class="card-title">'.$row['name'].'</h5>
                <p class="card-text">'.$row['time'].'</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">'.$row['signed_by'].'</li>
                <li class="list-group-item">'.$row['signed_at'].'</li>
              </ul>
              <div class="card-body" style="background-color:#FAFFC1">
                <a href="addcourses.php?id='.$id.'"><img class="pe-2" src="modif.png" alt="icon"></a>
                <a href="deletcs.php?id='.$id.'"><img src="poub.png" alt="icon"></a>
              </div>
            </div>';  
           }
      ?>
      </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>