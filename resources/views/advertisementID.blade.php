<!DOCTYPE html>
<html lang="es">
    <head>
        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet"
            id="bootstrap-css"
        />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
            integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
            crossorigin="anonymous"
        />

        <link
            href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
            rel="stylesheet"
            id="bootstrap-css"
        />
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

           <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vistaone.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="https://i.ibb.co/W3kkGF3/P-1.png">
    <title>YoPresto | Anuncios</title>

    </head>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Pacifico&display=swap');
        .parent {
            display: grid;
            grid-template-columns: 0.2fr repeat(2, 0.6fr) 1fr 0.2fr;
            grid-template-rows: 1.2fr repeat(8, 1fr);
            grid-column-gap: 5px;
            grid-row-gap: 10px;
        }

        .div1 {
            grid-area: 1 / 1 / 2 / 6;
        }

        .div2 {
            grid-area: 2 / 4 / 3 / 5;
        }

        .div3 {
            grid-area: 3 / 4 / 4 / 5;
        }

        .div4 {
            grid-area: 4 / 4 / 5 / 5;
        }

        .div5 {
            grid-area: 5 / 4 / 6 / 5;
        }

        .div6 {
            grid-area: 6 / 4 / 7 / 5;
        }

        .div7 {
            grid-area: 2 / 2 / 7 / 4;
        }

        .div8 {
            grid-area: 7 / 4 / 10 / 5;
        }

        .div9 {
            grid-area: 7 / 2 / 10 / 4;
        }

        .div10 {
            grid-area: 2 / 1 / 10 / 2;
        }

        .div11 {
            grid-area: 2 / 5 / 10 / 6;
        }

        body {
            background-color: #f5f5f5;
            padding-top: 25px;
            font-family: "Open sans", Arial, sans-serif;
        }

        .store-body {
            display: flex;
            flex-direction: row;
            padding: 0;
        }

        .store-body .product-info {
            width: 60%;
            border-right: 1px solid rgba(0, 0, 0, 0.125);
        }

        .store-body .product-payment-details {
            width: 40%;
            padding: 15px 15px 0 15px;
        }

        .product-info .product-gallery {
            display: flex;
            flex-direction: row;
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }

        .product-gallery-featured {
            display: flex;
            width: 100%;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            padding: 15px 0;
            cursor: zoom-in;
        }

        .product-gallery-thumbnails .thumbnails-list li {
            margin-bottom: 5px;
            cursor: pointer;
            position: relative;
            width: 70px;
            height: 70px;
        }

        .thumbnails-list li img {
            display: block;
            width: 100%;
        }

        .product-gallery-thumbnails .thumbnails-list li:hover::before {
            content: "";
            width: 3px;
            height: 100%;
            background: #007bff;
            position: absolute;
            top: 0;
            left: 0;
        }

        .product-info .product-seller-recommended {
            padding: 20px 20px 0 20px;
        }

        .sidebar {
            background-color: #cbf3f0;
        }
        .d1 {
            font-family: "Pacifico", cursive;
            color: #fe5d26;
        }
        .d2 {
            font-family: "Nunito", sans-serif;
            text-align: left;
            color: #288f87;
        }
        .product-stock {
            color: #74df00;
            font-size: 20px;
            margin-top: 10px;
        }
        body {
            padding-top: 30px;
            background-color: white;
        }

        .glyphicon {
            margin-bottom: 10px;
            margin-right: 10px;
        }

        small {
            display: block;
            line-height: 1.428571429;
            color: #999;
        }
    </style>

    <body>

        @if($user ?? '')
        <div class="parent container-fluid">
            
            <div class="div1">
                @include('includes.navbar')
            </div>

            <div class="div2">
                <h4 class="product-title mb-2">
                    {{$ad->descName}}
                </h4>
            </div>

            <div class="div3">
                <h2 class="product-price display-4">$ {{$ad->price}} clp</h2>
            </div>

            <div class="div4">
                <div class="product-stock">
                    Disponible {{$ad->stock}} artículos
                </div>
            </div>

            <div class="div5">
                <label for="quant">Cantidad</label>
                <input
                    type="number"
                    name="quantity"
                    min="1"
                    id="quant"
                    class="form-control mb-5 input-lg"
                    placeholder="Elige la cantidad"
                />
            </div>

            <div class="div6">
                <button class="btn btn-primary btn-lg btn-block">
                    Arrienda
                </button>
            </div>

            <div class="div7">
                <img
                    style="max-width: 100%"
                    src="https://ak1.ostkcdn.com/images/products/8818677/Samsung-Galaxy-S4-I337-16GB-AT-T-Unlocked-GSM-Android-Cell-Phone-85e3430e-6981-4252-a984-245862302c78_600.jpg"
                />
            </div>

            <div class="div8">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img
                                src="http://placehold.it/380x500"
                                alt=""
                                class="img-rounded img-responsive"
                            />
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <h4>
                                {{$userOwner->realName}}
                            </h4>
                            <p class="text">info : {{$ad->arrInfo}}</p>
                            <p class="text">correo : {{$userOwner->email}}</p>
                            <p class="text">ubicación : {{$ad->location}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="div9">
                <div class="container">
                    <h4 class="product-title mb-2">
                        {{$ad->description}}
                    </h4>
                </div>
            </div>

            <div class="div10"></div>
            <div class="div11"></div>
        </div>
        @else
        @endif
    </body>
</html>
