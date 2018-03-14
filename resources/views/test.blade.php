@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('main') !!}
@endsection
@section('content')

    <table class="table table-striped table-borderless">
        <thead>
        <tr>
            <th scope="col" style="color: #f78421;">#</th>
            <th scope="col" style="color: #f78421;">Артикул</th>
            <th scope="col" style="color: #f78421;">Модель</th>
            <th scope="col" style="color: #f78421;">Наименование</th>
            <th scope="col" style="color: #f78421;">Ширина, мм.</th>
            <th scope="col" style="color: #f78421;">Длина, мм.</th>
            <th scope="col" style="color: #f78421;">Цвет RAL</th>
            <th scope="col" style="color: #f78421;">Цена за шт. грн</th>
            <th scope="col" style="color: #f78421;">Кол-во упаковок</th>
            <th scope="col" style="color: #f78421;">Стоимость</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td id="table-tp3600"></td>
            <td id="table-tp1200"></td>
            <td id="table-tp600"></td>
            <td id="table-angles"></td>
            <td id="table-susp"></td>
        </tr>
        <tr>
            <td id="table-price-tp3600"></td>
            <td id="table-price-tp1200"></td>
            <td id="table-price-tp600"></td>
            <td id="table-price-angles"></td>
            <td id="table-price-susp"></td>
        </tr>
        <tr>
            <td id="table-pack-tp3600"></td>
            <td id="table-pack-tp1200"></td>
            <td id="table-pack-tp600"></td>
            <td id="table-pack-angles"></td>
            <td id="table-pack-susp"></td>
        </tr>
        <tr>
            <td id="table-summ-tp3600"></td>
            <td id="table-summ-tp1200"></td>
            <td id="table-summ-tp600"></td>
            <td id="table-summ-angles"></td>
            <td id="table-summ-susp"></td>
            <td id="table-summ"></td>
        </tr>
        {{--BottomRightSide--}}
        <tr>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td id="table-summ-susp" style="background-color: #f9f9f9; color: #f78421;" class="text-center">Стоимость</td>
            <td id="table-summ" style="background-color: #f9f9f9; color: #f78421;" class="text-center">81 500.00</td>
        </tr>
        <tr>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td id="table-summ-susp" style="background-color: #f9f9f9; color: #f78421;" class="text-center">Скидка 5%</td>
            <td id="table-summ" style="background-color: #f9f9f9; color: #f78421;" class="text-center"> 4 087.00</td>
        </tr>
        <tr>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td id="table-summ-susp" style="background-color: #f9f9f9; color: #f78421;" class="text-center">НДС 20%</td>
            <td id="table-summ" style="background-color: #f9f9f9; color: #f78421;" class="text-center">15 532.00</td>
        </tr>
        <tr>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
            <td id="table-summ-susp" style="background-color: white; color: #f78421;" class="text-center"><strong>ИТОГО</strong></td>
            <td id="table-summ" style="background-color: white; color: #f78421;" class="text-center"><strong>93 195.00</strong></td>
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
                   'model':'FORTIS',
                   'profile_thickness':'15',
                   'color':'5015'
               },
               async: false,
               success: function(data){
                   vendor = data;
               }
           });
           alert(vendor[0].vendor_code);
   </script>
@endsection