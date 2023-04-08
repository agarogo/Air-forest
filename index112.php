<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tribook</title>
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="util.css">
    <link rel="stylesheet" href="/fonts/stylesheet.css">
    
</head>
<style>
    html {
      scroll-behavior: smooth;
    }
</style>
<body class="text-white bgg">
    <!--наш прелоадер-->
    <div id="page-preloader" class="preloader">
        <div class="loader"></div>
    </div>

    <!--Шапочка-->

<div style="background-image: url(pole2.png); background-size: cover;" class="h-screen w-full">
    <div class="h-full w-3/4 mx-auto">
        <div class="h-24 flex w-full">
            <div class="flex mt-auto w-full mx-auto">
                <div class="flex mr-auto my-auto h-10">
                    <div class="h-10 w-12 mr-40 " onClick="window.location='#'" style="cursor:pointer; background-image: url(vec.png); background-size: cover;">
                    </div>
                </div>


                <div class="mt-3 flex">
                    <a href="#1" class="text-lg underline decoration-lime-500 decoration-2 underline-offset-8">О нас</a>
                    <a href="#3" class="text-lg ml-10">Мероприятия</a>
                    <a href="#2" class="text-lg ml-10">Контанты</a>
                </div>
                <a class="ml-auto text-gray-400 text-lg mt-3">Вход</a>

                <button class="pur2 rounded-3xl w-40 mt- h-12 flex my-auto ml-10 text-lg ">
                    <p class="mx-auto my-auto">Регистрация</p>
                </button>
            </div>
        </div>
        <!--О чем-->

        <div class="h-96 mt-96">
            <div class="flex mt-12">
                <p class="text-7xl mar ">Будущее Якутии</p>   
                <img class="h-16 ml-10" src="vec.png">
            </div>
            <p class="text-2xl mt-12">Создавай свои сообщества, находи единомышленников</p>
            <button class="rounded-3xl h-16 w-40 mt-12 pur3 text-2xl font-medium">Начать</button>
        </div>
    </div>
</div>
<!--Инфо-->
<div class="h-screen w-full">
    <div class="h-full w-3/4 mx-auto" id="1">
        <div class="h-2/6 flex">
            <div class="h-full w-4/12 mr-10 rounded-xl">
                <div class="h-1/6">
                    <div style="background-image: url(ic.png); background-size: cover;" class="h-12 w-12"></div>
                </div>
                <div class="h-5/6 text-lg">
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Integer ac efficitur felis, ac pellentesque turpis.
                         Phasellus finibus leo metus, 
                        dapibus elementum justo accumsan id. Nulla facilisi. Mauris arcu elit,
                         hendrerit id molestie nec, mattis accumsan leo. 
                        Fusce ac condimentum sapien. Nunc condimentum arcu a suscipit malesuada. </p>
                </div>
            </div>
            <div class="h-full w-4/12 rounded-xl">
                <div class="h-1/6">
                    <div style="background-image: url(ic.png); background-size: cover;" class="h-12 w-12"></div>
                </div>
                <div class="h-5/6 text-lg">
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Integer ac efficitur felis, ac pellentesque turpis.
                         Phasellus finibus leo metus, 
                        dapibus elementum justo accumsan id. Nulla facilisi. Mauris arcu elit,
                         hendrerit id molestie nec, mattis accumsan leo. 
                        Fusce ac condimentum sapien. Nunc condimentum arcu a suscipit malesuada. </p>
                </div>
            </div>
            <div class="h-full w-4/12 ml-10 rounded-xl">
                <div class="h-1/6">
                    <div style="background-image: url(ic.png); background-size: cover;" class="h-12 w-12"></div>
                </div>
                <div class="h-5/6 text-lg">
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Integer ac efficitur felis, ac pellentesque turpis.
                         Phasellus finibus leo metus, 
                        dapibus elementum justo accumsan id. Nulla facilisi. Mauris arcu elit,
                         hendrerit id molestie nec, mattis accumsan leo. 
                        Fusce ac condimentum sapien. Nunc condimentum arcu a suscipit malesuada. </p>
                </div>
            </div>
        </div>
        <div id="3" class="h-screen ">
            <div class="h-1/5" >
                <p class="text-center pt-20 text-3xl mar text-lime-500">Наши мероприятия</p>
            </div>
            <div class="h-4/5 flex">
                <div class="" style="background-image: url(nash1.png); background-size: cover; height: 74%; width: 35%;"></div>
                <div class="h-4/5 mt-20 ml-8" style="width: 63%;">
                    <div>
                        <p class="text-3xl text-lime-200">Хакатон «Будущее Якутии» </p>
                        <p class="text-2xl mt-10">Хакатон — это соревнование по разработке цифровых решений, проводимое среди молодежи из Якутии. 
                            К участию приглашаются дизайнеры, маркетологи, менеджеры и разработчики.
                            Задача — разработать новое решение для региона с применением креативных технологий.</p>
                        <p class="text-2xl mt-10">Начало: 17 марта 2023 г.</p>
                        <p class="text-2xl">Место: бизнес-инкубатор «Ингрия» технопарка «ЛЕНПОЛИГРАФМАШ»</p>
                    </div>
                    <div class="ml-auto w-48">
                        <button class="pur3 rounded-3xl w-48 h-12 text-lg mt-10">Подать заявку</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div></div>
<!--Контакты-->

<div class="h-96 w-3/4 mx-auto mt-96" id="2">
    <p class="text-white text-3xl mar pt-20 text-center">НАШИ КОНТАКТЫ</p>
    <div class="flex">
        <div class="flex">
            <div class="mt-20">
                <p class="text-xl text-gray-200">Служба поддержки</p>
                <span class="text-2xl">+7(984)116-16-02</span>
            </div>
            <div class="mt-20 ml-20">
                <p class="text-xl text-gray-200">Почта</p>
                <span class="text-2xl">rewerewu@gmail.com</span>
            </div>
        </div>
        <div class="flex ml-auto">
            <div class="mt-20 mt-auto">
                <p class="text-xl text-gray-200"></p>
                <span class="text-xl">Copyright © 2023 BuYKT. All rights reserved.</span>
            </div>
        </div>
    </div>
    
</div>
<div class="h-40">
    <div class="h-0.5 mx-auto rounded-full bg-white"></div>
</div>



<!--
<div class="opup-bg rounded-2xl">
    <div class="opup">
        <svg class="close-opup h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-2 h-2">
            <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>          
        <form action="config_db.php" method="post">
            <div class="mt-4 w-2/3 mx-auto ">
                <h1 class="text-center text-2xl">Вход</h1>
                

                
                <input class="h-10 mt-5 w-full border-2 text-center bg-inherit text-white rounded-2xl pur3" type="text" placeholder="Логин" name="login" required><br>


                <input class="mt-5 h-10 w-full border-2 text-center bg-inherit text-white rounded-2xl pur3" type="password" placeholder="Пароль" name="pass" required><br>
                

                <p class="mt-8"></p>
                <button type="submit" class="h-10 w-full registerbtn border-2 rounded-2xl pur3">Войти</button>
                </div>
                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="text-red-400"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
                <div class="text-center mt-10 font-semibold text-3xl">
                <div class="">
                <a href="#" class="pur text-xl font-light">Нет аккаунта?</a>
                </div>



            </div>
        </form>
    </div>
</div>-->


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


</body>
</html>