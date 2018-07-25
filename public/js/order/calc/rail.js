//CHECK BOX
$(function () {
    $('.btn-radio').click(function(e) {
        $('.btn-radio').not(this).removeClass('active')
            .siblings('input').prop('checked',false)
            .siblings('.img-radio').css('opacity','0.5');
        $(this).addClass('active')
            .siblings('input').prop('checked',true)
            .siblings('.img-radio').css('opacity','1');
    });
});

//HIDE DEFAULT BLOCK
document.getElementById("rail_m_1").style.display = "none";
document.getElementById("rail_m_w_1").disabled = true;
document.getElementById("rail_m_h_1").disabled = true;
document.getElementById("rail_m_s_1").disabled = true;

document.getElementById("rail_m_2").style.display = "none";
document.getElementById("rail_m_w_2").disabled = true;
document.getElementById("rail_m_h_2").disabled = true;
document.getElementById("rail_m_s_2").disabled = true;

document.getElementById("rail_m_3").style.display = "none";
document.getElementById("rail_m_w_3").disabled = true;
document.getElementById("rail_m_h_3").disabled = true;
document.getElementById("rail_m_s_3").disabled = true;

document.getElementById("rail_m_4").style.display = "none";
document.getElementById("rail_m_w_4").disabled = true;
document.getElementById("rail_m_h_4").disabled = true;
document.getElementById("rail_m_s_4").disabled = true;

document.getElementById("calc_rail_table").style.display = "none";

//DISPLAY MODULE RAIL
$("#rail_m_w_1").change(function() {
    if(document.getElementById('rail_m_w_1').value == 88){
        document.getElementById("rail_m_s_1").options[1].disabled = true;
        document.getElementById("rail_m_h_1").options[5].disabled = true;
        document.getElementById("rail_m_h_1").options[7].disabled = true;
        document.getElementById("rail_m_h_1").options[8].disabled = true;
        document.getElementById("rail_m_h_1").options[9].disabled = true;
    }
    else {
        document.getElementById("rail_m_s_1").options[1].disabled = false;
        document.getElementById("rail_m_h_1").options[5].disabled = false;
        document.getElementById("rail_m_h_1").options[6].disabled = true;
        document.getElementById("rail_m_h_1").options[7].disabled = false;
        document.getElementById("rail_m_h_1").options[8].disabled = false;
        document.getElementById("rail_m_h_1").options[9].disabled = false;
    }
});
$("#rail_m_w_2").change(function() {
    if(document.getElementById('rail_m_w_2').value == 88){
        document.getElementById("rail_m_s_2").options[1].disabled = true;
        document.getElementById("rail_m_h_2").options[5].disabled = true;
        document.getElementById("rail_m_h_2").options[7].disabled = true;
        document.getElementById("rail_m_h_2").options[8].disabled = true;
        document.getElementById("rail_m_h_2").options[9].disabled = true;
    }
    else {
        document.getElementById("rail_m_s_2").options[1].disabled = false;
        document.getElementById("rail_m_h_2").options[5].disabled = false;
        document.getElementById("rail_m_h_2").options[6].disabled = true;
        document.getElementById("rail_m_h_2").options[7].disabled = false;
        document.getElementById("rail_m_h_2").options[8].disabled = false;
        document.getElementById("rail_m_h_2").options[9].disabled = false;
    }
});
$("#rail_m_w_3").change(function() {
    if(document.getElementById('rail_m_w_3').value == 88){
        document.getElementById("rail_m_s_3").options[1].disabled = true;
        document.getElementById("rail_m_h_3").options[5].disabled = true;
        document.getElementById("rail_m_h_3").options[7].disabled = true;
        document.getElementById("rail_m_h_3").options[8].disabled = true;
        document.getElementById("rail_m_h_3").options[9].disabled = true;
    }
    else {
        document.getElementById("rail_m_s_3").options[1].disabled = false;
        document.getElementById("rail_m_h_3").options[5].disabled = false;
        document.getElementById("rail_m_h_3").options[6].disabled = true;
        document.getElementById("rail_m_h_3").options[7].disabled = false;
        document.getElementById("rail_m_h_3").options[8].disabled = false;
        document.getElementById("rail_m_h_3").options[9].disabled = false;
    }
});
$("#rail_m_w_4").change(function() {
    if(document.getElementById('rail_m_w_4').value == 88){
        document.getElementById("rail_m_s_4").options[1].disabled = true;
        document.getElementById("rail_m_h_4").options[5].disabled = true;
        document.getElementById("rail_m_h_4").options[7].disabled = true;
        document.getElementById("rail_m_h_4").options[8].disabled = true;
        document.getElementById("rail_m_h_4").options[9].disabled = true;
    }
    else {
        document.getElementById("rail_m_s_4").options[1].disabled = false;
        document.getElementById("rail_m_h_4").options[5].disabled = false;
        document.getElementById("rail_m_h_4").options[6].disabled = true;
        document.getElementById("rail_m_h_4").options[7].disabled = false;
        document.getElementById("rail_m_h_4").options[8].disabled = false;
        document.getElementById("rail_m_h_4").options[9].disabled = false;
    }
});

