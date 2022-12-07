<?php
$name = "Каллен Резерфорд";
$profession = "Командир-Храмовник";
$city = "Ферледен";
$email = "inq@dragonage.com";
$phone = "122554";
$skills = [];
$skills[0] = ["name" => "Верховая езда", "persent" => 99];
$skills[1] = ["name" => "Ближний бой", "persent" => 100];
$skills[2] = ["name" => "Владение холодным оружием", "persent" => 80];
$skills[3] = ["name" => "Владение магией", "persent" => 97];
$workExperience =
[
    [
     	'name' => 'Командир, советник Инквизиции',
        'startDate' => 'Ноябрь 2014',
        'endDate' => 'по настоящее время',
        'experience' => 'Обучение рекрутов, обеспечение продовольствием, экипировкой и оружием. В его подчинении находятся армия Инквизиции, Орден Храмовников и Серые Стражи.',
    ],
    [
        'name' => 'Рыцарь-капитан',
        'startDate' => 'Март 2011',
        'endDate' => 'Ноябрь 2014',
        'experience' => 'Управление Орденом Храмовников, обеспечение защиты магам, осуществление спасательных операций.',
    ],
    [
        'name' => 'Рыцарь',
        'startDate' => 'Ноябрь 2009',
        'endDate' => 'Март 2011',
        'experience' => 'Защита города, участие в запечатывание Башни Круга.',
    ],

];
?>
1. 
2.<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">

    <!-- Left Column -->
    <div class="w3-third">

      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://i.pinimg.com/originals/da/d3/5d/dad35d73653dd0771c131b1e7da04c1b.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2><?= $name?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $profession?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $city?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $email?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $phone?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <?php for ($i = 0; $i < count($skills); $i++) {?>
          <p><?= $skills[$i] ["name"]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" 
            	style="width:<?= $skills[$i] ["persent"]; ?>%">
               	<?= $skills[$i] ["persent"]; ?>%
            </div>
          </div>
          <?php }?>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Тедасский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Элвиш</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:50%"></div>
          </div>
          <p>Тевене</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:76%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>

        <?php for ($i = 0; $i < count($workExperience); $i++): ?>
         <div class="w3-container"> 
          <h5 class="w3-opacity"><b><?= $workExperience[$i] ["name"]; ?></b></h5>
          <h6 class="w3-text-teal">
          	<i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $workExperience[$i] ["startDate"]; ?> - 
                <?php if ($i == 0) : ?>
                    <span class="w3-tag w3-teal w3-round"><?= $workExperience[$i] ["endDate"]; ?></span> 
                <?php else: ?>
                    <?= $workExperience[$i] ["endDate"]; ?> 
                <?php endif;?>
		  </h6>
          <p><?= $workExperience[$i] ["experience"]; ?></p>
          <?php if ($i != count($workExperience) - 1): ?>
                <hr>
          <?php endif;?>          
        </div>
        <?php endfor?>
        <br>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>