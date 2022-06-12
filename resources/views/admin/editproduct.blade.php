@extends('admin.layout.adminlayout')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin/layout/form.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/layout/respose-tableadminfeedback.css') }}">
@endsection

@section('topbar')
@include('admin.layout.topbar')
@endsection

@section('slidebar')
@include('admin.layout.menubar')
@endsection

@section('bodycontent')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-xl-8">
        <!-- Account details card-->
        <div class="card mb-4">
            <form action="/editproduct" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (first name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="category_name">Category Name</label>
                            <select name="category_name" id="category_name" class="form-control ">
                                @foreach ($category_name as $category)
                                <option value="{{ $category->category_name }}">
                                    {{ $category->category_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="product_name">Product Name</label>
                            <input class="form-control" id="product_name" type="text" name="product_name">
                        </div>
                    </div>

                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="information">Information</label>
                            <input class="form-control" id="information" type="text" name="information">
                        </div>
                        <!-- Form Group -->
                        <div class="col-md-6">
                            <label class="small mb-1" for="unit_name">Unit</label>
                            <select name="unit_name" id="unit_name" class="form-control">
                                @foreach ($unit_name as $unit)
                                <option value="{{ $unit->unit_name }}" placeholder="Choose Unit">
                                    {{ $unit->unit_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Form Row-->
                    <div class="gx-3 mb-3">
                        <label class="small mb-1" for="img">Image</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>

                    <!-- Save changes button-->
                    <div class="row gx-3 mb-3">
                        <div class="col-5"></div>
                        <input type="submit" id="save" class="col-2 btn btn-primary" value="Save">
                        <div class="col-5"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>


@endsection

@section('scripts')
<script src="{{ asset('js/admin/tableadminfeedback.js') }}"></script>
@endsection