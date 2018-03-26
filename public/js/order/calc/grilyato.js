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

//Submitting form
function formGrilyato() {
    var s = document.getElementById("grilyato_areaceiling").value;
    var p = document.getElementById("grilyato_pceiling").value;
    var difficult = document.getElementById("grilyato_difficult").value;
    var sizecells = document.getElementById("grilyato_sizecells").value;

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
        var angles = p / grilyato_L3000c_a;
        angles = angles + ((angles / 100) * difficult) * 2;
        var suspass = tp2400 * grilyato_suspass_a;
        var dowel1, dowel2;

        dowel1 = suspass;
        dowel2 = p * 2;
    }
    else {
        var susp = 0;
        var angles =0;
        var suspass = 0;
        var tp2400 = 0;
        var dowel1 = 0, dowel2 = 0;
        var tp3600 = grilyato_tp3600c*s+((grilyato_tp3600c*s)/100)*difficult;
        tp1200 = grilyato_tp1200c*s+((grilyato_tp1200c*s)/100)*difficult;
        tp600 = grilyato_tp600c*s+((grilyato_tp600c*s)/100)*difficult;
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
    document.getElementById("table-grilyato-3600-vendor").innerHTML = "";
    document.getElementById("table-grilyato-3600-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-3600-desciption").innerHTML = "Грильято 3600 мм";
    document.getElementById("table-grilyato-3600-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-3600-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-3600-color").innerHTML = color;
    document.getElementById("table-grilyato-3600-count").innerHTML = Math.ceil(tp3600)+" ("+Math.ceil(tp3600*100)/100+")";
    document.getElementById("table-grilyato-3600-price").innerHTML = tp3600_price;
    document.getElementById("table-grilyato-3600-pack").innerHTML = Math.ceil(tp3600/grilyato_g2400_pack);
    document.getElementById("table-grilyato-3600-price-all").innerHTML = Math.ceil(tp3600/tp3600c_pack)*tp3600_price*tp3600c_pack;
    //2400
    document.getElementById("table-grilyato-2400-vendor").innerHTML = "";
    document.getElementById("table-grilyato-2400-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-2400-desciption").innerHTML = "Грильято 2400 мм";
    document.getElementById("table-grilyato-2400-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-2400-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-2400-color").innerHTML = color;
    document.getElementById("table-grilyato-2400-count").innerHTML = Math.ceil(tp2400)+" ("+Math.ceil(tp2400*100)/100+")";
    document.getElementById("table-grilyato-2400-price").innerHTML = grilyato_g2400c_price;
    document.getElementById("table-grilyato-2400-pack").innerHTML = Math.ceil(tp2400/grilyato_g2400_pack);
    document.getElementById("table-grilyato-2400-price-all").innerHTML = Math.ceil(tp2400/grilyato_g2400_pack)*tp2400_price*grilyato_g2400_pack;
    //1200
    document.getElementById("table-grilyato-1200-vendor").innerHTML = "";
    document.getElementById("table-grilyato-1200-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-1200-desciption").innerHTML = "Грильято 1200 мм";
    document.getElementById("table-grilyato-1200-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-1200-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-1200-color").innerHTML = color;
    document.getElementById("table-grilyato-1200-count").innerHTML = Math.ceil(tp1200)+" ("+Math.ceil(tp1200*100)/100+")";
    document.getElementById("table-grilyato-1200-price").innerHTML = tp1200_price;
    document.getElementById("table-grilyato-1200-pack").innerHTML = Math.ceil(tp1200/grilyato_g1200_pack);
    document.getElementById("table-grilyato-1200-price-all").innerHTML = Math.ceil(tp1200/grilyato_g1200_pack)*tp1200_price*grilyato_g1200_pack;
    //600
    document.getElementById("table-grilyato-600-vendor").innerHTML = "";
    document.getElementById("table-grilyato-600-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-600-desciption").innerHTML = "Грильято 600 мм";
    document.getElementById("table-grilyato-600-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-600-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-600-color").innerHTML = color;
    document.getElementById("table-grilyato-600-count").innerHTML = Math.ceil(tp600)+" ("+Math.ceil(tp600*100)/100+")";
    document.getElementById("table-grilyato-600-price").innerHTML = tp600_price;
    document.getElementById("table-grilyato-600-pack").innerHTML = Math.ceil(tp600/grilyato_g600_pack);
    document.getElementById("table-grilyato-600-price-all").innerHTML = Math.ceil(tp600/grilyato_g600_pack)*tp600_price*grilyato_g600_pack;
    //600m-f
    document.getElementById("table-grilyato-600mf-vendor").innerHTML = "";
    document.getElementById("table-grilyato-600mf-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-600mf-desciption").innerHTML = "Грильято 600 мм (мама,папа)";
    document.getElementById("table-grilyato-600mf-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-600mf-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    document.getElementById("table-grilyato-600mf-color").innerHTML = color;
    document.getElementById("table-grilyato-600mf-count").innerHTML = Math.ceil(tp600f)+" ("+Math.ceil(tp600f*100)/100+")";
    document.getElementById("table-grilyato-600mf-price").innerHTML = tp600f_price;
    document.getElementById("table-grilyato-600mf-pack").innerHTML = Math.ceil(tp600f/grilyato_g600f_pack);
    document.getElementById("table-grilyato-600mf-price-all").innerHTML = Math.ceil(tp600f/grilyato_g600f_pack)*tp600f_price*grilyato_g600f_pack;
    //SUSP
    document.getElementById("table-grilyato-susp-vendor").innerHTML = "";
    // document.getElementById("table-grilyato-susp-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-susp-desciption").innerHTML = "Грильято соединитель";
    // document.getElementById("table-grilyato-susp-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-susp-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-susp-color").innerHTML = color;
    document.getElementById("table-grilyato-susp-count").innerHTML = Math.ceil(susp)+" ("+Math.ceil(susp*100)/100+")";
    document.getElementById("table-grilyato-susp-price").innerHTML = susp_price;
    document.getElementById("table-grilyato-susp-pack").innerHTML = Math.ceil(susp/grilyato_gsusp_pack);
    document.getElementById("table-grilyato-susp-price-all").innerHTML = Math.ceil(susp/grilyato_gsusp_pack)*susp_price*grilyato_gsusp_pack;
    //ANGLE
    document.getElementById("table-grilyato-angle-vendor").innerHTML = "";
    // document.getElementById("table-grilyato-angle-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-angle-desciption").innerHTML = "Грильято уголок L3000";
    // document.getElementById("table-grilyato-angle-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-angle-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-angle-color").innerHTML = color;
    document.getElementById("table-grilyato-angle-count").innerHTML = Math.ceil(angles)+" ("+Math.ceil(angles*100)/100+")";
    document.getElementById("table-grilyato-angle-price").innerHTML = L3000_price;
    document.getElementById("table-grilyato-angle-pack").innerHTML = Math.ceil(angles/grilyato_gL3000_pack);
    document.getElementById("table-grilyato-angle-price-all").innerHTML = Math.ceil(angles/grilyato_gL3000_pack)*L3000_price*grilyato_gL3000_pack;
    //suspass
    document.getElementById("table-grilyato-suspass-vendor").innerHTML = "";
    // document.getElementById("table-grilyato-suspass-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-suspass-desciption").innerHTML = "Грильято подвес в сборе";
    // document.getElementById("table-grilyato-suspass-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-suspass-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-suspass-color").innerHTML = color;
    document.getElementById("table-grilyato-suspass-count").innerHTML = Math.ceil(suspass)+" ("+Math.ceil(suspass*100)/100+")";
    document.getElementById("table-grilyato-suspass-price").innerHTML = gsuspass_price;
    document.getElementById("table-grilyato-suspass-pack").innerHTML = Math.ceil(suspass/grilyato_gsuspass_pack);
    document.getElementById("table-grilyato-suspass-price-all").innerHTML = Math.ceil(suspass/grilyato_gsuspass_pack)*gsuspass_price*grilyato_gsuspass_pack;
    //dowel1
    document.getElementById("table-grilyato-dowel1-vendor").innerHTML = "";
    // document.getElementById("table-grilyato-dowel1-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-dowel1-desciption").innerHTML = "Дюбель TDN для подвесов 6*35";
    // document.getElementById("table-grilyato-dowel1-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-dowel1-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-dowel1-color").innerHTML = color;
    document.getElementById("table-grilyato-dowel1-count").innerHTML = Math.ceil(dowel1)+" ("+Math.ceil(dowel1*100)/100+")";
    document.getElementById("table-grilyato-dowel1-price").innerHTML = dowel1c_price;
    document.getElementById("table-grilyato-dowel1-pack").innerHTML = Math.ceil(dowel1/grilyato_dowel1_pack);
    document.getElementById("table-grilyato-dowel1-price-all").innerHTML = Math.ceil(dowel1/grilyato_dowel1_pack)*dowel1c_price*grilyato_dowel1_pack;
    //dowel2
    document.getElementById("table-grilyato-dowel2-vendor").innerHTML = "";
    // document.getElementById("table-grilyato-dowel2-model").innerHTML = $( "#grilyato_model option:selected" ).text();
    document.getElementById("table-grilyato-dowel2-desciption").innerHTML = "Дюбель TDN для L-профиля 6*35";
    // document.getElementById("table-grilyato-dowel2-width").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-dowel2-length").innerHTML = document.getElementById("grilyato_sizecells").value;
    // document.getElementById("table-grilyato-dowel2-color").innerHTML = color;
    document.getElementById("table-grilyato-dowel2-count").innerHTML = Math.ceil(dowel2)+" ("+Math.ceil(dowel2*100)/100+")";
    document.getElementById("table-grilyato-dowel2-price").innerHTML = dowel2c_price;
    document.getElementById("table-grilyato-dowel2-pack").innerHTML = Math.ceil(dowel2/grilyato_dowel2_pack);
    document.getElementById("table-grilyato-dowel2-price-all").innerHTML = Math.ceil(dowel2/grilyato_dowel2_pack)*dowel2c_price*grilyato_dowel2_pack;


    document.getElementById("table-grilyato-total").innerHTML =
        Math.ceil(tp3600/tp3600c_pack)*tp3600_price*tp3600c_pack+
        Math.ceil(tp2400/grilyato_g2400_pack)*tp2400_price*grilyato_g2400_pack+
        Math.ceil(tp1200/grilyato_g1200_pack)*tp1200_price*grilyato_g1200_pack+
        Math.ceil(tp600/grilyato_g600_pack)*tp600_price*grilyato_g600_pack+
        Math.ceil(tp600f/grilyato_g600f_pack)*tp600f_price*grilyato_g600f_pack+
        Math.ceil(susp/grilyato_gsusp_pack)*susp_price*grilyato_gsusp_pack+
        Math.ceil(angles/grilyato_gL3000_pack)*L3000_price*grilyato_gL3000_pack+
        Math.ceil(suspass/grilyato_gsuspass_pack)*gsuspass_price*grilyato_gsuspass_pack+
        Math.ceil(dowel1/grilyato_dowel1_pack)*dowel1c_price*grilyato_dowel1_pack+
        Math.ceil(dowel2/grilyato_dowel2_pack)*dowel2c_price*grilyato_dowel2_pack;


    document.getElementById("calc_grilyato_table").style.display = "initial";
    //Stop SUBMITING Form
    return false;
}
