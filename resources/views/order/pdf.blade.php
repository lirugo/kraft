<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    body {
        font-family: DejaVu Sans;
        font-size: 6pt;
    }
</style>
    <img src="/home/onliner/web/onliner.kraftds.com/public_html/public/img/logo/pdfLogo.jpg" class="m-l-0" width="700px">


@foreach($orders as $order)
    @if ($loop->first)
    <h5 class="text-center" style="font-family: DejaVu Sans;">Order {{$order->order_id}} - {{\Carbon\Carbon::parse($order->created_at)->format('d-m-Y H:m')}} </h5>
    @endif
@endforeach
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col" style="color: #f78421;">Артикул</th>
        <th scope="col" style="color: #f78421;">Ім'я</th>
        <th scope="col" style="color: #f78421;">Кількість</th>
        <th scope="col" style="color: #f78421;">Ціна</th>
        <th scope="col" style="color: #f78421;">Разом</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        @if($order->production == false)
            <tr>
                <td>{{$order->vendor_code}}</td>
                <td>{{$order->description}}</td>
                <td>{{$order->count}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->price*$order->count}}</td>
            </tr>
        @endif
    @endforeach
    <tr>
        <td style="background-color: white"></td>
        <td style="background-color: white"></td>
        <td style="background-color: white"></td>
        <td style="background-color: #eeeeee; color: #f78421;"><strong>{{trans('app.TOTAL')}}</strong></td>
        <td style="background-color: #eeeeee; color: #f78421;" id="total-sum">{{$orders->total}}</td>
    </tr>
    </tbody>
</table>

{{--<h3 class="text-center">{{trans('app.Output of data for production')}}</h3>--}}
{{--<table class="table table-striped">--}}
    {{--<thead>--}}
    {{--<tr>--}}
        {{--<th scope="col" style="color: #f78421;">{{trans('app.Vendor Code')}}</th>--}}
        {{--<th scope="col" style="color: #f78421;">{{trans('app.Name')}}</th>--}}
        {{--<th scope="col" style="color: #f78421;">{{trans('app.Length 1 piece')}}</th>--}}
        {{--<th scope="col" style="color: #f78421;">м.п.</th>--}}
        {{--<th scope="col" style="color: #f78421;">шт.</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--@foreach($orders as $order)--}}
        {{--@if($order->production == true)--}}
            {{--<tr>--}}
                {{--<td>{{$order->vendor_code}}</td>--}}
                {{--<td>{{$order->description}}</td>--}}
                {{--<td>{{$order->one_length}}</td>--}}
                {{--<td>{{$order->mp}}</td>--}}
                {{--<td>{{$order->count_production}}</td>--}}
            {{--</tr>--}}
        {{--@endif--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
{{--</table>--}}