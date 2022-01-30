@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-dark text-warning">
                            <h2 class="text-center ">Edit Unit</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-unit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="unit_id" value="{{ $unit->id }}" />
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $unit->name }}" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Description: </label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" cols="30" rows="5" required >{{ $unit->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Status: </label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" {{ $unit->status==1 ? 'checked': '' }} value="1" required /> Published</label>
                                        <label><input type="radio" name="status" {{ $unit->status==0 ? 'checked': '' }} value="0" required /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"> </label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Unit" class="btn btn-outline-warning" />
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
