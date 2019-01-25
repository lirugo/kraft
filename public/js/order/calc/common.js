var i;
var price;
var table = document.getElementById("common_table");
var table2 = document.getElementById("table2-rail");
document.getElementById("table2-rail").style.display = 'none';
document.getElementById("rail-text-production").style.display = 'none';
function common_total(){
    var total = 0;
    for(var z=1; z<$('#common_table tr').length; z++){
       total += +table.rows[z].cells[4].innerHTML.replace(/[,]+/g,'');
    }
    document.getElementById("common_total").innerHTML = total.toFixed(2);
}

function common_save(){
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
    for(var z=1; z<$('#common_table tr').length; z++){
        $.ajax({
            type:'POST',
            url:'/order/common/save/'+id,
            async:false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                console.log('ok');
                console.log(data);
            },
            error: function (error){
                console.log('errors');
                console.log(error);
            },
            data:{
                id:id,
                order_id:document.getElementById('order_code').innerText,
                vendor_code:table.rows[z].cells[0].innerHTML,
                description:table.rows[z].cells[1].innerHTML,
                count:table.rows[z].cells[2].getElementsByTagName("input")[0].value,
                price:table.rows[z].cells[3].innerHTML,
                },
            dataType:'json',
            }
        );
    }
    for(var z=1; z<$('#table2-rail tr').length; z++){
        $.ajax({
            type:'POST',
            url:'/order/common/save/'+id,
            async:false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                console.log(data);
            },
            error: function (error){
                console.log('errors');
                console.log(error);
            },
            data:{
                id:id,
                production:true,
                order_id:document.getElementById('order_code').innerText,
                vendor_code:table2.rows[z].cells[0].innerHTML,
                description:table.rows[z].cells[1].innerHTML,
                one_length:table2.rows[z].cells[2].innerHTML,
                mp:table2.rows[z].cells[3].innerHTML,
                count_production:table2.rows[z].cells[4].innerHTML,
                },
            dataType:'json',
            }
        );
    }

    if(id == 0)
        window.location.replace("/manage");
    else
        window.location.replace("/distributor/object/show/"+id);
}

