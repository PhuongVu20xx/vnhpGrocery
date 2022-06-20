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
            <div class="card mb-4">
                <form action="/payment" method="post">
                    {{ csrf_field() }}
                        <div class="card-header">Add Payment</div>
                        <div class="card-body">
                            <!-- Form Group-->
                            <div class="mb-3">
                                <label class="small mb-1" for="payment_mode_name">Payment Mode Name</label>
                                <input class="form-control" id="payment_mode_name" name="payment_mode_name" type="text">
                            </div>
                            <!-- Form Group-->
                            <div class="mb-3">
                                <label class="small mb-1" for="offer_id">Promotion ID</label>
                                <select class="form-control" name="offer_id" id="offer_id">
                                    @foreach ($offer_id as $offer)
                                        <option value="{{ $offer->offer_name }}">
                                            {{ $offer->offer_name }}
                                        </option>
                                    @endforeach
                                </select>
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

    <section class="bg-white p-5">
        <div id="no-more-tables" class="content">
            <div class="clearfix"> </div>
            <div class="clearfix"></div>

            <div class="table-responsive ">
                <table id="myTable" class="table bg-white">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-light">ID</th>
                            <th class="text-light">Payment Name</th>
                            <th class="text-light">Promotion ID</th>
                            <th class="text-light">Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($allpayment)>0)
                            <span hidden>{{$i=1}}</span>
                            @foreach ($allpayment as $payment)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $payment->payment_mode_name  }}</td>
                                    <td>{{ $payment->offer_id  }}</td>
                                    <td><i class="fa-solid fa-pen-to-square" style="color:black"></i></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/admin/tableadminfeedback.js') }}"></script>
    <script src="{{ asset('js/admin/category_controller.js') }}"></script>
@endsection



