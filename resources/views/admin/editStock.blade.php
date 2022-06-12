@extends('admin.layout.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin/layout/form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/respose-tableadminfeedback.css') }}">
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
        <div class="col-md-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <form action="editstock">
                    <div class="card-header">Edit Stock</div>
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Product Name</label>
                                <select name="select_product" id="select_product" class="form-control">
                                    @foreach ($select_product as $products)
                                        <option value="{{ $products->product_name }}" placeholder="Choose Category">
                                            {{ $products->product_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Supplier</label>
                                <select name="select_suppliers" id="select_suppliers" class="form-control">
                                    @foreach ($select_suppliers as $suppliers)
                                        <option value="{{ $suppliers->supplier_name }}" placeholder="Choose Category">
                                            {{ $suppliers->supplier_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="offersname">Offers Name</label>
                                <input class="form-control" id="offersname" name="offersname" type="text" value="NULL">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Status">Product Supplier Status</label>
                                <input class="form-control" id="Status" type="text">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="price">Price</label>
                            <input class="form-control" id="price" name="price" type="email">
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



