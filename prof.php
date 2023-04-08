<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AVRORA</title>
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="util.css">
    <link rel="stylesheet" href="/fonts/stylesheet.css">
    
</head>
<style>
    html {
      scroll-behavior: smooth;
    }
</style>
<body class="bd500 text-white">


    <!--Шапочка-->
<div style="background-image: url(2211.png); background-size: cover;">
    <div class="w-3/4 h-max mx-auto">

        <div class="flex">
            <div class="flex mr-auto mt-10 w-1/3">
                <a href="#2" class="align-text-bottom text-center mr-16 text-xl">Контакты</a>
                <a href="magaz.php" class="align-text-bottom text-center mr-28 text-xl">Магазин</a>
            </div>
            <div class="flex mx-auto mt-6 w-1/3 ">
                <div class="mx-auto">
                    <a href="index.php" class="align-text-bottom text-4xl gert">АВРОРА</a>
                </div>
            </div>
            <div  class="flex ml-auto w-1/3">
                <button class="open-opup rounded-xl w-20 h-12 flex mt-6 ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="my-auto w-12 h-12">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0
                            10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                        
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22" stroke-width="1.5" stroke="currentColor" class="my-auto ml-auto mt-4 w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            
        </div>
        <div class="h-screen">
            <p class="text-7xl gert pur mt-32 font-semibold">Готовы купить продукцию</p>
            <p class="text-7xl gert pur mt-20 font-semibold">пользователей</p>
        </div>
    </div> 
    <!--О чем-->

    <!--Контакты-->

    <div  class="h-96 w-3/4 mx-auto" id="2">
        <p  data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="text-white text-3xl font-semibold pt-20">НАШИ КОНТАКТЫ</p>
        <div class="flex">
            <div class="flex">
                <div data-aos="fade-down-right" class="mt-20">
                    <p class="text-xl text-gray-200">Служба поддержки</p>
                    <span class="text-2xl">+7(984)116-16-02</span>
                </div>
                <div data-aos="fade-down-left" class="mt-20 ml-20">
                    <p class="text-xl text-gray-200">Почта</p>
                    <span class="text-2xl">rewerewu@gmail.com</span>
                </div>
            </div>
            <div class="flex ml-auto">
                <div data-aos="fade-down-left" class="mt-20 mt-auto">
                    <p class="text-xl text-gray-200"></p>
                    <span  class="text-xl">Copyright © 2023 AVRORA. All rights reserved.</span>
                </div>
            </div>
        </div>
        <div class="h-0.5 mx-auto rounded-full bg-white mt-16"></div>
    </div>
</div>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="jquery.min.js"></script>
<script src="main.js"></script>
<script src="preloader.js">
    document.body.onload = function() {
    setTimeout(function(){
        var preloader = document.getElementById('page-preloader');
        if( !preloader.classList.contains('done') )
        {
            preloader.classList.add('done');
        }
    }, 1000);
}
</script>
<script>
    AOS.init();
</script>

</body>
</html>