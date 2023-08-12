<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  .row
  {
    margin-left: 10px;;
  }
  .grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  max-width: 300px;
  max-height: 200px;
  gap: 2px;
  margin: 50px auto;
  animation: resize 3000ms ease infinite both;
}

.item {
  --color2: 36;
  --color2: 76;
  --delay: 0ms;
  background-color: hsl(var(--color1), 100%, 60%);
  animation: colorChange 3000ms ease var(--delay) infinite both;
  
  &:nth-child(4n - 2) {
    --delay: 1000ms;
  }
  
  &:nth-child(4n) {
    --delay: 2000ms;
  }
}

@keyframes colorChange {
  0% {
    background-color: skyblue;
  }
  
  25% {
    background-color: hsl(76, 100%, 64%);
  }
    
  50% {
    background-color: hsl(206, 100%, 64%);
  }
  
  75% {
    background-color: hsl(305, 100%, 64%);
  }
  
  100% {
    background-color: hsl(36, 100%, 64%);
  }
}

@keyframes resize {
  0% {
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
  }
  
  25% {
    grid-template-columns: 1fr 2fr 3fr;
    grid-template-rows: 1fr 2fr 3fr;
  }
  
  50% {
    grid-template-columns: 1fr 5fr 1fr;
    grid-template-rows: 1fr 5fr 1fr;
  }
  
  75% {
    grid-template-columns: 3fr 2fr 1fr;
    grid-template-rows: 3fr 2fr 1fr;
  }
  
  100% {
    grid-template-columns: 1fr 2fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
  }
}
  .text-box{
   width: max-content;
   color: white;
   position: absolute;
   top: 45%;
   left: 65%;
   transform: translate(-40%,-40%);
   text-align: center;
}
.text-box h1{
   font-size: 110px;
}
.text-box h1 span{
  color: #ff0062;;
  animation: animate 4s ease-in-out infinite;
}

@keyframes animate
{
  0%,100%
  {
     clip-path: polygon(0% 45%, 15% 44%, 32% 50%,
           54% 60%, 70% 61%, 84% 59%, 100% 52%,
           100% 100%, 0% 100%);
  }
  50%
  {
     clip-path: polygon(0 60%, 16% 65%, 34% 66%,
           51% 62%, 67% 50%, 84% 45%, 100% 46%, 100%
         100%, 0% 100%)
  }
}
.blood{
  width: max-content;
  color: transparent;
  position: absolute;
  top: 45%;
  left: 65%;
  transform: translate(-40%,-40%);
  text-align: center;
}
.blood h1{
  font-size: 110px;
}
.blood h1 span{
  -webkit-text-stroke: 2px #ff0062;
}
.blood p{
  
  font-size: 28px;
  color: transparent;
}

</style>
</head>

<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>

</div>

<!-- <?php include'ticker.php'; ?> -->

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="b.jpg" alt="image\b.jpg" width="1500" height="350">
      </div>
      <div class="carousel-item">
      <img src="b.jpg" alt="image\bb1.jpg" width="1500" height="350">
      </div>
      <div class="carousel-item">
      <img src="b.jpg" alt="image\bb2.jpg" width="1500" height="350">
      </div>
    </div>
    <div class="text-box">
            <h1><span>Blood </span> Bank</h1>
    </div>
    <div class="blood">
            <h1><span>Blood </span>Bank</h1>
    </div>

    <!-- Left and right controls 
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>-->
  </div>
  <br>
        <h1 style="text-align:center;font-size:45px; color:darkred;">Welcome to Blood Bank</h1>
        <!-- <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >The need for blood</h4>

                        <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                          <?php
                            include 'conn.php';
                            $sql=$sql= "select * from pages where page_type='needforblood'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
                              }

                           ?>
                         </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white">Blood Tips</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='bloodtips'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>

                        </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >Who you could Help</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='whoyouhelp'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>


                        </div> -->
            </div>
</div>
<!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                <p>
                  <?php
                    include 'conn.php';
                    $sql=$sql= "select * from pages where page_type='bloodgroups'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)   {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo $row['page_data'];
                        }
                      }

                   ?></p>

            </div>
            <div class="grid">
                  <div class="item"><img class="img-fluid rounded" src="image\b.jpg" alt="" ></div>
                  <div class="item"><img class="img-fluid rounded" src="image\bb2.jpg" alt="" ></div>
                  <div class="item"><img class="img-fluid rounded" src="image\bb3.jpg" alt="" ></div>
                  <div class="item"><img class="img-fluid rounded" src="image\b.jpg" alt="" ></div>
                  <div class="item"><img class="img-fluid rounded" src="image\b.jpg" alt="" ></div>
                  <div class="item"><img class="img-fluid rounded" src="image\b.jpg" alt="" ></div>
                  <div class="item"><img class="img-fluid rounded" src="image\bb1.jpg" alt="" ></div>
                  <div class="item"><img class="img-fluid rounded" src="image\bb1.jpg" alt="" ></div>
                  <div class="item"><img class="img-fluid rounded" src="image\bb2.jpg" alt="" ></div>
              </div>
        </div>
        <!-- /.row -->

        <hr>

        <h2>Blood Donor Names</h2>

        <div class="row">
          <?php
            include 'conn.php';
            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="image/blood.jpeg" alt="Card image" style="width:100%;height:300px">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                  <p class="card-text">
                    <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                    <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
                    <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                    <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                    <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                  </p>

                </div>
              </div>
        </div>
      <?php }} ?>
</div>
<br>
        

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
              <?php
                include 'conn.php';
                $sql=$sql= "select * from pages where page_type='universal'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)   {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['page_data'];
                    }
                  }

               ?></p>
              </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="align:center; background-color:#7FB3D5;color:#273746 ">Become a Donor </a>
            </div>
        </div>

    </div>
  </div>
  <?php include('footer.php');?>
</div>

</body>

</html>
