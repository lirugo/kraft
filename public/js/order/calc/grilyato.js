document.getElementById("grilyato_othercolor").disabled = true;
document.getElementById("grilyato_othercolor").style.display = "none";
document.getElementById("calc_grilyato_table").style.display = "none";
$("#grilyato_color").change(function() {
    if($('#grilyato_color').find(":selected").attr("value") === "other")
    {
        document.getElementById("grilyato_othercolor").disabled = false;
        document.getElementById("grilyato_othercolor").style.display = "initial";
    }else
    {
        document.getElementById("grilyato_othercolor").disabled = true;
        document.getElementById("grilyato_othercolor").style.display = "none";
    }
});
$("#grilyato_model").change(function() {
    document.getElementById("grilyato_sizecells").options[1].disabled = false;
    document.getElementById("grilyato_sizecells").options[2].disabled = false;
    document.getElementById("grilyato_sizecells").options[3].disabled = false;
    document.getElementById("grilyato_sizecells").options[4].disabled = false;
    document.getElementById("grilyato_sizecells").options[5].disabled = false;
    document.getElementById("grilyato_sizecells").options[6].disabled = false;
    document.getElementById("grilyato_sizecells").options[7].disabled = false;
    document.getElementById("grilyato_sizecells").options[8].disabled = false;

    if($('#grilyato_model').find(":selected").attr("value") === "Glk-15")
    {
        document.getElementById("grilyato_wire_with_hook").disabled = false;
        document.getElementById("grilyato_wire_with_hook").style.display = "initial";
    }else
    {
        document.getElementById("grilyato_wire_with_hook").disabled = true;
        document.getElementById("grilyato_wire_with_hook").style.display = "none";
    }

    if($('#grilyato_model').find(":selected").attr("value") === "classical")
    {
        document.getElementById("grilyato_sizecells").options[6].disabled = true;
        document.getElementById("grilyato_sizecells").options[7].disabled = true;
        document.getElementById("grilyato_sizecells").options[8].disabled = true;

        document.getElementById("grilyato_sizecells").options[1].selected = true;
    }

    if($('#grilyato_model').find(":selected").attr("value") === "pyramidal")
    {
        document.getElementById("grilyato_sizecells").options[1].disabled = true;
        document.getElementById("grilyato_sizecells").options[2].disabled = true;
        document.getElementById("grilyato_sizecells").options[3].disabled = true;
        document.getElementById("grilyato_sizecells").options[4].disabled = true;
        document.getElementById("grilyato_sizecells").options[5].disabled = true;

        document.getElementById("grilyato_sizecells").options[6].selected = true;
    }
});
        document.getElementById("grilyato_wire_with_hook").style.display = "none";
        document.getElementById("grilyato_wire_with_hook").disabled = true;

