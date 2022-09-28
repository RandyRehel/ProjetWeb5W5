
@php
$imgPath = 'content/themes/theme2022/assets/img';
@endphp

<!DOCTYPE html>
<html class="no-js">
<head>
    
    <!-- Script pour inclure AlpineJS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body {
            height: 90vh;
        }

        #app{
            width: 100%;
            height: 100%;
            padding: 6em 0;
            overflow: hidden;
            display: flex;
        }

        .head{
            text-align: center;
            margin-bottom: 3em;
        }

        .content{
            width: 100%;
        }

       .logo{
        justify-content: center;
        width: 100%;
        display: flex;
       }
        
        
    </style>
    <?php wp_head(); ?>
</head>
<body>
@include('components.headerEnter')
<div id="app">
    <div class="content">
        <div class="head">
            <div class="logo">
                <img src="{{asset("$imgPath/Logo.png")}}" alt="LOGO DU TIM">
            </div>
        </div>
    </div>
</div>
 @include('components.footer')
</body>
</html>