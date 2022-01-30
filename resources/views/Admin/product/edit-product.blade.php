@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h2 class="text-center ">Edit Product</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <div class="">
                                           <label for="inputEmail4">Regular Price: </label>
                                           <input type="text" name="regular_price" value="{{ $product->regular_price }}" class="form-control" placeholder="Enter Price"/>
                                       </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <div class="">
                                           <label for="inputEmail4">Selling Price: </label>
                                           <input type="text" name="selling_price" value="{{ $product->selling_price }}" class="form-control" placeholder="Enter Price" />
                                       </div>
                                   </div>
                               </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Short Description: </label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" cols="30" rows="5" required >{{ $product->sort_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Long Description: </label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" cols="30" rows="5" required >{{ $product->long_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Image: </label>
                                    <div class="col-md-8">
                                        <img src="{{asset($product->image)}}" style="height: 100px; width: 100px;" />
                                        <input type="file" name="image" class="form-control-file" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Status: </label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" {{ $product->status==1 ? 'checked': '' }} value="1" required /> Published</label>
                                        <label><input type="radio" name="status" {{ $product->status==0 ? 'checked': '' }} value="0" required /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"> </label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Product" class="btn btn-outline-info" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection