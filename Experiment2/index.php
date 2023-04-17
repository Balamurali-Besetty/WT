<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <header>
    <img width="210px" height="100px" src="logo.png" alt="">
    </header>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');
header
{  
  background-color: #ffffff; /* set background color */
  height: 80px; /* set height of header */
  display: flex; /* use flexbox layout */
  justify-content: center; /* align items to both ends of the header */
  align-items: center;
  padding: 0 0px; /* add padding to the left and right of the header */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* add a box shadow */
  margin-top: -1%;
  margin-right: -1%;
  position: fixed;
  overflow: hidden;
  top: 0%;
  width: 100%;
}

body
{
background-image: linear-gradient(to right,white,#0080FB);
}
.container{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-top:-2%;
}
h2,h4{
    font-family: 'Rubik', sans-serif;
    text-align: center;
    margin: 0%;
}
#log{
    font-family: 'Rubik', sans-serif;
    margin: 1%;
}
.box{
flex:1;
}
.box1{
    padding: 8px;
    margin-top:10%;
    margin-left:20%;
    margin-right: 3%;
    justify-content: center;
    align-items: center;
    display: inline;
    vertical-align: top;
    text-decoration: none;
}

.box2{
    margin-top:10%;
    margin-left: -3%;
    margin-right: 16%;
    padding:10px;
    display: inline;
    width: 50%;
    vertical-align: top;
}
input{
margin:3%;
margin-left: 9%;
width: 50%;
padding: 10px;
}
#submit,#signup{
    cursor: pointer;
    background-color: #1877f2;
    border: none;
    color:white;
    margin-left: 25%;
    font-weight: 600;
    font-size: medium;
    border-radius: 6px;
}
#signup{
    background-color: #42B72A;
    width: 60%;
    margin-left: 20%;
}
.card{
    font-family: 'Poppins', sans-serif;
    background-color: #FFFFFF;
    box-shadow: 1px 3px 18px rgb(0,0,0,0.3);
    height: 350px;
    width: 350px;
    border-radius: 10px;
    padding: 40px;
    margin-top: 0%;
}
.cont{
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
}
#pos{
    width:200px;
    height:100px;
}
.bx{
    box-shadow:1px 3px 18px rgba(0,0,0,0.2);
    border-radius:10px;
    width:300px;
    margin-left:9%;
    margin:2%;
}
marquee{
    margin-left:4%;
    height:300px;
}
h2:hover{
    text-decoration: underline #4a66a0;
}
tr,td{
    padding:3px;
}
.image-container {
  height: 300px; /* Set the height of the container */
  overflow: scroll; /* Enable scrolling */
}

ul {
  margin: 0; /* Remove default margin */
  padding: 0; /* Remove default padding */
}

li {
  list-style: none; /* Remove bullet points */
  margin-bottom: 20px;
}

li img {
  height: 200px;
}

</style>
<script>
    function myFunction() {
  window.location.href="register.php";  
}
    </script>
</head>
<body>
    <span><p style="text-align:center;margin: 0%; margin-top:-3%;"></p1></span>
    <div class="container">
        <div class="box box1">
            <div class="card">
                <h2 align="center">Trending PICS</h2>
                <hr>
                <div class="cont">
                    <?php
                    $host='localhost';
                    $username = 'root';
                    $password = '';
                    $dbname='facebook';
                    $conn=mysqli_connect($host,$username,$password,$dbname);
                    $rows=mysqli_query($conn,"SELECT * from likes GROUP BY file ORDER BY max(like_cnt) DESC;");
                    ?>
                <div class="image-container">
  <ul>
    <?php while($row=mysqli_fetch_array($rows)){
      $sel=$row["file"];
      $nmi=$row["imgno"];
      $pi=mysqli_query($conn,"SELECT * from likes where file='$sel' AND imgno='$nmi' AND user IS NOT NULL");
      $nmii=mysqli_num_rows($pi);
    ?>
      <li>
        <img src="<?php echo $sel ?>" alt="" width="";>
        <center><label>Likes: <?php echo $nmii ?></label></center>
      </li>
    <?php } ?>
  </ul>
</div>
                </div>
            </div>
        </div>
        <div class="box box2">
        <div class="card">
            <h1 align="center" id="log">Login</h1>
            <hr>
            <br>
            <form action="logverify.php" method="post">
                <label>Email:        </label><input type="email" name="uname" style="margin-left: 18.5%;" placeholder="Enter valid email" required>
                <label>Password: </label><input type="password" name="pwd" placeholder="Enter Password" required>
                <br>
                <br>
                <input type="submit" id="submit" value="Log in">
                <br>
                <a style="text-align: center; margin-left: 33%; text-decoration: none; font-size: 13px;" href="">Forget Password?</a>
                <hr>
                <input type="button" id="signup" value="Sign Up" onclick="myFunction()">
            </form>
        </div>
    </div>
    </div>

</body>
</html>
