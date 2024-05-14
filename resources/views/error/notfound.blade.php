<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERREUR</title>
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
                <img src="{{ asset('img/logo_sans.png') }}" class="emoji-404" style="height: 249px;" alt="">
                <div class=" tracking-widest mt-6">
                <span class="text-orange-500 font-bold text-6xl block "><span>Pas encore disponnible</span></span>
                <span class="text-gray-500 text-xl">Désolé, nous n'avons pas pu trouver ce que vous recherchez !</span>
            
                </div>
                <div class="flex justify-center mt-10">
                        <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row"><a
                            class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-orange-600 to-orange-500 hover:bg-gradient-to-b  hover:-tranneutral-y-px "
                            href="/dashboard">Retour
                        </a>
                        <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all bg-gray-700  dark:text-gray-800 rounded-md shadow-xl sm:w-auto hover:bg-gray-400 hover:text-white   hover:-tranneutral-y-px"
                            href="https://discord.gg/v7tas59fJE">Suivre l'avancement
                        </a>
                    </div>                
                </div>
                    


        </section>
</body>
</html>