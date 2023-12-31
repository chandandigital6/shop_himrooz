@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Products</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('product.create')}}" class="btn btn-primary">New Product</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        @include('admin.massage')
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                    <form action="" method="get">
                        <div class="card-tools">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" name="keyword" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th width="80"></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>SKU</th>
                                <th width="100">Status</th>
                                <th width="100">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($product->isNotEmpty())
                               @foreach($product as $productItem)
                                   <tr>
                                       <td>{{$loop->iteration}}</td>
                                       <td><img src="{{asset('storage/'.$productItem->image)}}" class="img-thumbnail" width="50" ></td>
                                       <td><a href="#">{{$productItem->title}}</a></td>
                                       <td>{{$productItem->price}}</td>
                                       <td>{{$productItem->qty}}</td>
                                       <td>{{$productItem->sku_no}}</td>
                                       <td>
                                           @if($productItem->status == 1)
                                               <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                   <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                               </svg>
                                           @else
                                               <svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                   <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                               </svg>
                                           @endif

                                       </td>
                                       <td>
                                           <a href="{{route('product.edit',['product'=>$productItem])}}">
                                               <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                   <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                               </svg>
                                           </a>
                                           <a href="{{route('product.delete',['product'=>$productItem])}}" class="text-danger w-4 h-4 mr-1">
                                               <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                   <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                               </svg>
                                           </a>
                                           <a href="{{route('product.duplicate',['product'=>$productItem])}}" class="text-danger w-4 h-4 mr-1">
                                               <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                   <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M208 0H332.1c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9V336c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V48c0-26.5 21.5-48 48-48zM48 128h80v64H64V448H256V416h64v48c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48z"/></svg>
{{--                                                   <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>--}}
                                               </svg>
                                           </a>

                                           <a href="{{route('deal.create',['product'=>$productItem])}}" class="text-danger w-4 h-4 mr-1"> <i class="fas fa-weight-hanging"></i>
                                           </a>
                                       </td>
                                   </tr>
                               @endforeach
                            @else
                                <tr>
                                    <td>Record not found</td>
                                </tr>
                            @endif


                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination m-0">
                            {{ $product->links() }}
                        </ul>
                    </div>
                </div>
            </div>
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
