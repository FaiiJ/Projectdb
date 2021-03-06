@extends('Template.admin_navbar_master')
@section('title','Edit')

<!--CSS-->
<link href="{{asset('css/admin_insertandedit.css')}}" rel="stylesheet">

@section('content')

<!--Sign in-->
<article>
    <section>
        <div class="container">
            <h2>EDIT</h2>
        </div>
    </section>

    <section>
        <div class="cotainer">
            <div class="row">
                <div class="col-md-3 col-sm-12"></div>

                <!--PICTURE-->
                <div class="col-md-3 col-sm-12" style="border: 1px solid black;">
                    Pic
                </div>

                <!--DETAIL-->
                <div class="col-md-3 col-sm-12" style="margin-top: 1%;">
                    <div class="row justify-content-center">
                        <!--NAME-->
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="productName" placeholder="Product Name" required>
                            </div>
                        </div>
                        <!--PRICE-->
                        <div class="col-12">
                            <div class="form-group">
                                <input type="number" class="form-control" id="productPrice" placeholder="Price" required>
                            </div>
                        </div>
                        <!--SIZE-->
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="productSize" placeholder="Product Size" required>
                            </div>
                        </div>
                        <!--CHOOSE FILE-->
                        <div class="col-12">
                            <form action="/action_page.php">
                                <label for="img">Select image:</label>
                                <input type="file" id="img" name="img" accept="image/*">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12"></div>
            </div>
        </div>
    </section>

    <section>
        <!--BUTTON-->
        <div class="row">
            <div class="col-md-6 col-sm-12" style="text-align: end;">
                <a href="/admin_console"><button type="button" class="btn btn-success">SAVE</button></a>
            </div>
            <div class="col-md-6 col-sm-12">
                <a href="/admin_console"><button type="button" class="btn btn-danger">BACK</button></a>
            </div>
        </div>
    </section>
</article>

@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>