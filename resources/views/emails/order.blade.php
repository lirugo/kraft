<table class="table table-striped table-borderless text-center">
    <thead>
    <tr>
        <th scope="col" style="color: #f78421;">Артикул</th>
        <th scope="col" style="color: #f78421;">Модель</th>
        <th scope="col" style="color: #f78421;">Наименование</th>
        <th scope="col" style="color: #f78421;">Ширина, мм.</th>
        <th scope="col" style="color: #f78421;">Длина, мм.</th>
        <th scope="col" style="color: #f78421;">Цвет RAL</th>
        <th scope="col" style="color: #f78421;">Кол-во упаковок</th>
        <th scope="col" style="color: #f78421;">Стоимость</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $order)
        <tr>
            <td>{{$order->vendor_code}}</td>
            <td>{{$order->model}}</td>
            <td>{{$order->description}}</td>
            <td>{{$order->width}}</td>
            <td>{{$order->length}}</td>
            <td>{{$order->color}}</td>
            <td>{{$order->pack}}</td>
            <td>{{$order->sum}}</td>
        </tr>
    @endforeach
    </tbody>
</table>