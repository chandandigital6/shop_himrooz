@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Deal</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="products.html" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <form action="{{route('deal.update', ['deal' => $deal->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="product_id">Product</label>
                                                <input type="hidden" name="product_id" id="product_id" value="{{$deal->product_id}}">
                                                <input type="text" disabled class="form-control" placeholder="{{$deal->product->title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="product_variation_id">Slug</label>
                                                <select name="product_variation_id" id="product_variation_id" class="form-control" placeholder="Product Variation">
                                                    @foreach($variations as $variation)
                                                        <option value="{{$variation->id}}" {{$variation->id == $deal->product_variation_id ? 'selected' : ''}}>{{$variation->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="start_time">Deal Start From</label>
                                                <input type="datetime-local" value="{{ $deal->start_time }}" name="start_time" id="start_time" placeholder="Deal Start From"/>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="end_time">Expire on</label>
                                                <input type="datetime-local" name="end_time" value="{{$deal->end_time}}" id="end_time" placeholder="Expire on"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Discount</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="discount">Discount %</label>
                                                <input type="text" name="discount" id="discount" value="{{$deal->discount}}" class="form-control" placeholder="discount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pb-5 pt-3">
                        <button class="btn btn-primary" type="submit">Create</button>
                        <a href="products.html" class="btn btn-outline-dark ml-3">Cancel</a>
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