//Submitting form
function formGrilyato() {
    var s = document.getElementById("grilyato_areaceiling").value;
    var p = document.getElementById("grilyato_pceiling").value;
    var difficult = document.getElementById("grilyato_difficult").value;
    var sizecells = document.getElementById("grilyato_sizecells").value;
    var grilyato_color = document.getElementById("grilyato_color").value;
    var grilyato_model = document.getElementById("grilyato_model").value;
    var grilyato_wire_with_ear = document.getElementById("grilyato_wire_with_ear").value;
    var grilyato_wire_with_hook = document.getElementById("grilyato_wire_with_hook").value;

    //AJAX REQUEST TO SERVER

    //AJAX REQUEST TO SERVER
    function getNewENumber(cb_func){
        $.ajax
        ({
            type: "POST",
            url: "/order/grilyato/vendor",
            response:'json',//тип возвращаемого ответа text либо xml
            data:{
                '_token': $('meta[name=csrf-token]').attr('content'),
                'grilyato_model':grilyato_model,
                'color':grilyato_color,
                'sizecells':sizecells,
                'grilyato_wire_with_ear':grilyato_wire_with_ear,
                'grilyato_wire_with_hook':grilyato_wire_with_hook,
            },
            beforeSend: function(){
                $( function() {
                    var progressbar = $( "#progressbar" ),
                        progressLabel = $( ".progress-label" );

                    progressbar.progressbar({
                        value: false,
                        change: function() {
                            progressLabel.text( progressbar.progressbar( "value" ) + "%" );
                        },
                        complete: function() {
                            progressLabel.text( "Complete!" );
                        }
                    });
                } );
                $( function() {
                    $( "#loader-message" ).dialog({
                        modal: true,
                    });
                } );
            },
            success: cb_func,
            error: function(request,error) {
                $( "#loader-message" ).dialog('close');
                alert('An error occurred attempting to get new e-number');
                console.log(request, error);
            }
        });
    }

    //отправляю wall_profile запрос и получаю ответ
    getNewENumber(function( vendor ) {
        $( "#loader-message" ).dialog('close');
        console.log(vendor);


//DataProcessing
    if(document.getElementById("grilyato_model").value === 'classical' || document.getElementById("grilyato_model").value === 'pyramidal'){
        var k2400;
        if (document.getElementById("grilyato_model").value === 'classical' || document.getElementById("grilyato_model").value === 'pyramidal') {
            if (document.getElementById("grilyato_sizecells").value <= 100)
                k2400 = grilyato_g2400c_a;
            else
                k2400 = grilyato_g2400c_b;
        }
        var tp2400 = k2400 * s + ((k2400 * s) / 100) * difficult;
        var tp3600 = 0;
        var tp600tc = 0;
        var tp1200;
        var tp600, tp600f, tp600m;
        if (document.getElementById("grilyato_sizecells").value <= 100)
            tp1200 = 0;
        else
            tp1200 = grilyato_g1200c_b * s + ((grilyato_g1200c_b * s) / 100) * difficult;

        if (document.getElementById("grilyato_sizecells").value <= 100)
            tp600 = grilyato_g600c_a * s + ((grilyato_g600c_a * s) / 100) * difficult;
        else
            tp600 = grilyato_g1200c_b * s + ((grilyato_g1200c_b * s) / 100) * difficult;

        tp600f = (600 / (sizecells - 1)) * grilyato_g600fc_a * p;
        tp600f = tp600f + (tp600f / 100) * (difficult / 10);
        tp600m = tp600f;

        var susp = tp2400 * grilyato_suspc_a;
        var wire = tp2400 * 3;
        var angles = p / grilyato_L3000c_a;
        angles = angles + ((angles / 100) * difficult) * 2;
        var suspass = tp2400 * grilyato_suspass_a;
        var dowel1, dowel2;

        dowel1 = suspass;
        dowel2 = p * 2;
    }
    else {
        var angles =0;
        var suspass = 0;
        var tp2400 = 0;
        var wire = 0.7 * s;
        wire = Math.ceil(wire + (wire/100*difficult));
        var susp = wire;
        var dowel1 = 0, dowel2 = 0;
        var tp3600 = grilyato_tp3600c*s+((grilyato_tp3600c*s)/100)*difficult;
        tp1200 = grilyato_tp1200c*s+((grilyato_tp1200c*s)/100)*difficult;
        tp600 = 11.12*s+((11.12*s)/100)*difficult;
        tp600f = (600 / (sizecells - 1)) * grilyato_g600fc_a * p;
        tp600f = tp600f + (tp600f / 100) * (difficult / 10);
        tp600m = tp600f;
        var tp600tc = grilyato_g600tc*s+((grilyato_g600tc*s)/100)*difficult;
    }
    //Price
    var color;
    if(document.getElementById('grilyato_color').value === "other")
    {
        price = 1.5;
        color = document.getElementById("grilyato_othercolor").value;
    }
    else
    {
        price = 1;
        color = document.getElementById("grilyato_color").value;
    }
    var tp3600_price = tp3600c_price*price;
    var tp2400_price = grilyato_g2400c_price*price;
    var tp1200_price = grilyato_g1200c_price*price;
    var tp600_price = grilyato_g600c_price*price;
    var tp600f_price = grilyato_g600fc_price*price;
    var tp600tc_price = grilyato_g600tc_price*price;
    var L3000_price = grilyato_L3000c_price*price;
    var susp_price = grilyato_gsusp_price*price;
    var gsuspass_price = grilyato_gsuspass_price*price;
    var dowel1c_price = grilyato_dowel1_price*price;
    var dowel2c_price = grilyato_dowel2_price*price;
    //Set in Table
    //3600
    if(vendor['3600'] != null) {
        $("#grilyato-3600").show();
        document.getElementById("table-grilyato-3600-desciption").innerHTML = vendor['3600'].description;
        document.getElementById("table-grilyato-3600-vendor").innerHTML = vendor['3600'].vendor_code;
        document.getElementById("table-grilyato-3600-width").innerHTML = '';
        document.getElementById("table-grilyato-3600-price").innerHTML = vendor['3600'].price;
        document.getElementById("table-grilyato-3600-price-all").innerHTML = (Math.ceil(tp3600/tp3600c_pack)*vendor['3600'].price*tp3600c_pack).toFixed(2);
        document.getElementById("table-grilyato-3600-model").innerHTML = '';
        document.getElementById("table-grilyato-3600-length").innerHTML = '3600';
        document.getElementById("table-grilyato-3600-color").innerHTML = color;
        document.getElementById("table-grilyato-3600-count").innerHTML = Math.ceil(tp3600);
    }
    else {
        $("#grilyato-3600").hide();
        document.getElementById("table-grilyato-3600-vendor").innerHTML = '';
    }
    //2400
    if(vendor['2400'] != null) {
        $("#grilyato-2400").show();
        document.getElementById("table-grilyato-2400-vendor").innerHTML = vendor['2400'].vendor_code;
        document.getElementById("table-grilyato-2400-model").innerHTML = '';
        document.getElementById("table-grilyato-2400-price").innerHTML = vendor['2400'].price;
        document.getElementById("table-grilyato-2400-price-all").innerHTML = (Math.ceil(tp2400/grilyato_g2400_pack)*vendor['2400'].price*grilyato_g2400_pack).toFixed(2);
        document.getElementById("table-grilyato-2400-desciption").innerHTML = vendor['2400'].description;
        document.getElementById("table-grilyato-2400-width").innerHTML = '';
        document.getElementById("table-grilyato-2400-length").innerHTML = '2400';
        document.getElementById("table-grilyato-2400-color").innerHTML = color;
        document.getElementById("table-grilyato-2400-count").innerHTML = Math.ceil(tp2400);
    }else {
        $("#grilyato-2400").hide();
        document.getElementById("table-grilyato-2400-vendor").innerHTML = '';
    }
    //1200
    if(vendor['1200'] != null) {
        $("#grilyato-1200").show();
        document.getElementById("table-grilyato-1200-vendor").innerHTML = vendor['1200'].vendor_code;
        document.getElementById("table-grilyato-1200-width").innerHTML = '';
        document.getElementById("table-grilyato-1200-price-all").innerHTML = (Math.ceil(tp1200/grilyato_g1200_pack)*vendor['1200'].price*grilyato_g1200_pack).toFixed(2);
        document.getElementById("table-grilyato-1200-price").innerHTML = vendor['1200'].price;
        document.getElementById("table-grilyato-1200-desciption").innerHTML = vendor['1200'].description;
        document.getElementById("table-grilyato-1200-length").innerHTML = '1200';
        document.getElementById("table-grilyato-1200-color").innerHTML = color;
        document.getElementById("table-grilyato-1200-count").innerHTML = Math.ceil(tp1200);
    }else {
        $("#grilyato-1200").hide();
        document.getElementById("table-grilyato-1200-vendor").innerHTML = '';
    }
    //600
    if(vendor['600'] != null) {
        $("#grilyato-600").show();
        document.getElementById("table-grilyato-600-vendor").innerHTML = vendor['600'].vendor_code;
        document.getElementById("table-grilyato-600-desciption").innerHTML = vendor['600'].description;
        document.getElementById("table-grilyato-600-length").innerHTML = '600';
        document.getElementById("table-grilyato-600-color").innerHTML = color;
        document.getElementById("table-grilyato-600-count").innerHTML = Math.ceil(tp600);
        document.getElementById("table-grilyato-600-price").innerHTML = vendor['600'].price;
        document.getElementById("table-grilyato-600-price-all").innerHTML = (Math.ceil(tp600/grilyato_g600_pack)*vendor['600'].price*grilyato_g600_pack).toFixed(2);
    }else {
        $("#grilyato-600").hide();
        document.getElementById("table-grilyato-600-vendor").innerHTML = '';
    }
    //600m
    if(vendor['600m'] != null) {
        $("#grilyato-600m").show();
        document.getElementById("table-grilyato-600m-vendor").innerHTML = vendor['600m'].vendor_code;
        document.getElementById("table-grilyato-600m-desciption").innerHTML = vendor['600m'].description;
        document.getElementById("table-grilyato-600m-width").innerHTML = '';
        document.getElementById("table-grilyato-600m-length").innerHTML = '600';
        document.getElementById("table-grilyato-600m-color").innerHTML = color;
        document.getElementById("table-grilyato-600m-count").innerHTML = Math.ceil(tp600f);
        document.getElementById("table-grilyato-600m-price").innerHTML = vendor['600m'].price;
        document.getElementById("table-grilyato-600m-price-all").innerHTML = (Math.ceil(tp600f/grilyato_g600f_pack)*vendor['600m'].price*grilyato_g600f_pack).toFixed(2);
    }else {
        $("#grilyato-600m").hide();
        document.getElementById("table-grilyato-600m-vendor").innerHTML = '';
    }
    //600f
    if(vendor['600f'] != null) {
        $("#grilyato-600f").show();
        document.getElementById("table-grilyato-600f-vendor").innerHTML = vendor['600f'].vendor_code;
        document.getElementById("table-grilyato-600f-desciption").innerHTML = vendor['600f'].description;
        document.getElementById("table-grilyato-600f-width").innerHTML = '';
        document.getElementById("table-grilyato-600f-length").innerHTML = '600';
        document.getElementById("table-grilyato-600f-color").innerHTML = color;
        document.getElementById("table-grilyato-600f-count").innerHTML = Math.ceil(tp600f);
        document.getElementById("table-grilyato-600f-price").innerHTML = vendor['600f'].price;
        document.getElementById("table-grilyato-600f-price-all").innerHTML = (Math.ceil(tp600f/grilyato_g600f_pack)*vendor['600f'].price*grilyato_g600f_pack).toFixed(2);
    }else {
        $("#grilyato-600f").hide();
        document.getElementById("table-grilyato-600f-vendor").innerHTML = '';
    }
    //SUSP
    if(vendor['susp'] != null) {
        $("#grilyato-susp").show();
        document.getElementById("table-grilyato-susp-vendor").innerHTML =  vendor['susp'].vendor_code;
        // document.getElementById("table-grilyato-susp-model").innerHTML = $( "#grilyato_model option:selected" ).text();
        document.getElementById("table-grilyato-susp-desciption").innerHTML = vendor['susp'].description;
        // document.getElementById("table-grilyato-susp-width").innerHTML = document.getElementById("grilyato_sizecells").value;
        // document.getElementById("table-grilyato-susp-length").innerHTML = document.getElementById("grilyato_sizecells").value;
        // document.getElementById("table-grilyato-susp-color").innerHTML = color;
        document.getElementById("table-grilyato-susp-count").innerHTML = Math.ceil(susp);
        document.getElementById("table-grilyato-susp-price").innerHTML = vendor['susp'].price;
        document.getElementById("table-grilyato-susp-price-all").innerHTML = (Math.ceil(susp/grilyato_gsusp_pack)*vendor['susp'].price*grilyato_gsusp_pack).toFixed(2);
    }else {
        $("#grilyato-susp").hide();
        document.getElementById("table-grilyato-susp-vendor").innerHTML = '';
    }
    //EAR
    if(vendor['wireWithEar'] != null) {
        $("#grilyato-ear").show();
        document.getElementById("table-grilyato-ear-vendor").innerHTML =  vendor['wireWithEar'].vendor_code;
        document.getElementById("table-grilyato-ear-model").innerHTML = '';
        document.getElementById("table-grilyato-ear-desciption").innerHTML = vendor['wireWithEar'].description;
        // document.getElementById("table-grilyato-ear-width").innerHTML = document.getElementById("grilyato_sizecells").value;
        document.getElementById("table-grilyato-ear-length").innerHTML = '';
        // document.getElementById("table-grilyato-ear-color").innerHTML = color;
        document.getElementById("table-grilyato-ear-count").innerHTML = Math.ceil(wire);
        document.getElementById("table-grilyato-ear-price").innerHTML = vendor['wireWithEar'].price;
        document.getElementById("table-grilyato-ear-price-all").innerHTML = (Math.ceil(wire/grilyato_gsusp_pack)*vendor['wireWithEar'].price*grilyato_gsusp_pack).toFixed(2);
    }else {
        $("#grilyato-ear").hide();
        document.getElementById("table-grilyato-ear-vendor").innerHTML = '';
    }
    //HOOK
    if(vendor['wireWithHook'] != null) {
        $("#grilyato-hook").show();
        document.getElementById("table-grilyato-hook-vendor").innerHTML =  vendor['wireWithHook'].vendor_code;
        document.getElementById("table-grilyato-hook-model").innerHTML = '';
        document.getElementById("table-grilyato-hook-desciption").innerHTML = vendor['wireWithHook'].description;
        // document.getElementById("table-grilyato-hook-width").innerHTML = document.getElementById("grilyato_sizecells").value;
        document.getElementById("table-grilyato-hook-length").innerHTML = '';
        // document.getElementById("table-grilyato-hook-color").innerHTML = color;
        document.getElementById("table-grilyato-hook-count").innerHTML = Math.ceil(wire);
        document.getElementById("table-grilyato-hook-price").innerHTML = vendor['wireWithHook'].price;
        document.getElementById("table-grilyato-hook-price-all").innerHTML = (Math.ceil(wire/grilyato_gsusp_pack)*vendor['wireWithHook'].price*grilyato_gsusp_pack).toFixed(2);
    }else {
        $("#grilyato-hook").hide();
        document.getElementById("table-grilyato-hook-vendor").innerHTML = '';
    }

    console.log($('#grilyato_model').find(":selected").attr("value"));
    if($('#grilyato_model').find(":selected").attr("value") != "Glk-15"){
        $("#grilyato-angle").show();
        $("#grilyato-dowel1").show();
        $("#grilyato-dowel2").show();
        //ANGLE
        document.getElementById("table-grilyato-angle-vendor").innerHTML = vendor['angle'].vendor_code;
        // document.getElementById("table-grilyato-angle-model").innerHTML = $( "#grilyato_model option:selected" ).text();
        document.getElementById("table-grilyato-angle-desciption").innerHTML = vendor['angle'].description;
        // document.getElementById("table-grilyato-angle-width").innerHTML = document.getElementById("grilyato_sizecells").value;
        // document.getElementById("table-grilyato-angle-length").innerHTML = document.getElementById("grilyato_sizecells").value;
        document.getElementById("table-grilyato-angle-color").innerHTML = vendor['angle'].color;
        document.getElementById("table-grilyato-angle-count").innerHTML = Math.ceil(angles);
        document.getElementById("table-grilyato-angle-price").innerHTML = vendor['angle'].price;
        document.getElementById("table-grilyato-angle-price-all").innerHTML = (Math.ceil(angles/grilyato_gL3000_pack)*vendor['angle'].price*grilyato_gL3000_pack).toFixed(2);

        //dowel1
        document.getElementById("table-grilyato-dowel1-vendor").innerHTML = vendor['dowel1'].vendor_code;
        // document.getElementById("table-grilyato-dowel1-model").innerHTML = $( "#grilyato_model option:selected" ).text();
        document.getElementById("table-grilyato-dowel1-desciption").innerHTML = vendor['dowel1'].description;
        // document.getElementById("table-grilyato-dowel1-width").innerHTML = document.getElementById("grilyato_sizecells").value;
        // document.getElementById("table-grilyato-dowel1-length").innerHTML = document.getElementById("grilyato_sizecells").value;
        // document.getElementById("table-grilyato-dowel1-color").innerHTML = color;
        document.getElementById("table-grilyato-dowel1-count").innerHTML = Math.ceil(dowel1/100);
        document.getElementById("table-grilyato-dowel1-price").innerHTML = vendor['dowel1'].price;
        document.getElementById("table-grilyato-dowel1-price-all").innerHTML = (Math.ceil(dowel1/100)*vendor['dowel1'].price).toFixed(2);

        //dowel2
        document.getElementById("table-grilyato-dowel2-vendor").innerHTML = vendor['dowel2'].vendor_code;
        // document.getElementById("table-grilyato-dowel2-model").innerHTML = $( "#grilyato_model option:selected" ).text();
        document.getElementById("table-grilyato-dowel2-desciption").innerHTML = vendor['dowel2'].description;
        // document.getElementById("table-grilyato-dowel2-width").innerHTML = document.getElementById("grilyato_sizecells").value;
        // document.getElementById("table-grilyato-dowel2-length").innerHTML = document.getElementById("grilyato_sizecells").value;
        // document.getElementById("table-grilyato-dowel2-color").innerHTML = color;
        document.getElementById("table-grilyato-dowel2-count").innerHTML = Math.ceil(dowel2/100);
        document.getElementById("table-grilyato-dowel2-price").innerHTML = vendor['dowel2'].price;
        document.getElementById("table-grilyato-dowel2-price-all").innerHTML = (Math.ceil(dowel2/100)*vendor['dowel2'].price).toFixed(2);
    }
    else {
        $("#grilyato-angle").hide();
        document.getElementById("table-grilyato-angle-vendor").innerHTML = '';
        $("#grilyato-dowel1").hide();
        document.getElementById("table-grilyato-dowel1-vendor").innerHTML = '';
        $("#grilyato-dowel2").hide();
        document.getElementById("table-grilyato-dowel2-vendor").innerHTML = '';
    }

    document.getElementById("table-grilyato-total").innerHTML =(
        +document.getElementById("table-grilyato-3600-price-all").innerHTML+
        +document.getElementById("table-grilyato-2400-price-all").innerHTML+
        +document.getElementById("table-grilyato-1200-price-all").innerHTML+
        +document.getElementById("table-grilyato-600-price-all").innerHTML+
        +document.getElementById("table-grilyato-600m-price-all").innerHTML+
        +document.getElementById("table-grilyato-600f-price-all").innerHTML+
        +document.getElementById("table-grilyato-susp-price-all").innerHTML+
        +document.getElementById("table-grilyato-ear-price-all").innerHTML+
        +document.getElementById("table-grilyato-hook-price-all").innerHTML+
        +document.getElementById("table-grilyato-angle-price-all").innerHTML+
        +document.getElementById("table-grilyato-dowel1-price-all").innerHTML+
        +document.getElementById("table-grilyato-dowel2-price-all").innerHTML
    ).toFixed(2);


    document.getElementById("calc_grilyato_table").style.display = "initial";
    });
    //Stop SUBMITING Form
    return false;
}