$("#rail_count").change(function() {
    if(document.getElementById('rail_count').value == 1){
        document.getElementById("rail_m_1").style.display = "initial";
        document.getElementById("rail_m_w_1").disabled = false;
        document.getElementById("rail_m_h_1").disabled = false;
        document.getElementById("rail_m_s_1").disabled = false;

        document.getElementById("rail_m_2").style.display = "none";
        document.getElementById("rail_m_w_2").disabled = true;
        document.getElementById("rail_m_h_2").disabled = true;
        document.getElementById("rail_m_s_2").disabled = true;

        document.getElementById("rail_m_3").style.display = "none";
        document.getElementById("rail_m_w_3").disabled = true;
        document.getElementById("rail_m_h_3").disabled = true;
        document.getElementById("rail_m_s_3").disabled = true;

        document.getElementById("rail_m_4").style.display = "none";
        document.getElementById("rail_m_w_4").disabled = true;
        document.getElementById("rail_m_h_4").disabled = true;
        document.getElementById("rail_m_s_4").disabled = true;
    }
    else if(document.getElementById('rail_count').value == 2){
        document.getElementById("rail_m_1").style.display = "initial";
        document.getElementById("rail_m_w_1").disabled = false;
        document.getElementById("rail_m_h_1").disabled = false;
        document.getElementById("rail_m_s_1").disabled = false;

        document.getElementById("rail_m_2").style.display = "initial";
        document.getElementById("rail_m_w_2").disabled = false;
        document.getElementById("rail_m_h_2").disabled = false;
        document.getElementById("rail_m_s_2").disabled = false;

        document.getElementById("rail_m_3").style.display = "none";
        document.getElementById("rail_m_w_3").disabled = true;
        document.getElementById("rail_m_h_3").disabled = true;
        document.getElementById("rail_m_s_3").disabled = true;

        document.getElementById("rail_m_4").style.display = "none";
        document.getElementById("rail_m_w_4").disabled = true;
        document.getElementById("rail_m_h_4").disabled = true;
        document.getElementById("rail_m_s_4").disabled = true;
    }
    else if(document.getElementById('rail_count').value == 3){
        document.getElementById("rail_m_1").style.display = "initial";
        document.getElementById("rail_m_w_1").disabled = false;
        document.getElementById("rail_m_h_1").disabled = false;
        document.getElementById("rail_m_s_1").disabled = false;

        document.getElementById("rail_m_2").style.display = "initial";
        document.getElementById("rail_m_w_2").disabled = false;
        document.getElementById("rail_m_h_2").disabled = false;
        document.getElementById("rail_m_s_2").disabled = false;

        document.getElementById("rail_m_3").style.display = "initial";
        document.getElementById("rail_m_w_3").disabled = false;
        document.getElementById("rail_m_h_3").disabled = false;
        document.getElementById("rail_m_s_3").disabled = false;

        document.getElementById("rail_m_4").style.display = "none";
        document.getElementById("rail_m_w_4").disabled = true;
        document.getElementById("rail_m_h_4").disabled = true;
        document.getElementById("rail_m_s_4").disabled = true;
    }
    else if(document.getElementById('rail_count').value == 4){
        document.getElementById("rail_m_1").style.display = "initial";
        document.getElementById("rail_m_w_1").disabled = false;
        document.getElementById("rail_m_h_1").disabled = false;
        document.getElementById("rail_m_s_1").disabled = false;

        document.getElementById("rail_m_2").style.display = "initial";
        document.getElementById("rail_m_w_2").disabled = false;
        document.getElementById("rail_m_h_2").disabled = false;
        document.getElementById("rail_m_s_2").disabled = false;

        document.getElementById("rail_m_3").style.display = "initial";
        document.getElementById("rail_m_w_3").disabled = false;
        document.getElementById("rail_m_h_3").disabled = false;
        document.getElementById("rail_m_s_3").disabled = false;

        document.getElementById("rail_m_4").style.display = "initial";
        document.getElementById("rail_m_w_4").disabled = false;
        document.getElementById("rail_m_h_4").disabled = false;
        document.getElementById("rail_m_s_4").disabled = false;
    }
    else  {
        //HIDE DEFAULT BLOCK
        document.getElementById("rail_m_1").style.display = "none";
        document.getElementById("rail_m_w_1").disabled = true;
        document.getElementById("rail_m_h_1").disabled = true;
        document.getElementById("rail_m_s_1").disabled = true;

        document.getElementById("rail_m_2").style.display = "none";
        document.getElementById("rail_m_w_2").disabled = true;
        document.getElementById("rail_m_h_2").disabled = true;
        document.getElementById("rail_m_s_2").disabled = true;

        document.getElementById("rail_m_3").style.display = "none";
        document.getElementById("rail_m_w_3").disabled = true;
        document.getElementById("rail_m_h_3").disabled = true;
        document.getElementById("rail_m_s_3").disabled = true;

        document.getElementById("rail_m_4").style.display = "none";
        document.getElementById("rail_m_w_4").disabled = true;
        document.getElementById("rail_m_h_4").disabled = true;
        document.getElementById("rail_m_s_4").disabled = true;
    }
});

