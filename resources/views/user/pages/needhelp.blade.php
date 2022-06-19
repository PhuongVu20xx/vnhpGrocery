@extends('user.layout.userlayout')

@section('header')
@include('user.layout.header')
<div class="backgroundheader"></div>
@endsection

@section('body')
<link rel="stylesheet" href="{{asset('css/user/pages/needhelp.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Babylonica&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/8b058784b8.js" crossorigin="anonymous"></script>
    <h1 class="col-12">HELP CENTER</h1>
    <div class="col-md-1"></div>
        <div class="col-md-2">
            <div class="menu-container">
                <ul>
                    <li id="service-policy">
                        <a href="#service-policy">
                            <i class="fa-brands fa-servicestack"></i>
                            <span>Services & Policies</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <ul>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#loyalty-program">Loyalty Program</a></li>
                            <li><a href="#payment-methods">Payment Methods</a></li>
                            <li><a href="#return-refund">Return & Refund Policy</a></li>
                            <li><a href="#delivery">Delivery Policy</a></li>
                            <li><a href="#faq">FAQ</a></li>
                        </ul>
                    </li>    
                
                    <li id="legal">
                        <a href="#legal">
                            <i class="fa-solid fa-gavel"></i>
                            <span>Legal</span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <ul>
                            <li><a href="#terms-conditions">Terms & Conditions</a></li>
                            <li><a href="#privacy">Privacy Policy</a></li>
                        </ul> 
                    </li>   
                </ul> 
            </div>
        </div>
<!-- **************************** -->

        <div class="col-md-8">
            <div class="content-container">
                <div id="services" class="content-needhelp">
                    <div class="title">Services</div>
                    <div class="content">
                        <h6>Door-To-Door Delivery</h6>
                        <p>- We offer great customer services to make your shopping experience more enjoyable and convenient. Free delivery for a bill from 1,000,000 VND with shipping distance of 10km and below.</p>
                        <p>- XCLUSIVE BENEFITS for Diamond customers.</p>
                        <p>- Free delivery regardless of bill values within Ho Chi Minh city.</p>
                    </div>
                </div>

                <div id="loyalty-program" class="content-needhelp">
                    <div class="title">Loyalty Program</div>
                    <img src="#" alt="">
                </div>

                <div id="payment-methods" class="content-needhelp">
                    <div class="title">Payment Methods</div>
                    <div class="content">
                        
                            <p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p>
                            <p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p>
                            <p>- Step 3: Fulfill necessary information of order form.</p>
                            <p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p>
                            <p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p>
                            <p>b. Transfer by bank/ATM before your order is shipped.</p>
                        
                    </div>
                </div>

                <div id="return-refund" class="content-needhelp">
                    <div class="title">Return & Refund Policy</div>
                    <div class="content">
                        
                            <p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p>
                            <p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p>
                            <p>- Step 3: Fulfill necessary information of order form.</p>
                            <p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p>
                            <p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p>
                            <p>b. Transfer by bank/ATM before your order is shipped.</p>
                        
                    </div>
                </div>

                <div id="delivery" class="content-needhelp">
                    <div class="title">Delivery Policy</div>
                    <div class="content">
                        
                            <p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p>
                            <p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p>
                            <p>- Step 3: Fulfill necessary information of order form.</p>
                            <p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p>
                            <p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p>
                            <p>b. Transfer by bank/ATM before your order is shipped.</p>
                        
                    </div>
                </div>

                <div id="faq" class="content-needhelp">
                    <div class="title">FAQ</div>
                    <div class="content">
                        
                            <p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p>
                            <p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p>
                            <p>- Step 3: Fulfill necessary information of order form.</p>
                            <p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p>
                            <p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p>
                            <p>b. Transfer by bank/ATM before your order is shipped.</p>
                        
                    </div>
                </div>

                <div id="terms-conditions" class="content-needhelp">
                    <div class="title">Terms & Conditions</div>
                    <div class="content">
                        
                            <p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p>
                            <p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p>
                            <p>- Step 3: Fulfill necessary information of order form.</p>
                            <p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p>
                            <p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p>
                            <p>b. Transfer by bank/ATM before your order is shipped.</p>
                        
                    </div>
                </div>

                <div id="privacy" class="content-needhelp">
                    <div class="title">Privacy Policy</div>
                    <div class="content">
                        
                            <p>- Step 1:  Select the product you want to buy => Click cart icon or “Add to cart”.</p>
                            <p>- Step 2: After choosing items, please check price and quantity of items carefully before clicking “Process to check out”.</p>
                            <p>- Step 3: Fulfill necessary information of order form.</p>
                            <p>- Step 4: Choose the “Shipping method”. Then we offer you  the following payment methods:</p>
                            <p>a. Credit card on delivery: pay directly to the shipper when you receive the product.</p>
                            <p>b. Transfer by bank/ATM before your order is shipped.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    <div class="col-md-1"></div>
@endsection

@section('footer')
@include('user.layout.footer')
@endsection