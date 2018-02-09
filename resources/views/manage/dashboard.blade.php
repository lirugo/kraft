@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel-heading">Mange Dashboard</div>
                        <div class="panel-body">
                            <div class="row m-t-20">
                                <div class="col-md-2 col-md-offset-1 text-center">
                                    <div class="card">
                                    <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            Objects
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 text-center">
                                    <div class="card">
                                            <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            Statistics
                                        </div>
                                    </div>
                                </div>
                                    @role('distributor')
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                        <a href="/company/profile">
                                        <i class="fa fa-tasks fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            Profile Company
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                        <a href="/company/users">
                                            <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                                            <div class="description m-t-10">
                                                Users Company
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endrole
                                <div class="col-md-2 text-center">
                                    <div class="card">
                                        <a href="/profile">
                                            <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                                        <div class="description m-t-10">
                                            Profile User
                                        </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