function update_pack(e) {
    e = e || window.event;
    var data = [];
    var target = e.srcElement || e.target;
    while (target && target.nodeName !== "TR") {
        target = target.parentNode;
    }
    if (target) {
        var cells = target.getElementsByTagName("td");
        for (var i = 0; i < cells.length; i++) {
            data.push(cells[i].innerHTML);
            if(i == 2)
            {
                var count = cells[2].children[0].value;
                cells[4].innerHTML = (count * cells[3].innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
            }
        }
    }
    common_total();

}
//ADding to common table
function rail_add(){

    $("#save_order").show();
    $("#calc_grilyato").hide();
    var row;
    var newinput;
    if(document.getElementById("table-rail-1-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderTop = "1px solid #f78620";
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-1-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-1-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-1-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-1-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-1-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-2-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-2-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-2-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-2-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-2-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-2-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-3-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-3-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-3-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-3-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-3-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-3-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-4-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-4-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-4-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-4-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-4-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-4-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-travers-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-travers-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-travers-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-travers-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-travers-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-travers-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-stub-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-stub-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-stub-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-stub-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-stub-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-stub-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-stub-2-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-stub-2-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-stub-2-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-stub-2-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-stub-2-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-stub-2-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-stub-3-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-stub-3-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-stub-3-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-stub-3-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-stub-3-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-stub-3-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-stub-4-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-stub-4-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-stub-4-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-stub-4-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-stub-4-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-stub-4-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-suspass-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-suspass-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-suspass-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-suspass-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-suspass-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-suspass-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-wireWithEar-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-wireWithEar-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-wireWithEar-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-wireWithEar-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-wireWithEar-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-wireWithEar-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-wireWithHook-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-wireWithHook-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-wireWithHook-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-wireWithHook-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-wireWithHook-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-wireWithHook-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-suspdowel-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-suspdowel-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-suspdowel-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-suspdowel-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-suspdowel-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-suspdowel-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    if(document.getElementById("table-rail-stubdowel-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderBottom = "1px solid #f78620";
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-rail-stubdowel-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-rail-stubdowel-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-rail-stubdowel-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-rail-stubdowel-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-rail-stubdowel-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    //Tabl2
    if(document.getElementById("table2-rail-1-vendor").innerHTML != ''){
        row  = table2.insertRow(-1);
        document.getElementById("table2-rail").style.display = '';
        document.getElementById("rail-text-production").style.display = '';
        row.style.borderTop = "1px solid red";
        row.style.borderBottom = "1px solid red";
        row.style.borderLeft = "1px solid red";
        row.style.borderRight = "1px solid red";
        row.insertCell(0).innerHTML = document.getElementById("table2-rail-1-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table2-rail-1-description").innerHTML;
        row.insertCell(2).innerHTML = document.getElementById("table2-rail-1-length").innerHTML;
        row.insertCell(3).innerHTML = document.getElementById("table2-rail-1-mp").innerHTML;
        row.insertCell(4).innerHTML = document.getElementById("table2-rail-1-count").innerHTML;
    }
    if(document.getElementById("table2-rail-2-vendor").innerHTML != ''){
        row  = table2.insertRow(-1);
        row.style.borderBottom = "1px solid red";
        row.style.borderLeft = "1px solid red";
        row.style.borderRight = "1px solid red";
        row.insertCell(0).innerHTML = document.getElementById("table2-rail-2-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table2-rail-2-description").innerHTML;
        row.insertCell(2).innerHTML = document.getElementById("table2-rail-2-length").innerHTML;
        row.insertCell(3).innerHTML = document.getElementById("table2-rail-2-mp").innerHTML;
        row.insertCell(4).innerHTML = document.getElementById("table2-rail-2-count").innerHTML;
    }
    if(document.getElementById("table2-rail-3-vendor").innerHTML != ''){
        row  = table2.insertRow(-1);
        row.style.borderBottom = "1px solid red";
        row.style.borderLeft = "1px solid red";
        row.style.borderRight = "1px solid red";
        row.insertCell(0).innerHTML = document.getElementById("table2-rail-3-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table2-rail-3-description").innerHTML;
        row.insertCell(2).innerHTML = document.getElementById("table2-rail-3-length").innerHTML;
        row.insertCell(3).innerHTML = document.getElementById("table2-rail-3-mp").innerHTML;
        row.insertCell(4).innerHTML = document.getElementById("table2-rail-3-count").innerHTML;
    }
    if(document.getElementById("table2-rail-4-vendor").innerHTML != ''){
        row  = table2.insertRow(-1);
        row.style.borderBottom = "1px solid red";
        row.style.borderLeft = "1px solid red";
        row.style.borderRight = "1px solid red";
        row.insertCell(0).innerHTML = document.getElementById("table2-rail-4-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table2-rail-4-description").innerHTML;
        row.insertCell(2).innerHTML = document.getElementById("table2-rail-4-length").innerHTML;
        row.insertCell(3).innerHTML = document.getElementById("table2-rail-4-mp").innerHTML;
        row.insertCell(4).innerHTML = document.getElementById("table2-rail-4-count").innerHTML;
    }

    //SHOW COMMON TABLE
    $("#common_div").show();

    common_total();
}
function grilyato_add(){

    $("#save_order").show();
    $("#calc_grilyato").hide();
    var row;
    var newinput;
    if(document.getElementById("table-grilyato-3600-vendor").innerHTML != ''){
        row  = table.insertRow(-1);
        row.style.borderTop = "1px solid #f78620";
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        var newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-3600-vendor").innerHTML;
        row.insertCell(1).innerHTML =  document.getElementById("table-grilyato-3600-description").innerHTML ;
        newinput.setAttribute("value", document.getElementById("table-grilyato-3600-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-3600-price").innerHTML;
        row.insertCell(4).innerHTML =  (newinput.value*document.getElementById("table-grilyato-3600-price").innerHTML*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
        // row.cells[9].setAttribute('style', 'display:none;');
    }
    //grilyato 2400
    if(document.getElementById("table-grilyato-2400-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("onchange", "pack_update()");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-2400-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-2400-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-2400-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-2400-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-2400-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato 1200
    if(document.getElementById("table-grilyato-1200-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-1200-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-1200-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-1200-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-1200-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-1200-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato 600-1
    if(document.getElementById("table-grilyato-600-1-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-600-1-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-600-1-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-600-1-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-600-1-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-600-1-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato 600
    if(document.getElementById("table-grilyato-600-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-600-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-600-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-600-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-600-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-600-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato 600m
    if(document.getElementById("table-grilyato-600m-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-600m-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-600m-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-600m-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-600m-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-600m-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato 600f
    if(document.getElementById("table-grilyato-600f-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-600f-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-600f-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-600f-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-600f-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-600f-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato susp
    if(document.getElementById("table-grilyato-susp-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-susp-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-susp-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-susp-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-susp-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-susp-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato ear
    if(document.getElementById("table-grilyato-ear-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-ear-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-ear-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-ear-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-ear-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-ear-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato hook
    if(document.getElementById("table-grilyato-hook-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-hook-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-hook-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-hook-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-hook-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-hook-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato angle
    if(document.getElementById("table-grilyato-angle-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-angle-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-angle-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-angle-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-angle-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-angle-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato suspass
    // row = table.insertRow(-1);
    // row.style.borderLeft = "1px solid #f78620";
    // row.style.borderRight = "1px solid #f78620";
    // newinput = document.createElement("INPUT");
    // newinput.setAttribute("type", "number");
    // newinput.setAttribute("min", "1");
    // newinput.setAttribute("class", "form-control");
    // row.insertCell(0).innerHTML = document.getElementById("table-grilyato-suspass-vendor").innerHTML;
    // row.insertCell(1).innerHTML = document.getElementById("table-grilyato-suspass-description").innerHTML;
    // newinput.setAttribute("value", document.getElementById("table-grilyato-suspass-count").innerHTML);
    // row.insertCell(2).appendChild(newinput);
    // row.insertCell(3).innerHTML = grilyato_gsuspass_pack;
    // row.insertCell(4).innerHTML =  (newinput.value*grilyato_gsuspass_pack*grilyato_gsuspass_price*price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    //grilyato dowel1dowel1

    if(document.getElementById("table-grilyato-dowel1-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-dowel1-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-dowel1-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-dowel1-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-dowel1-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-dowel1-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //grilyato dowel1dowe2
    if(document.getElementById("table-grilyato-dowel2-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-dowel2-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-dowel2-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-dowel2-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-dowel2-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-dowel2-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    if(document.getElementById("table-grilyato-light-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        row.style.borderBottom = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-grilyato-light-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-grilyato-light-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-grilyato-light-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-grilyato-light-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-grilyato-light-price").innerHTML * price).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    //SHOW COMMON TABLE
    $("#common_div").show();

    common_total();
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
    newinput.setAttribute("onchange", "update_pack()");
    row.insertCell(0).innerHTML = document.getElementById("table-3600-vendor").innerHTML;
    row.insertCell(1).innerHTML =  document.getElementById("table-3600-description").innerHTML ;
    newinput.setAttribute("value", document.getElementById("table-3600-count").innerHTML);
    row.insertCell(2).appendChild(newinput);
    row.insertCell(3).innerHTML =  document.getElementById("table-3600-price").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-3600-price-all").innerHTML;
    //tprofile 1200
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    newinput.setAttribute("onchange", "update_pack()");
    row.insertCell(0).innerHTML = document.getElementById("table-1200-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-1200-description").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-1200-count").innerHTML);
    row.insertCell(2).appendChild(newinput);
    row.insertCell(3).innerHTML =  document.getElementById("table-1200-price").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-1200-price-all").innerHTML;
    //tprofile 600
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    newinput.setAttribute("onchange", "update_pack()");
    row.insertCell(0).innerHTML = document.getElementById("table-600-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-600-description").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-600-count").innerHTML);
    row.insertCell(2).appendChild(newinput);
    row.insertCell(3).innerHTML =  document.getElementById("table-600-price").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-600-price-all").innerHTML;
    //angle
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    newinput.setAttribute("onchange", "update_pack()");
    row.insertCell(0).innerHTML = document.getElementById("table-wall-profile-vendor").innerHTML ;
    row.insertCell(1).innerHTML = document.getElementById("table-wall-profile-description").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-wall-profile-count").innerHTML);
    row.insertCell(2).appendChild(newinput);
    row.insertCell(3).innerHTML =  document.getElementById("table-wall-profile-price").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-wall-profile-price-all").innerHTML;

    //SuspWithEar
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    newinput.setAttribute("onchange", "update_pack()");
    row.insertCell(0).innerHTML = document.getElementById("table-wireWithEar-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-wireWithEar-description").innerHTML ;
    newinput.setAttribute("value", document.getElementById("table-wireWithEar-count").innerHTML);
    row.insertCell(2).appendChild(newinput);
    row.insertCell(3).innerHTML =  document.getElementById("table-wireWithEar-price").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-wireWithEar-price-all").innerHTML;
    //SuspWithHOOK
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    newinput.setAttribute("onchange", "update_pack()");
    row.insertCell(0).innerHTML = document.getElementById("table-wireWithHook-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-wireWithHook-description").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-wireWithHook-count").innerHTML);
    row.insertCell(2).appendChild(newinput);
    row.insertCell(3).innerHTML =  document.getElementById("table-wireWithHook-price").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-wireWithHook-price-all").innerHTML;
    //SUSPSPRING
    row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
    newinput = document.createElement("INPUT");
    newinput.setAttribute("type", "number");
    newinput.setAttribute("min", "1");
    newinput.setAttribute("class", "form-control");
    newinput.setAttribute("onchange", "update_pack()");
    row.insertCell(0).innerHTML = document.getElementById("table-springSusp-vendor").innerHTML;
    row.insertCell(1).innerHTML = document.getElementById("table-springSusp-description").innerHTML;
    newinput.setAttribute("value", document.getElementById("table-springSusp-count").innerHTML);
    row.insertCell(2).appendChild(newinput);
    row.insertCell(3).innerHTML =  document.getElementById("table-springSusp-price").innerHTML;
    row.insertCell(4).innerHTML =  document.getElementById("table-springSusp-price-all").innerHTML;
    if(document.getElementById("table-light-vendor").innerHTML != '') {
        row = table.insertRow(-1);
        row.style.borderLeft = "1px solid #f78620";
        row.style.borderRight = "1px solid #f78620";
        row.style.borderBottom = "1px solid #f78620";
        newinput = document.createElement("INPUT");
        newinput.setAttribute("type", "number");
        newinput.setAttribute("min", "1");
        newinput.setAttribute("class", "form-control");
        newinput.setAttribute("onchange", "update_pack()");
        row.insertCell(0).innerHTML = document.getElementById("table-light-vendor").innerHTML;
        row.insertCell(1).innerHTML = document.getElementById("table-light-description").innerHTML;
        newinput.setAttribute("value", document.getElementById("table-light-count").innerHTML);
        row.insertCell(2).appendChild(newinput);
        row.insertCell(3).innerHTML = document.getElementById("table-light-price").innerHTML;
        row.insertCell(4).innerHTML = (newinput.value * document.getElementById("table-light-price").innerHTML).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    }
    // //SUSP;
    // row = table.insertRow(-1);
    //     row.style.borderBottom = "1px solid #f78620";
    //     row.style.borderLeft = "1px solid #f78620";
    //     row.style.borderRight = "1px solid #f78620";
    // newinput = document.createElement("INPUT");
    // newinput.setAttribute("type", "number");
    // newinput.setAttribute("min", "1");
    // newinput.setAttribute("class", "form-control");
    // row.insertCell(0);
    // row.insertCell(1);
    // row.insertCell(1).innerHTML = document.getElementById("table-susp-description").innerHTML;
    // row.insertCell(2);
    // row.insertCell(2);
    // row.insertCell(4);
    // newinput.setAttribute("value", document.getElementById("table-susp-count").innerHTML);
    // row.insertCell(2).appendChild(newinput);
    // row.insertCell(3).innerHTML =  document.getElementById("table-susp-price-all").innerHTML;

    $("#common_div").show();
    common_total();
}