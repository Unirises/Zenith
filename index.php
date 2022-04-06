<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/img/uap_logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Zenith</title>
</head>

<body class="background">

    <div id="preloader">

    </div>
    <div class="full-height" style="display: flex;
  justify-content: center;
  align-items: center;" id="d_pc">
        <label class="h3 text-center" style="color:white;">USE A COMPUTER FOR BETTER EXPERIENCE</label>
    </div>
    <div class="full-height d-none" id="gameMode">
        <?php include 'pages/passcode.php'; ?>
        <?php include 'pages/p1.php'; ?>
        <?php include 'pages/p2.php'; ?>
        <?php include 'pages/p3.php'; ?>
        <?php include 'pages/p4.php'; ?>
        <?php include 'pages/p5.php'; ?>
        <?php include 'pages/p6.php'; ?>

        <div class="d-none" id="navigation_bar" style="z-index: 1000;">

            <div style="position: absolute; bottom:-0%; display:none; z-index:1000;" id="referenceShow">
                <img src="assets/img/resources/efficacy/Efficacy-References.png" id="references_change" style="width: 100%;">
            </div>

            <div class="row navigation_bottom" style="z-index:1000;">
                <div class="col-sm-2">
                    <div>
                        <img src="assets/img/resources/references.png" id="referencesBtn" class="d-none" style="width: 100%; margin-bottom:15%;">
                    </div>
                    <div>
                        <img src="assets/img/navigation/selected_home.png" id="home" class="align_bottom selected_nav opacity_hover" style="width: 140%;" alt="">
                    </div>
                </div>
                <div class="col-sm-2">
                    <img src="assets/img/navigation/Efficacy.png" id="efficacy" class="align_bottom opacity_hover" style="width:100%;" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="assets/img/navigation/Dosing.png" id="dosing" class="align_bottom opacity_hover" style="width:100%;" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="assets/img/navigation/Safety.png" id="safety" class="align_bottom opacity_hover" style="width:100%;" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="assets/img/navigation/Immunomodulation.png" id="immuno" class="align_bottom opacity_hover" style="width:100%;" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="assets/img/navigation/Savings.png" id="saving" class="align_bottom opacity_hover" style="width:100%;" alt="">
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/zenith.js"></script>
    <script src="./assets/js/index.js" type="module"></script>

    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function() {
            loader.style.display = "none";
        });
    </script>
</body>

</html>