<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("./includes/head.php"); ?>
  <style>
body .parent-container, .child-container {
  display: flex;
}
.parent-container {
  width: 100%;
  justify-content: center;
  gap: 30px 30px;
}
.child-container {
  height: auto;
  gap: 30px 30px;
  flex-direction: column;
}
.child-container img {
  transition: all 1s ease-in-out 0s;
 box-shadow: 2px 2px 20px gray, inset 2px 2px 10px lightgray;
}
.child-container img:hover {
  box-shadow: 4px 4px 25px black, inset 2px 2px 2px 10px rgb(0, 0, 20);
 
}
  </style>
</head>

<body>

  <!-- including the header.php global file -->
  <?php include("./includes/header.php"); ?>


  <main class="main">
    <div class="main-content responsive-wrapper">


      <div class="container text-center">
        <div class="row">
          <div class="col-xs-12">
            <h3>Baby Drive</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-3">
            <img src="https://thecaringheartssociety.co.za/campaigns/baby_drive_16_03_2024/baby_drive_logo.jpg"
              width="100%" />
          </div>
          <div class="col-xs-12 col-md-9 text-left">
            <p>
            We are excited to announce that our non-profit organization is hosted a baby drive to support a baby in need with one of 
            the orphanges we are working with. We are seeking donations of essential items such as diapers, wipes, formula, baby clothing, 
            blankets, and other baby care necessities. Your contribution to this drive will directly impact the well-being of this baby and their family, 
            providing them with the support and resources they need during this critical time. 
            No donation is too small, and every item donated will make a difference in the life of this precious little one. 
            Thank you for your kindness and generosity. Together, we can make a positive impact in the lives of those who need it most.            </p>
          </div>
        </div>
      </div>

    </div>
  </main>

  <main class="main">
    <div class="main-content responsive-wrapper">

      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-md-4 col-lg-3 text-center" style="padding:5px;">
            <img src="https://thecaringheartssociety.co.za/campaigns/baby_drive_16_03_2024/1.jpg" class="img-responsive" />
          </div>
          <div class="col-xs-12 col-md-4 col-lg-3 text-center" style="padding:5px;">
            <img src="https://thecaringheartssociety.co.za/campaigns/baby_drive_16_03_2024/2.jpg" width="100%" />
          </div>
          <div class="col-xs-12 col-md-4 col-lg-3 text-center" style="padding:5px;">
            <img src="https://thecaringheartssociety.co.za/campaigns/baby_drive_16_03_2024/3.jpg" width="100%" />
          </div>
          <div class="col-xs-12 col-md-4 col-lg-3 text-center" style="padding:5px;">
            <img src="https://thecaringheartssociety.co.za/campaigns/baby_drive_16_03_2024/4.jpg" width="100%" />
          </div>
          <div class="col-xs-12 col-md-4 col-lg-3 text-center" style="padding:5px;">
            <img src="https://thecaringheartssociety.co.za/campaigns/baby_drive_16_03_2024/5.jpg" width="100%" />
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- including the footer.php global file -->
  <?php include("./includes/footer.php"); ?>


</body>

</html>