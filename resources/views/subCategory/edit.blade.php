@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>update Sub Category</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('subcategory.index')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <form action="{{route('subcategory.update',['subcategories'=>$subcategories])}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="name">Category</label>
                                        <select name="categories_id" id="category" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $subcategories->categories_id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" value="{{$subcategories->name}}" name="name" id="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="slug">Slug</label>
                                        <input type="text" value="{{$subcategories->slug}}" name="slug" id="slug" class="form-control" placeholder="Slug">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1" {{ $subcategories->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="1" {{ $subcategories->status == 0 ? 'selected' : '' }}>Inactive</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 pt-3">
                        <button class="btn btn-primary" type="submit">update</button>
                        <a href="{{route('subcategory.index')}}" class="btn btn-outline-dark ml-3">Cancel</a>
                    </div>

                </form>
            </div>>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('customJs')

@endsection
