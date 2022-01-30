@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-dark text-warning">
                            <h2 class="text-center ">Edit Brand</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-brand') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="brand_id" value="{{ $brand->id }}" />
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $brand->name }}" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Description: </label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" cols="30" rows="5" required >{{ $brand->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Image: </label>
                                    <div class="col-md-8">
                                        <img src="{{asset($brand->image)}}" style="height: 100px; width: 100px;" />
                                        <input type="file" name="image" class="form-control-file" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Status: </label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" {{ $brand->status==1 ? 'checked': '' }} value="1" required /> Published</label>
                                        <label><input type="radio" name="status" {{ $brand->status==0 ? 'checked': '' }} value="0" required /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"> </label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Brand" class="btn btn-outline-warning" />
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
