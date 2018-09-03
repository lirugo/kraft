<div class="row" id="common_div">
    <div class="alert alert-success m-b-0">
        <strong>ИТОГО:</strong> <span id="common_total">999,00</span> грн
        <p><small>{{trans('app.Prices are approximate and may differ from the final price in the account.')}}</small></p>
    </div>
    <div class="col-md-12" id="table">
        <hr>
        <table class="table table-striped table-borderless text-center" id="common_table">
            <thead>
            <tr>
                <th scope="col" style="color: #f78421;">{{trans('app.Vendor Code')}}</th>
                <th scope="col" style="color: #f78421;">{{trans('app.Name')}}</th>
                <th scope="col" style="color: #f78421;">{{trans('app.Count')}}</th>
                <th scope="col" style="color: #f78421;">{{trans('app.Price')}}</th>
                <th scope="col" style="color: #f78421;">{{trans('app.Price')}} {{trans('app.UAH')}}</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        {{--TABLE2  for rail--}}

        <h3 class="text-center" id="rail-text-production">{{trans('app.Output of data for production')}}</h3>
        <table class="table table-striped table-borderless text-center" id="table2-rail">
            <thead>
            <tr>
                <th scope="col" style="color: #f78421;">{{trans('app.Vendor Code')}}</th>
                <th scope="col" style="color: #f78421;">{{trans('app.Name')}}</th>
                <th scope="col" style="color: #f78421;">{{trans('app.Length 1 piece')}}</th>
                <th scope="col" style="color: #f78421;">м.п.</th>
                <th scope="col" style="color: #f78421;">шт.</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <hr>
    </div>
</div>