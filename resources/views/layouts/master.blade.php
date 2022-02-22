<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  FOOD </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- ?Fontawesome  -->
    <link rel="stylesheet" href="{{URL::asset('font/font-awesome.min.css')}}" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

</head>

<body>

    <!-- header section starts  -->

@include('includes.header');
    <!-- header section ends -->


@yield('content')


    <!-- footer section  -->
@include('includes.footer');

    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>

    <!-- custom js file link  -->
    <script src="{{URL::asset('js/script.js')}}"></script>


</body>

</html>