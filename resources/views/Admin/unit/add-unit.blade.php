@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-dark text-warning">
                            <h2 class="text-center ">Add Unit</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-unit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" required placeholder="Enter Unit"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Description: </label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" cols="30" rows="5"  placeholder="Enter Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Status: </label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="status" value="0" /> Published</label>
                                        <label><input type="radio" name="status" value="1" /> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"> </label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Add New Unit" class="btn btn-outline-dark text-warning" />
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
