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


    $('#backTo4selector').click(function() {
        $('#p2_first').removeClass('d-none');
        $('#selected_image_Show').addClass('d-none');
    })


    $('#home').click(function() {
        resetNavigator();
        $(this).removeClass('opacity_hover');
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
        $(this).removeClass('opacity_hover');
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
        $(this).removeClass('opacity_hover');
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
        $(this).removeClass('opacity_hover');
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
        $(this).removeClass('opacity_hover');
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
        $(this).removeClass('opacity_hover');
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
            $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({ "width": "45%" });
            $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({ "width": "60%" });
            $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({ "width": "78%" });
            $(this).attr('src', 'assets/img/resources/dosage/For_Pneumonia_Show.png').css({ "width": "35%" });
            $('#p3_trans1').css({ "transform": "scaleY(1.5)", "z-index": "1000", "margin-left": "-50%" });
            $('#p3_trans2').removeAttr("style");
            $('#p3_trans3').removeAttr("style");
            for_pneumoniaBtn = 1;
        } else {
            $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({ "width": "45%" });
            $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({ "width": "60%" });
            $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({ "width": "78%" });
            $('#p3_trans1').removeAttr("style");
            $('#p3_trans2').removeAttr("style");
            $('#p3_trans3').removeAttr("style");
            for_pneumoniaBtn = 0;
        }


    })

    $('#better_than_10_daysBtn').click(function() {
        if (better_than_10_daysBtn == 0) {
            $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({ "width": "45%" });
            $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({ "width": "60%" });
            $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({ "width": "78%" });
            $(this).attr('src', 'assets/img/resources/dosage/Better_than_10_Days_Show.png').css({ "width": "45%" });
            $('#p3_trans2').css({ "transform": "scaleY(1.5)", "z-index": "100", "margin-left": "-50%" });
            $('#p3_trans1').removeAttr("style");
            $('#p3_trans3').removeAttr("style");
            better_than_10_daysBtn = 1;
        } else {
            $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({ "width": "45%" });
            $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({ "width": "60%" });
            $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({ "width": "78%" });
            $('#p3_trans1').removeAttr("style");
            $('#p3_trans2').removeAttr("style");
            $('#p3_trans3').removeAttr("style");
            better_than_10_daysBtn = 0;
        }

    })
    $('#co_amoxiclavBtn').click(function() {
        if (co_amoxiclavBtn == 0) {
            $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({ "width": "45%" });
            $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({ "width": "60%" });
            $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({ "width": "78%" });
            $(this).attr('src', 'assets/img/resources/dosage/Co_Amoxiclav_Show.png').css({ "width": "55%" });;
            $('#p3_trans3').css({ "transform": "scaleY(1.5)", "z-index": "100", "margin-left": "-50%" });
            $('#p3_trans2').removeAttr("style");
            $('#p3_trans1').removeAttr("style");
            co_amoxiclavBtn = 1;
        } else {
            $('#for_pneumoniaBtn').attr('src', 'assets/img/resources/dosage/for_pneumonia.png').css({ "width": "45%" });
            $('#better_than_10_daysBtn').attr('src', 'assets/img/resources/dosage/better_than_10_days.png').css({ "width": "60%" });
            $('#co_amoxiclavBtn').attr('src', 'assets/img/resources/dosage/co-amoxiclav.png').css({ "width": "78%" });
            $('#p3_trans1').removeAttr("style");
            $('#p3_trans2').removeAttr("style");
            $('#p3_trans3').removeAttr("style");
            co_amoxiclavBtn = 0;
        }

    })

    // p4

    $('#COPD_TreatmentBtn').click(function() {
        $('#COPD_TreatmentBtn').addClass('t_10');
        $('#Less_Adverse_EventsBtn').addClass('w_100');
        $('#Resistant_CoughBtn').addClass('w_100');
        $('#Severe_AsthmaBtn').addClass('t_10');


        $(this).removeClass('t_10').css({ 'width': '100%' });

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
        $('#p4_trans1').css({ "transform": "scale(1.1)" });
    })

    $('#Less_Adverse_EventsBtn').click(function() {
        $('#COPD_TreatmentBtn').addClass('t_10');
        $('#Less_Adverse_EventsBtn').addClass('w_100');
        $('#Resistant_CoughBtn').addClass('w_100');
        $('#Severe_AsthmaBtn').addClass('t_10');


        $(this).removeClass('w_100').css({ 'width': '100%' });

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
        $('#p4_trans2').css({ "transform": "scale(1.2)" });
    })

    $('#Resistant_CoughBtn').click(function() {
        $('#COPD_TreatmentBtn').addClass('t_10');
        $('#Less_Adverse_EventsBtn').addClass('w_100');
        $('#Resistant_CoughBtn').addClass('w_100');
        $('#Severe_AsthmaBtn').addClass('t_10');


        $(this).removeClass('w_100').css({ 'width': '100%' });


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
        $('#p4_trans3').css({ "transform": "scale(1.2)" });
    })

    $('#Severe_AsthmaBtn').click(function() {
        $('#COPD_TreatmentBtn').addClass('t_10')
        $('#Less_Adverse_EventsBtn').addClass('w_100');
        $('#Resistant_CoughBtn').addClass('w_100');
        $('#Severe_AsthmaBtn').addClass('t_10');


        $(this).removeClass('t_10').css({ 'width': '100%' });


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
        $('#p4_trans4').css({ "transform": "scale(1.1)" });
    })

    // p5

    $('#Promising_ImmunomodulatoryBtn').click(function() {
        $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({ "width": "60%" });
        $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({ "width": "60%" });
        $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({ "width": "63%" });
        $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({ "width": "60%" });

        $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text2.png').css({ "width": "72%" });
    })

    $('#Inhibits_MobilityBtn').click(function() {
        $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({ "width": "60%" });
        $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({ "width": "60%" });
        $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({ "width": "63%" });
        $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({ "width": "60%" });

        $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text2.png').css({ "width": "72%" });
    })

    $('#Reduces_SerumBtn').click(function() {
        $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({ "width": "60%" });
        $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({ "width": "60%" });
        $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({ "width": "63%" });
        $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({ "width": "60%" });

        $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text2.png').css({ "width": "72%" });
    })
    $('#Promotes_ResolutionBtn').click(function() {
        $('#Promising_ImmunomodulatoryShow').attr('src', 'assets/img/resources/immo/Promising-Immunomodulatory-Text.png').css({ "width": "60%" });
        $('#Inhibits_MobilityShow').attr('src', 'assets/img/resources/immo/Inhibits-Mobility-and-Quorum-Sensing-Text.png').css({ "width": "60%" });
        $('#Reduces_SerumBtnShow').attr('src', 'assets/img/resources/immo/Reduces-Serum-Concentrations-Text.png').css({ "width": "63%" });
        $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text.png').css({ "width": "60%" });

        $('#Promotes_ResolutionShow').attr('src', 'assets/img/resources/immo/Promotes-Resolution-Text2.png').css({ "width": "72%" });
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
        $('#home').attr('src', 'assets/img/navigation/Home.png').removeClass('selected_nav').css({ "width": "100%" }).addClass('opacity_hover');
        $('#efficacy').attr('src', 'assets/img/navigation/Efficacy.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" }).addClass('opacity_hover');
        $('#dosing').attr('src', 'assets/img/navigation/Dosing.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" }).addClass('opacity_hover');
        $('#safety').attr('src', 'assets/img/navigation/Safety.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" }).addClass('opacity_hover');
        $('#immuno').attr('src', 'assets/img/navigation/Immunomodulation.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" }).addClass('opacity_hover');
        $('#saving').attr('src', 'assets/img/navigation/Savings.png').removeClass('selected_nav').css({ "margin-left": "0%", "width": "100%" }).addClass('opacity_hover');
    }


})