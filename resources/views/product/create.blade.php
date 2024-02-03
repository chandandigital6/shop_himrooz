@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Product</h1>
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
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
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
                                                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="Slug">Slug</label>
                                                        <input type="text" name="slug" id="slug" class="form-control" placeholder="slug">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="description">Description</label>
                                                        <textarea name="description" id="description" cols="30" rows="10" class="summernote" placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h2 class="h4 mb-3">Media</h2>
                                            <input type="file" name="image" class="form-control">
            {{--                                <div id="image" name="image" class="dropzone dz-clickable">--}}
            {{--                                    <div class="dz-message needsclick">--}}
            {{--                                        <br>Drop files here or click to upload.<br><br>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
                                        </div>
                                    </div>
            {{--                        product variation starts here--}}
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h2 class="h4 mb-3">Products Variation</h2>
                                            <button class="btn btn-primary" type="button" onclick="addVariation()">Add Variation</button>
                                        </div>
                                        <div class="card-body" id="variationContainer">
                                            <div class="items" data-group="productVariation">
                                                <div class="row mb-4">
                                                    <hr>
                                                    <div class="col-md-3">
                                                        <label class="form-label" for="product-variation-name">Name</label>
                                                        <input type="text" class="form-control" id="product-variation-name"
                                                               name="variation_name[]"
                                                               required placeholder="Product Price">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="form-label" for="price">Price in INR (₹)</label>
                                                        <input type="number" class="form-control" id="price"
                                                               name="variation_price[]"
                                                               required placeholder="Product Price">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="form-label" for="discount">Discount(%)</label>
                                                        <input type="number" class="form-control" id="discount"
                                                               name="variation_discount[]" required
                                                               placeholder="Product Discount(In Percentage)">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label" for="images">Images (Images Should be squarish in size. e.g. (500 x 500 px))</label>
                                                        <input type="file" class="form-control" id="images"
                                                               name="variation_image[]" required
                                                               placeholder="Product Discount(In Percentage)" multiple>
                                                    </div>
                                                    <div class="col-md-1 repeater-remove-btn mt-4">
                                                        <button class="btn btn-danger remove-btn" disabled>
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            {{--                        product variation ends here--}}
{{--                                    <div class="card mb-3">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <h2 class="h4 mb-3">Pricing</h2>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-12">--}}
{{--                                                    <div class="mb-3">--}}
{{--                                                        <label for="price">Price</label>--}}
{{--                                                        <input type="text" name="price" id="price" class="form-control" placeholder="Price">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-12">--}}
{{--                                                    <div class="mb-3">--}}
{{--                                                        <label for="compare_price">discount at Price</label>--}}
{{--                                                        <input type="text" name="discount_price" id="compare_price" class="form-control" placeholder="Compare Price">--}}
{{--                                                        <p class="text-muted mt-3">--}}
{{--                                                            To show a reduced price, move the product’s original price into Compare at price. Enter a lower value into Price.--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h2 class="h4 mb-3">Inventory</h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sku">SKU (Stock Keeping Unit)</label>
                                                        <input type="text" name="sku_no" id="sku_no" class="form-control" placeholder="sku">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="barcode">Barcode</label>
                                                        <input type="text" name="barcode" id="barcode" class="form-control" placeholder="Barcode">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="barcode">Qty</label>
                                                        <input type="text" name="qty" id="barcode" class="form-control" placeholder="Qty">
                                                    </div>
                                                </div>




                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="barcode">Tags</label>
                                                        <input type="text" id="productTag" name="product_tags[]" class="form-control" placeholder="e.g. Oil, Food, Vegetable ">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" >

                                                    <div class="mb-3" style="width: max-content">
                                                        <label for="barcode">Saved Tag</label>
                                                    </div>

                                                    <div style="display: flex; flex-wrap: wrap; gap: 20px" id="displayProductTag">

                                                    </div>
                                                </div>



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
                                                    <option value="1">Active</option>
                                                    <option value="0">Block</option>
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

                                                    @if($categories->isNotEmpty())
                                                         @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                         @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="category">Sub category</label>

                                                <select name="sub_categories_id" id="sub_categories_id" class="form-control">
                                                    <option value="">Select Subcategory</option> <!-- Add an empty default option -->
                                                </select>
            {{--                                    <select name="sub_categories_id" id="sub_categories_id" class="form-control">--}}
            {{--                                        <option value="">Mobile</option>--}}
            {{--                                       @if($subCategories->isNotEmpty())--}}
            {{--                                           @foreach($subCategories as $Subcategory)--}}
            {{--                                                <option value="{{$Subcategory->id}}">{{$Subcategory->name}}</option>--}}
            {{--                                           @endforeach--}}
            {{--                                       @endif--}}
            {{--                                    </select>--}}
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
                                                            <option value="{{$brands->id}}">{{$brands->name}}</option>
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
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
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
{{--    script to append product variation--}}
    <script>
    function addVariation() {
                let variation = document.getElementById('variationContainer').innerHTML +=`
                <div class="items" >
                                    <div class="row mb-4">
                                        <hr>
                                        <div class="col-md-3">
                                            <label class="form-label" for="product-variation-name">Name</label>
                                            <input type="text" class="form-control" id="product-variation-name"
                                                   name="variation_name[]"
                                                   required placeholder="Product Price">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label" for="price">Price in INR (₹)</label>
                                            <input type="number" class="form-control" id="price"
                                                   name="variation_price[]"
                                                   required placeholder="Product Price">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label" for="discount">Discount(%)</label>
                                            <input type="number" class="form-control" id="discount"
                                                   name="variation_discount[]" required
                                                   placeholder="Product Discount(In Percentage)">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="images">Images (Images Should be squarish in size. e.g. (500 x 500 px))</label>
                                            <input type="file" class="form-control" id="images"
                                                   name="variation_image[]" required
                                                   placeholder="Product Discount(In Percentage)" multiple>
                                        </div>
                                        <div class="col-md-1 repeater-remove-btn mt-4">
                                            <button class="btn btn-danger remove-btn" onclick="removeVariation()">
                                                Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                `;

    }

    function removeVariation() {
        // remove the parent element of the clicked button
        event.target.parentNode.parentNode.remove();
    }
</script>
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
