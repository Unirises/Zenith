$(document).ready(function() {
    $('#referenceShow').hide();
    var referencesStatus = 0;

    if ($(window).width() < 481) {
        $(".background").css({ "background-image": "none", "background-color": "#D12E2D" });
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



    $('#home').click(function() {
        resetNavigator();
        $(this).attr('src', 'assets/img/navigation/selected_home.png');
        $(this).css({ "width": "140%" }).addClass('selected_nav');
        $('.background').css({ "background-image": "url('assets/img/bg/bg1.png')" }).addClass('selected_nav');
        $('#referencesBtn').addClass('d-none');
        $('#referenceShow').hide();
        $('#referencesBtn').show();
        referencesStatus = 0;
        show('p1');
    });
    $('#efficacy').click(function() {
        resetNavigator();
        $(this).attr('src', 'assets/img/navigation/selected_efficacy.png');
        $(this).css({ "margin-left": "-20%", "width": "140%" }).addClass('selected_nav');
        $('#references_change').attr('src', 'assets/img/resources/efficacy/Efficacy-References.png')
        $('.background').css({ "background-image": "url('assets/img/bg/bg2.png')" });
        $('#referencesBtn').removeClass('d-none');
        $('#referenceShow').hide();
        $('#referencesBtn').show();
        referencesStatus = 0;
        show('p2');
    });
    $('#dosing').click(function() {
        resetNavigator();
        $(this).attr('src', 'assets/img/navigation/selected_dosage.png');
        $(this).css({ "margin-left": "-20%", "width": "140%" }).addClass('selected_nav');
        $('#references_change').attr('src', 'assets/img/resources/dosage/Dosage-References.png')
        $('.background').css({ "background-image": "url('assets/img/bg/bg2.png')" });
        $('#referencesBtn').removeClass('d-none');
        $('#referenceShow').hide();
        $('#referencesBtn').show();
        referencesStatus = 0;
        show('p3');
    });
    $('#safety').click(function() {
        resetNavigator();
        $(this).attr('src', 'assets/img/navigation/selected_safety.png');
        $(this).css({ "margin-left": "-20%", "width": "140%" }).addClass('selected_nav');
        $('#references_change').attr('src', 'assets/img/resources/safety/Safety-References.png')
        $('.background').css({ "background-image": "url('assets/img/bg/bg2.png')" });
        $('#referencesBtn').removeClass('d-none');
        $('#referenceShow').hide();
        $('#referencesBtn').show();
        referencesStatus = 0;
        show('p4');
    });
    $('#immuno').click(function() {
        resetNavigator();
        $(this).attr('src', 'assets/img/navigation/selected_immunomodulation.png');
        $(this).css({ "margin-left": "-20%", "width": "140%" }).addClass('selected_nav');
        $('#references_change').attr('src', 'assets/img/resources/immo/Immunomodulation-References.png')
        $('.background').css({ "background-image": "url('assets/img/bg/bg2.png')" });
        $('#referencesBtn').removeClass('d-none');
        $('#referenceShow').hide();
        $('#referencesBtn').show();
        referencesStatus = 0;
        show('p5');
    });
    $('#saving').click(function() {
        resetNavigator();
        $(this).attr('src', 'assets/img/navigation/selected_savings.png');
        $(this).css({ "margin-left": "-17%", "width": "140%" }).addClass('selected_nav');
        $('.background').css({ "background-image": "url('assets/img/bg/bg3.png')" });
        $('#referencesBtn').addClass('d-none');
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



    $('#OutpatientBtn').click(function() {
        $('#OutpatientShow').removeClass('d-none');
        $(this).addClass('d-none');
    })

    $('#ChronicBtn').click(function() {
        $('#ChronicShow').removeClass('d-none');
        $(this).addClass('d-none');
    })

    $('#InpatientBtn').click(function() {
        $('#InpatientShow').removeClass('d-none');
        $(this).addClass('d-none');
    })

    $('#AsthmaBtn').click(function() {
        $('#AsthmaShow').removeClass('d-none');
        $(this).addClass('d-none');
    })

    // p3

    $('#for_pneumoniaBtn').click(function() {
        $(this).attr('src', 'assets/img/resources/dosage/For_Pneumonia_Show.png');
    })

    $('#better_than_10_daysBtn').click(function() {
        $(this).attr('src', 'assets/img/resources/dosage/Better_than_10_Days_Show.png');
    })
    $('#co_amoxiclavBtn').click(function() {
        $(this).attr('src', 'assets/img/resources/dosage/Co_Amoxiclav_Show.png');
    })

    // p4

    $('#COPD_TreatmentBtn').click(function() {
        $('#COPD_TreatmentShow').removeClass('d-none');
        $(this).attr('src', 'assets/img/resources/safety/COPD-Treatment-Photo.png');
    })

    $('#Less_Adverse_EventsBtn').click(function() {
        $('#Less_Adverse_EventsShow').removeClass('d-none');
        $(this).attr('src', 'assets/img/resources/safety/Less-Adverse-Events-Photo.png');
    })

    $('#Resistant_CoughBtn').click(function() {
        $('#Resistant_CoughShow').removeClass('d-none');
        $(this).attr('src', 'assets/img/resources/safety/Resistance-Cough-Photo.png');
    })

    $('#Severe_AsthmaBtn').click(function() {
        $('#Severe_AsthmaShow').removeClass('d-none');
        $(this).attr('src', 'assets/img/resources/safety/Severe-Asthma-Photo.png');
    })

    // p5

    $('#Promising_ImmunomodulatoryBtn').click(function() {
        $('#middle_image').attr('src', 'assets/img/resources/immo/Middle-Image2.png');
        $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text2.png').css({ "width": "60%" });
    })

    $('#Inhibits_MobilityBtn').click(function() {
        $('#middle_image').attr('src', 'assets/img/resources/immo/Middle-Image2.png');
        $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text2.png').css({ "width": "60%" });
    })

    $('#Reduces_SerumBtn').click(function() {
        $('#middle_image').attr('src', 'assets/img/resources/immo/Middle-Image2.png');
        $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text2.png').css({ "width": "60%" });
    })
    $('#Promotes_ResolutionBtn').click(function() {
        $('#middle_image').attr('src', 'assets/img/resources/immo/Middle-Image2.png');
        $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text2.png').css({ "width": "60%" });
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
        $('#home').attr('src', 'assets/img/navigation/Home.png').removeClass('selected_nav').css({ "width": "100%" });
        $('#efficacy').attr('src', 'assets/img/navigation/Efficacy.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" });
        $('#dosing').attr('src', 'assets/img/navigation/Dosing.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" });
        $('#safety').attr('src', 'assets/img/navigation/Safety.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" });
        $('#immuno').attr('src', 'assets/img/navigation/Immunomodulation.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" });
        $('#saving').attr('src', 'assets/img/navigation/Savings.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" });
    }


})