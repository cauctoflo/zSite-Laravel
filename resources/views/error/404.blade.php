<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <style> 
        .emoji-404{

        position: relative;
        animation: mymove 2.5s infinite;
        }

        @keyframes mymove {
        33%   {top: 0px;}
        66%  {top: 20px;}
        100%  {top: 0px}



        }
    </style>
    <style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
    <body class="bg-gray-900 h-screen">
        <section class=" bg-gray-900 p-16  text-white overflow-hidden" >
            <div class="  justify-center">
                <center class=" m-auto">
                <img src="img/logo_sans.png" class="emoji-404" style="height: 249px;" alt="">
                <div class=" tracking-widest mt-6">
                <span class="text-orange-500 font-bold text-6xl block "><span>4  0  4</span></span>
                <span class="text-gray-500 text-xl">Désolé, nous n'avons pas pu trouver ce que vous recherchez !</span>
            
                </div>
                </center>
                <center class="mt-6">
                <a href="#" class="text-gray-500 font-mono text-xl bg-gray-200 p-3 rounded-md hover:shadow-md">Retours </a>
                </center>
                </div>

        </section>
</body>
</html>