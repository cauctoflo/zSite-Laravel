<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
         rel='stylesheet'>
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
      @vite(['resources/css/app.css', 'resources/js/app.js']) 
      <style>
         .logo {
         filter: drop-shadow(0px 0 10px orange);
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




    <!--Nav-->

    
    <div class="">
        <!--Hero-->
            
 
      <section class="text-black mx-auto flex h-auto z-10 mt-12">
          <div class="hidden sm:flex md:flex justify-center items-center fixed  top-0 left-0 w-screen h-screen mt-12">
            <!-- Sidebar -->
            <aside class="w-64 h-128 mx-auto bg-gray-800 border ml-12 text-white border-slate-900 rounded-lg shadow-xl">
               <div class="px-3 py-4 overflow-y-auto">
                 <ul class="space-y-2">
                   <li>
                     <h2 class="text-xl">Categories</h2>
                     <a href="#" class="mt-4 active flex items-center p-2 text-base font-normal rounded-lg bg-gray-300 text-black hover:border-r-8 border-r-slate-900">
                        <div class="mr-3 font-bold">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>
                        </div>
                        <span>Tous</span>
                     </a>
                     <a href="#" class="mt-2 flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-300 hover:text-black hover:border-r-8 border-r-slate-900">
                        <div class="mr-3 font-bold">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                          </svg>
                        </div>
                        <span>Arrivé</span>
                     </a>
                     <a href="#" class="mt-2 flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-300 hover:text-black hover:border-r-8 border-r-slate-900">
                        <div class="mr-3 font-bold">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                          </svg>
                        </div>
                        <span>Aurevoir</span>
                     </a>
                     <a href="#" class="mt-2 flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-300 hover:text-black hover:border-r-8 border-r-slate-900">
                        <div class="mr-3 font-bold">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" />
                          </svg>
                        </div>
                        <span>Message Privé</span>
                     </a>
                     <a href="#" class="mt-2 flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-300 hover:text-black hover:border-r-8 border-r-slate-900">
                        <div class="mr-3 font-bold">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />6.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                          </svg>
                        </div>
                        <span>Statistique</span>
                     </a>
                   </li>
                 </ul>
               </div>
            </aside>
            <div class="w-6/6 h-auto mx-auto ml-6">
               <div
                   class="" >
                     <div class="w-full flex flex-col flex-shrink">

                        <div class="flex-1 w-12/12 bg-gray-800 rounded-2xl overflow-hidden shadow border-2 border-gray-300 hover:shadow-2xl transition duration-600">
                           <div class=" mx-auto mt-4 text-center w-[70vw] h-auto relative py-1 mb-12">
                              <h1 class="text-gray-400 font-bold text-2xl text-center ">Configuration de l'arrivée d'un membre</h1> 
                              <p class=" mt-2 text-gray-400 text-xs text-center ">Configurez l'envoi automatique de messages et l'attribution de rôles aux nouveaux membres, ainsi que l'envoi d'un message lorsqu'un membre quitte le serveur. Cela permettra aux nouveaux membres de se sentir les bienvenus et de comprendre les règles de votre communauté, et vous aidera à suivre les départs.</p>
                              <button>
                                 <button>
                                    <span class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-red text-green-700 shadow-sm align-middle hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm bg-green-900 hover:bg-green-800 border-green-700 ">
                                       <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <polyline points="3 6 5 6 21 6"></polyline>
                                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                          <line x1="10" y1="11" x2="10" y2="17"></line>
                                          <line x1="14" y1="11" x2="14" y2="17"></line>
                                       </svg>
                                       Activer
                                    </span>
                                 </button>
                                 </span>
                              </button>                           
                           </div>
                           
                            


                            <div class="grid grid-cols-3 gap-6 mr-10 mt-6 ml-10">
                              <div class="">
                                 <div class="mb-4 max-w-sm mx-auto  sm:mt-0 lg:mt-10">
                                    <label class="block text-gray-400 font-bold mb-2" for="number">
                                    Configuration du Channel
                                    </label>
                                    <p class="text-red-500 text-xs italic mt-2">Channel ID incorect</p>
                                    <input name="channelid" class="hover:outline-white hover:cursor-pointer shadow bg-slate-900 appearance-none border  w-full py-2 px-3 text-white leading-tight rounded-lg focus:outline-none focus:shadow-outline " id="channelid" type="text" placeholder="Id" >
                                    <p class="text-sm  text-gray-500">Rentrez l'id du channel où seront envoyés les messages</p>
                                 </div>
                              </div>                            
                              <div class="">
                                 <div class="mb-4 max-w-sm mx-auto  sm:mt-0 lg:mt-10">
                                    <label class="block text-gray-400 font-bold mb-2" for="number">
                                    Channel
                                    </label>
                                    <p class="text-red-500 text-xs italic mt-2">Channel ID incorect</p>
                                    <input name="channelid" class="hover:outline-white hover:cursor-pointer shadow bg-slate-900 appearance-none border  w-full py-2 px-3 text-white leading-tight rounded-lg focus:outline-none focus:shadow-outline " id="channelid" type="text" placeholder="Id" >
                                    <p class="text-sm  text-gray-500">Rentrez l'id du channel où seront envoyés les messages</p>
                                 </div>
                              </div>                            
                              <div class="">
                                 <div class="mb-4 max-w-sm mx-auto  sm:mt-0 lg:mt-10">
                                    <label class="block text-gray-400 font-bold mb-2" for="number">
                                    Channel
                                    </label>
                                    <p class="text-red-500 text-xs italic mt-2">Channel ID incorect</p>
                                    <input name="channelid" class="hover:outline-white hover:cursor-pointer shadow bg-slate-900 appearance-none border  w-full py-2 px-3 text-white leading-tight rounded-lg focus:outline-none focus:shadow-outline " id="channelid" type="text" placeholder="Id" >
                                    <p class="text-sm  text-gray-500">Rentrez l'id du channel où seront envoyés les messages</p>
                                 </div>
                              </div>

                           </div>
                              
                          </div>
                        </div>
                        
                     </div>
                   </div>
         </div>

          <!-- Modules -->
          
         </div>
      </section>
               
      <script>
      function handleToggle() {
         const toggle = document.getElementById('toggle');
         const isChecked = toggle.checked;

         if (isChecked) {
            console.log('Le bascule est activé');
            // Ajoutez votre code ici pour gérer l'état activé
         } else {
            console.log('Le bascule est désactivé');
            // Ajoutez votre code ici pour gérer l'état désactivé
         }
      }

      </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js">
    </script>
</body>