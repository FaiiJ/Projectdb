@extends('Template.customer_navbar_master')
@section('title','Cart')

<!--CSS-->
<link href="{{asset('css/customer_cart.css')}}" rel="stylesheet">

@section('content')

<article>
    <div class="container-fluid">
        <section>
            <div class="row">
                <div class="col-12">
                    <h2 style="text-align: center;">CART</h2>
                </div>
            </div>
        </section>

        <section>
            <div class="row" style="text-align: center;">
                <!--ORDER SUMMARY-->
                <div class="col-md-6 col-sm-12">
                    <!--TOPIC TABLE-->
                    <div class="row">
                        <div class="col-5" style="border: 1px solid black;">
                            <p style="padding-top: 8%;">ITEM</p>
                        </div>
                        <div class="col-2" style="border: 1px solid black;">
                            <p style="padding-top: 8%;">UNIT PRICE</p>
                        </div>
                        <div class="col-2" style="border: 1px solid black;">
                            <p style="padding-top: 20%;">QUANTITY</p>
                        </div>
                        <div class="col-3" style="border: 1px solid black;">
                            <p style="padding-top: 16%;">TOTAL</p>
                        </div>
                    </div>
                    <!--ORDER DETAIL-->
                    <div class="row">
                        <div class="col-5" style="border: 1px solid black;">
                            <div class="row">
                                <div class="col-5">
                                    Pic
                                </div>
                                <div class="col-7">
                                    <p>Product Name</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" style="border: 1px solid black;">
                            <p>$$$</p>
                        </div>
                        <div class="col-2" style="border: 1px solid black;">
                            <p>QUANTITY</p>
                        </div>
                        <div class="col-3" style="border: 1px solid black;">
                            <p>$$$</p>
                        </div>
                    </div>
                    <!--ORDER TOTAL-->
                    <div class="row" style="border: 1px solid black;">
                        <div class="col-12">
                            <p style="text-align: end; padding-top: 2%;">ORDER TOTAL : $$$</p>
                        </div>
                    </div>
                </div>

                <!--CUSTOMER PROFILE-->
                <div class="col-md-5 col-sm-12" style="text-align: start; margin-left: 4%;">
                    <!--PROFILE-->
                    <div class="row" style="border: 1px solid black; padding-top: 2%;">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <p>NAME :</p>
                                </div>
                                <div class="col-md-7 col-12">
                                    <p>LASTNAME :</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>TEL :</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--ADDRESS-->
                    <div class="row" style="border: 1px solid black; padding-top: 2%;">
                        <div class="col-12">
                            <p>ADDRESS :</p>
                            <textarea name="message" rows="3" cols="70"></textarea>
                            <p style="margin-top: 2%;">POSTCODE : <textarea name="message" rows="1" cols="15"></textarea></p>
                        </div>
                    </div>
                    <!--PAYMENT METHOD-->
                    <div class="row" style="border: 1px solid black; padding-top: 2%;">
                        <div class="col-3">
                            <p>PAYMENT :</p>
                        </div>
                        <div class="col-9">
                            <input type="radio" id="online" name="payment" value="online">
                            <label for="other">ONLINE PAYMENT</label><br>
                            <input type="radio" id="cash" name="payment" value="cash">
                            <label for="other">CASH ON DELIVERY</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-md-6 col-sm-12" style="text-align: end;">
                    <a href="/customer_snacks"><button type="button" class="btn btn-success">CHECK OUT</button></a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="/customer_orderHistory"><button type="button" class="btn btn-secondary">CONTINUE SHOPPING</button></a>
                </div>
            </div>
        </section>
    </div>
</article>

@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>