@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h2 class="text-center ">Edit Sub Category</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-subcategory') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="category_id" value="{{ $subCategory->id }}" />
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $subCategory->name }}" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Description: </label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" cols="30" rows="5" required >{{ $subCategory->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Image: </label>
                                    <div class="col-md-8">
                                        <img src="{{asset($subCategory->image)}}" style="height: 100px; width: 100px;" />
                                        <input type="file" name="image" class="form-control-file" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Status: </label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" {{ $subCategory->status==1 ? 'checked': '' }} value="1" required /> Published</label>
                                        <label><input type="radio" name="status" {{ $subCategory->status==0 ? 'checked': '' }} value="0" required /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"> </label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Category" class="btn btn-outline-info" />
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