@extends('user.layout.layout')

@section('header')
    @include('user.layout.header')
    <div class="backgroundheader"></div>
@endsection
<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/layout/adminnavigatortab.css') }}">
    <link rel="stylesheet" href="{{asset('css/login-form.css')}}">
@endsection

<!-- LOGIN-FORM -->
@section('body')
    <div class="row" id="row-login">
        <div class="col-lg-8 col-md-10 col-sm-12">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                @endif
                @if(session('msg'))
                    <div class="alert alert-success">
                        {{session('msg')}}
                    </div>
                @endif
            <form action="/login" method="POST" class="form-group">
                {{csrf_field()}}
                <div class="form-header">Login</div>

                <div class="form-element">
                    <p class="content">* Email</p>
                    <input type="text" name="email" class="input-form">
                </div>

                <div class="form-element">
                    <p class="content">* Password</p>
                    <input type="password" name="password" class="input-form">
                </div>
                <div id="submit">
                    <input type="submit" class="form-submit" value="LOGIN">
                </div>
                <div id="forgot">
                    <a href="#">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
<!-- FOOTER -->
@section('footer')
    @include('user.layout.footer')
@endsection