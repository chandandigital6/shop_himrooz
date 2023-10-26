@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product</h1>
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
            <form action="{{route('product.update',['product'=>$product])}}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" value="{{$product->title}}" id="title" class="form-control" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="Slug">Slug</label>
                                                <input type="text" name="slug" value="{{$product->slug}}" id="slug" class="form-control" placeholder="slug">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="summernote" placeholder="Description">{{$product->description}}</textarea>

{{--                                                <textarea name="description" value="{{$product->description}}" id="description" cols="30" rows="10" class="summernote" placeholder="Description"></textarea>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Media</h2>
{{--                                    <img src="{{ asset('images/' . $productImage) }}" alt="Product Image">--}}

                                    <input type="file" name="image" class="form-control">

                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Pricing</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="price">Price</label>
                                                <input type="text" value="{{$product->price}}" name="price" id="price" class="form-control" placeholder="Price">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="compare_price">discount at Price</label>
                                                <input type="text" value="{{$product->discount_price}}" name="discount_price" id="compare_price" class="form-control" placeholder="Compare Price">
                                                <p class="text-muted mt-3">
                                                    To show a reduced price, move the product’s original price into Compare at price. Enter a lower value into Price.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Inventory</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="sku">SKU (Stock Keeping Unit)</label>
                                                <input type="text"  value="{{$product->sku_no}}" name="sku_no" id="sku_no" class="form-control" placeholder="sku">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="barcode">Barcode</label>
                                                <input type="text" value="{{$product->barcode}}" name="barcode" id="barcode" class="form-control" placeholder="Barcode">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="barcode">Qty</label>
                                                <input type="text" value="{{$product->qty}}" name="qty" id="barcode" class="form-control" placeholder="Qty">
                                            </div>
                                        </div>
                                        {{--                                    <div class="col-md-12">--}}
                                        {{--                                        <div class="mb-3">--}}
                                        {{--                                            <div class="custom-control custom-checkbox">--}}
                                        {{--                                                <input type="number" min="0" name="qty" id="qty" class="form-control" placeholder="Qty">--}}
                                        {{--                                                --}}
                                        {{--                                            </div>--}}
                                        {{--                                        --}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="mb-3">--}}
                                        {{--                                       --}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Product status</h2>
                                    <div class="mb-3">
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{$product->status == 1 ? 'selected' : ""}}>Active</option>
                                            <option value="0" {{$product->status == 0 ? 'selected' : ""}}>Block</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="h4  mb-3">Product category</h2>
                                    <div class="mb-3">
                                        <label for="category">Category</label>
                                        <select name="categories_id" id="categories_id" class="form-control">

                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $product->categories_id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category">Sub category</label>

                                        <select name="sub_categories_id" id="sub_categories_id" class="form-control">
                                            @foreach($subCategories as $subcategory)
                                                <option value="{{ $subcategory->id }}" {{ $subcategory->id == $product->categories_id ? 'selected' : '' }}>
                                                    {{ $subcategory->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Product brand</h2>
                                    <div class="mb-3">
                                        <select name="brands_id" id="status" class="form-control">
                                            @if($brand->isNotEmpty())
                                                @foreach($brand as $brands)
                                                    <option value="{{$brands->id}}" {{$brands->id==$product->brands_id ? 'selected' : ""}}>{{$brands->name}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Featured product</h2>
                                    <div class="mb-3">
                                        <select name="is_featured" id="status" class="form-control">
                                            <option value="yes" {{$product->is_featured == 'no' ? 'selected' : ""}}>No</option>
                                            <option value="no" {{$product->is_featured == 'yes' ? 'selected' : ""}}>Yes</option>
                                        </select>
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


    <script>
        Dropzone.autoDiscover = false;
        $(function () {
            // Summernote
            $('.summernote').summernote({
                height: '200px'
            });

            const dropzone = $("#image").dropzone({
                url:  "create-product.html",
                maxFiles: 5,
                addRemoveLinks: true,
                acceptedFiles: "image/jpeg,image/png,image/gif",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }, success: function(file, response){
                    $("#image_id").val(response.id);
                }
            });

        });
    </script>

    <script>
        Dropzone.autoDiscover = false;
        $(function () {
            // Initialize Dropzone
            const dropzone = new Dropzone("#image", {
                url: "{{ route('product.uploadMedia') }}", // Route for file upload
                maxFiles: 5, // Maximum number of files
                addRemoveLinks: true, // Add remove links
                acceptedFiles: "image/jpeg,image/png,image/gif", // Allowed file types
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function (file, response) {
                    // Handle the successful upload, e.g., store file IDs in hidden input fields
                }
            });
        });
    </script>

    <script>

        // Add an event listener to the "categories_id" dropdown
        $(document).ready(function () {
            $('#categories_id').change(function () {
                var categoryId = $(this).val();
                if (categoryId) {
                    $.ajax({
                        type: 'GET',
                        url: '/admin/product/subcategories/'+categoryId, // Use the named route
                        data: { category_id: categoryId },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            $('#sub_categories_id').html('<option value="">Select Subcategory</option>');
                            $.each(data, function (key, value) {
                                $('#sub_categories_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                        },
                        error: function (data) {
                            console.log(data);
                        }
                    });
                } else {
                    $('#sub_categories_id').html('<option value="">Select Subcategory</option>');
                }
            });
        });
    </script>


@endsection
