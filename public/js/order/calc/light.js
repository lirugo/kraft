document.getElementById("calc_light_table").style.display = "none";
document.getElementById("lightTypeLight1").style.display = "none";
document.getElementById("lightTypeLight2").style.display = "none";
document.getElementById("lightTypeLight3").style.display = "none";

function lightTypeCountChange() {
    var count = document.getElementById("lightTypeCount").value;
    document.getElementById("lightTypeLight1").style.display = "none";
    document.getElementById("lightTypeLight2").style.display = "none";
    document.getElementById("lightTypeLight3").style.display = "none";
    document.getElementById("lightTypeLight1").disabled = true;
    document.getElementById("lightTypeLight1").value = ''
    document.getElementById("lightTypeLight2").disabled = true;
    document.getElementById("lightTypeLight2").value = ''
    document.getElementById("lightTypeLight3").disabled = true;
    document.getElementById("lightTypeLight3").value = ''
    if(count == 1){
        document.getElementById("lightTypeLight1").style.display = "initial";
        document.getElementById("lightTypeLight1").disabled = false;
        document.getElementById("lightTypeLight1").value = ''
    }  if(count == 2){
        document.getElementById("lightTypeLight1").disabled = false;
        document.getElementById("lightTypeLight1").value = ''
        document.getElementById("lightTypeLight2").disabled = false;
        document.getElementById("lightTypeLight2").value = ''
        document.getElementById("lightTypeLight1").style.display = "initial";
        document.getElementById("lightTypeLight2").style.display = "initial";
    } if(count == 3){
        document.getElementById("lightTypeLight1").disabled = false;
        document.getElementById("lightTypeLight1").value = ''
        document.getElementById("lightTypeLight2").disabled = false;
        document.getElementById("lightTypeLight2").value = ''
        document.getElementById("lightTypeLight3").disabled = false;
        document.getElementById("lightTypeLight3").value = ''
        document.getElementById("lightTypeLight1").style.display = "initial";
        document.getElementById("lightTypeLight2").style.display = "initial";
        document.getElementById("lightTypeLight3").style.display = "initial";
    }

}
function formLight() {
    document.getElementById("calc_light_table").style.display = "initial";

    var square = document.getElementById("lightSquare").value;
    var count = document.getElementById("lightTypeCount").value;
    var type1 = document.getElementById("lightTypeLight1").value;
    var type2 = document.getElementById("lightTypeLight2").value;
    var type3 = document.getElementById("lightTypeLight3").value;
    var height = document.getElementById("lightTypeHeight").value;


    //AJAX REQUEST TO SERVER
    function getNewENumber(cb_func){
        $.ajax
        ({
            type: "POST",
            url: "/order/light/vendor",
            response:'json',//тип возвращаемого ответа text либо xml
            data:{
                '_token': $('meta[name=csrf-token]').attr('content'),
                'square':square,
                'count':count,
                'type1':type1,
                'type2':type2,
                'type3':type3,
                'height':height,
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
        $("#loader-message").dialog('close');
        console.log(vendor);

        if(vendor['type1'] != null) {
            $("#light-type1").show();
            document.getElementById("table-light-type1-description").innerHTML = vendor['type1'].description;
            document.getElementById("table-light-type1-vendor").innerHTML = vendor['type1'].vendor_code;
            document.getElementById("table-light-type1-product_code").innerHTML = vendor['type1'].product_code;
            document.getElementById("table-light-type1-price").innerHTML = vendor['type1'].price;
            document.getElementById("table-light-type1-price-all").innerHTML = (Math.ceil(vendor['count'])*vendor['type1'].price).toFixed(2);
            document.getElementById("table-light-type1-count").innerHTML = Math.ceil(vendor['count']);
        }
        else {
            $("#light-type1").hide();
            document.getElementById("table-light-type1-vendor").innerHTML = '';
            document.getElementById("table-light-type1-product_code").innerHTML = '';
        }

        if(vendor['type2'] != null) {
            $("#light-type2").show();
            document.getElementById("table-light-type2-description").innerHTML = vendor['type2'].description;
            document.getElementById("table-light-type2-vendor").innerHTML = vendor['type2'].vendor_code;
            document.getElementById("table-light-type2-product_code").innerHTML = vendor['type2'].product_code;
            document.getElementById("table-light-type2-price").innerHTML = vendor['type2'].price;
            document.getElementById("table-light-type2-price-all").innerHTML = (Math.ceil(vendor['count'])*vendor['type2'].price).toFixed(2);
            document.getElementById("table-light-type2-count").innerHTML = Math.ceil(vendor['count']);
        }
        else {
            $("#light-type2").hide();
            document.getElementById("table-light-type2-vendor").innerHTML = '';
            document.getElementById("table-light-type2-product_code").innerHTML = '';
        }

        if(vendor['type3'] != null) {
            $("#light-type3").show();
            document.getElementById("table-light-type3-description").innerHTML = vendor['type3'].description;
            document.getElementById("table-light-type3-vendor").innerHTML = vendor['type3'].vendor_code;
            document.getElementById("table-light-type3-product_code").innerHTML = vendor['type3'].product_code;
            document.getElementById("table-light-type3-price").innerHTML = vendor['type3'].price;
            document.getElementById("table-light-type3-price-all").innerHTML = (Math.ceil(vendor['count'])*vendor['type3'].price).toFixed(2);
            document.getElementById("table-light-type3-count").innerHTML = Math.ceil(vendor['count']);
        }
        else {
            $("#light-type3").hide();
            document.getElementById("table-light-type3-vendor").innerHTML = '';
            document.getElementById("table-light-type3-product_code").innerHTML = '';
        }

        document.getElementById("table-light-total").innerHTML =(
            +document.getElementById("table-light-type1-price-all").innerHTML+
            +document.getElementById("table-light-type2-price-all").innerHTML+
            +document.getElementById("table-light-type3-price-all").innerHTML
        ).toFixed(2);
    })


    return false;
}