@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')
{{--Drop Your Customized Style Codes Here--}}
@section('customizedStyle')
@endsection
{{--Drop Your Customized Scripts Codes Here--}}
@section('customizedScript')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
{{-- Start of page Content --}}
@section('content')

    <section class="content-header">
        <h1>
            Gallery
            <small>All Images</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{adminUrl('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{adminUrl('/gallery')}}">Gallery</a></li>
            <li class="active">All Images</li>
        </ol>
    </section>



    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-primary" style="padding: 15px">
                    <div class="box-header with-border">
                        <h3 class="box-title">All Gallery Images</h3>
                        <a href="{{adminUrl('gallery/create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add Images To Gallery </a>
                    </div>
                    @include('dashboard.layouts.messages')
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="adminform">
                        <div class="row top-margin">
                            <div class="col-xs-12 deleteResult"></div>

                            @if($images)
                                @foreach($images as $image)
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 imgnum34">
                                        <div class="albumImageContainer">
                                            <p class="thumbnail">
                                                <img src="{{asset($image->image->path)}}" class="img-responsive albumImg">
                                            </p>
                                            <i title="Delete" data-toggle="modal" data-target="#delete{{$image->id}}" class="fa fa-trash deleteAlbumImage" data-id="34" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>


                        @if($images)
                            @foreach($images as $image)

                            <div class="modal modal-danger fade" id="delete{{$image->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Delete Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are You Sure You Want To Delete Image <strong></strong></p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('gallery.destroy', $image->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="d-flex flex-row">
                                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal" style="margin-right: 5px">
                                                    cancel
                                                </button>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
