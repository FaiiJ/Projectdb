@extends('Template.customer_navbar_master')
@section('title','Profile')

<!--CSS-->
<link href="{{asset('css/customer_profile.css')}}" rel="stylesheet">

@section('content')

<article>
    <div class="container">
        <section>
            <div class="row">
                <div class="col-12">
                    <h2 style="text-align: center;">MY PROFILE</h2>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <!--BUTTON-->
                <div class="col-md-2 col-sm-12">
                    <div class="row">
                        <div class="col-12" style="text-align: center; margin-bottom: 10px;">
                            <a href="/customer_profile"><button type="button" class="btn btn-info btn-lg">PROFILE</button></a>
                        </div>
                        <div class="col-12" style="text-align: center;">
                            <a href="/customer_orderHistory"><button type="button" class="btn btn-outline-info">ORDER HISTORY</button></a>
                        </div>
                    </div>
                </div>
                <!--PROFILE-->
                <div class="col-md-8 col-sm-12">
                    <form action="/action_page.php">
                        <div class="row justify-content-center">
                            <div class="col-5 ">
                                <!--FIRSTNAME-->
                                <div class="form-group">
                                    <p>NAME</p><input type="text" class="form-control" id="firstName" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-5 ">
                                <!--LASTNAME-->
                                <div class="form-group">
                                    <p>LASTNAME</p><input type="text" class="form-control" id="lastName" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-5 ">
                                <!--TELEPHONE-->
                                <div class="form-group">
                                    <p>TELEPHONE</p><input type="text" class="form-control" id="tel" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="/customer_profile"><button type="button" class="btn btn-success">SAVE</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</article>

@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>