
@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')
{{--Drop Your Customized Style Codes Here--}}
@section('customizedStyle')
@endsection
{{--Drop Your Customized Scripts Codes Here--}}
@section('customizedScript')
@endsection
{{-- Start of page Content --}}
@section('content')

    <section class="content-header">
        <h1>
            Dashboard
            <small>Master Service Statistics</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/admin')}}">Dashboard</a></li>
            <li class="active">School Statistics</li>
        </ol>
    </section>

    <!---- General Statistics ---->
    <section class="content" style="min-height: 160px !important;">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$servicesCount}}</h3>

                        <p class="font-weight-bold">Total Services</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-folder"></i>
                    </div>
                    <a href="{{adminUrl('service')}}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$clientsCount}}</h3>

                        <p>Client</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-male"></i>
                    </div>
                    <a href="{{adminUrl('client')}}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{$messagesCount}}</h3>

                        <p>Message</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <a href="{{adminUrl('message')}}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                {{--<div class="small-box bg-red">
                    <div class="inner">
                        <h3></h3>

                        <p>Subjects</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/subjects')}}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>--}}
            </div>
            <!-- ./col -->
        </div>

        <div class="row">

            <div class="col-md-6">
                <!-- Application buttons -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Information </h3>
                    </div>
                    <div class="box-body">

                        <a href="{{adminUrl('service')}}" class="btn btn-app">
                            <span class="badge bg-yellow">{{$servicesCount}}</span>
                            <i class="fa fa-folder"></i> Services
                        </a>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-6">
                <!-- Application buttons -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Information </h3>
                    </div>
                    <div class="box-body">

                        <a href="{{adminUrl('messages')}}" class="btn btn-app">
                            <span class="badge bg-yellow">{{$messagesCount}}</span>
                            <i class="fa fa-user-secret"></i> Messages
                        </a>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-gift"></i>

                        <h3 class="box-title">Shortcuts</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">

                        <!-- Small boxes (Stat box) -->
                        <div class="row divs_for_data">

                            <!-- start col -->
                            <div class="col-lg-2 col-xs-6">
                                <!-- small box -->
                                <div class="small-box shortcut_div">
                                    <div class="inner">
                                        <div class="text-center shortcut_img">
                                            <a href="{{adminUrl('slider/create')}}"><img src="{{asset('dashboard/img/slider.png')}}" class="img-responsive"></a>
                                        </div>
                                        <h3 class="text-center"><a href="{{adminUrl('slider/create')}}">Add Slider</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <!-- start col -->
                            <div class="col-lg-2 col-xs-6">
                                <!-- small box -->
                                <div class="small-box shortcut_div">
                                    <div class="inner">
                                        <div class="text-center shortcut_img">
                                            <a href="{{adminUrl('service/create')}}"><img src="{{asset('dashboard/img/dolly-512.png')}}" class="img-responsive"></a>
                                        </div>
                                        <h3 class="text-center"><a href="{{adminUrl('service/create')}}">Add Service</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <!-- start col -->
                            <div class="col-lg-2 col-xs-6">
                                <!-- small box -->
                                <div class="small-box shortcut_div">
                                    <div class="inner">
                                        <div class="text-center shortcut_img">
                                            <a href="http://webdesign.be4em.info/ahmedelnabiladmin/news/add"><img src="{{asset('dashboard/img/slider.png')}}" class="img-responsive"></a>
                                        </div>
                                        <h3 class="text-center"><a href="http://webdesign.be4em.info/ahmedelnabiladmin/news/add">Add Image to Gallery</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <!-- start col -->
                            <div class="col-lg-2 col-xs-6">
                                <!-- small box -->
                                <div class="small-box shortcut_div">
                                    <div class="inner">
                                        <div class="text-center shortcut_img">
                                            <a href="{{adminUrl('client/create')}}"><img src="{{asset('dashboard/img/download.png')}}" class="img-responsive"></a>
                                        </div>
                                        <h3 class="text-center"><a href="{{adminUrl('client/create')}}">Add Client</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- start col -->
                            <div class="col-lg-2 col-xs-6">
                                <!-- small box -->
                                <div class="small-box shortcut_div">
                                    <div class="inner">
                                        <div class="text-center shortcut_img">
                                            <a href="{{adminUrl('setting/edit')}}"><img src="{{asset('dashboard/img/setting.jpg')}}" class="img-responsive"></a>
                                        </div>
                                        <h3 class="text-center"><a href="{{adminUrl('setting/edit')}}">Edit Setting</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            {{--<!-- start col -->
                            <div class="col-lg-2 col-xs-6">
                                <!-- small box -->
                                <div class="small-box shortcut_div">
                                    <div class="inner">
                                        <div class="text-center shortcut_img">
                                            <a href="http://webdesign.be4em.info/ahmedelnabiladmin/setting/edit"><img src="customize/backend/images/setting.jpg" class="img-responsive"></a>
                                        </div>
                                        <h3 class="text-center"><a href="http://webdesign.be4em.info/ahmedelnabiladmin/setting/edit">Edit
                                                Setting</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->--}}


                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body-->
                </div>
                <!-- /.box -->
            </div>

        </div>

        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest 5 Messages</h3>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="padding: 15px">

                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <td>User Name</td>
                                    <td>Email</td>
                                    <td>Message</td>
                                    <td>Phone</td>
                                    <td>Phone</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                    <td class="mailbox-name"><a href="read-mail.html">kidoo@gmail.com</a></td>
                                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                                    <td class="mailbox-date">01100960900</td>
                                    <td class="mailbox-date">15 Feb. 2016 11:03 PM</td>
                                </tr>
                                <tr>
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
    </section>

    <!---- Users ---->



@endsection
