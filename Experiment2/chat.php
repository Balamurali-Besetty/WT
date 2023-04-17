<?php
session_start();
$host='localhost';
$username = 'root';
$password = '';
$dbname='kaushik';
$conn=mysqli_connect($host,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@500&display=swap');
         body{
            font-family: 'Saira Condensed', sans-serif;
            background-image:linear-gradient(to right,white,#1C2B33) ;

         }
        .container{
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
        }
        .box{
            min-height:80vh;
            margin:1%;
            padding:30px;
            box-shadow:1px 3px 18px rgb(0,0,0,0.3);
            border-radius:10px;
        }
        .box1{
            flex:2;
            background-color: white;
        }
        .box2{
            flex:4;
            background-color: white;
        }
        .box3{
            flex:4;
            background-color: white;
        }
        #ok{
            text-align:center;
            font-size:60px;
            margin-left:47%;
            color: white;
        }
        #ok:hover{
            text-decoration:underline blue;
        }
        #in{
            width:200px;
            height:100px;
        }
        input{
            margin:2%;
        }
        #new{
            margin:3%;
            padding:20px;
            border-radius:5px;
            box-shadow:1px 3px 18px rgba(0,0,0,0.1);
        }
        #chat
        {   text-align:center;
            font-size:60px;
            margin-left:47%;
            color: black;
            box-shadow: 10px;
            background-image: linear-gradient(to right,white,#0080FB);
            height: 80px; /* set height of header */
            display: flex; /* use flexbox layout */
            justify-content: center; /* align items to both ends of the header */
            align-items: center;
            padding: 0 0px; /* add padding to the left and right of the header */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* add a box shadow */
            margin-top: -1%;
            margin-left: -2 %;
            margin: 0%;
        }
        </style>
</head>
<body>
    <div id="chat">
    <span id="ok">Chats!</span></div>
    <span style="margin-left:90%;font-size:25px;"><a style="text-decoration:none; color: white;" href="dash.php">DashBoard</a></span>
    <span style="margin-left:90%; color:white;"><b><?php echo $_SESSION["uname"];?></b></span>
    <div class="container">
        <div class="box box1">
            <h2 align="center">Your Previous Users</h2>
            <hr>
            <h5>User You sent message:</h5>
            <ul>
                <?php
                $me=$_SESSION["email"];
                $rows=mysqli_query($conn,"SELECT DISTINCT(receive) from chats WHERE send='$me'");
                while($row=mysqli_fetch_array($rows))
                {
                    $nms=$row["receive"];
                ?>
                <li><?php echo $nms;?></li>
                <?php
                }
                ?>
            </ul>
            <h5>User You receive message:</h5>
            <ul>
                <?php
                $me=$_SESSION["email"];
                $rows=mysqli_query($conn,"SELECT DISTINCT(send) from chats WHERE receive='$me'");
                while($row=mysqli_fetch_array($rows))
                {
                    $nms=$row["send"];
                ?>
                <li><?php echo $nms;?></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="box box2">
        <h2 align="center">Received Messages</h2>
            <hr>
            <?php
            $me=$_SESSION["email"];
            $rows=mysqli_query($conn,"SELECT * from chats WHERE receive='$me'");
            while($row=mysqli_fetch_array($rows))
            {
            ?>
            <div id="new">
            <h4 align="left"><b>From: <?php echo $row["send"];?></b></h4>
            <p ><?php echo $row["msg"];?></p>
            </div>
            <?php
            }
            ?>
            
        </div>
        <div class="box box3">
        <h2 align="center">Send Messages</h2>
            <hr>
            <form action="" method="post">
                <label for="">To:</label>
                <input name="un" style="margin-left:5%;" type="email" placeholder="enter Recepients email" required>
                <br>
                <label for="">Msg:</label>
                <input name="ms" id="in" type="text" placeholder="Enter Your Message" required>
                <input type="submit" name="submit" value="Send">
            </form>
            <hr>
            <h3 align="center">Your messages</h3>
            <?php
            $me=$_SESSION["email"];
            $rows=mysqli_query($conn,"SELECT * from chats WHERE send='$me'");
            while($row=mysqli_fetch_array($rows))
            {
            ?>
            <h4><b><?php echo $row["receive"];?></b></h4>
                <p><?php echo $row["msg"];?></p>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $ni=$_SESSION["email"];
    $un=$_POST["un"];
    $msg=$_POST["ms"];

    if($un==$_SESSION["email"])
    {
        echo "<script>alert('Sender and receiver cant be same');</script>";
    }
    elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from registrations where Email='$un'"))<=0)
    {
        echo "<script>alert('Recepient had no account! Try signing him  up first');</script>";
    }
    else{
        mysqli_query($conn,"INSERT into chats(send,receive,msg) VALUES('$ni','$un','$msg')");
    }
    
    header("refresh:0.2;url=http://localhost/facebook/chat.php");
}
?>