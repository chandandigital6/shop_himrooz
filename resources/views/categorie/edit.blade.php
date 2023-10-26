@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Category</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('categorie.index')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('categorie.update',['categories'=>$categories])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" value="{{$categories->name}}" class="form-control" placeholder="Caterorie Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="slug">Slug</label>
                                        <input type="text" value="{{$categories->slug}}" name="slug" id="slug" class="form-control" placeholder="Slug">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image">image</label>
                                        <input type="file" value="{{$categories->image}}" name="image" id="slug" class="form-control" placeholder="image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Current Image</label>
                                        @if($categories->image)
                                            <img src="{{ asset('storage/' . $categories->image) }}" alt="Current Image" class="img-thumbnail">
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="slug">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1" {{ $categories->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $categories->status == 0 ? 'selected' : '' }}>Disable</option>
                                        </select>
                                        {{--                                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug">--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pb-5 pt-3">
                        <button class="btn btn-primary" type="submit">update</button>
                        <a href="brands.html" class="btn btn-outline-dark ml-3">Cancel</a>
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
