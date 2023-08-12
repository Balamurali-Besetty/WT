<!DOCTYPE html>
<html>
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
    .wrap {
      margin-left: px;
      padding: 100;
      align-items: center;

    }
    
    .line {
      width: 100vw;
    }
    
    .left,
    .right {
      width: 50vw;
      overflow: hidden;
      display: inline-block;
    }
    
    .left {
      color: darkred;
      transform: skew(0deg, -15deg);
    }
    
    .right {
      color: black;
      transform: skew(0deg, 15deg);
    }
    
    .left .content {
      width: 100vw;
      text-align: center;
    }
    
    .right .content {
      width: 100vw;
      text-align: center;
      transform: translate(-50vw);
    }
    
    span {
      display: inline-block;
      font-family: 'Montserrat', sans-serif;
      font-size: calc(8vw + 8vh);
      text-transform: uppercase;
      line-height: 0.8;
      transition: ease-out 0.6s;
    }
    
    .content-wrapper {
      max-width: 800px;
      margin-top: 5px ;
      text-align: center;
      padding: 20px;
      

    }
    .content-wrapper li {
      max-width: 600px;
      margin-top: 10px ;
      text-align: center;
      padding: 20px;
      

    }
    ul{
      margin-left:0%;
      padding-top: -100px;

    }
    
    h1 {
      font-size: 30px;
      color: #333;
      margin-bottom: 20px;
    }
    
    p {
      font-size: 18px;
      color: #666;
      text-align: justify;
    }
    .wrap{
      position: absolute;
      right: 10%;
      margin-top: -450px;
      margin-right: -500px;
      z-index: 999px;
    }
  </style>
  <?php include('head.php'); ?>
</head>
<body>
<div class="content-wrapper">
  <h1>About Donating Blood</h1>
  <p>
    Donating blood is a noble act that can save lives and make a significant impact on the well-being of others. By donating blood, you contribute to the lifesaving treatments of various medical conditions, accidents, and emergencies. Here are some key reasons why donating blood is important:
  </p>
  <ul>
    <li><strong>Save Lives:</strong> Blood donations are crucial for patients undergoing surgeries, organ transplants, cancer treatments, and those with blood disorders or severe injuries.</li>
    <li><strong>Emergency Situations:</strong> During accidents and natural disasters, a ready supply of blood can make a vital difference in providing immediate care to the affected individuals.</li>
    <li><strong>Medical Conditions:</strong> Patients with chronic illnesses such as thalassemia and sickle cell anemia require regular blood transfusions to manage their condition and improve their quality of life.</li>
    <li><strong>Community Support:</strong> Donating blood is an act of compassion and community service. It brings people together to help one another and foster a sense of unity.</li>
  </ul>
</div>
<br>

<div class="wrap">
  <div class="line">
    <div class="left">
      <div class="content">
        <span class="spanSlow">BLOOD</span>
      </div>
    </div><!--
    --><div class="right">
      <div class="content">
        <span class="spanSlow">BLOOD</span>
      </div>
    </div>
  </div>
  <div class="line">
    <div class="left">
      <div class="content">
        <span class="spanSlow">Bank</span>
      </div>
    </div><!--
    --><div class="right">
      <div class="content">
        <span class="spanSlow">Bank</span>
      </div>
    </div>
  </div>
  <div class="line">
    <div class="left">
      <div class="content">
        <span class="spanFast">Saves</span>
      </div>
    </div><!--
    --><div class="right">
      <div class="content">
        <span class="spanFast">Saves</span>
      </div>
    </div>
  </div>
  <div class="line">
    <div class="left">
      <div class="content">
        <span class="spanSlow">Lives</span>
      </div>
    </div><!--
    --><div class="right">
      <div class="content">
        <span class="spanSlow">Lives</span>
      </div>
    </div>
  </div>
</div>

<script>
  window.addEventListener('mousemove', handleMouseMove);
  window.addEventListener('resize', handleWindowResize);

  const spansSlow = document.querySelectorAll('.spanSlow');
  const spansFast = document.querySelectorAll('.spanFast');

  let width = window.innerWidth;

  function handleMouseMove(e) {
    let normalizedPosition = e.pageX / (width / 2) - 1;
    let speedSlow = 100 * normalizedPosition;
    let speedFast = 200 * normalizedPosition;
    spansSlow.forEach((span) => {
      span.style.transform = `translate(${speedSlow}px)`;
    });
    spansFast.forEach((span) => {
      span.style.transform = `translate(${speedFast}px)`;
    });
  }

  function handleWindowResize() {
    width = window.innerWidth;
    resizeFonts();
  }

  function resizeFonts() {
    const fontSize = `calc(${width}px / 30)`;
    spansSlow.forEach((span) => {
      span.style.fontSize = fontSize;
    });
    spansFast.forEach((span) => {
      span.style.fontSize = fontSize;
    });
  }

  resizeFonts();
</script>

</body>
</html>
