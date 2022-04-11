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
        <div class="" id="passcode">

            <div class="row">

                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">

                    <div style="position: absolute; width:90%; margin-top:25%;">
                        <div class="mb-5 text-center">
                            <img src="assets/img/uap_logo.png" alt="" srcset="">
                        </div>
                        <input type="password" class="form-control" id="passcodeInput" placeholder="Passcode">
                        <button type="button" class="btn btn-primary pl-5 pr-5 mt-2" id="passcodeBtn">Enter</button>
                    </div>

                </div>


            </div>



        </div>
        <div class="d-none" id="p1">
            <div class="col-sm-12 mt-4 ml-3">
                <img src="assets/img/product/uap_unilab.png" alt="">
            </div>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="assets/img/product/confidence.png" class="confidence animate__animated animate__bounceInLeft" alt="">
                </div>
                <div class="col-sm-6 text-center">

                    <img src="assets/img/product/zenith.png" class="zenith animate__animated animate__bounceIn" alt="">
                </div>
            </div>
        </div>
        <div class="d-none" id="p2">
            <div class="col-sm-12">
                <img src="assets/img/resources/efficacy_title.png" class="efficacy_title animate__animated animate__fadeInTopLeft" alt="" srcset="">
            </div>
            <div class="row mt-5" id="p2_first">

                <div class="col-sm-6 text-right">
                    <img src="assets/img/resources/efficacy/Outpatient.png" class="t_hover cursor_pointer animate__animated animate__fadeInLeft" id="OutpatientBtn" style="width: 50%;" alt="">
                    <div style="margin-top: 10%;" class="d-none" id="OutpatientShow">
                        <img src="assets/img/resources/efficacy/Outpatient-Photo.png" class="O_I" alt="">
                        <img src="assets/img/resources/efficacy/Outpatient-Description.png" class="O_I_Desc" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="assets/img/resources/efficacy/Chronic_Respiratory.png" class="t_hover cursor_pointer animate__animated animate__fadeInRight" id="ChronicBtn" style="width: 50%;" alt="">
                    <div style="margin-top: 10%;" class="d-none" id="ChronicShow">
                        <img src="assets/img/resources/efficacy/Chronic-Respiratory-Photo.png" class="C_A" alt="">
                        <img src="assets/img/resources/efficacy/Chronic-Respiratory-Description.png" class="C_A_Desc" alt="">
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <img src="assets/img/resources/efficacy/Inpatient.png" class="t_hover cursor_pointer animate__animated animate__fadeInLeft" id="InpatientBtn" style="width: 50%;" alt="">
                    <div style="margin-top: 10%;" class="d-none" id="InpatientShow">
                        <img src="assets/img/resources/efficacy/Inpatient-Photo.png" class="O_I" alt="">
                        <img src="assets/img/resources/efficacy/Inpatient-Description.png" class="O_I_Desc" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="assets/img/resources/efficacy/Asthma.png" id="AsthmaBtn" class="t_hover cursor_pointer animate__animated animate__fadeInRight" style="width: 50%;" alt="">
                    <div style="margin-top: 10%;" class="d-none" id="AsthmaShow">
                        <img src="assets/img/resources/efficacy/Asthma-Photo.png" class="C_A" alt="">
                        <img src="assets/img/resources/efficacy/Asthma-Description.png" class="C_A_Desc" alt="">
                    </div>
                </div>

            </div>

            <div id="selected_image_Show" class="d-none">
                <div class="col-sm-12 animate__animated animate__fadeIn" style="margin-left:15%;">
                    <div style="margin-top: 5%; cursor:pointer;" class="col-sm-9" id="backTo4selector">
                        <img src="assets/img/resources/efficacy/Chronic-Respiratory-Photo.png" id="triangle_image" class="C_A" alt="">
                        <img src="assets/img/resources/efficacy/Chronic-Respiratory-Description.png" id="info_image" class="C_A_Desc" alt="">
                    </div>
                </div>



                <div class="row" style="margin-top: 7%;">
                    <div class="col-sm-4 text-right">
                        <img src="assets/img/resources/efficacy/Chronic_Respiratory.png" class="t_hover cursor_pointer animate__animated animate__bounceInUp" id="Selected_Image1" style="width: 70%;" alt="">

                    </div>
                    <div class="col-sm-4 text-center">
                        <img src="assets/img/resources/efficacy/Inpatient.png" class="t_hover cursor_pointer animate__animated animate__bounceInUp" id="Selected_Image2" style="width: 70%;" alt="">

                    </div>
                    <div class="col-sm-4 text-left">
                        <img src="assets/img/resources/efficacy/Asthma.png" id="Selected_Image3" class="t_hover cursor_pointer animate__animated animate__bounceInUp" style="width: 70%;" alt="">
                    </div>
                </div>
            </div>


        </div>
        <div class="d-none" id="p3">
            <div style="position:absolute; top:30%; left:3%; z-index:1000;">
                <img src="assets/img/resources/dosage/dosage-title.png" class="animate__animated animate__fadeInLeft" style="width: 35vw;" alt=""><br>
                <img src="assets/img/resources/dosage/dosage-sub.png" class="animate__animated animate__fadeInLeft mt-2" style="width: 35vw;" alt="">
            </div>
            <div class="d-flex flex-column text-right">
                <div id="p3_trans1"><img src="assets/img/resources/dosage/for_pneumonia.png" id="for_pneumoniaBtn" class=" cursor_pointer animate__animated animate__fadeInTopRight" style="height:32vh; width:45%;" alt=""></div>
                <div id="p3_trans2"><img src="assets/img/resources/dosage/better_than_10_days.png" id="better_than_10_daysBtn" style="height:32vh; width:60%;" class=" cursor_pointer animate__animated animate__fadeInRight" alt=""></div>
                <div id="p3_trans3"><img src="assets/img/resources/dosage/co-amoxiclav.png" id="co_amoxiclavBtn" class=" cursor_pointer animate__animated animate__fadeInBottomRight" style="height:30vh; width:78%;" alt=""></div>
            </div>
        </div>
        <div class="d-none" id="p4">
            <div class="col-sm-12 text-center" style="margin-top: 5%;">
                <img src="assets/img/resources/safety/Safety-Title.png" class="animate__animated animate__bounceInLeft" style="width: 60%;" alt=""><br>
                <img src="assets/img/resources/safety/Safety-Sub.png" class="animate__animated animate__bounceInRight" style="width: 30%;" alt=""><br>
                <img src="assets/img/resources/safety/Safety-Shape-under.png" class="animate__animated animate__bounceIn" style="width: 50%;" alt=""><br>
            </div>
            <div class="col-sm-12" style="margin-top: 5%;">
                <div class="row" style="margin-right:5%; margin-left:5%;">
                    <div class="col-sm-3" id="p4_trans1">
                        <img src="assets/img/resources/safety/COPD-Treatment.png" id="COPD_TreatmentBtn" class="animate__animated animate__fadeInLeft t_10" style=" cursor: pointer;" alt="">
                        <div class="description_margin_safety d-none" id="COPD_TreatmentShow">
                            <img src="assets/img/resources/safety/COPD-Treatment-Description.png" id="COPD_TreatmentBtnText" style="width: 80%;" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3" id="p4_trans2">
                        <img src="assets/img/resources/safety/Less-Adverse-Events.png" id="Less_Adverse_EventsBtn" class="animate__animated animate__fadeInUp w_100" style=" cursor: pointer;" alt="">
                        <div class="description_margin_safety d-none" id="Less_Adverse_EventsShow">
                            <img src="assets/img/resources/safety/Less-Adverse-Events-Description.png" id="Less_Adverse_EventsBtnText" style="width: 80%;" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3" id="p4_trans3">
                        <img src="assets/img/resources/safety/Resistant-Cough.png" id="Resistant_CoughBtn" class="animate__animated animate__fadeInUp w_100" style=" cursor: pointer;" alt="">
                        <div class="description_margin_safety d-none" id="Resistant_CoughShow">
                            <img src="assets/img/resources/safety/Resistance-Cough-Description.png" id="Resistant_CoughBtnText" style="width: 80%;" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3" id="p4_trans4">
                        <img src="assets/img/resources/safety/Severe-Asthma.png" id="Severe_AsthmaBtn" class="animate__animated animate__fadeInRight t_10" style=" cursor: pointer;" alt="">
                        <div class="description_margin_safety d-none" id="Severe_AsthmaShow">
                            <img src="assets/img/resources/safety/Severe-Asthma-Description.png" style="width: 80%;" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-none" id="p5">
            <img src="assets/img/resources/immo/Middle-Image.png" id="middle_image" style="width: 100%; height:70vh; position:absolute; bottom:5.3%;" alt="">

            <div class="col-sm-12 text-center mt-5">
                <img src="assets/img/resources/immo/Immunomodulation-Title.png" class="animate__animated animate__bounceInLeft" style="width: 80%;" alt="">
                <img src="assets/img/resources/immo/Immunomodulation-Subcopy.png" class="animate__animated animate__bounceInRight" style="width: 50%;" alt="">
            </div>

            <div style="margin-top: 7%; margin-left: 2%;">
                <div class="col-sm-6">
                    <div id="Promising_ImmunomodulatoryBtn" class="animate__animated animate__fadeInLeft">
                        <img src="assets/img/resources/immo/Promising-Immunomodulatory-Text.png" id="Promising_ImmunomodulatoryShow" class="ml-4 cursor_pointer" style="width: 60%; height:11vh;" alt="">
                    </div>
                    <div class="mt-3 animate__animated animate__fadeInLeft" id="Inhibits_MobilityBtn">
                        <img src="assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png" id="Inhibits_MobilityShow" class="ml-4 cursor_pointer" style="width: 60%; height:12vh;" alt="">
                    </div>
                    <div id="Reduces_SerumBtn" class="mt-3 animate__animated animate__fadeInLeft">
                        <img src="assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png" class="ml-1 cursor_pointer" id="Reduces_SerumBtnShow" style="width: 63%; height:13vh;" alt="">
                    </div>
                    <div class="mt-3 animate__animated animate__fadeInLeft" id="Promotes_ResolutionBtn">
                        <img src="assets/img/resources/immo/Promotes-Resolution-Text.png" id="Promotes_ResolutionShow" class="ml-4 cursor_pointer" style="width: 60%; height:10vh;" alt="">
                    </div>

                </div>
            </div>
        </div>
        <div class="d-none" id="p6">
            <div style="position: absolute; bottom:7%; left:10%;" class="animate__animated animate__fadeInLeft">
                <img src="assets/img/product/uap_unilab.png" alt="">
            </div>
            <div class="row">
                <div class="col-sm-6 text-center animate__animated animate__zoomInLeft">
                    <img src="assets/img/resources/savings/10_savings.png" style="width: 80%; margin-top:10%;" alt="">
                    <img src="assets/img/resources/savings/innovator-brand.png" style="width: 50%; margin-top:5%;" alt="">
                    <img src="assets/img/resources/savings/Medicine-Packaging.png" style="width: 70%;  margin-top:5%;" alt="">
                </div>
                <div class="col-sm-6 text-center">
                    <img src="assets/img/resources/savings/Tagline-Experience-Treatment.png" class="animate__animated animate__bounceIn" style="width: 90%;  margin-top:30%;" alt="">


                </div>

            </div>
        </div>

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
            $('#referenceShow').hide();
            var referencesStatus = 0;

            if ($(window).width() < 481) {
                $(".background").css({
                    "background-image": "none",
                    "background-color": "#D12E2D"
                });
            } else {
                $('#d_pc').addClass('d-none');
                $('#gameMode').removeClass('d-none');
            }


            $('#passcodeBtn').click(function() {
                var p = $('#passcodeInput').val();
                if (p == "123") {
                    $('#navigation_bar').removeClass('d-none');
                    $('#p1').removeClass('d-none');
                    $('#passcode').addClass('d-none');
                } else {
                    alert('Passcode Incorrect');
                }
            })


            $('#backTo4selector').click(function() {
                $('#p2_first').removeClass('d-none');
                $('#selected_image_Show').addClass('d-none');
            })


            $('#home').click(function() {
                resetNavigator();
                $(this).removeClass('opacity_hover');
                $(this).attr('src', 'assets/img/navigation/selected_home.png');
                $(this).css({
                    "width": "140%"
                }).addClass('selected_nav');
                $('.background').css({
                    "background-image": "url('assets/img/bg/bg1.png')"
                }).addClass('selected_nav');
                $('#referencesBtn').addClass('d-none');
                $('#referenceShow').hide();
                $('#referencesBtn').show();
                referencesStatus = 0;
                show('p1');
            });
            $('#efficacy').click(function() {
                resetNavigator();
                $(this).removeClass('opacity_hover');
                $(this).attr('src', 'assets/img/navigation/selected_efficacy.png');
                $(this).css({
                    "margin-left": "-20%",
                    "width": "140%"
                }).addClass('selected_nav');
                $('#references_change').attr('src', 'assets/img/resources/efficacy/Efficacy-References.png')
                $('.background').css({
                    "background-image": "url('assets/img/bg/bg2.png')"
                });
                $('#referencesBtn').removeClass('d-none');
                $('#referenceShow').hide();
                $('#referencesBtn').show();
                referencesStatus = 0;
                show('p2');
            });
            $('#dosing').click(function() {
                resetNavigator();
                $(this).removeClass('opacity_hover');
                $(this).attr('src', 'assets/img/navigation/selected_dosage.png');
                $(this).css({
                    "margin-left": "-20%",
                    "width": "140%"
                }).addClass('selected_nav');
                $('#references_change').attr('src', 'assets/img/resources/dosage/Dosage-References.png')
                $('.background').css({
                    "background-image": "url('assets/img/bg/bg2.png')"
                });
                $('#referencesBtn').removeClass('d-none');
                $('#referenceShow').hide();
                $('#referencesBtn').show();
                referencesStatus = 0;
                show('p3');
            });
            $('#safety').click(function() {
                resetNavigator();
                $(this).removeClass('opacity_hover');
                $(this).attr('src', 'assets/img/navigation/selected_safety.png');
                $(this).css({
                    "margin-left": "-20%",
                    "width": "140%"
                }).addClass('selected_nav');
                $('#references_change').attr('src', 'assets/img/resources/safety/Safety-References.png')
                $('.background').css({
                    "background-image": "url('assets/img/bg/bg2.png')"
                });
                $('#referencesBtn').removeClass('d-none');
                $('#referenceShow').hide();
                $('#referencesBtn').show();
                referencesStatus = 0;
                show('p4');
            });
            $('#immuno').click(function() {
                resetNavigator();
                $(this).removeClass('opacity_hover');
                $(this).attr('src', 'assets/img/navigation/selected_immunomodulation.png');
                $(this).css({
                    "margin-left": "-20%",
                    "width": "140%"
                }).addClass('selected_nav');
                $('#references_change').attr('src', 'assets/img/resources/immo/Immunomodulation-References.png')
                $('.background').css({
                    "background-image": "url('assets/img/bg/bg2.png')"
                });
                $('#referencesBtn').removeClass('d-none');
                $('#referenceShow').hide();
                $('#referencesBtn').show();
                referencesStatus = 0;
                show('p5');
            });
            $('#saving').click(function() {
                resetNavigator();
                $(this).removeClass('opacity_hover');
                $(this).attr('src', 'assets/img/navigation/selected_savings.png');
                $(this).css({
                    "margin-left": "-17%",
                    "width": "140%"
                }).addClass('selected_nav');
                $('#references_change').attr('src', 'assets/img/resources/savings/ref_savings.png')
                $('.background').css({
                    "background-image": "url('assets/img/bg/bg3.png')"
                });
                $('#referencesBtn').removeClass('d-none');
                $('#referenceShow').hide();
                $('#referencesBtn').show();
                referencesStatus = 0;
                show('p6');
            });



            $('#referencesBtn').click(function() {

                if (referencesStatus == 0) {
                    $('#referenceShow').show();
                    referencesStatus = 1;
                    $(this).hide();
                }

            })

            $('#references_change').click(function() {
                if (referencesStatus == 1) {
                    $('#referenceShow').hide();
                    referencesStatus = 0;
                    $('#referencesBtn').show();
                }

            })


            // f




            var selected_image_P2;

            $('#Selected_Image1').click(function() {
                checkImageP2('Selected_Image1');
            })
            $('#Selected_Image2').click(function() {
                checkImageP2('Selected_Image2');
            })

            $('#Selected_Image3').click(function() {
                checkImageP2('Selected_Image3');
            })

            function checkImageP2(selector) {
                if ($('#' + selector).attr('src') == 'assets/img/resources/efficacy/Chronic_Respiratory.png') {
                    $('#triangle_image').attr('src', 'assets/img/resources/efficacy/Chronic-Respiratory-Photo.png');
                    $('#info_image').attr('src', 'assets/img/resources/efficacy/Chronic-Respiratory-Description.png');
                    $('#Selected_Image1').attr('src', 'assets/img/resources/efficacy/Outpatient.png')
                    $('#Selected_Image2').attr('src', 'assets/img/resources/efficacy/Inpatient.png')
                    $('#Selected_Image3').attr('src', 'assets/img/resources/efficacy/Asthma.png')
                } else
                if ($('#' + selector).attr('src') == 'assets/img/resources/efficacy/Inpatient.png') {
                    $('#triangle_image').attr('src', 'assets/img/resources/efficacy/Inpatient-Photo.png');
                    $('#info_image').attr('src', 'assets/img/resources/efficacy/Inpatient-Description.png');
                    $('#Selected_Image1').attr('src', 'assets/img/resources/efficacy/Outpatient.png')
                    $('#Selected_Image2').attr('src', 'assets/img/resources/efficacy/Chronic_Respiratory.png')
                    $('#Selected_Image3').attr('src', 'assets/img/resources/efficacy/Asthma.png')
                } else
                if ($('#' + selector).attr('src') == 'assets/img/resources/efficacy/Asthma.png') {
                    $('#triangle_image').attr('src', 'assets/img/resources/efficacy/Asthma-Photo.png');
                    $('#info_image').attr('src', 'assets/img/resources/efficacy/Asthma-Description.png');
                    $('#Selected_Image1').attr('src', 'assets/img/resources/efficacy/Outpatient.png')
                    $('#Selected_Image2').attr('src', 'assets/img/resources/efficacy/Chronic_Respiratory.png')
                    $('#Selected_Image3').attr('src', 'assets/img/resources/efficacy/Inpatient.png')
                } else
                if ($('#' + selector).attr('src') == 'assets/img/resources/efficacy/Outpatient.png') {
                    $('#triangle_image').attr('src', 'assets/img/resources/efficacy/Outpatient-Photo.png');
                    $('#info_image').attr('src', 'assets/img/resources/efficacy/Outpatient-Description.png');
                    $('#Selected_Image1').attr('src', 'assets/img/resources/efficacy/Chronic_Respiratory.png')
                    $('#Selected_Image2').attr('src', 'assets/img/resources/efficacy/Inpatient.png')
                    $('#Selected_Image3').attr('src', 'assets/img/resources/efficacy/Asthma.png')
                }
            }



            $('#OutpatientBtn').click(function() {
                $('#selected_image_Show').removeClass('d-none');
                selected_image_P2 = "Outpatient";
                $('#p2_first').addClass('d-none');

                $('#Selected_Image1').attr('src', 'assets/img/resources/efficacy/Chronic_Respiratory.png').attr('data-info', 'Chronic_Respiratory');
                $('#Selected_Image2').attr('src', 'assets/img/resources/efficacy/Inpatient.png').attr('data-info', 'Inpatient');
                $('#Selected_Image3').attr('src', 'assets/img/resources/efficacy/Asthma.png').attr('data-info', 'Asthma');

                $('#triangle_image').attr('src', 'assets/img/resources/efficacy/Outpatient-Photo.png');
                $('#info_image').attr('src', 'assets/img/resources/efficacy/Outpatient-Description.png');

            });

            $('#ChronicBtn').click(function() {
                selected_image_P2 = "Chronic";
                $('#selected_image_Show').removeClass('d-none');
                $('#p2_first').addClass('d-none')

                $('#Selected_Image1').attr('src', 'assets/img/resources/efficacy/Outpatient.png').attr('data-info', 'Outpatient');
                $('#Selected_Image2').attr('src', 'assets/img/resources/efficacy/Inpatient.png').attr('data-info', 'Inpatient');
                $('#Selected_Image3').attr('src', 'assets/img/resources/efficacy/Asthma.png').attr('data-info', 'Asthma');

                $('#triangle_image').attr('src', 'assets/img/resources/efficacy/Chronic-Respiratory-Photo.png');
                $('#info_image').attr('src', 'assets/img/resources/efficacy/Chronic-Respiratory-Description.png');

            });

            $('#InpatientBtn').click(function() {
                selected_image_P2 = "Inpatient";
                $('#selected_image_Show').removeClass('d-none');
                $('#p2_first').addClass('d-none')

                $('#Selected_Image1').attr('src', 'assets/img/resources/efficacy/Outpatient.png').attr('data-info', 'Outpatient');
                $('#Selected_Image2').attr('src', 'assets/img/resources/efficacy/Chronic_Respiratory.png').attr('data-info', 'Chronic_Respiratory');
                $('#Selected_Image3').attr('src', 'assets/img/resources/efficacy/Asthma.png').attr('data-info', 'Asthma');

                $('#triangle_image').attr('src', 'assets/img/resources/efficacy/Inpatient-Photo.png');
                $('#info_image').attr('src', 'assets/img/resources/efficacy/Inpatient-Description.png');
            })

            $('#AsthmaBtn').click(function() {
                selected_image_P2 = "Asthma";
                $('#selected_image_Show').removeClass('d-none');
                $('#p2_first').addClass('d-none')

                $('#Selected_Image1').attr('src', 'assets/img/resources/efficacy/Outpatient.png').attr('data-info', 'Outpatient');
                $('#Selected_Image2').attr('src', 'assets/img/resources/efficacy/Chronic_Respiratory.png').attr('data-info', 'Chronic_Respiratory');
                $('#Selected_Image3').attr('src', 'assets/img/resources/efficacy/Inpatient.png').attr('data-info', 'Inpatient');

                $('#triangle_image').attr('src', 'assets/img/resources/efficacy/Asthma-Photo.png');
                $('#info_image').attr('src', 'assets/img/resources/efficacy/Asthma-Description.png');
            })

            // p3

            var for_pneumoniaBtn = 0;
            var better_than_10_daysBtn = 0;
            var co_amoxiclavBtn = 0;

            $('#for_pneumoniaBtn').click(function() {
                if (for_pneumoniaBtn == 0) {
                    $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({
                        "width": "45%"
                    });
                    $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({
                        "width": "60%"
                    });
                    $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({
                        "width": "78%"
                    });
                    $(this).attr('src', 'assets/img/resources/dosage/For_Pneumonia_Show.png').css({
                        "width": "35%"
                    });
                    $('#p3_trans1').css({
                        "transform": "scaleY(1.2)",
                        "z-index": "1000",
                        "margin-left": "-50%"
                    });
                    $('#p3_trans2').removeAttr("style");
                    $('#p3_trans3').removeAttr("style");
                    for_pneumoniaBtn = 1;
                } else {
                    $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({
                        "width": "45%"
                    });
                    $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({
                        "width": "60%"
                    });
                    $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({
                        "width": "78%"
                    });
                    $('#p3_trans1').removeAttr("style");
                    $('#p3_trans2').removeAttr("style");
                    $('#p3_trans3').removeAttr("style");
                    for_pneumoniaBtn = 0;
                }


            })

            $('#better_than_10_daysBtn').click(function() {
                if (better_than_10_daysBtn == 0) {
                    $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({
                        "width": "45%"
                    });
                    $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({
                        "width": "60%"
                    });
                    $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({
                        "width": "78%"
                    });
                    $(this).attr('src', 'assets/img/resources/dosage/Better_than_10_Days_Show.png').css({
                        "width": "45%"
                    });
                    $('#p3_trans2').css({
                        "transform": "scaleY(1.2)",
                        "z-index": "100",
                        "margin-left": "-50%"
                    });
                    $('#p3_trans1').removeAttr("style");
                    $('#p3_trans3').removeAttr("style");
                    better_than_10_daysBtn = 1;
                } else {
                    $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({
                        "width": "45%"
                    });
                    $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({
                        "width": "60%"
                    });
                    $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({
                        "width": "78%"
                    });
                    $('#p3_trans1').removeAttr("style");
                    $('#p3_trans2').removeAttr("style");
                    $('#p3_trans3').removeAttr("style");
                    better_than_10_daysBtn = 0;
                }

            })
            $('#co_amoxiclavBtn').click(function() {
                if (co_amoxiclavBtn == 0) {
                    $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({
                        "width": "45%"
                    });
                    $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({
                        "width": "60%"
                    });
                    $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({
                        "width": "78%"
                    });
                    $(this).attr('src', 'assets/img/resources/dosage/Co_Amoxiclav_Show.png').css({
                        "width": "55%"
                    });;
                    $('#p3_trans3').css({
                        "transform": "scaleY(1.2)",
                        "z-index": "100",
                        "margin-left": "-50%"
                    });
                    $('#p3_trans2').removeAttr("style");
                    $('#p3_trans1').removeAttr("style");
                    co_amoxiclavBtn = 1;
                } else {
                    $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({
                        "width": "45%"
                    });
                    $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({
                        "width": "60%"
                    });
                    $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({
                        "width": "78%"
                    });
                    $('#p3_trans1').removeAttr("style");
                    $('#p3_trans2').removeAttr("style");
                    $('#p3_trans3').removeAttr("style");
                    co_amoxiclavBtn = 0;
                }

            })

            // p4
            var COPD_Treatment = 0;
            var Less_Adverse_Events = 0;
            var Resistant_Cough = 0;
            var Severe_Asthma = 0;
            $('#COPD_TreatmentBtn').click(function() {
                Less_Adverse_Events = 0;
                Resistant_Cough = 0;
                Severe_Asthma = 0;
                if (COPD_Treatment == 0) {
                    $('#COPD_TreatmentBtn').addClass('t_10');
                    $('#Less_Adverse_EventsBtn').addClass('w_100');
                    $('#Resistant_CoughBtn').addClass('w_100');
                    $('#Severe_AsthmaBtn').addClass('t_10');


                    $(this).removeClass('t_10').css({
                        'width': '100%'
                    });

                    $('#p4_trans1').removeAttr("style");
                    $('#p4_trans2').removeAttr("style");
                    $('#p4_trans3').removeAttr("style");
                    $('#p4_trans4').removeAttr("style");

                    $('#COPD_TreatmentBtn').attr('src', 'assets/img/resources/safety/COPD-Treatment.png');
                    $('#Less_Adverse_EventsBtn').attr('src', 'assets/img/resources/safety/Less-Adverse-Events.png');
                    $('#Resistant_CoughBtn').attr('src', 'assets/img/resources/safety/Resistant-Cough.png');
                    $('#Severe_AsthmaBtn').attr('src', 'assets/img/resources/safety/Severe-Asthma.png');


                    $('#COPD_TreatmentShow').addClass('d-none');
                    $('#Less_Adverse_EventsShow').addClass('d-none');
                    $('#Resistant_CoughShow').addClass('d-none');
                    $('#Severe_AsthmaShow').addClass('d-none');

                    $('#COPD_TreatmentShow').removeClass('d-none');

                    $(this).attr('src', 'assets/img/resources/safety/COPD-Treatment-Photo.png');
                    $('#p4_trans1').css({
                        "transform": "scale(1.1)"
                    });
                    COPD_Treatment = 1;
                } else {
                    $('#COPD_TreatmentBtn').addClass('t_10');
                    $('#Less_Adverse_EventsBtn').addClass('w_100');
                    $('#Resistant_CoughBtn').addClass('w_100');
                    $('#Severe_AsthmaBtn').addClass('t_10');
                    $('#COPD_TreatmentBtn').attr('src', 'assets/img/resources/safety/COPD-Treatment.png');
                    $('#Less_Adverse_EventsBtn').attr('src', 'assets/img/resources/safety/Less-Adverse-Events.png');
                    $('#Resistant_CoughBtn').attr('src', 'assets/img/resources/safety/Resistant-Cough.png');
                    $('#Severe_AsthmaBtn').attr('src', 'assets/img/resources/safety/Severe-Asthma.png');
                    $('#COPD_TreatmentShow').addClass('d-none');
                    $('#Less_Adverse_EventsShow').addClass('d-none');
                    $('#Resistant_CoughShow').addClass('d-none');
                    $('#Severe_AsthmaShow').addClass('d-none');
                    $('#p4_trans1').removeAttr('style');
                    COPD_Treatment = 0;
                }

            })

            $('#Less_Adverse_EventsBtn').click(function() {
                COPD_Treatment = 0;
                Resistant_Cough = 0;
                Severe_Asthma = 0;
                if (Less_Adverse_Events == 0) {
                    $('#COPD_TreatmentBtn').addClass('t_10');
                    $('#Less_Adverse_EventsBtn').addClass('w_100');
                    $('#Resistant_CoughBtn').addClass('w_100');
                    $('#Severe_AsthmaBtn').addClass('t_10');


                    $(this).removeClass('w_100').css({
                        'width': '100%'
                    });

                    $('#p4_trans1').removeAttr("style");
                    $('#p4_trans2').removeAttr("style");
                    $('#p4_trans3').removeAttr("style");
                    $('#p4_trans4').removeAttr("style");

                    $('#COPD_TreatmentBtn').attr('src', 'assets/img/resources/safety/COPD-Treatment.png');
                    $('#Less_Adverse_EventsBtn').attr('src', 'assets/img/resources/safety/Less-Adverse-Events.png');
                    $('#Resistant_CoughBtn').attr('src', 'assets/img/resources/safety/Resistant-Cough.png');
                    $('#Severe_AsthmaBtn').attr('src', 'assets/img/resources/safety/Severe-Asthma.png');


                    $('#COPD_TreatmentShow').addClass('d-none');
                    $('#Less_Adverse_EventsShow').addClass('d-none');
                    $('#Resistant_CoughShow').addClass('d-none');
                    $('#Severe_AsthmaShow').addClass('d-none');


                    $('#Less_Adverse_EventsShow').removeClass('d-none');
                    $(this).attr('src', 'assets/img/resources/safety/Less-Adverse-Events-Photo.png');
                    $('#p4_trans2').css({
                        "transform": "scale(1.2)"
                    });
                    Less_Adverse_Events = 1;
                } else {
                    $('#COPD_TreatmentBtn').addClass('t_10');
                    $('#Less_Adverse_EventsBtn').addClass('w_100');
                    $('#Resistant_CoughBtn').addClass('w_100');
                    $('#Severe_AsthmaBtn').addClass('t_10');
                    $('#COPD_TreatmentBtn').attr('src', 'assets/img/resources/safety/COPD-Treatment.png');
                    $('#Less_Adverse_EventsBtn').attr('src', 'assets/img/resources/safety/Less-Adverse-Events.png');
                    $('#Resistant_CoughBtn').attr('src', 'assets/img/resources/safety/Resistant-Cough.png');
                    $('#Severe_AsthmaBtn').attr('src', 'assets/img/resources/safety/Severe-Asthma.png');
                    $('#COPD_TreatmentShow').addClass('d-none');
                    $('#Less_Adverse_EventsShow').addClass('d-none');
                    $('#Resistant_CoughShow').addClass('d-none');
                    $('#Severe_AsthmaShow').addClass('d-none');
                    $('#p4_trans2').removeAttr('style');
                    Less_Adverse_Events = 0;
                }

            })

            $('#Resistant_CoughBtn').click(function() {
                COPD_Treatment = 0;
                Less_Adverse_Events = 0;
                Severe_Asthma = 0;
                if (Resistant_Cough == 0) {
                    $('#COPD_TreatmentBtn').addClass('t_10');
                    $('#Less_Adverse_EventsBtn').addClass('w_100');
                    $('#Resistant_CoughBtn').addClass('w_100');
                    $('#Severe_AsthmaBtn').addClass('t_10');


                    $(this).removeClass('w_100').css({
                        'width': '100%'
                    });


                    $('#p4_trans1').removeAttr("style");
                    $('#p4_trans2').removeAttr("style");
                    $('#p4_trans3').removeAttr("style");
                    $('#p4_trans4').removeAttr("style");

                    $('#COPD_TreatmentBtn').attr('src', 'assets/img/resources/safety/COPD-Treatment.png');
                    $('#Less_Adverse_EventsBtn').attr('src', 'assets/img/resources/safety/Less-Adverse-Events.png');
                    $('#Resistant_CoughBtn').attr('src', 'assets/img/resources/safety/Resistant-Cough.png');
                    $('#Severe_AsthmaBtn').attr('src', 'assets/img/resources/safety/Severe-Asthma.png');

                    $('#COPD_TreatmentShow').addClass('d-none');
                    $('#Less_Adverse_EventsShow').addClass('d-none');
                    $('#Resistant_CoughShow').addClass('d-none');
                    $('#Severe_AsthmaShow').addClass('d-none');

                    $('#Resistant_CoughShow').removeClass('d-none');
                    $(this).attr('src', 'assets/img/resources/safety/Resistance-Cough-Photo.png');
                    $('#p4_trans3').css({
                        "transform": "scale(1.2)"
                    });
                    Resistant_Cough = 1;
                } else {
                    $('#COPD_TreatmentBtn').addClass('t_10');
                    $('#Less_Adverse_EventsBtn').addClass('w_100');
                    $('#Resistant_CoughBtn').addClass('w_100');
                    $('#Severe_AsthmaBtn').addClass('t_10');
                    $('#COPD_TreatmentBtn').attr('src', 'assets/img/resources/safety/COPD-Treatment.png');
                    $('#Less_Adverse_EventsBtn').attr('src', 'assets/img/resources/safety/Less-Adverse-Events.png');
                    $('#Resistant_CoughBtn').attr('src', 'assets/img/resources/safety/Resistant-Cough.png');
                    $('#Severe_AsthmaBtn').attr('src', 'assets/img/resources/safety/Severe-Asthma.png');
                    $('#COPD_TreatmentShow').addClass('d-none');
                    $('#Less_Adverse_EventsShow').addClass('d-none');
                    $('#Resistant_CoughShow').addClass('d-none');
                    $('#Severe_AsthmaShow').addClass('d-none');
                    $('#p4_trans3').removeAttr('style');
                    Resistant_Cough = 0;
                }

            })

            $('#Severe_AsthmaBtn').click(function() {
                COPD_Treatment = 0;
                Less_Adverse_Events = 0;
                Resistant_Cough = 0;
                if (Severe_Asthma == 0) {
                    $('#COPD_TreatmentBtn').addClass('t_10')
                    $('#Less_Adverse_EventsBtn').addClass('w_100');
                    $('#Resistant_CoughBtn').addClass('w_100');
                    $('#Severe_AsthmaBtn').addClass('t_10');


                    $(this).removeClass('t_10').css({
                        'width': '100%'
                    });


                    $('#p4_trans1').removeAttr("style");
                    $('#p4_trans2').removeAttr("style");
                    $('#p4_trans3').removeAttr("style");
                    $('#p4_trans4').removeAttr("style");

                    $('#COPD_TreatmentBtn').attr('src', 'assets/img/resources/safety/COPD-Treatment.png');
                    $('#Less_Adverse_EventsBtn').attr('src', 'assets/img/resources/safety/Less-Adverse-Events.png');
                    $('#Resistant_CoughBtn').attr('src', 'assets/img/resources/safety/Resistant-Cough.png');
                    $('#Severe_AsthmaBtn').attr('src', 'assets/img/resources/safety/Severe-Asthma.png');

                    $('#COPD_TreatmentShow').addClass('d-none');
                    $('#Less_Adverse_EventsShow').addClass('d-none');
                    $('#Resistant_CoughShow').addClass('d-none');
                    $('#Severe_AsthmaShow').addClass('d-none');

                    $('#Severe_AsthmaShow').removeClass('d-none');
                    $(this).attr('src', 'assets/img/resources/safety/Severe-Asthma-Photo.png');
                    $('#p4_trans4').css({
                        "transform": "scale(1.1)"
                    });
                    Severe_Asthma = 1;
                } else {
                    $('#COPD_TreatmentBtn').addClass('t_10');
                    $('#Less_Adverse_EventsBtn').addClass('w_100');
                    $('#Resistant_CoughBtn').addClass('w_100');
                    $('#Severe_AsthmaBtn').addClass('t_10');
                    $('#COPD_TreatmentBtn').attr('src', 'assets/img/resources/safety/COPD-Treatment.png');
                    $('#Less_Adverse_EventsBtn').attr('src', 'assets/img/resources/safety/Less-Adverse-Events.png');
                    $('#Resistant_CoughBtn').attr('src', 'assets/img/resources/safety/Resistant-Cough.png');
                    $('#Severe_AsthmaBtn').attr('src', 'assets/img/resources/safety/Severe-Asthma.png');
                    $('#COPD_TreatmentShow').addClass('d-none');
                    $('#Less_Adverse_EventsShow').addClass('d-none');
                    $('#Resistant_CoughShow').addClass('d-none');
                    $('#Severe_AsthmaShow').addClass('d-none');
                    $('#p4_trans4').removeAttr('style');
                    Severe_Asthma = 0;
                }

            })

            // p5

            var Promising_Immunomodulatory = 0;
            var Inhibits_Mobility = 0;
            var Reduces_Serum = 0;
            var Promotes_Resolution = 0;

            $('#Promising_ImmunomodulatoryBtn').click(function() {
                Inhibits_Mobility = 0;
                Reduces_Serum = 0;
                Promotes_Resolution = 0;
                if (Promising_Immunomodulatory == 0) {
                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({
                        "width": "60%"
                    });
                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({
                        "width": "60%"
                    });
                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({
                        "width": "63%"
                    });
                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({
                        "width": "60%"
                    });


                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text2.png').css({
                        "width": "72%"
                    });
                    Promising_Immunomodulatory = 1;
                } else {
                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({
                        "width": "60%"
                    });
                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({
                        "width": "60%"
                    });
                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({
                        "width": "63%"
                    });
                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({
                        "width": "60%"
                    });
                    Promising_Immunomodulatory = 0;
                }

            })

            $('#Inhibits_MobilityBtn').click(function() {
                Promising_Immunomodulatory = 0;
                Reduces_Serum = 0;
                Promotes_Resolution = 0;
                if (Inhibits_Mobility == 0) {
                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({
                        "width": "60%"
                    });
                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({
                        "width": "60%"
                    });
                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({
                        "width": "63%"
                    });
                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({
                        "width": "60%"
                    });

                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text2.png').css({
                        "width": "72%"
                    });
                    Inhibits_Mobility = 1;
                } else {
                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({
                        "width": "60%"
                    });
                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({
                        "width": "60%"
                    });
                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({
                        "width": "63%"
                    });
                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({
                        "width": "60%"
                    });
                    Inhibits_Mobility = 0;
                }

            })

            $('#Reduces_SerumBtn').click(function() {
                Promising_Immunomodulatory = 0;
                Inhibits_Mobility = 0;
                Promotes_Resolution = 0;
                if (Reduces_Serum == 0) {
                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({
                        "width": "60%"
                    });
                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({
                        "width": "60%"
                    });
                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({
                        "width": "63%"
                    });
                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({
                        "width": "60%"
                    });

                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text2.png').css({
                        "width": "72%"
                    });
                    Reduces_Serum = 1;
                } else {
                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({
                        "width": "60%"
                    });
                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({
                        "width": "60%"
                    });
                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({
                        "width": "63%"
                    });
                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({
                        "width": "60%"
                    });
                    Reduces_Serum = 0;
                }

            })
            $('#Promotes_ResolutionBtn').click(function() {
                Promising_Immunomodulatory = 0;
                Inhibits_Mobility = 0;
                Reduces_Serum = 0;
                if (Promotes_Resolution == 0) {
                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({
                        "width": "60%"
                    });
                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({
                        "width": "60%"
                    });
                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({
                        "width": "63%"
                    });
                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({
                        "width": "60%"
                    });

                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text2.png').css({
                        "width": "72%"
                    });
                    Promotes_Resolution = 1;
                } else {
                    $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({
                        "width": "60%"
                    });
                    $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({
                        "width": "60%"
                    });
                    $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({
                        "width": "63%"
                    });
                    $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({
                        "width": "60%"
                    });
                    Promotes_Resolution = 0;
                }

            })









            // end f



            function show(nextView) {
                $('#p1').addClass('d-none');
                $('#p2').addClass('d-none');
                $('#p3').addClass('d-none');
                $('#p4').addClass('d-none');
                $('#p5').addClass('d-none');
                $('#p6').addClass('d-none');
                $('#' + nextView).removeClass('d-none');

            }

            function resetNavigator() {
                $('#home').attr('src', 'assets/img/navigation/Home.png').removeClass('selected_nav').css({
                    "width": "100%"
                }).addClass('opacity_hover');
                $('#efficacy').attr('src', 'assets/img/navigation/Efficacy.png').removeClass('selected_nav').css({
                    "margin-left": "0%",
                    "width": "100%"
                }).addClass('opacity_hover');
                $('#dosing').attr('src', 'assets/img/navigation/Dosing.png').removeClass('selected_nav').css({
                    "margin-left": "0%",
                    "width": "100%"
                }).addClass('opacity_hover');
                $('#safety').attr('src', 'assets/img/navigation/Safety.png').removeClass('selected_nav').css({
                    "margin-left": "0%",
                    "width": "100%"
                }).addClass('opacity_hover');
                $('#immuno').attr('src', 'assets/img/navigation/Immunomodulation.png').removeClass('selected_nav').css({
                    "margin-left": "0%",
                    "width": "100%"
                }).addClass('opacity_hover');
                $('#saving').attr('src', 'assets/img/navigation/Savings.png').removeClass('selected_nav').css({
                    "margin-left": "0%",
                    "width": "100%"
                }).addClass('opacity_hover');
            }

        });
    </script>
</body>

</html>