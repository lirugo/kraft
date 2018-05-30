//default hidden object
document.getElementById("colors").disabled = true;
document.getElementById("colors").style.display = "none";
document.getElementById("calc_t_profile_table").style.display = "none";

//TICKNESS
//Select MODEL LIKE NOVA,FORTIS...
$("#model").change(function() {
    //Hide
    document.getElementById("colors").disabled = true;
    document.getElementById("thickness").options[1].disabled = false;
    //SET VARIABLE
    var colors = document.getElementById("colors");
    var option = document.createElement("option");
    var option1 = document.createElement("option");
    var option2 = document.createElement("option");
    var option3 = document.createElement("option");
    var option4 = document.createElement("option");
    //Clear Color
    for (var i=document.getElementById('colors').options.length; i-->2;)
        document.getElementById('colors').options[i] = null;
    //Set COLOR
    if($('#model').find(":selected").text() === "NOVA")
    {
        //NOVA cant been 15mm
        if(document.getElementById('thickness').value === "15")
            document.getElementById("thickness").selectedIndex = "0";
        document.getElementById("thickness").options[1].disabled = true;
        option.text = "RAL 9003 (белый)";
        option.value = "9003";
        colors.add(option);
        document.getElementById("colors").disabled = false;
        document.getElementById("colors").style.display = "initial";
    }else if($('#model').find(":selected").text() === "FORTIS")
    {
        option.text = "RAL 9003 (белый)";
        option.value = "9003";
        colors.add(option);
        option1.text = "RAL 9005 (черынй)";
        option1.value = "9005";
        colors.add(option1);
        option2.text = "RAL 9006 (серый)";
        option2.value = "9006";
        colors.add(option2);
        document.getElementById("colors").disabled = false;
        document.getElementById("colors").style.display = "initial";
    } else  if ($('#model').find(":selected").text() === 'HD' || $('#model').find(":selected").text() === 'RH1000') {
        option.text = "RAL 9003 (белый)";
        option.value = "9003";
        colors.add(option);
        option1.text = "RAL 9005 (черынй)";
        option1.value = "9005";
        colors.add(option1);
        option2.text = "RAL 9006 (серый)";
        option2.value = "9006";
        colors.add(option2);
        document.getElementById("colors").disabled = false;
        document.getElementById("colors").style.display = "initial";
    }
});

