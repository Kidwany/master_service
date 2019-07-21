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
            Slider
            <small>Edit Slide</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{adminUrl('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{adminUrl('/slider')}}">Slider</a></li>
            <li class="active">Edit Slide</li>
        </ol>
    </section>


    <section class="content">
        @include('dashboard.layouts.messages')
        <form role="form" action="{{route('slider.update', $slide->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('patch')
            <div class="row">
                <!-- English Side -->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Slide Info</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> URL</label>
                                    <input type="text" class="form-control" name="url" id="exampleInputEmail1" placeholder="Enter URL" value="{{old('url')}}">
                                    <p class="help-block">Enter Url of Slide If Exist</p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Slide Title</label>
                                    <input type="text" class="form-control" name="title_en" id="exampleInputEmail1" placeholder="Enter Slide Title" value="{{old('title')}}">
                                    <p class="help-block">Enter Title of Slide</p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Slide Description</label>
                                    <input type="text" class="form-control" name="description_en" id="exampleInputEmail1" placeholder="Enter Slide Description" value="{{old('description')}}">
                                    <p class="help-block">Enter Description of Slide</p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Button</label>
                                    <input type="text" class="form-control" name="button_en" id="exampleInputEmail1" placeholder="Enter button text" value="{{old('button')}}">
                                    <p class="help-block">Enter Text on button </p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> Image</label>
                                    <input type="file" class="form-control" name="image_id" id="exampleInputEmail1" placeholder="Enter button text">
                                    <p class="help-block"> Upload Slide Image </p>
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
                            <h3 class="box-title">أضف بيانات الصورة</h3>
                        </div>
                        <!-- .box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> عنوان الصورة</label>
                                    <input type="text" class="form-control" name="title_ar" id="exampleInputEmail1" placeholder="ادخل عنوان الصورة" value="{{old('title')}}">
                                    <p class="help-block">أضف عنوان الصورة</p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> وصف الصورة</label>
                                    <input type="text" class="form-control" name="description_ar" id="exampleInputEmail1" placeholder="ادخل وصف الصورة" value="{{old('description')}}">
                                    <p class="help-block">ادخل وصف الصورة</p>
                                </div>

                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1"> االزر</label>
                                    <input type="text" class="form-control" name="button_ar" id="exampleInputEmail1" placeholder="ادخل النص الخاص بالزر" value="{{old('button')}}">
                                    <p class="help-block">ادخل النص المراد وضعه على الزر مثال : شاهد المزيد</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
