@extends('layouts.app')
@section('content')

<section class="content-header">
    <h1>Dashboard</h1>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xs-12">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ countStatus(0) }}</h3>
                    <p>All Employees</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-stalker"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-12">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ countStatus(1) }}</h3>
                    <p>Active</p>
                </div>
                <div class="icon">
                    <i class="ion ion-upload"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-12">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ countStatus(2) }}</h3>
                    <p>Inactive</p>
                </div>
                <div class="icon">
                    <i class="ion ion-archive"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
   
</section>
@endsection