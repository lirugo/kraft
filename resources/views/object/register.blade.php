@extends('layouts.app')

@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Register object</div>
                    <div class="panel-body">
                        {!! Form::model(['route' =>['object.register'], 'method' => 'POST', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::text('searchInput',null , ['class' => 'controls form-control m-b-10 required', 'placeholder' => 'Enter a location', 'id' => 'searchInput']) !!}

                                <div id="map" ></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                             {!! Form::label('label',trans('app.objectdata'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('name',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => 'Name object']) !!}
                            {!! Form::text('country',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.country'), 'id' => 'country', 'readonly']) !!}
                            {!! Form::text('city',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.city'), 'id' => 'city', 'readonly']) !!}
                            {!! Form::text('street',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.street'), 'id' => 'street', 'readonly']) !!}
                            {!! Form::text('house',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.house'), 'id' => 'street_number', 'readonly']) !!}
                            {!! Form::text('lat',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.lat'), 'id' => 'lat', 'readonly']) !!}
                            {!! Form::text('lon',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.lon'), 'id' => 'lon', 'readonly']) !!}
                            {!! Form::text('postcode',null , ['class' => 'form-control m-b-10', 'required','placeholder' => trans('app.postcode'), 'id' => 'postal_code', 'readonly']) !!}

                            {{ Form::select('region', array_merge([null => trans('app.selectregion')], $region), null,['class' => 'form-control','required'])}}
                            <hr>
                            <div class="col-md-6">
                                {!! Form::text('sworks', null , ['class' => 'form-control','required', 'placeholder' => trans('app.sworks')]) !!}
                            </div>
                           <div class="col-md-6">
                                {!! Form::text('dateofdelivery', null , ['class' => 'form-control', 'placeholder' => trans('app.dateofdelivery'), 'id' => 'datepicker']) !!}
                            </div>
                            <br>
                            <br>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product1" id="product1" value="1"/>
                                <div class="[ btn-group ]">
                                    <label for="product1" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product1" class="[ btn btn-default active ]">
                                        T-Профиль
                                    </label>
                                </div>
                            </div>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product2" id="product2" value="1" />
                                <div class="[ btn-group ]">
                                    <label for="product2" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product2" class="[ btn btn-default active ]">
                                        Грильято
                                    </label>
                                </div>
                            </div>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product3" id="product3" value="1" />
                                <div class="[ btn-group ]">
                                    <label for="product3" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product3" class="[ btn btn-default active ]">
                                        Крафт Куб
                                    </label>
                                </div>
                            </div>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product4" id="product4" value="1" />
                                <div class="[ btn-group ]">
                                    <label for="product4" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product4" class="[ btn btn-default active btn-block]">
                                        KRAFT LED
                                    </label>
                                </div>
                            </div>
                            <div class="[ form-group-checkbox  m-t-20 ]">
                                <input type="checkbox" name="product5" id="product5" value="1" />
                                <div class="[ btn-group ]">
                                    <label for="product5" class="[ btn btn-default ]">
                                        <span class="[ fa fa-plus ]"></span>
                                        <span class="[ fa fa-minus ]"></span>
                                    </label>
                                    <label for="product5" class="[ btn btn-default active ]">
                                        Плиты OWA
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.customer'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('customer',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customer')]) !!}
                            {!! Form::text('customername',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customername')]) !!}
                            {!! Form::text('customersurname',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customersurname')]) !!}
                            {!! Form::text('customerpatronymic',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customerpatronymic')]) !!}
                            {!! Form::text('customerphone',null , ['class' => 'form-control m-b-10 ','required', 'placeholder' => trans('app.customerpphone')]) !!}

                            {!! Form::label('label',trans('app.generalbuilder'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('generalbuilder',null , ['class' => 'form-control m-b-10','required', 'placeholder' => trans('app.generalbuilder')]) !!}
                            {!! Form::text('delegatebuilder',null , ['class' => 'form-control m-b-10','required', 'placeholder' => trans('app.delegatebuilder')]) !!}
                            {!! Form::text('delegatebuildername',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.delegatebuildername')]) !!}
                            {!! Form::text('delegatebuildersurname',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.delegatebuildersurname')]) !!}
                            {!! Form::text('delegatebuilderpatronymic',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.delegatebuilderpatronymic')]) !!}
                            {!! Form::text('delegatebuilderphone',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.delegatebuilderphone')]) !!}

                            {!! Form::label('label',trans('app.subbuilder'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('subbuilder',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.subbuilder')]) !!}
                            {!! Form::text('subbuildername',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.subbuildername')]) !!}
                            {!! Form::text('subbuildersurname',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.subbuildersurname')]) !!}
                            {!! Form::text('subbuilderpatronymic',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.subbuilderpatronymic')]) !!}
                            {!! Form::text('subbuilderphone',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.subbuilderphone')]) !!}

                        </div>
                        <div class="col-md-4">
                            {!! Form::label('label',trans('app.architect'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('architectname',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.architectname')]) !!}
                            {!! Form::text('architectsurname',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.architectsurname')]) !!}
                            {!! Form::text('architectpatronymic',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.architectpatronymic')]) !!}
                            {!! Form::text('architectphone',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.architectphone')]) !!}

                            {!! Form::label('label',trans('app.design'), ['class' => 'm-t-20']) !!}
                            <hr>
                            {!! Form::text('designname',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.designname')]) !!}
                            {!! Form::text('designsurname',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.designsurname')]) !!}
                            {!! Form::text('designpatronymic',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.designpatronymic')]) !!}
                            {!! Form::text('designphone',null , ['class' => 'form-control m-b-10 required', 'placeholder' => trans('app.designphone')]) !!}

                            {{ Form::textarea('comments', null, ['class' => 'm-t-20', 'placeholder' => trans('app.comments')]) }}
                            <br>
                            {!! Form::label('label',trans('app.uploadphotoobject',['class' => 'm-t-20'])) !!}
                            <hr>
                            <br>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc1" hidden>
                            </label>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc2" hidden>
                            </label>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc3" hidden>
                            </label>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc4" hidden>
                            </label>
                            <label class="botton botton-default">
                                <i class="fa fa-plus"></i>
                                <input type="file" name="scandoc5" hidden>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::submit('Create Object',['class' => 'pull-right botton botton-primary botton-default m-t-10']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>
    <script src="/js/googlemapapi.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1EJ_8xa3bXVsGdAzmMOna5DRDJUM9s6g&libraries=places&callback=initMap">
    </script>
@endsection