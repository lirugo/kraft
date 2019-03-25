{{--TProfile--}}
<div id="calc_light">
    <div class="row">
        <div class="col-md-4">
            <form onsubmit="return formLight()">
            <input type="number" min="0" max="9999999" placeholder="Введите площадь" name="lightSquare" id="lightSquare" class="form-control" required>

            <select class="form-control" id="lightTypeCount" name="lightTypeCount" onchange="lightTypeCountChange()" required>
                <option selected disabled value="">Ввыберите кол-во типов светильников</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>

            <select class="form-control" id="lightTypeLight1" name="lightTypeLight1" required>
                <option disabled selected value="">Выберите тип 1</option>
                @foreach($data['lightTypes'] as $type)
                    <option value="{{$type->vendor_code}}">{{$type->description}}</option>
                @endforeach
            </select>

            <select class="form-control" id="lightTypeLight2" name="lightTypeLight2" required>
                <option disabled selected value="">Выберите тип 2</option>
                @foreach($data['lightTypes'] as $type)
                    <option value="{{$type->vendor_code}}">{{$type->description}}</option>
                @endforeach
            </select>

            <select class="form-control" id="lightTypeLight3" name="lightTypeLight3" required>
                <option disabled selected value="">Выберите тип 3</option>
                @foreach($data['lightTypes'] as $type)
                    <option value="{{$type->vendor_code}}">{{$type->description}}</option>
                @endforeach
            </select>

            <select class="form-control" id="lightTypeHeight" name="lightTypeHeight" required>
                <option value="less">Высота меньше 3.5 м</option>
                <option value="more">Высота больше 3.5 м</option>
            </select>

            {!! Form::Submit(trans('app.Make a calculation'), ['class' => 'btn-block btn btn-primary m-t-10', 'style' => 'border-radius:0']) !!}
            </form>
        </div>
    </div>

    <div class="row" id="calc_light_table">
        <div class="col-md-12" id="table">
            <hr>
            <table class="table table-striped table-borderless text-center" id="light-table">
                <thead>
                <tr>
                    <th scope="col" style="color: #f78421;">{{trans('app.Vendor Code')}}</th>
                    <th scope="col" style="color: #f78421;">{{trans('app.Name')}}</th>
                    <th scope="col" style="color: #f78421;">{{trans('app.Count')}}</th>
                    <th scope="col" style="color: #f78421;">{{trans('app.Price for')}} шт. грн</th>
                    <th scope="col" style="color: #f78421;">{{trans('app.Cost')}}</th>
                </tr>
                </thead>
                <tbody>
                <tr id="light-type1">
                    <td id="table-light-type1-vendor"></td>
                    <td id="table-light-type1-description"></td>
                    <td id="table-light-type1-count"></td>
                    <td id="table-light-type1-price"></td>
                    <td id="table-light-type1-price-all"></td>
                </tr>
                <tr id="light-type2">
                    <td id="table-light-type2-vendor"></td>
                    <td id="table-light-type2-description"></td>
                    <td id="table-light-type2-count"></td>
                    <td id="table-light-type2-price"></td>
                    <td id="table-light-type2-price-all"></td>
                </tr>
                <tr id="light-type3">
                    <td id="table-light-type3-vendor"></td>
                    <td id="table-light-type3-description"></td>
                    <td id="table-light-type3-count"></td>
                    <td id="table-light-type3-price"></td>
                    <td id="table-light-type3-price-all"></td>
                </tr>
                <tr>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: #eeeeee; color: #f78421;"><strong>{{trans('app.TOTAL')}}</strong></td>
                    <td id="table-light-total" style="background-color: #eeeeee; color: #f78421;"></td>
                </tr>              </tbody>
            </table>
            {!! Form::button(trans('app.Add to cart'), ['onclick' => 'light_add()', 'class' => 'botton botton-primary pull-right', 'style' => 'margin:0;']) !!}
            <br>
            <br>
            <br>
            <hr>
        </div>
    </div>
</div>