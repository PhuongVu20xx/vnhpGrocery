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
        <div class="col-md-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <form action="/editimportproduct" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-header">Edit Import Product</div>
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="select_product">Product Name</label>
                                <select name="select_product" id="select_product" class="form-control">
                                    @foreach ($select_product as $products)
                                        <option value="{{ $products->product_name }}" >
                                            {{ $products->product_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>        
                            <div class="col-md-6">
                                <label class="small mb-1" for="select_suppliers">Supplier</label>
                                <select name="select_suppliers" id="select_suppliers" class="form-control">
                                    @foreach ($select_suppliers as $suppliers)
                                        <option value="{{ $suppliers->supplier_name }}" >
                                            {{ $suppliers->supplier_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>                           
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">                                                        
                            <div class="col-md-6">
                                <label class="small mb-1" for="offers_name">Offers Name</label>
                                <select name="offers_name" id="offers_name" class="form-control">
                                    @foreach ($select_offer as $offers)
                                        <option value="{{ $offers->offer_name }}" >
                                            {{ $offers->offer_name }}
                                        </option>
                                    @endforeach
                                </select>                            
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="quantity">Quantity</label>
                                <input class="form-control" onchange="sum()" name="quantity" id="quantity" type="number" value="0" step="1">
                            </div> 
                        </div>

                        <!-- Form Group-->                       
                        <div class="mb-3">                           
                            <label class="small mb-1" for="price">Price</label>
                            <input class="form-control" onchange="sum()" id="price" name="price" step="500" type="text">                    
                        </div>
                        
                       
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="importdate">Import Date</label>
                                <input class="form-control" id="importdate" name="importdate" type="date">
                            </div>                       
                            <div class="col-md-6">
                                <label class="small mb-1" for="emp_name">Employee</label>
                                <select name="emp_name" id="emp_name" class="form-control">
                                    @foreach ($select_manager as $manager)
                                        <option value="{{ $manager->emp_name }}" >
                                            {{ $manager->emp_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>                           
                        </div>

                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="totalpayment">Total Payment</label>
                                <input class="form-control" id="totalpayment" name="totalpayment" type="decimal" disabled >
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="note">Note</label>
                                <input class="form-control" id="note" name="note" type="text" >
                            </div>                           
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
        <script src="{{ asset('js/admin/importproduct.js') }}"></script>
@endsection


