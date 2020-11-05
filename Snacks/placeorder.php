<?=template_header('Place Order')?>

<div class="placeorder content-wrapper">
    <style>
        .top{
        display: flex;
        flex-wrap: wrap;
        }
        .sec{
        flex: 50%;
        }
        .pri{
        flex: 50%;
        }
    </style>

    <h1>Please choose payment method</h1>
    <div class="top" style="padding: 30px" style="align-items: center;">

        <div class="pri">
        <style>
        .container {
        position: relative;
        width: 50%;
        }

        .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
        }

        .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
        }

        .container:hover .image {
        opacity: 0.3;
        }

        .container:hover .middle {
        opacity: 1;
        }

        .text {
        color: white;
        /*font-size: 16px;
        background-color: Black;
        padding: 16px 32px;*/
        }
        </style>
        </head>
        <body>

        <div class="container">
        <img src="imgs/visa.png" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><a href="../Payment/pay.php">Card</a></div>
        </div>
        </div>
        </body>
        </div>


        <div class="sec">
        <style>
        .container {
        position: relative;
        width: 50%;
        }

        .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
        }

        .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
        }

        .container:hover .image {
        opacity: 0.3;
        }

        .container:hover .middle {
        opacity: 1;
        }

        .text {
        color: white;
        /*font-size: 16px;
        background-color: Black;
        padding: 16px 32px;*/
        }
        #img {
        border-radius: 8px;
        }
        </style>
        </head>
        <body>

        <div class="container">
        <img src="imgs/mpesa.jpg" alt="Avatar" class="image" id="img" style="width:100%">
        <div class="middle">
            <div class="text"><a href="../Payment/mpesa.php" class="btn btn primary">Mpesa</a></div>
        </div>
        </div>
        </body>
        </div>

    </div>
    <h1>Other methods coming soon</h1>
</div>
<?=template_footer()?>
<!--// style="height: 438px width: 280px;"-->