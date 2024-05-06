@php
   use App\Models\BotDashboard;
   use App\Models\ModuleAccueil;
   function fetchBotDashboardData() {
      $data = BotDashboard::all();
      $result = [];
      
      foreach ($data as $row) {
         $result[] = [
            'id' => $row->id,
            'created_at' => $row->created_at,
            'updated_at' => $row->updated_at,
            'tag' => $row->tag,
            'premium' => $row->premium,
            'title' => $row->title,
            'description' => $row->description,
            'afficher' => $row->afficher,
         ];
      }
      
      return $result;
   }
   $data = fetchBotDashboardData();


   $url = request()->url();
   $serverid = substr($url, strrpos($url, '/') + 1);

   function getToggleModuleAccueil($serverid) {
      $toggle = 0;
      $data = ModuleAccueil::all();

      
      foreach ($data as $row) {
         if ($row['id'] == $serverid) {
            $toggle = $row['toggle'];
            break;
         }
      }
      
      return $toggle;
   }


   

   

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
	  <link rel="stylesheet" href="/app.css">


    @vite('resources/css/app.css')
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
      <div class="">
         @include('dashboard/sidebar');
      </div>
      <div class="mt-16 xl:ml-[17rem]  md:xl:ml-[17rem] lg:ml-[17rem] sm:ml-[1rem] overflow-hidden max-w-screen max-w-full lg:max-w-[calc(100vw-300px)] flex flex-col grow relative">
      <div class="flex flex-1 overflow-y-auto px-6 -top-20 lg:px-10 py-0 lg:py-10 relative" id="dashboard__content">
      <div class="max-w-[1540px] min-h-full w-full">
         <div class="fixed lg:max-w-[calc(100%-200px)] w-full z-30 right-0 top-16 p-6 md:p-10 pointer-events-none">
            <div class="w-full pointer-events-auto flex flex-col gap-6"></div>
         </div>
         <div class="w-full min-h-full transition-all flex flex-col opacity-100">
            <div class="relative 1.5xl:h-[384px]">
               {{-- 
               <div class="mt-14 rounded-lg bg-center bg-cover justify-between bg-gradient-to-tr from-[#9243d1] to-[#f9aed2] min-h-64">
                  <div class="pt-2 sm:pt-7 pb-4 pl-10">
                     <div class="sm:text-[40px] text-2xl text-white font-bold sm:leading-[46px]">Delight Your</div>
                     <div class="sm:text-[40px] text-2xl text-white font-bold sm:leading-[46px]">Members with</div>
                     <div class="sm:mt-2">
                        <span class="relative text-[#ac64e6] font-bold text-2xl md:text-[40px] leading-[46px] bg-white px-1 rounded-md">
                           Beloved AI Characters
                           <div class="absolute top-1 sm:top-4 -left-6 w-4">
                              <svg viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect y="11.6295" width="6.92443" height="3.87649" rx="1.93824" fill="#F6F3FF"></rect>
                                 <rect width="7.35038" height="3.67519" rx="1.8376" transform="matrix(0.66613 -0.745836 0.66613 0.745836 8.6554 23.2589)" fill="#F6F3FF"></rect>
                                 <rect width="7.35038" height="3.67519" rx="1.8376" transform="matrix(0.66613 0.745836 -0.66613 0.745836 10.3867 6.10352e-05)" fill="#F6F3FF"></rect>
                              </svg>
                           </div>
                           <div class="absolute top-1 sm:top-4 -right-6 w-4">
                              <svg viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect x="15.9999" y="14.3705" width="6.92443" height="3.87649" rx="1.93824" transform="rotate(-180 15.9999 14.3705)" fill="#F6F3FF"></rect>
                                 <rect width="7.35038" height="3.67519" rx="1.8376" transform="matrix(-0.66613 0.745836 -0.66613 -0.745836 7.34448 2.74115)" fill="#F6F3FF"></rect>
                                 <rect width="7.35038" height="3.67519" rx="1.8376" transform="matrix(-0.66613 -0.745836 0.66613 -0.745836 5.61316 25.9999)" fill="#F6F3FF"></rect>
                              </svg>
                           </div>
                        </span>
                     </div>
                     <div class="mt-4"><button class="bg-dark-100 text-[#6e3e95] font-bold py-2 px-4 rounded-lg text-xl uppercase">Try it for free</button></div>
                  </div>
               </div>
               --}}
               <div class="mt-14 rounded-lg text-white bg-center bg-cover justify-between bg-gradient-to-tr  min-h-[34rem] h-[34rem]">
                  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-2 sm:pt-7 pb-4 pl-10 mb-20">

                     @foreach ($data as $row)
                     @if ($row['afficher'])
                        <div class="mr-4 bg-gray-800 hover:bg-gray-700 group cursor-pointer p-6 max-h-[32rem] overflow-hidden rounded-lg bg-dark-800 grid grid-cols-1 gap-2 transition-all duration-200 hover:shadow-lg">
                           <div class="flex items-center justify-between">
                              <img width="48" height="64" src="https://img.icons8.com/wired/64/CF823B/module.png" alt="module"/>
                              
                              @if ($row['premium'])
                              <div class="w-32 h-12 font-bold text-sm text-center justify-center rounded-full" style="color: rgba(255, 195, 79, 1) !important; background-color: rgba(255, 196, 79, 0.349) !important;">
                                 <span class="flex items-center justify-center h-full">
                                    <svg class="w-8 h-8 mr-1 ml-2" xmlns="http://www.w3.org/2000/svg" id="emoji" viewBox="0 0 72 72" version="1.1">
                                       <g id="color">
                                          <rect x="4" y="51.624" width="64" height="7.2668" fill="#FFFFFF"/>
                                          <circle cx="35.9962" cy="16.008" r="5" fill="#FFFFFF"/>
                                          <rect x="4" y="51.624" width="64" height="7.2668" fill="#F1B31C"/>
                                          <path fill="#FCEA2B" d="M7,11c2.7614,0,5,2.2386,5,5s-2.2386,5-5,5"/>
                                          <path fill="#FCEA2B" d="M65,21c-2.7614,0-5-2.2386-5-5s2.2386-5,5-5"/>
                                          <path fill="#FCEA2B" d="M64.9674,17.4945c0,9.0811-7.3617,16.4428-16.4428,16.4428H48.238c-9.0811,0-11.4428-7.3617-11.4428-16.4428h-2.0738c0,9.0811-2.3617,16.4428-11.4428,16.4428h0.1643c-5.3121,0-10.0359-2.519-13.0419-6.4277C8.2681,24.7363,7,21.2635,7,17.4945V11v40.624h58V11"/>
                                          <circle cx="35.9962" cy="16.008" r="5" fill="#FCEA2B"/>
                                       </g>
                                       <g id="hair"/>
                                       <g id="skin"/>
                                       <g id="skin-shadow"/>
                                       <g id="line">
                                          <rect x="4" y="51.624" width="64" height="7.2668" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                          <polyline fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" points="7,11 7,51.624 65,51.624 65,11"/>
                                          <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M7,11c2.7614,0,5,2.2386,5,5s-2.2386,5-5,5"/>
                                          <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M23.4428,33.9373c-5.3121,0-10.0359-2.519-13.0419-6.4277C8.2681,24.7363,7,21.2635,7,17.4945"/>
                                          <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M64.9674,17.4945c0,9.0811-7.3617,16.4428-16.4428,16.4428"/>
                                          <circle cx="35.9962" cy="16.008" r="5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                          <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M65,21c-2.7614,0-5-2.2386-5-5s2.2386-5,5-5"/>
                                          <rect x="4" y="51.624" width="64" height="7.2668" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                          <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M7,11c2.7614,0,5,2.2386,5,5s-2.2386,5-5,5"/>
                                          <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M65,21c-2.7614,0-5-2.2386-5-5s2.2386-5,5-5"/>
                                          <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M34.597,20.8744c-0.5876,7.4597-3.3959,13.0629-11.3184,13.0629h0.1643c-5.3121,0-10.0359-2.519-13.0419-6.4277C8.2681,24.7363,7,21.2635,7,17.4945V11v40.624h58V11"/>
                                          <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M64.9674,17.4945c0,9.0811-7.3617,16.4428-16.4428,16.4428H48.238c-7.9061,0-10.7191-5.5799-11.3147-13.0163"/>
                                          <circle cx="35.9962" cy="16.008" r="5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/>
                                       </g>
                                    </svg>
                                    <div class="flex grow justify-center max-w-full">
                                       <span class="transition-all duration-200 whitespace-nowrap text-ellipsis overflow-hidden block w-full shrink-0 text-center">Premium</span>
                                    </div>
                                 </span>
                                 
                              </div>
                              @endif
                           </div>
                           <div>
                              <p class="text-white font-semibold text-base">{{ $row['title'] }}</p>
                              <p class="text-sm text-dark-300 mt-2">{{ $row['description'] }}</p>
                           </div>
                           <div class="">
                                 <a href="/dashboard/{{ $serverid }}/{{ $row['title'] }}" class="bg-white z-10">
                                 <button style="background-color: rgba(255, 196, 79, 0.349); color: rgba(255, 195, 79, 1) !important;" class="text-lg text-bold relative flex overflow-hidden shrink-0 rounded-lg transition-all duration-200 items-center gap-1.5 bg-brand-default undefined px-4 py-2" ">
                                    <svg style="color: rgba(255, 195, 79, 1) !important;" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-eldPxv fxQLtU inline-block mr-1.5" main="#9B9D9F" secondary="rgba(154,161,181,0.16)">
                                       <path d="M3.353 8.95A7.511 7.511 0 018.95 3.353c2.006-.47 4.094-.47 6.1 0a7.511 7.511 0 015.597 5.597c.47 2.006.47 4.094 0 6.1a7.511 7.511 0 01-5.597 5.597c-2.006.47-4.094.47-6.1 0a7.511 7.511 0 01-5.597-5.597 13.354 13.354 0 010-6.1z" fill="rgba(154,161,181,0.16)" data-fill="secondary" stroke="rgba(255, 195, 79, 1)" data-stroke="main" stroke-width="1.5"></path>
                                       <path d="M9.25 11.75l2 2 3.5-3.75" stroke="rgba(255, 195, 79, 1)" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div class="flex grow justify-center max-w-full">
                                       @php 
                                       if ($row['title'] == "ACCUEIL") {
                                          if (getToggleModuleAccueil($serverid) == 1) {
                                             echo '<span class="transition-all duration-200 whitespace-nowrap text-ellipsis overflow-hidden block w-full shrink-0 text-center">Activer</span>';
                                          } else {
                                             echo '<span class="transition-all duration-200 whitespace-nowrap text-ellipsis overflow-hidden block w-full shrink-0 text-center">Désactiver</span>';
                                          }
                                       } else {
                                          echo '<span class="transition-all duration-200 whitespace-nowrap text-ellipsis overflow-hidden block w-full shrink-0 text-center">Erreur</span>';
                                       }
                                       @endphp
                                    </div>
                                 </button>

                              </a>

                              
                           </div>
                        </div>
                     @endif
                  @endforeach

             
                  
            </div>
         </div>
      </div>
      <footer class="bg-gray-900 py-4  px-6 text-white">
         <div class="container mx-auto flex justify-between">
            <div class="text-sm">
               &copy; {{ date('Y') }} Zpoq tout droits réservé
            </div>
            <div class="text-sm">
               Powered by <a href="https://github.com/zpoq" class="text-blue-500 hover:text-blue-700">Zpoq Industries</a>
            </div>
         </div>
      </footer>
   </body>