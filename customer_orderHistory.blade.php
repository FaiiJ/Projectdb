@extends('Template.customer_navbar_master')
@section('title','Order History')

<!--CSS-->
<link href="{{asset('css/customer_orderHistory.css')}}" rel="stylesheet">

@section('content')

<article>
    <div class="container">
        <section>
            <div class="row">
                <div class="col-12">
                    <h2 style="text-align: center;">ORDER HISTORY</h2>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <!--BUTTON-->
                <div class="col-md-2 col-sm-12">
                    <div class="row">
                        <div class="col-12" style="text-align: center; margin-bottom: 10px;">
                            <a href="/customer_profile"><button type="button" class="btn btn-outline-info btn-lg">PROFILE</button></a>
                        </div>
                        <div class="col-12" style="text-align: center;">
                            <a href="/customer_orderHistory"><button type="button" class="btn btn-info">ORDER HISTORY</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-sm-12"></div>

                <!--ORDER HISTORY-->
                <div class="col-md-9 col-sm-12" style="text-align: center;">
                    <!--TOPIC TABLE-->
                    <div class="row">
                        <div class="col-2" style="border: 1px solid #494241; padding-top: 2%;">
                            <p>ORDER ID</p>
                        </div>
                        <div class="col-2" style="border: 1px solid #494241; padding-top: 2%;">
                            <p>ORDER DATE</p>
                        </div>
                        <div class="col-5" style="border: 1px solid #494241; padding-top: 2%;">
                            <p>ITEM</p>
                        </div>
                        <div class="col-3" style="border: 1px solid #494241; padding-top: 2%;">
                            <p>ORDER TOTAL</p>
                        </div>
                    </div>
                    <!--PRODUCT DETAIL-->
                    <div class="row">
                        <div class="col-2" style="border: 1px solid #494241; padding-top: 2%;">
                            <p>1234567890</p>
                        </div>
                        <div class="col-2" style="border: 1px solid #494241; padding-top: 2%;">
                            <p>23/08/2543</p>
                        </div>
                        <div class="col-5" style="border: 1px solid #494241; padding-top: 2%;">
                            <div class="row">
                                <div class="col-5">
                                    Pic
                                </div>
                                <div class="col-7">
                                    <p>Product Name</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" style="border: 1px solid #494241; padding-top: 2%;">
                            <p>$$$</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>

@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>