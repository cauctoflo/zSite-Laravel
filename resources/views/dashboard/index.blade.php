<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
        rel='stylesheet'>
    <link rel="stylesheet" href="resources/css/app.css">
    @vite(['resources/css/app.css', 'resources/js/app.js']) <style>
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
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

                <?php 
                    
                $module = new \App\Models\BotDashboard();
                $botDashboard = $module->get();
                foreach ($botDashboard as $dashboard) {
                    $tableName = 'module_' . $dashboard->name;
                    if (Schema::hasTable($tableName)) {
                        echo '<div class="flex flex-col shadow-sm rounded-xl bg-gray-800 hover:bg-gray-700 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">';
                        echo '<div class="p-4 md:p-5 flex gap-x-4">';
                        echo '<div class="flex-shrink-0 flex justify-center items-center w-[46px] h-[46px] rounded-lg  border-gray-800">';
                        echo '<img width="64" class="text-white" height="64" src="https://img.icons8.com/wired/64/CF823B/module.png" alt="module"/>';
                        echo '</div>';
                        echo '<div class="grow">';
                        echo '<div class="flex items-center gap-x-2">';
                        echo '<p class="text-xs uppercase tracking-wide text-gray-500">' . $dashboard->name . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="mt-1 flex items-center gap-x-2">';
                        echo '<h3 class="text-xl sm:text-2xl font-medium text-red-500">';
                        echo '<div class="flex justify-end mt-2">';
                        echo '<button class="px-4 py-2 text-sm font-medium text-white bg-amber-600 rounded hover:bg-amber-700 focus:outline-none focus:bg-red-600">Configurer</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
               
                        
                
                    
                ?>



            </div>

                 


        </div>
    </div>
</body>

</html>