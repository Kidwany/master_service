@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')
{{--Drop Your Customized Style Codes Here--}}
@section('customizedStyle')
@endsection
{{--Drop Your Customized Scripts Codes Here--}}
@section('customizedScript')
    <script>
        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
@endsection
{{-- Start of page Content --}}
@section('content')


    <section class="content-header">
        <h1>
            Clients
            <small>Edit Client</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{adminUrl('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{adminUrl('/client')}}">Client</a></li>
            <li class="active">Edit Client</li>
        </ol>
    </section>


    <section class="content">
        @include('dashboard.layouts.messages')
        <form role="form" action="{{adminUrl('contact/update')}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('patch')
            <div class="row">
                <!-- English Side -->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Client Info</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Official Email" value="{{old('email')}}">
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter Phone Number" value="{{old('phone')}}">
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">Another Phone</label>
                                    <input type="text" class="form-control" name="phone_alt" id="exampleInputEmail1" placeholder="Enter Another Phone Number" value="{{old('phone_alt')}}">
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Address</label>
                                    <input type="text" class="form-control" name="address_en" id="exampleInputEmail1" placeholder="Enter Address">
                                    <p class="help-block"> Enter Address Of Company </p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Location</label>
                                    <input type="text" class="form-control" name="address_en" id="exampleInputEmail1" placeholder="Location of Company">
                                    <p class="help-block"> Add Location Link of company from google maps </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Update Social Media Links</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-facebook-square"></i> Facebook</span>
                                        <input type="url" class="form-control" placeholder="Facebook Page URL" name="facebook">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-twitter-square"></i>Twitter</span>
                                        <input type="url" class="form-control" placeholder="Twitter Page URL" name="twitter">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-instagram"></i> Instagram</span>
                                        <input type="url" class="form-control" placeholder="Instagram Page URL" name="instagram">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-youtube-play"></i> Youtube</span>
                                        <input type="url" class="form-control" placeholder="Youtube Page URL" name="youtube">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-linkedin-square"></i> Linkedin</span>
                                        <input type="url" class="form-control" placeholder="Linkedin Page URL" name="linkedin">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-behance-square"></i> Behance</span>
                                        <input type="url" class="form-control" placeholder="Behance Page URL" name="behance">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pinterest-square"></i> Pintrest</span>
                                        <input type="url" class="form-control" placeholder="Pintrest Page URL" name="pintrest">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arabic Side -->
                <div class="col-md-6 arab_dir">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">قم بتعديل بيانات الإتصال</h3>
                        </div>
                        <!-- .box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1">العنوان</label>
                                    <input type="text" class="form-control" name="address_ar" id="exampleInputEmail1" placeholder="ادخل عنوان الشركة" value="{{old('address_ar')}}">
                                    <p class="help-block">أدخل عنوان الشركة</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