//variable of price product
var tp3600_price;
var tp1200_price;
var tp600_price;
var angle_price;
var wire_with_ear_price;
var wire_with_hook_price;
var spring_susp_price;
//Submitting form
function formTProfile() {
    //SET VARIABLE
    var s = document.getElementById("areaceiling").value;
    var p = document.getElementById("pceiling").value;
    var model = document.getElementById('model').value;
    var wire_with_ear = document.getElementById('wire_with_ear').value;
    var wire_with_hook = document.getElementById('wire_with_hook').value;
    var width = document.getElementById('thickness').value;
    var color = null;
    color = document.getElementById('colors').value;
    var difficult = document.getElementById('difficult').value;
    var wall_profile = null;
    if(document.getElementById('wall_profile').value === 'L')
        wall_profile = "L";
    else wall_profile = "W";

    //AJAX REQUEST TO SERVER
    function getNewENumber(cb_func){
        $.ajax
        ({
            type: "POST",
            url: "/order/tprofile/vendor",
            response:'json',//тип возвращаемого ответа text либо xml
            data:{
                '_token': $('meta[name=csrf-token]').attr('content'),
                'model':model,
                'profile_thickness':width,
                'color':color,
                'wall_profile':wall_profile,
                'wire_with_ear':wire_with_ear,
                'wire_with_hook':wire_with_hook
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
        if(document.getElementById('wall_profile').value === 'L')
            wall_profile = "L";
        else wall_profile = "W";
        var tp3600 = tp3600c * s + ((tp3600c * s) / 100) * difficult;
        var tp1200 = tp1200c * s + ((tp1200c * s) / 100) * difficult;
        var tp600 = tp600c * s + ((tp600c * s) / 100) * difficult;
        var angles = p / L3000c;
        var susp = suspc * s + ((suspc * s) / 100) * difficult;
        var price;
        if (document.getElementById('colors').value === "other") price = 1.5;
        else price = 1;
        //SetPrice
        tp3600_price = vendor[3600].price * price;
        tp1200_price = vendor[1200].price * price;
        tp600_price = vendor[600].price * price;
        angle_price = vendor['angle'].price * price;
        wire_with_ear_price = vendor['wire_with_ear'].price;
        wire_with_hook_price = vendor['wire_with_hook'].price;
        spring_susp_price = vendor['spring_susp'].price;
        //Pack
        var pack3600 = Math.ceil(tp3600 / tp3600c_pack);
        var pack1200 = Math.ceil(tp1200 / tp1200c_pack);
        var pack600 = Math.ceil(tp600 / tp600c_pack);
        var packSusp = Math.ceil(susp / suspc_pack);
        var angle_pack = L3000c_pack;
        //Summ
        var sum3600 = Math.ceil(tp3600 / tp3600c_pack) * tp3600_price * tp3600c_pack;
        var sum1200 = Math.ceil(tp1200 / tp1200c_pack) * tp1200_price * tp1200c_pack;
        var sum600 = Math.ceil(tp600 / tp600c_pack) * tp600_price * tp600c_pack;
        var sumWire_with_ear_price = Math.ceil(susp / suspc_pack) * wire_with_ear_price * suspc_pack;
        var sumWire_with_hook_price = Math.ceil(susp / suspc_pack) * wire_with_hook_price * suspc_pack;
        var sumSusp = Math.ceil(susp / suspc_pack) * spring_susp_price * suspc_pack;
        var sumAngle = Math.ceil(angles / angle_pack) * angle_price * L3000c_pack;
        var sumTotal = sum600 + sum1200 + sum3600 + sumSusp + sumAngle + sumWire_with_ear_price + sumWire_with_hook_price;
        //var
        var v3600_vendor;
        var v3600_model;
        var v3600_name;
        var v3600_width;
        var v3600_lenght;
        var v3600_color;
        var v3600_count;
        var v3600_price;
        var v3600_pack;
        var v3600_price_all;
        var v1200_vendor;
        var v1200_model;
        var v1200_name;
        var v1200_width;
        var v1200_lenght;
        var v1200_color;
        var v1200_count;
        var v1200_price;
        var v1200_pack;
        var v1200_price_all;
        var v600_vendor;
        var v600_model;
        var v600_name;
        var v600_width;
        var v600_lenght;
        var v600_color;
        var v600_count;
        var v600_price;
        var v600_pack;
        var v600_price_all;
        var vSusp_vendor;
        var vSusp_model;
        var vSusp_name;
        var vSusp_width;
        var vSusp_lenght;
        var vSusp_color;
        var vSusp_count;
        var vSusp_price;
        var vSusp_pack;
        var vSusp_price_all;
        var vSumTotal;

        //SetDataInTable
        if (typeof vendor[3600] !== 'undefined') {
            v3600_vendor = vendor[3600].vendor_code;
            v3600_model = vendor[3600].model;
            v3600_name = vendor[3600].description;
            v3600_width = vendor[3600].profile_thickness;
            v3600_lenght = vendor[3600].profile;
            v3600_color = vendor[3600].color;
            v3600_count = Math.ceil(tp3600);
            v3600_price = tp3600_price;
            v3600_pack = pack3600;
            v3600_price_all = sum3600;
        }
        else {
            v3600_vendor = null;
            v3600_model = model;
            v3600_name = "Т-Профіль";
            v3600_width = width;
            v3600_lenght = "3600";
            v3600_color = color;
            v3600_count = Math.ceil(tp3600) + " (" + Math.ceil(tp3600 * 100) / 100 + ")";
            v3600_price = tp3600_price;
            v3600_pack = pack3600;
            v3600_price_all = sum3600;
        }

        if(typeof  vendor[1200] !== 'undefined')
        {
            v1200_vendor = vendor[1200].vendor_code;
            v1200_model = vendor[1200].model;
            v1200_name = vendor[1200].description;
            v1200_width = vendor[1200].profile_thickness;
            v1200_lenght = vendor[1200].profile;
            v1200_color = vendor[1200].color;
            v1200_count = Math.ceil(tp1200);
            v1200_price = tp1200_price;
            v1200_pack = pack1200;
            v1200_price_all = sum1200;
        }
        else{
            v1200_vendor = null;
            v1200_model = model;
            v1200_name = "Т-Профіль";
            v1200_width = width;
            v1200_lenght = "1200";
            v1200_color = color;
            v1200_count = Math.ceil(tp1200) + " (" + Math.ceil(tp1200 * 100) / 100 + ")";
            v1200_price = tp1200_price;
            v1200_pack = pack1200;
            v1200_price_all = sum1200;
        }

        if(typeof  vendor[600] !== 'undefined')
        {
            v600_vendor = vendor[600].vendor_code;
            v600_model = vendor[600].model;
            v600_name = vendor[600].description;
            v600_width = vendor[600].profile_thickness;
            v600_lenght = vendor[600].profile;
            v600_color = vendor[600].color;
            v600_count = Math.ceil(tp600);
            v600_price = tp600_price;
            v600_pack = pack600;
            v600_price_all = sum600;
        }
        else
        {
            v600_vendor = null;
            v600_model = model;
            v600_name = "Т-Профіль";
            v600_width = width;
            v600_lenght = "600";
            v600_color = color;
            v600_count = Math.ceil(tp600) + " (" + Math.ceil(tp600 * 100) / 100 + ")";
            v600_price = tp600_price;
            v600_pack = pack600;
            v600_price_all = sum600;
        }
        if (typeof vendor['angle'] !== 'undefined') {
            wall_profile_vendor = vendor['angle'].vendor_code;
            wall_profile_model = vendor['angle'].model;
            wall_profile_description = vendor['angle'].description;
            wall_profile_color = vendor['angle'].color;
        }
        else {
            wall_profile_vendor = null;
            wall_profile_model = model;
            wall_profile_description = "Профіль пристінний, "+wall_profile;
            wall_profile_color = color;
        }
        if (typeof vendor['wire_with_ear'] !== 'undefined') {
            wire_with_ear_vendor = vendor['wire_with_ear'].vendor_code;
            wire_with_ear_model = vendor['wire_with_ear'].model;
            wire_with_ear_profile = vendor['wire_with_ear'].profile;
            wire_with_ear_description = vendor['wire_with_ear'].description;
            wire_with_ear_price = vendor['wire_with_ear'].price;
        }
        else {
            wire_with_ear_vendor = null;
            wire_with_ear_model = "Дріт з вушком";
            wire_with_ear_profile = wire_with_ear;
            wire_with_ear_description = null;
        }
        if (typeof vendor['wire_with_hook'] !== 'undefined') {
            wire_with_hook_vendor = vendor['wire_with_hook'].vendor_code;
            wire_with_hook_model = vendor['wire_with_hook'].model;
            wire_with_hook_profile = vendor['wire_with_hook'].profile;
            wire_with_hook_description = vendor['wire_with_hook'].description;
            wire_with_hook_price = vendor['wire_with_hook'].price;
        }
        else {
            wire_with_hook_vendor = null;
            wire_with_hook_model = "Дріт з гаком";
            wire_with_hook_profile = wire_with_hook;
            wire_with_hook_description = null;
        }
        if (typeof vendor['spring_susp'] !== 'undefined') {
            susp_spring_vendor = vendor['spring_susp'].vendor_code;
            susp_spring_model = vendor['spring_susp'].model;
            susp_spring_description = vendor['spring_susp'].description;
            susp_spring_price = vendor['spring_susp'].price;
        }
        else {
            susp_spring_vendor = null;
            susp_spring_model = "Пружинный подвес";
            susp_spring_description = null;
        }

        //SetSuspension
        vSusp_vendor = null;
        vSusp_model = model;
        vSusp_name = "Подвес";
        vSusp_width = width;
        vSusp_lenght = null;
        vSusp_color = null;
        vSusp_count = Math.ceil(susp) + " (" + Math.ceil(susp * 100) / 100 + ")";
        vSusp_price = spring_susp_price;
        vSusp_pack = packSusp;
        vSusp_price_all = sumSusp;
        //TotalTable
        vSumTotal = sumTotal;
        //WallProfile
        var wall_profile = angles * price;

        //Display
        document.getElementById("table-3600-vendor").innerHTML = v3600_vendor;
        document.getElementById("table-3600-model").innerHTML = v3600_model;
        document.getElementById("table-3600-name").innerHTML = v3600_name;
        document.getElementById("table-3600-width").innerHTML = v3600_width;
        document.getElementById("table-3600-lenght").innerHTML = v3600_lenght;
        document.getElementById("table-3600-color").innerHTML = v3600_color;
        document.getElementById("table-3600-count").innerHTML = v3600_count;
        document.getElementById("table-3600-price").innerHTML = v3600_price;
        document.getElementById("table-3600-pack").innerHTML = v3600_pack;
        document.getElementById("table-3600-price-all").innerHTML = v3600_price_all.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

        document.getElementById("table-1200-vendor").innerHTML = v1200_vendor;
        document.getElementById("table-1200-model").innerHTML = v1200_model;
        document.getElementById("table-1200-name").innerHTML = v1200_name;
        document.getElementById("table-1200-width").innerHTML = v1200_width;
        document.getElementById("table-1200-lenght").innerHTML = v1200_lenght;
        document.getElementById("table-1200-color").innerHTML = v1200_color;
        document.getElementById("table-1200-count").innerHTML = v1200_count;
        document.getElementById("table-1200-price").innerHTML = v1200_price;
        document.getElementById("table-1200-pack").innerHTML = v1200_pack;
        document.getElementById("table-1200-price-all").innerHTML = v1200_price_all.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

        document.getElementById("table-600-vendor").innerHTML = v600_vendor;
        document.getElementById("table-600-model").innerHTML = v600_model;
        document.getElementById("table-600-name").innerHTML = v600_name;
        document.getElementById("table-600-width").innerHTML = v600_width;
        document.getElementById("table-600-lenght").innerHTML = v600_lenght;
        document.getElementById("table-600-color").innerHTML = v600_color;
        document.getElementById("table-600-count").innerHTML = v600_count;
        document.getElementById("table-600-price").innerHTML = v600_price;
        document.getElementById("table-600-pack").innerHTML = v600_pack;
        document.getElementById("table-600-price-all").innerHTML = v600_price_all.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        //Angle
        document.getElementById("table-wall-profile-vendor").innerHTML = wall_profile_vendor;
        document.getElementById("table-wall-profile-model").innerHTML = wall_profile_model;
        document.getElementById("table-wall-profile-description").innerHTML = wall_profile_description;
        document.getElementById("table-wall-profile-color").innerHTML = wall_profile_color;
        document.getElementById("table-wall-profile-count").innerHTML = Math.ceil(angles) + " (" + Math.ceil(angles * 100) / 100 + ")";
        document.getElementById("table-wall-profile-price").innerHTML = angle_price;
        document.getElementById("table-wall-profile-pack").innerHTML =  Math.ceil(angles / angle_pack);
        document.getElementById("table-wall-profile-price-all").innerHTML =  sumAngle.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        //EndAngle

        //SuspWithEar
        document.getElementById("table-wireWithEar-vendor").innerHTML = wire_with_ear_vendor;
        document.getElementById("table-wireWithEar-model").innerHTML = wire_with_ear_model;
        document.getElementById("table-wireWithEar-description").innerHTML = wire_with_ear_description;
        document.getElementById("table-wireWithEar-lenght").innerHTML = wire_with_ear_profile;
        document.getElementById("table-wireWithEar-color").innerHTML = "9005";
        document.getElementById("table-wireWithEar-count").innerHTML = vSusp_count;
        document.getElementById("table-wireWithEar-price").innerHTML = wire_with_ear_price;
        document.getElementById("table-wireWithEar-pack").innerHTML = vSusp_pack;
        document.getElementById("table-wireWithEar-price-all").innerHTML = sumWire_with_ear_price.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        //EndSuspWithEar

        //SuspWithHook
        document.getElementById("table-wireWithHook-vendor").innerHTML = wire_with_hook_vendor;
        document.getElementById("table-wireWithHook-model").innerHTML = wire_with_hook_model;
        document.getElementById("table-wireWithHook-description").innerHTML = wire_with_hook_description;
        document.getElementById("table-wireWithHook-lenght").innerHTML = wire_with_hook_profile;
        document.getElementById("table-wireWithHook-color").innerHTML = "9005";
        document.getElementById("table-wireWithHook-count").innerHTML = vSusp_count;
        document.getElementById("table-wireWithHook-price").innerHTML = wire_with_hook_price;
        document.getElementById("table-wireWithHook-pack").innerHTML = vSusp_pack;
        document.getElementById("table-wireWithHook-price-all").innerHTML = sumWire_with_hook_price.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        //EndSuspWithHook

        //SuspSpring
        document.getElementById("table-springSusp-vendor").innerHTML = susp_spring_vendor;
        document.getElementById("table-springSusp-model").innerHTML = susp_spring_model;
        document.getElementById("table-springSusp-description").innerHTML = susp_spring_description;
        document.getElementById("table-springSusp-color").innerHTML = "9005";
        document.getElementById("table-springSusp-count").innerHTML = vSusp_count;
        document.getElementById("table-springSusp-price").innerHTML = susp_spring_price;
        document.getElementById("table-springSusp-pack").innerHTML = vSusp_pack;
        document.getElementById("table-springSusp-price-all").innerHTML = sumSusp.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        //EndSuspSpring

        // document.getElementById("table-susp-vendor").innerHTML = vSusp_vendor;
        // document.getElementById("table-susp-model").innerHTML = null;
        // document.getElementById("table-susp-name").innerHTML = "Итого по подвесу";
        // document.getElementById("table-susp-width").innerHTML = null;
        // document.getElementById("table-susp-lenght").innerHTML = vSusp_lenght;
        // document.getElementById("table-susp-color").innerHTML = vSusp_color;
        // document.getElementById("table-susp-count").innerHTML = vSusp_count;
        // document.getElementById("table-susp-price").innerHTML = vSusp_price;
        // document.getElementById("table-susp-pack").innerHTML = vSusp_pack;
        // document.getElementById("table-susp-price-all").innerHTML = vSusp_price_all.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

        document.getElementById("table-total").innerHTML = vSumTotal.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').bold();
        // //ShowTable
    });

    document.getElementById("calc_t_profile_table").style.display = "initial";
    //RETURN FALSE SUBMIT FORM
    return false;
}

