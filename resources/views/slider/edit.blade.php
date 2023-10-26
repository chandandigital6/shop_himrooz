@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit home slider</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="brands.html" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <form action="{{route('slider.update',['slider'=>$slider])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" value="{{$slider->title}}" name="title" id="title" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image">Image</label>
                                        <input type="file"  name="image" id="image" class="form-control" placeholder="Name">

                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/' . $slider->image) }}" alt="Current Image" style="max-width: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 pt-3">
                        <button class="btn btn-primary" type="submit">Create</button>
                        <a href="{{route('slider.index')}}" class="btn btn-outline-dark ml-3">Cancel</a>
                    </div>
                </div>
            </form>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('customJs')

@endsection
