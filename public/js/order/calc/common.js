var i;
var price;
var table = document.getElementById("common_table");
function common_save(){
    for(var z=1; z<$('#common_table tr').length; z++){
        if(table.rows[z].id != "total")
        {
            $.ajax({
                type:'POST',
                url:'/order/common/save/'+id,
                async:false,
                data:{
                    _token: $('meta[name=csrf-token]').attr('content'),
                    id:id,
                    order_id:document.getElementById('order_code').innerText,
                    vendor_code:table.rows[z].cells[0].innerHTML,
                    model:table.rows[z].cells[1].innerHTML,
                    description:table.rows[z].cells[2].innerHTML,
                    width:table.rows[z].cells[3].innerHTML,
                    length:table.rows[z].cells[4].innerHTML,
                    color:table.rows[z].cells[5].innerHTML,
                    pack:table.rows[z].cells[6].getElementsByTagName("input")[0].value,
                    sum:table.rows[z].cells[7].innerHTML.replace(/,/g , '')
                    },
                dataType:'json'
                }
            )
        }
    }
    console.log('sended');
    window.location.replace("/distributor/object/show/"+id);
}

//ADding to common table
function grilyato_add(){
    $("#save_order").show();
    $("#calc_grilyato").hide();
    var row;
    row  = table.insertRow(-1);
    row.style.borderTop = "1px solid #f78620";
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    var newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-3600-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-3600-model").innerHTML;
    row.insertCell(2).innerHTML =  document.getElementById("table-grilyato-3600-desciption").innerHTML ;
    row.insertCell(3).innerHTML =  document.getElementById("table-grilyato-3600-width").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-grilyato-3600-length").innerHTML;
    row.insertCell(5).innerHTML =  document.getElementById("table-grilyato-3600-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-3600-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*tp3600c_pack*tp3600c_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato 2400
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-2400-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-2400-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-2400-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-2400-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-2400-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-2400-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-2400-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_g2400_pack*grilyato_g2400c_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato 1200
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-1200-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-1200-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-1200-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-1200-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-1200-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-1200-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-1200-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_g1200_pack*grilyato_g1200c_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato 600
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-600-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-600-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-600-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-600-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-600-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-600-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-600-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_g600_pack*grilyato_g600c_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato 600mf
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-600mf-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-600mf-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-600mf-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-600mf-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-600mf-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-600mf-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-600mf-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_g600_pack*grilyato_g600fc_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato susp
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-susp-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-susp-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-susp-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-susp-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-susp-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-susp-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-susp-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_gsusp_pack*grilyato_gsusp_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato susp
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-angle-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-angle-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-angle-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-angle-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-angle-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-angle-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-angle-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_gL3000_pack*grilyato_L3000c_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato suspass
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-suspass-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-suspass-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-suspass-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-suspass-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-suspass-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-suspass-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-suspass-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_gsuspass_pack*grilyato_gsuspass_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato dowel1dowel1
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-dowel1-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-dowel1-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-dowel1-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-dowel1-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-dowel1-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-dowel1-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-dowel1-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_dowel1_pack*grilyato_dowel1_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato dowel1dowel22
    row = table.insertRow(-1);
    row.style.borderLeft = "1px solid #f78620";
    row.style.borderRight = "1px solid #f78620";
    row.style.borderBottom = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-grilyato-dowel2-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-grilyato-dowel2-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-grilyato-dowel2-desciption").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-grilyato-dowel2-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-grilyato-dowel2-length").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-grilyato-dowel2-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-grilyato-dowel2-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  (newinput.value*grilyato_dowel2_pack*grilyato_dowel2_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

    //SHOW COMMON TABLE
    $("#common_div").show();
}
function tprofile_add() {
    $("#save_order").show();
    $("#calc_t_profile").hide();
    // tprofile 3600
    var row;
    row  = table.insertRow(-1);
        row.style.borderTop = "1px solid #f78620";
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    var newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-3600-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-3600-model").innerHTML;
    row.insertCell(2).innerHTML =  document.getElementById("table-3600-name").innerHTML ;
    row.insertCell(3).innerHTML =  document.getElementById("table-3600-width").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-3600-lenght").innerHTML;
    row.insertCell(5).innerHTML =  document.getElementById("table-3600-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-3600-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  document.getElementById("table-3600-price-all").innerHTML;
    //tprofile 1200
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-1200-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-1200-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-1200-name").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-1200-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-1200-lenght").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-1200-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-1200-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  document.getElementById("table-1200-price-all").innerHTML;
    //tprofile 600
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-600-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-600-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-600-name").innerHTML;
    row.insertCell(3).innerHTML = document.getElementById("table-600-width").innerHTML;
    row.insertCell(4).innerHTML = document.getElementById("table-600-lenght").innerHTML;
    row.insertCell(5).innerHTML = document.getElementById("table-600-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-600-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  document.getElementById("table-600-price-all").innerHTML;
    //angle
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0).innerHTML = document.getElementById("table-wall-profile-vendor").innerHTML ;
    row.insertCell(1).innerHTML = document.getElementById("table-wall-profile-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-wall-profile-description").innerHTML;
    row.insertCell(3).innerHTML = "";
    row.insertCell(4).innerHTML = "";
    row.insertCell(5).innerHTML = document.getElementById("table-wall-profile-color").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-wall-profile-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  document.getElementById("table-wall-profile-price-all").innerHTML;

    //SuspWithEar
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        row.style.borderTop = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "hidden");
    row.insertCell(0).innerHTML = document.getElementById("table-wireWithEar-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-wireWithEar-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-wireWithEar-description").innerHTML ;
    row.insertCell(3);
    row.insertCell(4).innerHTML = document.getElementById("table-wireWithEar-lenght").innerHTML;
    row.insertCell(5).innerHTML = "9005";
    newinput.setAttribute("value", document.getElementById("table-susp-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7);
    //SuspWithHOOK
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "hidden");
    row.insertCell(0).innerHTML = document.getElementById("table-wireWithHook-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-wireWithHook-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-wireWithHook-description").innerHTML;
    row.insertCell(3);
    row.insertCell(4).innerHTML = document.getElementById("table-wireWithHook-lenght").innerHTML;
    row.insertCell(5).innerHTML = "9005";
    newinput.setAttribute("value", document.getElementById("table-susp-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7);
    //SUSPSPRING
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        row.style.borderBottom = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "hidden");
    row.insertCell(0).innerHTML = document.getElementById("table-springSusp-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-springSusp-model").innerHTML;
    row.insertCell(2).innerHTML = document.getElementById("table-springSusp-description").innerHTML;
    row.insertCell(3);
    row.insertCell(4);
    row.insertCell(5).innerHTML = "9005";
    newinput.setAttribute("value", document.getElementById("table-susp-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7);
    //SUSP;
    row = table.insertRow(-1);
        row.style.borderBottom = "1px solid #f78620";
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    row.insertCell(0);
    row.insertCell(1);
    row.insertCell(2).innerHTML = document.getElementById("table-susp-name").innerHTML;
    row.insertCell(3);
    row.insertCell(4);
    row.insertCell(5);
    newinput.setAttribute("value", document.getElementById("table-susp-pack").innerHTML);
    row.insertCell(6).appendChild(newinput);
    row.insertCell(7).innerHTML =  document.getElementById("table-susp-price-all").innerHTML;

    $("#common_div").show();
}