//SUBMIT FORM
function formRail() {
    // VARIABLES
    var color = document.getElementById('rail_color').value;
    var width = document.getElementById('rail_width').value;
    var length = document.getElementById('rail_length').value;
    var count = document.getElementById('rail_count').value;
    var rail_face = document.getElementById('rail_face').value;
    var S = width*length/count;
    var P = (2*width)+(2*length);
    var type;
    var l_angle_count = Math.ceil(P / 3000);
    if(document.getElementById("rail_along").checked)
        type = width;
    else type = length;
    var travers_count = S * 0.32;
    var susp_count = travers_count * 8;
    if(rail_face == 'stub')
        var stub_count = width*length/type;
    else if(rail_face == 'angle')
        var stub_count = P*3;
    else
        var stub_count = null;

    var rail_m_w_1 = null;
    var rail_m_h_1 = null;
    var rail_m_w_2 = null;
    var rail_m_h_2 = null;
    var rail_m_w_3 = null;
    var rail_m_h_3 = null;
    var rail_m_w_4 = null;
    var rail_m_h_4 = null;

    // RAIL
    if(count == 1){
        var rail_1_m_p;
        var module_1 = document.getElementById('rail_m_s_1').value;
        rail_m_w_1 = document.getElementById('rail_m_w_1').value;
        rail_m_h_1 = document.getElementById('rail_m_h_1').value;
        var rail_1_count;
        var stub_1;

        rail_1_m_p = 1000 / module_1 * S;
        rail_1_count = rail_1_m_p / type;
        stub_1 = rail_1_count * 2;
    } else  if(count == 2){
        var rail_1_m_p;
        var module_1 = document.getElementById('rail_m_s_1').value;
        rail_m_w_1 = document.getElementById('rail_m_w_1').value;
        rail_m_h_1 = document.getElementById('rail_m_h_1').value;
        var rail_1_count;
        var stub_1;
        var rail_2_m_p;
        var module_2 = document.getElementById('rail_m_s_2').value;
        rail_m_w_2 = document.getElementById('rail_m_w_2').value;
        rail_m_h_2 = document.getElementById('rail_m_h_2').value;
        var rail_2_count;
        var stub_2;

        rail_1_m_p = Math.ceil(1000 / module_1 * S);
        rail_1_count = Math.ceil(rail_1_m_p / type);
        stub_1 = Math.ceil(rail_1_count * 2);

        rail_2_m_p = Math.ceil(1000 / module_2 * S);
        rail_2_count = Math.ceil(rail_2_m_p / type);
        stub_2 = Math.ceil(rail_2_count * 2);
    } else  if(count == 3){
        var rail_1_m_p;
        var module_1 = document.getElementById('rail_m_s_1').value;
        rail_m_w_1 = document.getElementById('rail_m_w_1').value;
        rail_m_h_1 = document.getElementById('rail_m_h_1').value;
        var rail_1_count;
        var stub_1;
        var rail_2_m_p;
        var module_2 = document.getElementById('rail_m_s_2').value;
        rail_m_w_2 = document.getElementById('rail_m_w_2').value;
        rail_m_h_2 = document.getElementById('rail_m_h_2').value;
        var rail_2_count;
        var stub_2;
        var rail_3_m_p;
        var module_3 = document.getElementById('rail_m_s_3').value;
        rail_m_w_3 = document.getElementById('rail_m_w_3').value;
        rail_m_h_3 = document.getElementById('rail_m_h_3').value;
        var rail_3_count;
        var stub_3;

        rail_1_m_p = Math.ceil(1000 / module_1 * S);
        rail_1_count = Math.ceil(rail_1_m_p / type);
        stub_1 = Math.ceil(rail_1_count * 2);

        rail_2_m_p = Math.ceil(1000 / module_2 * S);
        rail_2_count = Math.ceil(rail_2_m_p / type);
        stub_2 = Math.ceil(rail_2_count * 2);

        rail_3_m_p = Math.ceil(1000 / module_3 * S);
        rail_3_count = Math.ceil(rail_3_m_p / type);
        stub_3 = Math.ceil(rail_3_count * 2);
    } else  if(count == 4){
        var rail_1_m_p;
        var module_1 = document.getElementById('rail_m_s_1').value;
        rail_m_w_1 = document.getElementById('rail_m_w_1').value;
        rail_m_h_1 = document.getElementById('rail_m_h_1').value;
        var rail_1_count;
        var stub_1;
        var rail_2_m_p;
        var module_2 = document.getElementById('rail_m_s_2').value;
        rail_m_w_2 = document.getElementById('rail_m_w_2').value;
        rail_m_h_2 = document.getElementById('rail_m_h_2').value;
        var rail_2_count;
        var stub_2;
        var rail_3_m_p;
        var module_3 = document.getElementById('rail_m_s_3').value;
        rail_m_w_3 = document.getElementById('rail_m_w_3').value;
        rail_m_h_3 = document.getElementById('rail_m_h_3').value;
        var rail_3_count;
        var stub_3;
        var rail_4_m_p;
        var module_4 = document.getElementById('rail_m_s_4').value;
        rail_m_w_4 = document.getElementById('rail_m_w_4').value;
        rail_m_h_4 = document.getElementById('rail_m_h_4').value;
        var rail_4_count;
        var stub_4;

        rail_1_m_p = Math.ceil(1000 / module_1 * S);
        rail_1_count = Math.ceil(rail_1_m_p / type);
        stub_1 = Math.ceil(rail_1_count * 2);

        rail_2_m_p = Math.ceil(1000 / module_2 * S);
        rail_2_count = Math.ceil(rail_2_m_p / type);
        stub_2 = Math.ceil(rail_2_count * 2);

        rail_3_m_p = Math.ceil(1000 / module_3 * S);
        rail_3_count = Math.ceil(rail_3_m_p / type);
        stub_3 = Math.ceil(rail_3_count * 2);

        rail_4_m_p = Math.ceil(1000 / module_4 * S);
        rail_4_count = Math.ceil(rail_4_m_p / type);
        stub_4 = Math.ceil(rail_4_count * 2);
    }

    // SEND AJAX TO SERVER
    function getNewENumber(cb_func){
        $.ajax
        ({
            type: "POST",
            url: "/order/rail/vendor",
            response:'json',//тип возвращаемого ответа text либо xml
            data:{
                '_token': $('meta[name=csrf-token]').attr('content'),
                'color': color,
                'rail_face': rail_face,
                'rail_m_w_1':rail_m_w_1,
                'rail_m_h_1':rail_m_h_1,
                'rail_m_w_2':rail_m_w_2,
                'rail_m_h_2':rail_m_h_2,
                'rail_m_w_3':rail_m_w_3,
                'rail_m_h_3':rail_m_h_3,
                'rail_m_w_4':rail_m_w_4,
                'rail_m_h_4':rail_m_h_4,
                'susp_count':susp_count,
                'travers_count':travers_count,
            },
            success: cb_func,
            error: function(request,error) {
                alert('An error occurred attempting to get new e-number');
                console.log(request, error);
            }
        });
    }
    //отправляю wall_profile запрос и получаю ответ
    getNewENumber(function( vendor ) {
        console.log(vendor);
        // SET TABLE
        document.getElementById("calc_rail_table").style.display = "initial";

        if(vendor['rail_1'] != null){
        // Rail 1
        document.getElementById("table-rail-1-vendor").innerHTML = vendor['rail_1'].vendor_code;
        document.getElementById("table-rail-1-description").innerHTML = vendor['rail_1'].description;
        document.getElementById("table-rail-1-count").innerHTML = rail_1_count;
        document.getElementById("table-rail-1-price").innerHTML = vendor['rail_1'].price;
        document.getElementById("table-rail-1-price-all").innerHTML = (vendor['rail_1'].price*rail_1_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['rail_2'] != null){
            // Rail 2
            document.getElementById("table-rail-2-vendor").innerHTML = vendor['rail_2'].vendor_code;
            document.getElementById("table-rail-2-description").innerHTML = vendor['rail_2'].description;
            document.getElementById("table-rail-2-count").innerHTML = rail_2_count;
            document.getElementById("table-rail-2-price").innerHTML = vendor['rail_2'].price;
            document.getElementById("table-rail-2-price-all").innerHTML = (vendor['rail_2'].price*rail_2_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['rail_3'] != null){
            // Rail 3
            document.getElementById("table-rail-3-vendor").innerHTML = vendor['rail_3'].vendor_code;
            document.getElementById("table-rail-3-description").innerHTML = vendor['rail_3'].description;
            document.getElementById("table-rail-3-count").innerHTML = rail_3_count;
            document.getElementById("table-rail-3-price").innerHTML = vendor['rail_3'].price;
            document.getElementById("table-rail-3-price-all").innerHTML = (vendor['rail_3'].price*rail_3_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['rail_4'] != null){
            // Rail 4
            document.getElementById("table-rail-4-vendor").innerHTML = vendor['rail_4'].vendor_code;
            document.getElementById("table-rail-4-description").innerHTML = vendor['rail_4'].description;
            document.getElementById("table-rail-4-count").innerHTML = rail_4_count;
            document.getElementById("table-rail-4-price").innerHTML = vendor['rail_4'].price;
            document.getElementById("table-rail-4-price-all").innerHTML = (vendor['rail_4'].price*rail_4_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['travers'] != null){
            // Rail 4
            document.getElementById("table-rail-travers-vendor").innerHTML = vendor['travers'].vendor_code;
            document.getElementById("table-rail-travers-description").innerHTML = vendor['travers'].description;
            document.getElementById("table-rail-travers-count").innerHTML = travers_count;
            document.getElementById("table-rail-travers-price").innerHTML = vendor['travers'].price;
            document.getElementById("table-rail-travers-price-all").innerHTML = (vendor['travers'].price*travers_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['stub'] != null){
            // Rail 4
            document.getElementById("table-rail-stub-vendor").innerHTML = vendor['stub'].vendor_code;
            document.getElementById("table-rail-stub-description").innerHTML = vendor['stub'].description;
            document.getElementById("table-rail-stub-count").innerHTML = stub_count;
            document.getElementById("table-rail-stub-price").innerHTML = vendor['stub'].price;
            document.getElementById("table-rail-stub-price-all").innerHTML = (vendor['stub'].price*stub_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['suspass'] != null){
            // Rail 4
            document.getElementById("table-rail-suspass-vendor").innerHTML = vendor['suspass'].vendor_code;
            document.getElementById("table-rail-suspass-description").innerHTML = vendor['suspass'].description;
            document.getElementById("table-rail-suspass-count").innerHTML = susp_count;
            document.getElementById("table-rail-suspass-price").innerHTML = vendor['suspass'].price;
            document.getElementById("table-rail-suspass-price-all").innerHTML = (vendor['suspass'].price*susp_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['wireWithEar'] != null){
            // Rail 4
            document.getElementById("table-rail-wireWithEar-vendor").innerHTML = vendor['wireWithEar'].vendor_code;
            document.getElementById("table-rail-wireWithEar-description").innerHTML = vendor['wireWithEar'].description;
            document.getElementById("table-rail-wireWithEar-count").innerHTML = susp_count;
            document.getElementById("table-rail-wireWithEar-price").innerHTML = vendor['wireWithEar'].price;
            document.getElementById("table-rail-wireWithEar-price-all").innerHTML = (vendor['wireWithEar'].price*susp_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['wireWithHook'] != null){
            // Rail 4
            document.getElementById("table-rail-wireWithHook-vendor").innerHTML = vendor['wireWithHook'].vendor_code;
            document.getElementById("table-rail-wireWithHook-description").innerHTML = vendor['wireWithHook'].description;
            document.getElementById("table-rail-wireWithHook-count").innerHTML = susp_count;
            document.getElementById("table-rail-wireWithHook-price").innerHTML = vendor['wireWithHook'].price;
            document.getElementById("table-rail-wireWithHook-price-all").innerHTML = (vendor['wireWithHook'].price*susp_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }
        if(vendor['suspdowel'] != null){
            // Rail 4
            document.getElementById("table-rail-suspdowel-vendor").innerHTML = vendor['suspdowel'].vendor_code;
            document.getElementById("table-rail-suspdowel-description").innerHTML = vendor['suspdowel'].description;
            document.getElementById("table-rail-suspdowel-count").innerHTML = susp_count;
            document.getElementById("table-rail-suspdowel-price").innerHTML = vendor['suspdowel'].price;
            document.getElementById("table-rail-suspdowel-price-all").innerHTML = (vendor['suspdowel'].price*susp_count).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        }

    });



    // DEBUG
    console.log('======================================');
    console.log('======================================');
    console.log('s= '+ S);
    console.log('p= '+ P);
    console.log('type= '+ type);
    console.log('count= '+ count);
    console.log('======================================');

    console.log('rail_1= '+ rail_1_m_p);
    console.log('rail_1_count= '+ rail_1_count);
    console.log('stub_1= '+ stub_1);

    console.log('======================================');

    console.log('rail_2= '+ rail_2_m_p);
    console.log('rail_2_count= '+ rail_2_count);
    console.log('stub_2= '+ stub_2);

    console.log('======================================');

    console.log('rail_3= '+ rail_3_m_p);
    console.log('rail_3_count= '+ rail_3_count);
    console.log('stub_3= '+ stub_3);

    console.log('======================================');

    console.log('rail_4= '+ rail_4_m_p);
    console.log('rail_4_count= '+ rail_4_count);
    console.log('stub_4= '+ stub_4);

    console.log('======================================');
    console.log('======================================');

    //RETURN FALSE SUBMIT FORM
    return false;
}