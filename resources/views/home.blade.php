<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    
    <title>{{ $title ?? 'zPoq | Dashboard' }}</title>
    <link rel="icon" href="{{ asset('img/logo_sans.png') }}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
        rel='stylesheet'>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .logo {
              filter: drop-shadow(0px 0 10px orange);
            }
    </style>
</head>

<body class="bg-gray-900">
    @include('layout')
    
    <div
        class="w-full pt-10 dark:bg-gray-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid mt-32 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6"> 
                <?php
                $userGuilds = json_decode(session('userGuilds'), true);
                $userUncomondGuilds = session('userUncomondGuilds');
                

                foreach($userGuilds as $guild) {
                    $serverid = $guild['id'];
                    if (is_array($guild) && array_key_exists('name', $guild)) {
                        echo '<div class="flex  flex-col shadow-sm rounded-xl bg-gray-800 hover:bg-gray-700 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">';
                        echo '<div class="p-4 md:p-5 flex gap-x-4">';
                        echo '<div class="flex-shrink-0 flex justify-center items-center w-[46px] h-[46px] rounded-lg  border-gray-800">';
                        echo '<img class="rounded-full w-46 h-46" src="https://cdn.discordapp.com/icons/' . $guild['id'] . '/' . $guild['icon'] . '.png" alt="' . $guild['name'] . '">';
                        echo '</div>';
                        echo '<div class="grow">';
                        echo '<div class="flex items-center gap-x-2">';
                        echo '<p class="text-xs uppercase tracking-wide text-gray-500">' . $guild['name'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="mt-1 flex items-center gap-x-2">';
                        echo '<h3 class="text-xl sm:text-2xl font-medium text-green-500">';
                        echo '<a href="/dashboard/'. $serverid .'"><i class=\'bx bx-right-top-arrow-circle\'></i> </a></h3>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                // @if(is_array($userUncomondGuilds) || is_object($userUncomondGuilds))
                //     @foreach($userUncomondGuilds as $guild)
                //         @if(is_array($guild) && array_key_exists('name', $guild))
                //             <div class="flex flex-col shadow-sm rounded-xl bg-gray-800 hover:bg-gray-700 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">
                //                 <div class="p-4 md:p-5 flex gap-x-4">
                //                     <div class="flex-shrink-0 flex justify-center items-center w-[46px] h-[46px] rounded-lg  border-gray-800">
                //                         <img class="rounded-full w-46 h-46" src="https://cdn.discordapp.com/icons/{{ $guild['id'] }}/{{ $guild['icon'] }}.png" alt="{{ $guild['name'] }}">
                //                     </div>
                //                     <div class="grow">
                //                         <div class="flex items-center gap-x-2">
                //                             <p class="text-xs uppercase tracking-wide text-gray-500">{{ $guild['name'] }}</p>
                //                         </div>
                //                     </div>
                //                     <div class="mt-1 flex items-center gap-x-2">
                //                         <h3 class="text-xl sm:text-2xl font-medium text-red-500">
                //                             <i class='bx bx-right-top-arrow-circle'></i>
                //                         </h3>
                //                     </div>
                //                 </div>
                //             </div>
                //         @endif
                //     @endforeach
                // @endif
                ?>
                

                 </div>

                

        </div>
    </div>
</body>

</html>