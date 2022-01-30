@extends('admin.master')

@section('body')
    <section class="py-3">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header bg-info text-white">
                            <h1 class="text-center">All Sub Categories</h1>
                        </div>
                        <div class="card-body">
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Data Table</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                            <thead class="text-center" >
                                            <tr>
                                                <th>SL</th>
                                                <th>Category Name</th>
                                                <th>Sub-Cat Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>ProductAdded</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($subCategories as $subCategory)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{isset($subCategory->Category->name) ? $subCategory->Category->name : ''}}</td>
                                                    <td>{{$subCategory->name}}</td>
                                                    <td>{{$subCategory->description}}</td>
                                                    <td align="center">
                                                        <img src="{{asset($subCategory->image)}}" height="40%"; width="40%"; alt="Not Found!" />
                                                    </td>
                                                    <td>{{$subCategory->status==1 ? 'Published':'Unpublished'}}</td>
                                                    <td>{{$subCategory->created_at->diffForHumans()}}</td>
                                                    <td>
                                                        <a href="{{ route('edit-subcategory',['id' =>$subCategory->id]) }}" class="fa fa-edit btn btn-primary"> </a><br><br>
                                                        <a href="{{ route('delete-subcategory',['id' =>$subCategory->id]) }}" onclick="return confirm('Are you sure to delete?')" class="fa fa-trash btn btn-danger"> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>
                                    <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                                        <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                                        <div class="wrap-1">
                                            <div class="wrap-2">
                                                <div>
                                                    <img src="{{ asset('/admin_assets/') }}/assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                                                </div>
                                                <div class="color-white" style="margin-left:40px;">
                                                    <h1 class="font-bold">ADMINCA</h1>
                                                    <p class="font-16">Save your time, choose the best</p>
                                                    <ul class="list-unstyled">
                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                                                        <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div style="flex:1;">
                                                <div class="d-flex justify-content-end wrap-3">
                                                    <div class="adminca-banner-b m-r-20">
                                                        <img src="{{ asset('/admin_assets/') }}/assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                                                    <div class="adminca-banner-b m-r-10">
                                                        <img src="{{ asset('/admin_assets/') }}/assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                                                </div>
                                                <div class="dev-img">
                                                    <img src="{{ asset('/admin_assets/') }}/assets/img/adminca-banner/sprite.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection