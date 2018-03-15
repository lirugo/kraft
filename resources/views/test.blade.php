@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('main') !!}
@endsection
@section('content')

    <table class="table table-striped table-borderless text-center">
        <thead>
        <tr>
            <th scope="col" style="color: #f78421;">Артикул</th>
            <th scope="col" style="color: #f78421;">Модель</th>
            <th scope="col" style="color: #f78421;">Наименование</th>
            <th scope="col" style="color: #f78421;">Ширина, мм.</th>
            <th scope="col" style="color: #f78421;">Длина, мм.</th>
            <th scope="col" style="color: #f78421;">Цвет RAL</th>
            <th scope="col" style="color: #f78421;">Кол-во шт.</th>
            <th scope="col" style="color: #f78421;">Цена за шт. грн</th>
            <th scope="col" style="color: #f78421;">Кол-во упаковок</th>
            <th scope="col" style="color: #f78421;">Стоимость</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td id="table-3600-vendor"></td>
            <td id="table-3600-model"></td>
            <td id="table-3600-name"></td>
            <td id="table-3600-width"></td>
            <td id="table-3600-lenght"></td>
            <td id="table-3600-color"></td>
            <td id="table-3600-count"></td>
            <td id="table-3600-price"></td>
            <td id="table-3600-pack"></td>
            <td id="table-3600-price-all"></td>
        </tr>
        </tbody>
    </table>
@endsection
@section('scripts')
   <script>
       var vendor;
           //отправляю POST запрос и получаю ответ
       $.ajax
       ({
           type: "POST",
           url: "/calc/tprofile/vendor",
           response:'json',//тип возвращаемого ответа text либо xml
           data:{
               '_token': $('meta[name=csrf-token]').attr('content'),
               'model':"FORTIS",
               'profile_thickness':15,
               'color':5015
           },
           async:true,
           success: function(data) {
              alert(data[0].id);
               document.getElementById("table-3600-vendor").innerHTML = data[0].vendor_code;
               document.getElementById("table-3600-model").innerHTML = data[0].model;
               document.getElementById("table-3600-name").innerHTML = data[0].description;
               document.getElementById("table-3600-width").innerHTML = data[0].profile_thickness;
               document.getElementById("table-3600-lenght").innerHTML = data[0].profile;
           },
           error: function(request,error) {
               alert('An error occurred attempting to get new e-number');
               // console.log(request, error);
           }
       });
   </script>
@endsection