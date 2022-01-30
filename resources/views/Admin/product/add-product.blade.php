@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h2 class="text-center ">Add Product</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Name: </label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="categoryId" class="form-control" >
                                            <option value="#" disabled selected>----------Select a Category------------</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Sub Category Name: </label>
                                    <div class="col-md-8">
                                        <select name="sub_category_id" id="subCategoryId" class="form-control" >
                                            <option value="#" disabled selected>-------Select a Sub Category--------</option>
                                            @foreach($subCategories as $subCategory)
                                                <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Name: </label>
                                    <div class="col-md-8">
                                        <select name="brand_id" id="#" class="form-control" >
                                            <option value="#" disabled selected>-------------Select a Brand-------------</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Name: </label>
                                    <div class="col-md-8">
                                        <select name="unit_id" id="#" class="form-control" >
                                            <option value="#" disabled selected>---------------Select a Unit--------------</option>
                                            @foreach($units as $unit)
                                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name" />
                                    </div>
                                </div>
                               <div class="form-row">
                                   <div class="form-group col-md-6">
                                       <div class="">
                                           <label for="inputEmail4">Regular Price: </label>
                                           <input type="text" name="regular_price" class="form-control" placeholder="Enter Price"/>
                                       </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <div class="">
                                           <label for="inputEmail4">Selling Price: </label>
                                           <input type="text" name="selling_price" class="form-control" placeholder="Enter Price" />
                                       </div>
                                   </div>
                               </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Sort Description: </label>
                                    <div class="col-md-8">
                                        <textarea name="sort_description" id="" class="form-control summernote " cols="10" rows="4"  placeholder="Enter Sort Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Long Description: </label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control summernote" cols="30" rows="6"  placeholder="Enter Long Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Image: </label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Other Images: </label>
                                    <div class="col-md-8">
                                        <input type="file" name="sub_image[]" class="form-control-file" multiple />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Status: </label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" value="1" required /> Published</label>
                                        <label><input type="radio" name="status" value="0" required /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"> </label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Add New Product" class="btn btn-outline-primary" />
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
@section('admin-js')
    <script>
        $(document).on('change','#categoryId',function () {
            var categoryId = $(this).val();
            $.ajax({
                url: "http://localhost/urdan/public/get-sub-category-by-category-id/"+categoryId,
                method: "GET",
                dataType: "JSON",
                data: {},
                success: function (res) {
                    var option='';
                    option += '<option value="#" disabled selected>-------Select a Sub Category--------</option>';
                    $.each(res, function (key, value) {
                        option +='<option value="'+value.id+'">'+value.name+'</option>';
                    })
                    $('#subCategoryId').empty().append(option);
                },
                error: function (e) {
                    console.log(e);
                }
            });
        })
    </script>
@endsection
