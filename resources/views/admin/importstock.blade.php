@extends('admin.layout.adminlayout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin/layout/form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/form/respose-tableadminfeedback.css') }}">
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
                <form action="/importstock" method="post">
                    {{csrf_field()}}
                    <div class="card-header">Insert Stock</div>
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">                           
                            <div class="col-md-6">
                                <label class="small mb-1" for="select_product">Product Name</label>
                                <select name="select_product" id="select_product" class="form-control">
                                    @foreach ($select_product as $products)
                                        <option value="{{ $products->product_name }}">
                                            {{ $products->product_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="select_suppliers">Supplier</label>
                                <select name="select_suppliers" id="select_suppliers" class="form-control">
                                    @foreach ($select_suppliers as $suppliers)
                                        <option value="{{ $suppliers->supplier_name }}">
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
                                    @foreach ($offers_name as $offer)
                                        <option value="{{ $offer->offer_name }}">
                                            {{ $offer->offer_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> 
                        <!-- Form Group -->
                            <div class="col-md-6">                           
                                <label class="small mb-1" for="quantity">Quantity</label>
                                <input class="form-control" onchange="sum()" name="quantity" id="quantity" type="number" value="0" step="1">
                            </div>
                        </div>               
                        <!-- Form Group -->
                        <div class="row gx-3 mb-3">
                            <label class="col-md-2 small mb-1" for="status">Status</label>
                            <div class="col-md-4">
                                <div class="TriSea-technologies-Switch pull-right">
                                    <input id="TriSeaDefault" name="TriSea1" type="checkbox">
                                    <label for="TriSeaDefault" class="label-default"></label>
                                </div>                                
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
@endsection



