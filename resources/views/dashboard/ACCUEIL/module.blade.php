@php
   $url = request()->url();
   $serverid = explode('/', $url)[4];



   $module = new App\Models\ModuleAccueil();
   $botDashboard = $module->get();
   // var_dump($botDashboard);
   // foreach ($botDashboard as $discords) {
   //    if ($discords->id == $serverid) {
   //        if ($discords->module == 'Bvn') {
   //          echo '<br> Bvn';
   //          echo $discords->message;
   //          echo $discords->channel;
   //          echo $discords->type;
   //          echo $discords->toggle;
   //        } elseif ($discords->module == 'BMP') {
   //          echo '<br> BMP';
   //          echo $discords->message;
   //          echo $discords->channel;
   //          echo $discords->type;
   //          echo $discords->toggle;
            
   //        } elseif ($discords->module == 'Aur') {
   //          echo '<br> Aur';

   //          echo $discords->message;
   //          echo $discords->channel;
   //          echo $discords->type;
   //          echo $discords->toggle;

   //        }
   //    }
   // }
   $message ="";

@endphp
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
         rel='stylesheet'>
      <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
      @vite(['resources/css/app.css', 'resources/js/app.js']) 
      <style>
         .logo {
            filter: drop-shadow(0px 0 10px orange);
         }
         .bg-custom-color {
            background-color: #151d2b;
         }
         .dot {
            left: 1px;
            transition: transform 0.3s ease-in-out;
         }
         #toggle:checked ~ .dot {
            transform: translateX(100%);
         }
      </style>
   </head>
   <body class="bg-gray-900">
      @include('layout');
         @include('dashboard/sidebar', ['module' => 'accueil', 'serverid' => $serverid]);

      
      </div>
      </div>
      </div>

      <div class="xl:ml-[12rem] sm:ml-[1rem]  md:ml-[1rem] lg:ml-[1rem] ">

      <div id="container" class="bg-custom-color mt-32 p-4 mx-auto w-screen max-w-[74rem] overflow-hidden   rounded-lg">

         <form action="BVN/Save"  method="GET" enctype="multipart/form-data">
            <input name="bvn" class="hidden" id="module" type="text" placeholder="bvn" value="BVN">
      
            @csrf
            <div class="flex items-center justify-center">
               <h1 class="text-gray-400 font-bold text-2xl text-center mb-12">Configuration de l'arrivé d'un membre</h1>

            </div>
            <div class="flex items-center justify-center w-[45rem] text-center mx-auto">
               <p class="text-gray-400 mb-12">
                  Envoyez automatiquement des messages et attribuez des rôles à vos nouveaux membres, et envoyez un message lorsque qu'un membre quitte votre serveur.
               </p>
            </div>
      
      
              
      
            <div
               class="w-full pt-10 dark:bg-gray-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
               <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                  <div class="flex flex-col shadow-sm rounded-xl bg-slate-900 hover:bg-gray-600 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">
                     <div class="p-4 md:p-5 flex gap-x-4">
                        <div class="flex-shrink-0 flex justify-center items-center w-[48px] h-[48px] rounded-lg border-gray-800">
                           <h1><i class=' text-5xl text-amber-500 bx bx-line-chart'></i></h1>
                        </div>
                        <div class="grow">
                           <div class="flex items-center gap-x-2">
                              <p class="text-xs uppercase tracking-wide text-gray-500">Arrivés</p>
                           </div>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                           <h3 class="text-xl sm:text-2xl font-medium text-white">
                           <div class="flex justify-end mt-2">
                              12
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="flex flex-col shadow-sm rounded-xl bg-slate-900 hover:bg-gray-600 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">
                     <div class="p-4 md:p-5 flex gap-x-4">
                        <div class="flex-shrink-0 flex justify-center items-center w-[48px] h-[48px] rounded-lg border-gray-800">
                           <h1><i class=' text-5xl text-amber-500 bx bx-line-chart-down' ></i></h1>
                        </div>
                        <div class="grow">
                           <div class="flex items-center gap-x-2">
                              <p class="text-xs uppercase tracking-wide text-gray-500">Départs</p>
                           </div>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                           <h3 class="text-xl sm:text-2xl font-medium text-white">
                           <div class="flex justify-end mt-2">
                              8
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="flex flex-col shadow-sm rounded-xl bg-slate-900 hover:bg-gray-600 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">
                     <div class="p-4 md:p-5 flex gap-x-4">
                        <div class="flex-shrink-0 flex justify-center items-center w-[48px] h-[48px] rounded-lg border-gray-800">
                           <h1><i class=' text-5xl text-amber-500 bx bx-user' ></i></h1>
                        </div>
                        <div class="grow">
                           <div class="flex items-center gap-x-2">
                              <p class="text-xs uppercase tracking-wide text-gray-500">Membres total</p>
                           </div>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                           <h3 class="text-xl sm:text-2xl font-medium text-white">
                           <div class="flex justify-end mt-2">
                              364
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mt-8">
                  <div class="">
                     <div class="mb-4 max-w-sm mx-auto  sm:mt-0 lg:mt-10">
                        <label class="block text-gray-400 font-bold mb-2" for="number">
                        Channel
                        </label>
                        <p class="text-red-500 text-xs italic mt-2">Channel ID incorect</p>
                        <input name="channelid" class="hover:outline-white hover:cursor-pointer shadow bg-slate-900 appearance-none border  w-full py-2 px-3 text-white leading-tight rounded-lg focus:outline-none focus:shadow-outline " id="channelid" type="text" placeholder="Id" value="">
                        <p class="text-sm  text-gray-500">Rentrez l'id du channel où seront envoyés les messages</p>
                     </div>
                  </div>
                  <div class="">
                     <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                        <label class="block text-gray-400 font-bold mb-2" for="number">
                        Role
                        </label>
                        <p class="text-red-500 text-xs italic mt-2">Role ID incorect</p>
                        <input name="roleid" class="hover:outline-white hover:cursor-pointer shadow bg-slate-900 appearance-none border  w-full py-2 px-3 text-white leading-tight rounded-lg focus:outline-none focus:shadow-outline " id="roleid" type="text" placeholder="Id" value="">
                        <p class="text-sm  text-gray-500">Rentrez l'id du rôle qui sera donné à l'utilisateur</p>
                     </div>
                  </div>
      
                  <div class="">
                     <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-16">
                      <p class="opacity-0">test</p>
                      
                        <button data-ripple-light="true" data-popover-target="menu-1" data-popover-nested="true"
                           class="select-none rounded-lg h-10 w-96  bg-slate-900 border border-gray-600 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                           Sélectionné le type
                        </button>
                        <ul role="menu" data-popover="menu-1" data-popover-placement="bottom"
                           class="absolute z-10 w-96 min-w-[180px] overflow-auto rounded-md border border-blue-gray-50 bg-slate-900 p-3 font-sans text-sm font-normal text-blue-gray-500 shadow-lg shadow-blue-gray-500/10 focus:outline-none">
                           <li role="menuitem"
                              class=" text-white hover:bg-gray-300 hover:opacity-90 duration-300 ease-in-out  block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                              Texte
                           </li>
                           <li role="menuitem"
                              class="text-white hover:bg-gray-300 hover:opacity-90 duration-300 ease-in-out  block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                              Embed
                           </li>
                           <li role="menuitem"
                              class="text-white hover:bg-gray-300 hover:opacity-90 duration-300 ease-in-out block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                              Image
                           </li>
      
                        </ul>
                        
                     </div>
                  </div>
               </div>
      
      
      
         <div class="grid grid-cols-2 gap-4 w-full">
            <div class="col-span-2 sm:col-span-1 mb-4 sm:mt-0 lg:mt-16">
               <div class="ml-4">
                  <label class="block text-gray-400 font-bold mb-2" for="number">
                     Message
                  </label>
                  <textarea name="message" class="hover:outline-white hover:cursor-pointer h-32 w-full bg-slate-900 text-white outline-none bg-grey-700 rounded-lg pl-4 pr-6 lg:pr-10 leading-relaxed border border-solid transition duration-200 border-grey-700 focus:ring-opacity-30 focus:border-blue-default focus:ring-[4px] focus:ring-blue-default text-grey-500 text-sm py-4"
                     id="role" placeholder="" value="" rows="1">{{ $message }}</textarea>
                  <p class="text-sm text-gray-500 max-w-96">Rentrez un message qui sera envoyé lors de l'arrivée d'un utilisateur sur votre serveur discord</p>
                 
               </div>
      
            </div>
            <div class="col-span-2 sm:col-span-1 mb-4 sm:mt-0 lg:mt-16">
      
            <div id="img" class="hidden">
               <label class="block text-gray-400 font-bold ml-6 mb-2" for="number">
                  Image
               </label>
               <div class="flex-1 items-center max-w-screen-sm mx-auto mb-3 space-y-4 sm:flex sm:space-y-0">
                  <div class="relative w-full">
                    <div class="items-center justify-center max-w-xl mx-auto">
                      <label class="flex justify-center w-full h-32 px-4 transition bg-slate-900 border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none" id="drop">
                        <span class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                           <span class="font-medium text-gray-600">Déposer des fichiers à joindre, ou<span class="text-blue-600 underline ml-[4px]">Importer</span></span></span><input type="file" name="file_upload" class="hidden" accept="image/png,image/jpeg" id="input"></label>
                    </div>
                  </div>
                </div>
            </div>
      
            </div>
         </div>
      
      
      
            <div class="flex items-center justify-center mx-auto">
               <div class="mb-4 max-w-sm  mt-20 sm:mt-0 flex items-center justify-center">
                  <button class="bg-green-800 hover:bg-green-700 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out rounded-full w-48 h-8 text-white font-semibold">
                     <div class="flex gap-2 justify-center items-center">
                        <span>
                        <i class=' text-xl bx bx-cog'></i>
                        </span>
                        <span class="text-sm">Sauvegarder</span>
                     </div>
                  </button>
               </form>
               </div>
            </div>
            </div>
         </div>
      </div>
      
      
      
      
            
     
</html>