
<?php 

$userGuilds = json_decode(session('userGuilds'), true);
$userUncomondGuilds = session('userUncomondGuilds');
                
$url = request()->url();
$dashboardSlug = substr($url, strpos($url, 'dashboard/') + 10);
$dashboardSlug = substr($dashboardSlug, 0, strpos($dashboardSlug, '/'));
foreach($userGuilds as $guild) {

   if ($guild['id'] == $serverid) {
      $sername = $guild['name'];
      $serid = $guild['id'];
      $sericon = $guild['icon'];
   }
   
}

?>



    <!--Nav-->

    
    <div class="bg-white">
        <!--Hero-->
            
      <div class="mt-10 flex grow h-screen w-auto bg-dark-700 fixed  z-1 transition-all">
        <div class="min-w-[300px] scroll-m-1 bg-gray-900 text-white transform  absolute lg:!translate-x-0 left-0 top-0 lg:relative transition-all duration-200 z-[50] h-screen -translate-x-full md:-translate-x-[full]" style="padding-left: 10.5px; width: 300.5px;">
         <div class="w-full flex-1 overflow-y-auto no-scrollbar h-full">
            <div class="p-5 ">
               <header class=" fixed pt-4 bg-gray-900 w-11/12 mt-12 pb-4  z-10 flex items-center justify-center gap-5 p-1">
                  <a href="zpoq.fr">
                     <div class="_logo_hnnn1_1 _classic_hnnn1_18">
                        <img src="{{ asset('img/logo_sans.png') }}" class="h-20 logo mr-2" alt="Logo">
                        
                     </div>
                  </a>
               </header>
            <div class="mt-[10rem]">
               <a href="/dashboard/">
                  <div class="mt-5">
                     <div class="relative ">
                        <div class="overflow-hidden flex items-center justify-start group bg-gray-700 rounded-lg border border-solid transition-all duration-200 active:ring-opacity-30 active:ring-[4px] hover:border-blue-default border-gray-900 active:border-blue-default ring-blue-default">
                           <div class="bg-transparent outline-none border-none py-3 w-full px-4 cursor-pointer flex justify-between items-center text-body text-gray-100">
                              <div class="flex justify-start items-center gap-3">
                                 <img src="{{ 'https://cdn.discordapp.com/icons/' . $serid . '/' . $sericon . '.png' }}" alt="{{ $sername }}" class="w-6 h-6 rounded-full">
                                 <p class="text-gray-100 text-ellipsis overflow-hidden font-bold text-base">{{ $sername }}</p>
                              </div>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-all ml-auto rotate-180">
                                 <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </div>
                        </div>

                        
                     </div>
                  </div>
               </a>  
               <div class="grid grid-cols-1 gap-3 mt-6 ">
                  <ul>
                     <div></div>
                     <a href="/dashboard/{{$serverid}}">
                        <div>
                           <div>
                              
                                 <div id="dashboard" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                    <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                       <i class='text-2xl bx bxs-dashboard'></i>

                                       <div>
                                          <p class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100  ">Dashboard</p>
                                       </div>
                                    </div>
                                 </div>
                              
                           </div>
                        </div>
                     </a>
                     <div>
                        <div>
                           <div id="bump" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                              <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                 <i class='text-2xl bx bx-group'></i>
                                 <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Bump</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div>
                        <div>
                           <div id="settings" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                              <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                    <path d="M13.752 4.693c0-.835-.61-1.544-1.436-1.67a2.111 2.111 0 00-.632 0 1.689 1.689 0 00-1.436 1.67v1.181c-.471.135-.92.322-1.34.556l-.836-.835a1.689 1.689 0 00-2.196-.166c-.17.126-.32.277-.447.447a1.689 1.689 0 00.166 2.196l.835.835a6.33 6.33 0 00-.556 1.341h-1.18c-.836 0-1.545.61-1.67 1.436-.032.21-.032.423 0 .632a1.689 1.689 0 001.67 1.436h1.18c.135.471.322.92.556 1.34l-.835.836c-.59.59-.66 1.523-.166 2.196.126.17.277.32.447.447a1.688 1.688 0 002.196-.166l.835-.835c.42.234.87.421 1.341.556v1.18c0 .836.61 1.545 1.436 1.67.21.032.423.032.632 0a1.688 1.688 0 001.436-1.67v-1.18a6.335 6.335 0 001.34-.556l.836.835c.59.59 1.523.66 2.196.166a2.11 2.11 0 00.447-.447 1.688 1.688 0 00-.166-2.196l-.835-.835c.234-.42.421-.87.556-1.341h1.18c.836 0 1.545-.61 1.67-1.436.032-.21.032-.423 0-.632a1.688 1.688 0 00-1.67-1.436h-1.18a6.332 6.332 0 00-.556-1.34l.835-.836c.59-.59.66-1.524.166-2.196a2.11 2.11 0 00-.447-.447 1.689 1.689 0 00-2.196.166l-.835.835a6.328 6.328 0 00-1.341-.556v-1.18z" fill="transparent" data-fill="secondary" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.5 12a2.5 2.5 0 115 0 2.5 2.5 0 01-5 0z" stroke="currentColor" data-stroke="main" stroke-width="1.5"></path>
                                 </svg>
                                 <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Settings</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div>
                           <div id="premium" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                              <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.44 13.994c-2.661 0-2.661-4.114 0-4.114 0-4.768 0-6.47-9.395-6.47S2.65 5.113 2.65 9.88c2.66 0 2.66 4.114 0 4.114 0 4.768 0 6.47 9.395 6.47s9.395-1.702 9.395-6.47z" fill="transparent" data-fill="secondary" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path clip-rule="evenodd" d="M12.045 9.171c-.683 0-.748 1.09-1.154 1.475-.407.385-1.67-.055-1.846.628-.175.684.962.916 1.103 1.503.14.586-.554 1.41.04 1.822.593.409 1.232-.519 1.857-.519s1.264.928 1.858.519c.594-.412-.1-1.236.04-1.822.14-.587 1.277-.819 1.102-1.503-.176-.683-1.439-.243-1.846-.628-.406-.385-.47-1.475-1.154-1.475z" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                                 <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Premium</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </ul>
                  <div>
                     <div class="flex items-center justify-between uppercase text-[12px] text-gray-100 whitespace-nowrap text-ellipsis font-extrabold tracking-widest group cursor-pointer px-3">
                        Fondamentaux
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-300 group-hover:text-gray-100 transition-all duration-200">
                           <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </div>
                     <ul class="grid grid-cols-1 mt-1">
                        <div>
                           <div>
                              <div id="welcome" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer bg-gray-700">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-brand-default"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M20.45 9.85a1.14 1.14 0 00-1.73.13L16 13.4l-.12-.27 2.54-5.9a1.64 1.64 0 00-.65-2.09 1.34 1.34 0 00-1.87.73l-2.15 5-.4-.2L15 4.17a1.62 1.62 0 00-1-1.95 1.41 1.41 0 00-1.74 1.1l-1.77 7.09-.37.11.59-6.08a1.43 1.43 0 00-1.15-1.61 1.35 1.35 0 00-1.45 1.29l-.85 8.76h-.15l-.26.1-1-3.23a1.32 1.32 0 00-1.64-1l-.17.06a1.56 1.56 0 00-.75 1.93l1.74 5.74a4 4 0 00.13.74 3.38 3.38 0 003 2.67 4.9 4.9 0 002 1.27c2.64.82 5.37-.9 6.11-3.85a.43.43 0 000-.11l4.23-5.42a1.5 1.5 0 00-.05-1.93z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M19.28 3a3.58 3.58 0 012.31 2.11M20.28 2a2.37 2.37 0 011.6 1.47M4.67 21.07a3.56 3.56 0 01-2.1-2.32M3.57 22a2.39 2.39 0 01-1.45-1.62" stroke="currentColor" data-stroke="main" stroke-miterlimit="10" stroke-linecap="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Arrivées &amp; Aurevoir</a></div>
                                 </div>
                                 <div class=" relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="welcome_channel" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <rect x="1" y="2.50001" width="1.14286" height="8" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></rect>
                                       <rect x="15.8569" y="2.50001" width="1.14286" height="8" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></rect>
                                       <path d="M2.14307 2.93956L6.9202 1.46968C7.15569 1.39722 7.40964 1.41425 7.63335 1.5175L9.00021 2.14836M2.14307 9.26924L7.12469 11.5918C7.6778 11.8497 8.31839 11.8409 8.86423 11.568L12.0002 10" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                                       <path d="M15.8571 3.07143L10.9274 1.46928C10.7045 1.39683 10.4633 1.40499 10.2458 1.49232L5.83167 3.26459C5.07148 3.5698 4.98065 4.60949 5.67639 5.04191L6.36638 5.47074C6.61503 5.62528 6.9189 5.6631 7.19784 5.57422L8.26622 5.23381C8.69871 5.096 9.16977 5.26678 9.41347 5.64974L12.1434 9.9396C12.3595 10.2792 12.7581 10.4561 13.1548 10.3885L15.8571 9.92858" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Welcome Log</a></div>
                                 </div>
                                 <div class=" relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="reaction_roles" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M21.65 11.46v-.74a7.46 7.46 0 00-7.46-7.46H9.81a7.46 7.46 0 00-7.46 7.46v.74a7.46 7.46 0 007.46 7.45h4.55l6 1.83-1.49-3.5a7.45 7.45 0 002.78-5.78z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M14.54 7.35a2.22 2.22 0 00-2.66.73 2.21 2.21 0 00-2.65-.73 2 2 0 00-1.11 1.09 2.19 2.19 0 002 3.1 2.17 2.17 0 001.77-.91 2.19 2.19 0 003.77-2.19 2 2 0 00-1.12-1.09z" fill="currentColor" data-fill="main"></path>
                                       <path d="M8.32 10.6h7.13l-3.37 4.31a.278.278 0 01-.35.083.28.28 0 01-.1-.083L8.32 10.6z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Bump</a></div>
                                 </div>
                                 <div class=" relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="moderator" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M20 4.512v6.445c0 .401-.148.786-.41 1.07-.264.283-.62.442-.993.442H5.403c-.372 0-.73-.16-.992-.443A1.574 1.574 0 014 10.957V4.512c0-.4.148-.786.41-1.07.264-.283.62-.442.993-.442h13.281c.357.024.692.194.936.475.245.28.38.652.38 1.037z" fill="#A6AAAD" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M10.897 12.47h2.235v7.3c.004.161-.023.322-.078.473a1.21 1.21 0 01-.244.402 1.11 1.11 0 01-.371.267 1.073 1.073 0 01-1.225-.263 1.249 1.249 0 01-.326-.848v-7.3l.01-.032z" fill="#A6AAAD" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Modération</a></div>
                                 </div>
                                 <div class=" relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="levels" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M7.225 11.076a3.388 3.388 0 01-2.161-.848 3.01 3.01 0 01-1.008-1.987c-.372-3.08 1.158-3.194 3.016-2.054M18.775 11.076a3.388 3.388 0 002.162-.848 3.01 3.01 0 001.007-1.987c.372-3.08-1.158-3.194-3.016-2.054" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M16.713 18.064h-2.189v-4.78H11.32v4.78H9.246a1.391 1.391 0 00-.907.382c-.233.23-.354 1.746-.337 2.054h9.996a1.042 1.042 0 00-.079-.456c-.06-.146-.153-1.497-.273-1.61a1.327 1.327 0 00-.424-.269 1.462 1.462 0 00-.51-.101z" fill="#33353B" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M8.477 4H17.5c.398 0 .78.147 1.06.408.282.261.44.616.44.985v4.044c0 .732-.156 1.458-.458 2.134a5.557 5.557 0 01-1.304 1.807 6.041 6.041 0 01-1.95 1.204 6.39 6.39 0 01-2.3.418c-1.588 0-3.11-.586-4.234-1.63C7.631 12.328 7 10.914 7 9.438V5.393c0-.366.155-.717.431-.978.277-.26.653-.41 1.046-.415z" fill="#33353B" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Levels</a></div>
                                 </div>
                                 <div class=" relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>
                  <div>
                     <div class="flex items-center justify-between uppercase text-[10px] text-gray-100 whitespace-nowrap text-ellipsis font-extrabold tracking-widest group cursor-pointer px-3">
                        Server Management
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-300 group-hover:text-gray-100 transition-all duration-200">
                           <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </div>
                     <ul class="grid grid-cols-1 mt-1">
                        <div>
                           <div>
                              <div id="automations" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <circle cx="6.4" cy="6.4" r="2.4" stroke="currentColor" stroke-width="1.5"></circle>
                                       <circle cx="17.5992" cy="17.5992" r="2.4" stroke="currentColor" stroke-width="1.5"></circle>
                                       <path d="M11.2002 5.65039C10.786 5.65039 10.4502 5.98618 10.4502 6.40039C10.4502 6.8146 10.786 7.15039 11.2002 7.15039V5.65039ZM12.8002 17.6004L13.3305 18.1307C13.4712 17.9901 13.5502 17.7993 13.5502 17.6004C13.5502 17.4015 13.4712 17.2107 13.3305 17.0701L12.8002 17.6004ZM16.1647 9.35025L16.5673 9.98299L16.5673 9.98299L16.1647 9.35025ZM7.83567 14.6505L8.23833 15.2833L8.23833 15.2833L7.83567 14.6505ZM12.1305 15.8701C11.8376 15.5772 11.3627 15.5772 11.0698 15.8701C10.777 16.163 10.777 16.6378 11.0698 16.9307L12.1305 15.8701ZM11.0698 18.2701C10.777 18.563 10.777 19.0378 11.0698 19.3307C11.3627 19.6236 11.8376 19.6236 12.1305 19.3307L11.0698 18.2701ZM15.3057 5.65039H11.2002V7.15039H15.3057V5.65039ZM12.8002 16.8504H8.69467V18.3504H12.8002V16.8504ZM15.762 8.7175L7.43301 14.0178L8.23833 15.2833L16.5673 9.98299L15.762 8.7175ZM13.3305 17.0701L12.1305 15.8701L11.0698 16.9307L12.2698 18.1307L13.3305 17.0701ZM12.2698 17.0701L11.0698 18.2701L12.1305 19.3307L13.3305 18.1307L12.2698 17.0701ZM8.69467 16.8504C7.84429 16.8504 7.52089 15.7398 8.23833 15.2833L7.43301 14.0178C5.44953 15.28 6.34361 18.3504 8.69467 18.3504V16.8504ZM15.3057 7.15039C16.1561 7.15039 16.4795 8.26095 15.762 8.7175L16.5673 9.98299C18.5508 8.72077 17.6567 5.65039 15.3057 5.65039V7.15039Z" fill="currentColor"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Automations</a></div>
                                 </div>
                                 <div class=" relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="commands" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M12 4c-4.971 0-9 3.585-9 8 .016 1.342.378 2.643 1.036 3.713L3 20l4.143-1.276C8.668 19.577 10.325 20.013 12 20c4.971 0 9-3.585 9-8s-4.029-8-9-8z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M12.05 7.65h-.84a.44.44 0 00-.39.49l.18 5.25a.43.43 0 00.38.45h1.28a.43.43 0 00.38-.45l.21-5.25a.439.439 0 00-.39-.49h-.81zM12.06 16.35a1.08 1.08 0 100-2.16 1.08 1.08 0 000 2.16z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Custom Commands</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="invite_tracker" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path fill="currentColor" d="M 12 2 C 8.144531 2 5 5.144531 5 9 C 5 11.410156 6.230469 13.550781 8.09375 14.8125 C 4.527344 16.34375 2 19.882813 2 24 L 4 24 C 4 19.570313 7.570313 16 12 16 C 13.375 16 14.65625 16.359375 15.78125 16.96875 C 14.671875 18.34375 14 20.101563 14 22 C 14 26.40625 17.59375 30 22 30 C 26.40625 30 30 26.40625 30 22 C 30 17.59375 26.40625 14 22 14 C 20.253906 14 18.628906 14.574219 17.3125 15.53125 C 16.871094 15.253906 16.390625 15.019531 15.90625 14.8125 C 17.769531 13.550781 19 11.410156 19 9 C 19 5.144531 15.855469 2 12 2 Z M 12 4 C 14.773438 4 17 6.226563 17 9 C 17 11.773438 14.773438 14 12 14 C 9.226563 14 7 11.773438 7 9 C 7 6.226563 9.226563 4 12 4 Z M 22 16 C 25.324219 16 28 18.675781 28 22 C 28 25.324219 25.324219 28 22 28 C 18.675781 28 16 25.324219 16 22 C 16 18.675781 18.675781 16 22 16 Z M 21 18 L 21 21 L 18 21 L 18 23 L 21 23 L 21 26 L 23 26 L 23 23 L 26 23 L 26 21 L 23 21 L 23 18 Z"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Invite Tracker</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="ticketing" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <g clip-path="url(#prefix__clip0_5441_14202)" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M16.5 5v6h-2.84a.56.56 0 00-.47.26l-.84 1.33a.55.55 0 01-.47.27H7.5V5h9z" stroke-width="1.5"></path>
                                          <path d="M10 7.25h4M10 8.61h4"></path>
                                          <path d="M19 11.56v6.88a.56.56 0 01-.56.56H5.56a.56.56 0 01-.56-.56v-5a.56.56 0 01.56-.56h6.32a.55.55 0 00.47-.27l.84-1.33a.56.56 0 01.47-.26h4.78a.56.56 0 01.56.54z" stroke-width="1.5"></path>
                                       </g>
                                       <defs>
                                          <clipPath id="prefix__clip0_5441_14202">
                                             <path fill="#fff" d="M0 0h24v24H0z"></path>
                                          </clipPath>
                                       </defs>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Ticketing</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>
                  <div>
                     <div class="flex items-center justify-between uppercase text-[10px] text-gray-100 whitespace-nowrap text-ellipsis font-extrabold tracking-widest group cursor-pointer px-3">
                        Utilities
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-300 group-hover:text-gray-100 transition-all duration-200">
                           <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </div>
                     <ul class="grid grid-cols-1 mt-1">
                        <div>
                           <div>
                              <div id="polls" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <g clip-path="url(#prefix__clip0_6406_18902)" fill="currentColor">
                                          <path d="M6.44 21.25H3.56c-.73 0-1.31-.59-1.31-1.31v-4.87c0-.72.59-1.31 1.31-1.31h2.87c.72 0 1.31.59 1.31 1.31v4.87c0 .72-.59 1.31-1.31 1.31h.01zm-2.69-1.5h2.5v-4.5h-2.5v4.5zM13.44 21.25h-2.87c-.73 0-1.31-.59-1.31-1.31V6.06c0-.72.59-1.31 1.31-1.31h2.87c.72 0 1.31.59 1.31 1.31v13.87c0 .72-.59 1.31-1.31 1.31v.01zm-2.69-1.5h2.5V6.25h-2.5v13.5zM20.44 21.25h-2.87c-.73 0-1.31-.59-1.31-1.31v-8.88c0-.72.59-1.31 1.31-1.31h2.87c.72 0 1.31.59 1.31 1.31v8.87c0 .72-.59 1.31-1.31 1.31v.01zm-2.69-1.5h2.5v-8.5h-2.5v8.5z"></path>
                                       </g>
                                       <defs>
                                          <clipPath id="prefix__clip0_6406_18902">
                                             <path fill="#fff" d="M0 0h24v24H0z"></path>
                                          </clipPath>
                                       </defs>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Polls</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="guild_embeds" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M15.934 4H8.066C5.268 4 3 6.667 3 9.956v4.088C3 17.334 5.268 20 8.066 20h7.868C18.732 20 21 17.334 21 14.044V9.956C21 6.666 18.732 4 15.934 4z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M16.44 7.28h-5.9a.89.89 0 000 1.78h5.9a.89.89 0 000-1.78zM15.44 14.69h-3.76a.89.89 0 000 1.78h3.76a.89.89 0 100-1.78zM8.01 7.28h-.12a.89.89 0 100 1.78h.12a.89.89 0 000-1.78zM8.99 14.69h-.12a.89.89 0 000 1.78h.12a.89.89 0 000-1.78zM17.44 11.01h-8.8a.89.89 0 000 1.78h8.8a.89.89 0 100-1.78z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Embed Messages</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="search" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M16.102 1.801a7.478 7.478 0 00-5.18-.578 7.274 7.274 0 00-4.25 2.932A6.89 6.89 0 005.538 9.09a7.01 7.01 0 002.561 4.407l-3.927 7.315a1.46 1.46 0 00-.099 1.14c.124.378.396.693.758.877a1.571 1.571 0 001.704-.182 1.5 1.5 0 00.375-.457l3.95-7.293a7.48 7.48 0 005.173-.536 7.138 7.138 0 003.482-3.75 6.86 6.86 0 00.01-5.048 7.136 7.136 0 00-3.468-3.763h.046z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M16.543 10.146c1.162-2.235.338-4.964-1.84-6.097-2.177-1.133-4.885-.24-6.047 1.994-1.162 2.235-.339 4.964 1.84 6.097 2.177 1.133 4.885.24 6.047-1.995z" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Search Anything</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="record" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M13.91 15.706h-3.82a.977.977 0 00.51.799v4.28c.023.343.183.664.446.891.262.228.605.343.954.321.346.02.685-.098.944-.325.258-.227.415-.546.436-.887v-4.26a.976.976 0 00.53-.818z" fill="#33353B" stroke="#A6AAAD" data-stroke="currentColor" data-fill="transparent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M12.006 2h-.012C8.684 2 6 4.182 6 6.875v4.055c0 2.693 2.684 4.875 5.994 4.875h.012c3.31 0 5.994-2.182 5.994-4.875V6.875C18 4.182 15.316 2 12.006 2z" fill="#33353B" stroke="#A6AAAD" data-stroke="currentColor" data-fill="transparent" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M10.22 5.146H8.58c-.331 0-.6.264-.6.591 0 .327.269.592.6.592h1.64c.331 0 .6-.265.6-.592a.596.596 0 00-.6-.591zM12.05 5.146h-.06c-.331 0-.6.264-.6.591 0 .327.269.592.6.592h.06c.332 0 .6-.265.6-.592a.596.596 0 00-.6-.591zM15.46 5.146h-1.64c-.332 0-.6.264-.6.591 0 .327.268.592.6.592h1.64c.331 0 .6-.265.6-.592a.596.596 0 00-.6-.591zM10.22 8.271H8.58c-.331 0-.6.265-.6.592 0 .327.269.592.6.592h1.64c.331 0 .6-.265.6-.592a.596.596 0 00-.6-.592zM12.05 8.271h-.06c-.331 0-.6.265-.6.592 0 .327.269.592.6.592h.06c.332 0 .6-.265.6-.592a.596.596 0 00-.6-.592zM15.46 8.271h-1.64c-.332 0-.6.265-.6.592 0 .327.268.592.6.592h1.64c.331 0 .6-.265.6-.592a.596.596 0 00-.6-.592zM10.22 11.318H8.58c-.331 0-.6.265-.6.592 0 .327.269.592.6.592h1.64c.331 0 .6-.265.6-.592a.596.596 0 00-.6-.592zM12.05 11.318h-.06c-.331 0-.6.265-.6.592 0 .327.269.592.6.592h.06c.332 0 .6-.265.6-.592a.596.596 0 00-.6-.592zM15.46 11.318h-1.64c-.332 0-.6.265-.6.592 0 .327.268.592.6.592h1.64c.331 0 .6-.265.6-.592a.596.596 0 00-.6-.592z" fill="#A6AAAD" data-fill="currentColor"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Record</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="help" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-brand-default"></div>
                                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M12 3a9 9 0 00-9 9v.31a9 9 0 0018 0V12a9 9 0 00-9-9zm3.29 12.29A4.66 4.66 0 0112 16.66a4.68 4.68 0 01-4.64-4.35V12a4.65 4.65 0 018.13-3.09A4.59 4.59 0 0116.66 12v.31a4.59 4.59 0 01-1.37 2.98z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M12 21v-4.34M12 7.34V3M3 12.31H7.36M21 12.31H16.64M8.41 9.05L5.33 6.26M18.34 18.06l-3.05-2.77M8.55 15.11l-3.25 2.9v.01M18.37 6.3l-2.9 2.61" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Help</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="timers" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M11.667 2h.645a3.79 3.79 0 011.068.145c.34.098.647.243.907.426s.466.4.607.64c.14.24.213.496.213.756v1.051H8.893v-1.05c0-.523.292-1.023.812-1.392S10.931 2 11.667 2z" fill="#A6AAAD" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M12 22c4.97 0 9-3.914 9-8.742 0-4.829-4.03-8.743-9-8.743S3 8.43 3 13.257C3 18.087 7.03 22 12 22z" fill="#A6AAAD" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M12.135 12l-.135.06-3.78-3.4 2.423 4.406a1.51 1.51 0 00.185 1.36c.175.253.423.45.713.566.29.117.61.146.917.086.308-.06.59-.207.811-.424.221-.216.371-.491.431-.79.06-.3.027-.61-.094-.89a1.55 1.55 0 00-.588-.69 1.618 1.618 0 00-.883-.254V12z" fill="#33353B" stroke="#A6AAAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Reminders</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="statistics" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M20.399 3.518c0-.392-.43-.644-.706-.453l-4.667 3.363a.543.543 0 00-.168.45.537.537 0 00.26.405l1.146.755-3.285 5.587-4.728-1.63a.238.238 0 00-.184 0c-.245-.101-.552 0-.747.372l-4.267 7.308a.991.991 0 00-.001.634c.069.206.204.384.384.509a1.036 1.036 0 001.223-.036l4.237-5.033 4.984 1.912c.05.01.103.01.153 0h.154a.733.733 0 00.491-.352l4.308-7.58 1.392.896a.404.404 0 00.592-.175.387.387 0 00.022-.227L20.4 3.518z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Statistics Channels</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="temporary_channels" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M20 10c.598.4 1 1.145 1 2s-.402 1.6-1 2" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M9.317 7.006h-.794a8.14 8.14 0 00-2.624.434c-1.473.502-2.544 1.753-2.79 3.258l-.008.05a7.775 7.775 0 000 2.504l.009.05c.245 1.505 1.316 2.756 2.789 3.258.843.287 1.73.434 2.624.434h.794c.48 0 .938.187 1.275.52l.583.577c1.72 1.7 4.681.896 5.256-1.428a19.403 19.403 0 000-9.326c-.575-2.324-3.536-3.129-5.256-1.428l-.583.577c-.337.333-.796.52-1.275.52z" fill="transparent" data-fill="secondary" stroke="currentColor" data-stroke="main" stroke-width="1.5"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Temporary Channels</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>
                  <div>
                     <div class="flex items-center justify-between uppercase text-[10px] text-gray-100 whitespace-nowrap text-ellipsis font-extrabold tracking-widest group cursor-pointer px-3">
                        Social Alerts
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-300 group-hover:text-gray-100 transition-all duration-200">
                           <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </div>
                     <ul class="grid grid-cols-1 mt-1">
                        <div>
                           <div>
                              <div id="twitch" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M7.542 2L4 5.571V18.43h4.25V22l3.542-3.571h2.833L21 12V2H7.542zm12.041 9.286l-2.833 2.857h-2.833l-2.48 2.5v-2.5H8.25V3.429h11.333v7.857z" fill="currentColor" data-fill="main"></path>
                                       <path d="M17.458 5.929h-1.416v4.285h1.416V5.93zM13.563 5.929h-1.417v4.285h1.417V5.93z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Twitch Alerts</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="tiktok" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M20 2H4C2.89 2 2 2.9 2 4V20C2 21.11 2.89 22 4 22H20C21.1 22 22 21.11 22 20V4C22 2.9 21.1 2 20 2ZM19 10.57C19 10.57 18.02 10.53 17.3 10.34C16.29 10.08 15.65 9.67 15.65 9.67C15.65 9.67 15.2 9.37 15.16 9.35V14.99C15.16 15.3 15.08 16.09 14.83 16.74C14.61 17.3 14.29 17.82 13.9 18.27C13.9 18.27 13.28 19.03 12.19 19.54C11.21 20 10.35 19.99 10.09 20C10.09 20 8.6 20.06 7.26 19.16H7.25C6.8 18.84 6.39 18.47 6.05 18.04C5.63 17.5 5.36 16.86 5.3 16.67C5.19 16.35 4.97 15.58 5 14.84C5.05 13.54 5.49 12.74 5.61 12.54C5.92 11.99 6.32 11.5 6.8 11.08C7.35 10.63 7.98 10.3 8.66 10.1C9.35 9.9 10.06 9.84 10.77 9.93V12.73C10.53 12.66 10.29 12.62 10.05 12.62C8.75 12.62 7.71 13.66 7.71 14.95C7.71 16.24 8.75 17.29 10.05 17.29C10.45 17.29 10.84 17.18 11.19 16.99C11.53 16.8 11.81 16.53 12.02 16.21C12.23 15.88 12.35 15.51 12.38 15.13V15.05C12.39 14.91 12.39 14.77 12.39 14.63V4H15.16C15.16 4 15.15 4.06 15.15 4.16C15.15 4.28 15.16 4.45 15.2 4.67C15.28 5.16 15.51 5.86 16.12 6.55C16.36 6.82 16.64 7.05 16.93 7.24C17.04 7.31 17.14 7.37 17.25 7.43C17.96 7.78 18.65 7.88 19 7.85V10.57Z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">TikTok Alerts</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="twitter" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M17.853 4.02l-1.736-.004-4.213 4.723-3.196-4.745-4.533-.013 5.194 7.714-5.335 6.232 1.729.006 4.366-5.104 3.45 5.125 4.533.013-5.449-8.097 5.19-5.85zM14.22 16.754L6.434 5.186l1.635.004 7.786 11.568-1.635-.004z" fill="currentColor"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Twitter Alerts</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="youtube" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M23 9.71a8.499 8.499 0 00-.91-4.13 2.92 2.92 0 00-1.72-1A78.362 78.362 0 0012 4.27a78.45 78.45 0 00-8.34.3 2.87 2.87 0 00-1.46.74c-.9.83-1 2.25-1.1 3.45a48.29 48.29 0 000 6.48 9.55 9.55 0 00.3 2c.12.505.365.972.71 1.36a2.86 2.86 0 001.49.78c2.156.266 4.328.376 6.5.33 3.5.05 6.57 0 10.2-.28a2.88 2.88 0 001.53-.78c.28-.28.49-.623.61-1 .358-1.097.533-2.246.52-3.4.04-.56.04-3.94.04-4.54zM9.74 14.85V8.66l5.92 3.11c-1.66.92-3.85 1.96-5.92 3.08z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">YouTube Alerts</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="reddit" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M15.779 15.685c-.948 0-1.72-.788-1.72-1.755 0-.967.772-1.755 1.72-1.755s1.72.788 1.72 1.755c0 .967-.772 1.755-1.72 1.755zm.304 2.88c-1.176 1.195-3.424 1.29-4.085 1.29-.66 0-2.912-.095-4.084-1.29a.46.46 0 010-.644.438.438 0 01.63 0c.74.755 2.322 1.024 3.454 1.024 1.13 0 2.714-.27 3.454-1.024a.438.438 0 01.63 0 .466.466 0 010 .643zM6.49 13.93c0-.967.773-1.755 1.72-1.755.948 0 1.72.788 1.72 1.755 0 .967-.772 1.755-1.72 1.755-.947 0-1.72-.788-1.72-1.755zM23 12.175c0-1.357-1.076-2.455-2.407-2.455-.65 0-1.238.262-1.67.69-1.645-1.212-3.913-1.994-6.44-2.085l1.097-5.264 3.582.778c.043.93.79 1.67 1.71 1.67.952 0 1.721-.784 1.721-1.754S19.823 2 18.873 2c-.677 0-1.255.4-1.536.98l-4.001-.869a.422.422 0 00-.324.06.433.433 0 00-.185.277l-1.202 5.776c-.006.034 0 .064 0 .098-2.572.067-4.883.852-6.554 2.082a2.364 2.364 0 00-1.664-.684C2.077 9.72 1 10.82 1 12.175c0 .997.584 1.856 1.423 2.24a5.029 5.029 0 00-.056.744c0 3.78 4.312 6.841 9.631 6.841 5.32 0 9.632-3.062 9.632-6.84 0-.25-.02-.496-.056-.738A2.47 2.47 0 0023 12.175z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Reddit Alerts</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="instagram" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M12 9.52a2.48 2.48 0 100 4.96 2.48 2.48 0 000-4.96zm9.93-2.45a6.532 6.532 0 00-.42-2.26 4 4 0 00-2.32-2.32 6.53 6.53 0 00-2.26-.42C15.64 2 15.26 2 12 2s-3.64 0-4.93.07a6.53 6.53 0 00-2.26.42 4 4 0 00-2.32 2.32 6.53 6.53 0 00-.42 2.26C2 8.36 2 8.74 2 12s0 3.64.07 4.93a6.86 6.86 0 00.42 2.27c.2.526.51 1.004.91 1.4.398.402.88.713 1.41.91a6.532 6.532 0 002.26.42C8.36 22 8.74 22 12 22s3.64 0 4.93-.07a6.532 6.532 0 002.26-.42 3.89 3.89 0 001.41-.91c.4-.396.71-.874.91-1.4a6.6 6.6 0 00.42-2.27C22 15.64 22 15.26 22 12s0-3.64-.07-4.93zm-2.54 8a5.73 5.73 0 01-.39 1.8A3.86 3.86 0 0116.87 19a5.73 5.73 0 01-1.81.35H8.94A5.73 5.73 0 017.13 19a3.51 3.51 0 01-1.31-.86A3.51 3.51 0 015 16.87a5.49 5.49 0 01-.34-1.81V12 8.94A5.49 5.49 0 015 7.13a3.51 3.51 0 01.86-1.31c.36-.36.793-.64 1.27-.82a5.73 5.73 0 011.81-.35h6.12a5.73 5.73 0 011.81.35 3.51 3.51 0 011.31.86c.362.359.642.792.82 1.27a5.73 5.73 0 01.35 1.81V12c0 2.06.07 2.27.04 3.06v.01zm-1.6-7.44a2.38 2.38 0 00-1.41-1.41A4 4 0 0015 6H9a4 4 0 00-1.38.26 2.38 2.38 0 00-1.41 1.36A4.27 4.27 0 006 9v6c.01.471.098.938.26 1.38a2.38 2.38 0 001.41 1.41 4.27 4.27 0 001.33.26h6a4 4 0 001.38-.26 2.38 2.38 0 001.41-1.41 4 4 0 00.26-1.38v-3-3c0-.472-.088-.94-.26-1.38v.01zM12 15.82A3.81 3.81 0 018.19 12 3.82 3.82 0 1112 15.82zm4-6.89a.9.9 0 010-1.79.9.9 0 010 1.79z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Instagram Alerts</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="rss" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <g id="Group">
                                             <rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
                                             <ellipse id="Oval" fill="currentColor" fill-rule="nonzero" cx="7.67" cy="16.42" rx="1.34" ry="1.3"></ellipse>
                                             <g transform="translate(6.330000, 7.210000)" fill="currentColor" fill-rule="nonzero" id="Path">
                                                <path d="M7.26,10.51 L5.76,10.51 C5.76,7.34 3.18,4.75 -1.77635684e-15,4.75 L-1.77635684e-15,3.25 C4,3.25 7.26,6.5 7.26,10.51 Z"></path>
                                                <path d="M10.51,10.51 L9.01,10.51 C9.01,5.54 4.97,1.5 -1.77635684e-15,1.5 L-1.77635684e-15,-1.77635684e-15 C5.79,-1.77635684e-15 10.51,4.71 10.51,10.51 Z"></path>
                                             </g>
                                             <path d="M17.19,21.16 L6.85,21.16 C4.65,21.16 2.86,19.37 2.86,17.17 L2.86,6.84 C2.86,4.64 4.65,2.86 6.85,2.86 L17.19,2.86 C19.39,2.86 21.17,4.65 21.17,6.84 L21.17,17.18 C21.17,19.38 19.38,21.17 17.19,21.17 L17.19,21.16 Z M6.85,4.35 C5.48,4.35 4.36,5.46 4.36,6.83 L4.36,17.17 C4.36,18.54 5.48,19.66 6.85,19.66 L17.19,19.66 C18.56,19.66 19.67,18.54 19.67,17.17 L19.67,6.84 C19.67,5.47 18.56,4.36 17.19,4.36 L6.85,4.36 L6.85,4.35 Z" id="Shape" fill="currentColor" fill-rule="nonzero"></path>
                                          </g>
                                       </g>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">RSS Feeds</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="kick" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <g id="Group" fill-rule="nonzero">
                                             <rect id="Rectangle" fill-opacity="0" fill="currentColor" x="0" y="0" width="20" height="20" rx="2"></rect>
                                             <g id="Group-2" transform="translate(2.000000, 2.000000)">
                                                <rect id="Rectangle" fill="currentColor" x="0" y="0" width="16" height="16" rx="2"></rect>
                                                <polygon id="Path" fill="#1E1E1E" points="6.857144 2.4 3.2 2.4 3.2 13.6 6.857144 13.6 6.857144 11.3872 8 11.3872 8 12.4936 9.14288 12.4936 9.14288 13.6 12.8 13.6 12.8 10.0596 11.65712 10.0596 11.65712 8.9532 10.51432 8.9532 10.51432 7.046808 11.65712 7.046808 11.65712 5.940424 12.8 5.940424 12.8 2.4 9.14288 2.4 9.14288 3.506384 8 3.506384 8 4.612768 6.857144 4.612768"></polygon>
                                             </g>
                                          </g>
                                       </g>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Kick Alerts</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-brand-default bg-opacity-20 text-brand-default ml-3 whitespace-nowrap inline-block min-w-[32px] min-h-[28px] flex flex-row items-center gap-2 justify-center text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="" viewBox="0 0 24 24" fill="none" stroke="#4d87e5" stroke-width="3" stroke-linecap="round" stroke-linejoin="arcs">
                                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="podcasts" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M19.141 5A9.967 9.967 0 0122 12a9.969 9.969 0 01-2.922 7.064M5 19.142A9.97 9.97 0 012 12a9.969 9.969 0 012.936-7.078M16.285 8.044C17.345 9.059 18 10.449 18 11.982c0 1.552-.67 2.957-1.753 3.974M7.8 16C6.69 14.979 6 13.556 6 11.982 6 10.427 6.673 9.018 7.762 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M13.656 10.451C14.552 11.11 15 11.438 15 12c0 .562-.448.891-1.344 1.549-.247.181-.492.352-.718.495a12.23 12.23 0 01-.653.38c-.894.49-1.34.735-1.741.464-.401-.271-.438-.838-.51-1.971-.02-.321-.034-.635-.034-.917 0-.282.013-.596.034-.917.072-1.133.109-1.7.51-1.97.4-.272.847-.027 1.74.462.233.127.457.256.654.381.226.143.471.314.718.495z" stroke="currentColor" stroke-width="1.5"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Podcast Alerts</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>
                  <div>
                     <div class="flex items-center justify-between uppercase text-[10px] text-gray-100 whitespace-nowrap text-ellipsis font-extrabold tracking-widest group cursor-pointer px-3">
                        Games &amp; Fun
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-300 group-hover:text-gray-100 transition-all duration-200">
                           <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </div>
                     <ul class="grid grid-cols-1 mt-1">
                        <div>
                           <div>
                              <div id="achievements" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <circle cx="9.167" cy="11.667" r="4.167" stroke="currentColor" stroke-width="1.5"></circle>
                                       <path d="M11.667 8.333V7a2 2 0 00-2-2h-1a2 2 0 00-2 2v1.333" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                                       <path d="M9.167 10l.374 1.152h1.21l-.979.711.374 1.152-.98-.712-.979.712.374-1.152-.98-.711h1.211L9.167 10z" fill="#C6C8D7" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                                       <path d="M16.25 6.667a.417.417 0 110 .833.417.417 0 010-.833z" fill="#C6C8D7" stroke="#C6C8D7" stroke-width="1.5"></path>
                                       <path d="M15.343 4.225l-1.176 1.067m1.186.066l-.539-.595-.539-.594" stroke="#C6C8D7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Achievements</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="giveaways" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M16.2 7.008H7.631C5.626 7.008 4 8.65 4 10.678v6.65c0 2.026 1.626 3.67 3.631 3.67h8.57c2.005 0 3.63-1.644 3.63-3.67v-6.65c0-2.027-1.625-3.67-3.63-3.67z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M11.426 20.497V7.507h.98v12.99h-.98z" fill="currentColor" stroke="currentColor"></path>
                                       <path d="M4.668 13.498H19.5v1H4.668v-1z" fill="currentColor" stroke="currentColor"></path>
                                       <path d="M11.866 6.298s-1.652.69-2.622-.13-1.375-1.98-.89-2.68c.485-.7 1.652-.64 2.632.14.98.78.88 2.67.88 2.67zM12.104 6.298s1.652.64 2.622-.13 1.375-2 .9-2.68c-.474-.68-1.652-.64-2.632.14-.98.78-.89 2.67-.89 2.67z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Giveaways</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="birthdays" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M5.514 11h12.982c.93 0 1.82.403 2.478 1.12.657.719 1.026 1.692 1.026 2.707v6.99c0 .314-.114.614-.317.836a1.04 1.04 0 01-.767.347H3.084a1.04 1.04 0 01-.767-.347A1.24 1.24 0 012 21.817v-6.98a4.136 4.136 0 01.265-1.47c.176-.466.435-.89.761-1.246a3.5 3.5 0 011.142-.832c.427-.192.884-.29 1.346-.289z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M18.697 10.877H5.263c-.866 0-1.696.35-2.307.97A3.336 3.336 0 002 14.19v.81a.795.795 0 00.231.55.772.772 0 00.547.229v0a.21.21 0 01.15.063c.04.04.062.095.062.152v.461a1.225 1.225 0 00.345.862 1.19 1.19 0 00.847.358h1.666a1.187 1.187 0 00.85-.357 1.222 1.222 0 00.353-.863v0c0-.18.07-.352.195-.478a.662.662 0 01.471-.199h.91a.708.708 0 01.513.21.728.728 0 01.214.518v0a.95.95 0 00.268.664.923.923 0 00.65.28h.172c.292 0 .572-.118.779-.328.206-.21.322-.494.322-.79 0-.147.058-.287.16-.391a.541.541 0 01.386-.162h.323c.233 0 .457.093.622.26a.899.899 0 01.257.631v1.026c.003.352.142.69.387.939.246.25.579.39.926.393.35 0 .684-.14.932-.39s.389-.588.391-.942v-1.23c0-.183.072-.357.199-.486a.672.672 0 01.478-.201h.616c.18 0 .352.072.479.2a.692.692 0 01.198.486c0 .272.106.533.296.725.19.192.446.3.714.3h1.445c.436 0 .855-.176 1.164-.489.308-.313.482-.738.482-1.181v0-1.63c0-.439-.086-.873-.252-1.277a3.314 3.314 0 00-.718-1.08 3.259 3.259 0 00-1.072-.714 3.22 3.22 0 00-1.261-.24v0z" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M16.687 8h.638c.18 0 .35.06.477.167a.528.528 0 01.198.402V11h-2V8.548a.534.534 0 01.21-.392.749.749 0 01.477-.156zM17.896 5.808C17.78 5.406 17.456 4 17.006 4s-.751 1.426-.89 1.808A.721.721 0 0016 6.22a.841.841 0 00.328.556c.185.144.424.224.672.224.248 0 .487-.08.672-.224A.842.842 0 0018 6.22a.815.815 0 00-.104-.412zM11.687 6h.638c.089 0 .177.015.259.043.081.028.156.07.218.121a.567.567 0 01.147.183.48.48 0 01.051.214V11h-2V6.582a.477.477 0 01.046-.224.561.561 0 01.147-.19.697.697 0 01.227-.126.797.797 0 01.267-.042zM12.885 3.763C12.77 3.373 12.448 2 12 2s-.747 1.393-.885 1.763a.781.781 0 00-.115.39c0 .224.105.44.293.599.187.159.442.248.707.248.265 0 .52-.09.707-.248a.788.788 0 00.293-.6.781.781 0 00-.115-.389zM6.67 7h.647a.72.72 0 01.483.182c.128.116.2.273.2.438V11H6V7.62c0-.163.07-.319.196-.435A.719.719 0 016.67 7zM7.885 4.763C7.828 4.423 7.448 3 7 3s-.747 1.422-.885 1.763a.78.78 0 00-.115.39c0 .11.026.221.076.324.05.103.124.196.217.275.093.078.203.14.324.184a1.158 1.158 0 00.766 0c.121-.043.231-.106.324-.184a.853.853 0 00.217-.275A.737.737 0 008 5.153a.78.78 0 00-.115-.39z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Birthdays</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="blindtest" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-brand-default"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M12 4.09a7.8 7.8 0 00-2.17.31A7.89 7.89 0 004.09 12v.08a7.91 7.91 0 107.91-8v.01z" fill="currentColor" data-fill="main" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M11.07 10.21L8.8 5.89a6.9 6.9 0 00-2.34 2.28l3.93 2.71c.17-.275.402-.505.68-.67zM5.76 9.23a6 6 0 00-.3 1L10 11.54c.02-.103.05-.203.09-.3L5.76 9.23z" fill="currentColor" data-fill="main"></path>
                                       <path d="M12 9.83a2.19 2.19 0 00-1 .27c-.44.24-.79.616-1 1.07a1.4 1.4 0 00-.09.29A2.17 2.17 0 0012 14.17a2.17 2.17 0 000-4.34zM12 13a1 1 0 01-1-1 1.153 1.153 0 010-.26.78.78 0 010-.14.559.559 0 01.09-.17 1 1 0 01.37-.34A1.06 1.06 0 0112 11a1 1 0 110 2z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Music Quiz</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="economy" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M12 3L4.268 8.344a.619.619 0 00-.233.31.643.643 0 00-.008.391c.038.129.115.24.22.32.105.079.231.12.36.118h14.785c.13.002.256-.04.361-.118a.621.621 0 00.22-.32.643.643 0 00-.008-.392.618.618 0 00-.233-.309L12 3z" fill="#33353B" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill-opacity="0.16"></path>
                                       <path d="M7.015 8.966H5.018v9.32h1.997v-9.32zM15.007 8.966H13.01v9.32h1.998v-9.32zM11.011 8.966H9.013v9.32h1.998v-9.32zM19.003 8.966h-1.998v9.32h1.998v-9.32z" fill="currentColor" data-fill="main"></path>
                                       <path d="M4.817 17.893h14.366c.214 0 .42.133.572.369.151.236.236.556.236.89V21H4.008v-1.849c0-.165.021-.328.062-.481.04-.153.1-.292.175-.408a.896.896 0 01.262-.273.569.569 0 01.31-.096z" fill="#33353B" stroke="currentColor" data-stroke="main" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Economy</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>
                  <div>
                     <div class="flex items-center justify-between uppercase text-[10px] text-gray-100 whitespace-nowrap text-ellipsis font-extrabold tracking-widest group cursor-pointer px-3">
                        Monetization
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-300 group-hover:text-gray-100 transition-all duration-200">
                           <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </div>
                     <ul class="grid grid-cols-1 mt-1">
                        <div>
                           <div>
                              <div id="memberships" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M15.9338 4H8.06619C5.26821 4 3 6.66652 3 9.95584V14.0442C3 17.3335 5.26821 20 8.06619 20H15.9338C18.7318 20 21 17.3335 21 14.0442V9.95584C21 6.66652 18.7318 4 15.9338 4Z" fill="currentColor" fill-opacity="0.16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3975 9.45307C16.3975 9.45307 14.9351 7.67827 14.914 7.65781C14.4778 7.23358 13.9169 7 13.3348 7H10.6652C10.083 7 9.52218 7.23358 9.086 7.65781C9.06494 7.67827 7.60253 9.45307 7.60253 9.45307C6.91631 10.1546 6.80017 11.3081 7.33703 12.1585C8.07928 13.3343 9.70192 15.504 10.8275 16.4272C11.691 17.1915 12.3102 17.1904 13.1725 16.4272C14.2981 15.504 15.9208 13.3343 16.663 12.1585C17.1998 11.3081 17.0837 10.1546 16.3975 9.45307ZM10.612 8H13.388L12 10L10.612 8ZM15.8808 10.4129C15.9364 10.4694 15.9761 10.5392 16 10.6147H13L14.5 9C14.5 9 15.8564 10.3882 15.8808 10.4129ZM9.5 9C9.5 9 8.14355 10.3882 8.11921 10.4129C8.06359 10.4693 8.02385 10.5392 8 10.6147H11L9.5 9ZM12.3084 15.7487C12.1748 15.8632 12.0716 15.9472 12 16C11.9284 15.9472 11.8252 15.8632 11.6916 15.7487L9.08478 12H14.9153L12.3084 15.7487Z" fill="currentColor"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Monetize</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>
                  <div>
                     <div class="flex items-center justify-between uppercase text-[10px] text-gray-100 whitespace-nowrap text-ellipsis font-extrabold tracking-widest group cursor-pointer px-3">
                        Web3
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-300 group-hover:text-gray-100 transition-all duration-200">
                           <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </div>
                     <ul class="grid grid-cols-1 mt-1">
                        <div>
                           <div>
                              <div id="web3_subscription" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300 group-hover:from-gray-100 group-hover:to-gray-100">Web3 Subscription</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="statistics" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M5.54 17V17C4.68948 17 4 16.3105 4 15.46V7C4 5.89543 4.89543 5 6 5H15C15.5523 5 16 5.44772 16 6V6" stroke="currentColor" data-stroke="main" fill="transparent" data-fill="secondary" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path d="M20.91 6.13C20.91 5.78 20.53 5.55 20.29 5.73L16.18 8.73C16.1284 8.78233 16.0892 8.84561 16.0654 8.91513C16.0416 8.98465 16.0337 9.05864 16.0423 9.13163C16.051 9.20461 16.0759 9.27472 16.1153 9.33675C16.1547 9.39878 16.2076 9.45116 16.27 9.49L17.27 10.15L14.4 15.15L10.23 13.69C10.1743 13.6752 10.1157 13.6752 10.06 13.69C9.9311 13.6564 9.79451 13.669 9.67395 13.7257C9.55338 13.7823 9.45645 13.8794 9.4 14L5.65 20.58C5.58837 20.6885 5.55081 20.809 5.53987 20.9334C5.52893 21.0577 5.54487 21.1829 5.58661 21.3006C5.62835 21.4182 5.6949 21.5254 5.78176 21.6151C5.86862 21.7047 5.97374 21.7746 6.09 21.82C6.2618 21.8888 6.45091 21.9016 6.63043 21.8567C6.80996 21.8119 6.97077 21.7115 7.09 21.57L10.81 17.07L15.2 18.78H15.33H15.46C15.5519 18.761 15.6386 18.7226 15.7145 18.6674C15.7904 18.6123 15.8536 18.5415 15.9 18.46L19.69 11.68L20.91 12.48C20.9676 12.5193 21.0356 12.5405 21.1054 12.5409C21.1751 12.5412 21.2434 12.5208 21.3014 12.4821C21.3594 12.4434 21.4046 12.3883 21.431 12.3238C21.4575 12.2592 21.4641 12.1883 21.45 12.12L20.91 6.13Z" stroke="currentColor" data-stroke="main" fill="transparent" data-fill="secondary" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Statistics Channels</a></div>
                                 </div>
                                 <div class="inline-block relative rounded-full transition-all duration-200 bg-premium-default bg-opacity-20 text-premium-default ml-3 whitespace-nowrap inline-block text-xs px-2 py-0.5 font-medium">
                                    <div class="max-w-max flex items-center justify-start">
                                       <div class="flex flex-row items-center gap-2">
                                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                             <g clip-path="url(#prefix__clip0)">
                                                <path d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M13.174 17.44h-1.349v.003h1.349v-.003z" fill="#fff"></path>
                                                <path d="M12.144 6.184a.317.317 0 00-.056-.074l-.019-.015a.44.44 0 00-.059-.037h-.016l-.072-.021a.332.332 0 00-.088 0v4.47l1.137-2.774-.827-1.549z" fill="#FFCB39"></path>
                                                <path d="M11.826 18.91v-1.186H4.154a1.62 1.62 0 00-1.135.462c-.301.296-.47.697-.47 1.116v.131c0 .418.169.82.47 1.116.301.295.71.462 1.135.462h6.858l.803-1.986.01-.115z" fill="#FFE570"></path>
                                                <path d="M21.977 19.088a.42.42 0 000-.052c-.009-.06-.022-.12-.04-.179v-.018a1.463 1.463 0 00-.072-.19l-.016-.034a1.655 1.655 0 00-.094-.165 1.616 1.616 0 00-.283-.321 1.673 1.673 0 00-.375-.24l-.155-.06-.153-.042h-.016l-.13-.021-1.339 3.26h1.121a1.58 1.58 0 001.012-.357c.079-.065.152-.137.22-.213a1.601 1.601 0 00.352-.818V19.302a1.346 1.346 0 00-.032-.213zM16.548 17.724L15.205 21h1.857l1.343-3.276h-1.857z" fill="#FFCB39"></path>
                                                <path d="M11.012 21h.813v-1.985L11.012 21z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.012 21h.813v-1.985L11.012 21z" fill="#fff"></path>
                                                <path d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.355 17.724l-.53 1.29V21h3.38l1.343-3.276h-4.193z" fill="#fff"></path>
                                                <path d="M11.825 19.015l.53-1.291h-.53v1.291zM20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M20.596 17.737h-2.191l-1.338 3.276h2.21l1.338-3.26-.019-.016z" fill="#fff"></path>
                                                <path d="M18.763 8.784c-.789-1.717-.647-1.577-2.394-2.366 1.747-.773 1.605-.634 2.394-2.353.787 1.72.645 1.577 2.395 2.366-1.75.776-1.608.64-2.395 2.353zM22.224 6.492c-.587-1.276-.482-1.17-1.777-1.746 1.295-.576 1.19-.47 1.777-1.746.583 1.275.478 1.17 1.776 1.746-1.298.576-1.193.47-1.776 1.746z" fill="#C8D4FF"></path>
                                                <path d="M20.968 17.443H3.578a.281.281 0 00-.283.278v.003c0 .154.127.279.284.279h17.39a.281.281 0 00.283-.28v-.002a.281.281 0 00-.284-.278z" fill="#D0A500"></path>
                                                <path d="M11.825 6.024a.308.308 0 00-.22.155l-3.7 7.075a.296.296 0 01-.22.157.305.305 0 01-.259-.083l-4.91-4.822a.304.304 0 00-.474.063.293.293 0 00-.04.173l1.496 8.7h5.48l2.847-6.94V6.023z" fill="#FFE570"></path>
                                                <path d="M16.297 13.333a.308.308 0 01-.474-.082l-.522-1.001-2.14 5.19h1.806l1.902-4.636-.572.529zM22.303 8.077a.297.297 0 00-.267.074l-1.648 1.488-3.211 7.801h3.917l1.448-9.029a.29.29 0 00-.051-.214.3.3 0 00-.188-.12z" fill="#FFCB39"></path>
                                                <path d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#FFE570"></path>
                                                <path opacity="0.3" d="M11.825 10.501L8.98 17.443h2.847V10.5z" fill="#fff"></path>
                                                <path d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M12.957 7.743l-1.132 2.758v6.939h1.349l2.127-5.19-2.344-4.507z" fill="#fff"></path>
                                                <path d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#FFCB39"></path>
                                                <path opacity="0.3" d="M16.882 12.805L14.98 17.44h2.213l3.2-7.801-3.51 3.166z" fill="#fff"></path>
                                             </g>
                                             <defs>
                                                <clipPath id="prefix__clip0">
                                                   <path fill="#fff" transform="translate(2 3)" d="M0 0h22v18H0z"></path>
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="nft_queries" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M5.25 5.74999H13.48C14.3047 5.25608 15.2319 4.95841 16.19 4.87999C16.0076 4.67983 15.7851 4.5203 15.537 4.41176C15.2889 4.30321 15.0208 4.2481 14.75 4.24999H5.25C4.71957 4.24999 4.21086 4.4607 3.83579 4.83577C3.46071 5.21084 3.25 5.71955 3.25 6.24999V15.75C3.25 16.2804 3.46071 16.7891 3.83579 17.1642C4.21086 17.5393 4.71957 17.75 5.25 17.75H8.83L10 16.25H5.25C5.11739 16.25 4.99021 16.1973 4.89645 16.1035C4.80268 16.0098 4.75 15.8826 4.75 15.75V6.24999C4.75 6.11738 4.80268 5.9902 4.89645 5.89643C4.99021 5.80266 5.11739 5.74999 5.25 5.74999Z" fill="currentColor" data-fill="main"></path>
                                       <path d="M19.85 7.13999C18.8451 6.36791 17.5897 5.99591 16.3264 6.09594C15.0631 6.19597 13.8819 6.76091 13.011 7.6815C12.1402 8.60209 11.6417 9.81292 11.612 11.0798C11.5822 12.3467 12.0233 13.5795 12.85 14.54L9.14 19.4C9.05912 19.5047 8.99984 19.6245 8.96559 19.7523C8.93134 19.8802 8.9228 20.0135 8.94048 20.1447C8.95815 20.2758 9.00168 20.4022 9.06854 20.5164C9.13541 20.6306 9.22428 20.7304 9.33 20.81L9.46 20.91C9.63777 21.0381 9.85088 21.108 10.07 21.11C10.2269 21.1116 10.382 21.0762 10.5227 21.0067C10.6635 20.9372 10.7858 20.8355 10.88 20.71L14.58 15.85C15.2549 16.1711 15.9926 16.3385 16.74 16.34C16.9698 16.3549 17.2002 16.3549 17.43 16.34C18.4343 16.203 19.3754 15.7715 20.1347 15.1001C20.894 14.4287 21.4374 13.5474 21.6963 12.5674C21.9552 11.5875 21.918 10.5528 21.5894 9.59398C21.2608 8.63515 20.6555 7.79515 19.85 7.17999V7.13999ZM19.63 13.41C19.3419 13.7899 18.9815 14.1092 18.5697 14.3494C18.1578 14.5897 17.7025 14.7462 17.23 14.81C16.7585 14.8758 16.2787 14.8469 15.8185 14.725C15.3583 14.603 14.9271 14.3906 14.55 14.1C13.9489 13.6388 13.5071 13.0011 13.2867 12.2762C13.0662 11.5513 13.0781 10.7756 13.3207 10.0578C13.5633 9.34003 14.0243 8.71614 14.6393 8.27358C15.2543 7.83103 15.9923 7.592 16.75 7.58999C17.5419 7.58694 18.3123 7.84726 18.94 8.32999C19.704 8.91293 20.2057 9.77507 20.3351 10.7274C20.4644 11.6796 20.2109 12.6444 19.63 13.41Z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">NFT Queries</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="nft_events" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M15.75 3.25H6.25C5.71957 3.25 5.21086 3.46071 4.83579 3.83579C4.46071 4.21086 4.25 4.71957 4.25 5.25V14.75C4.25 15.2804 4.46071 15.7891 4.83579 16.1642C5.21086 16.5393 5.71957 16.75 6.25 16.75H12.77L11.91 15.25H6.25C6.11739 15.25 5.99021 15.1973 5.89645 15.1036C5.80268 15.0098 5.75 14.8826 5.75 14.75V5.25C5.75 5.11739 5.80268 4.99021 5.89645 4.89645C5.99021 4.80268 6.11739 4.75 6.25 4.75H15.75C15.8826 4.75 16.0098 4.80268 16.1036 4.89645C16.1973 4.99021 16.25 5.11739 16.25 5.25V9.25H17.42H17.75V5.25C17.75 4.71957 17.5393 4.21086 17.1642 3.83579C16.7891 3.46071 16.2804 3.25 15.75 3.25Z" fill="currentColor" data-fill="main"></path>
                                       <path d="M22.08 17.3L18.45 10.92C18.2797 10.6183 18.0007 10.393 17.67 10.29C17.5903 10.2797 17.5097 10.2797 17.43 10.29H16.12C15.88 9.82002 15.61 9.36002 15.35 8.90002C14.29 7.02002 13.23 6.37002 12.22 6.90002C11.21 7.43002 11.22 8.72002 12.31 10.59C12.4065 10.7586 12.5655 10.8825 12.7526 10.9349C12.9397 10.9873 13.1399 10.964 13.31 10.87C13.4784 10.7733 13.6027 10.6151 13.6568 10.4285C13.7109 10.242 13.6905 10.0418 13.6 9.87002C13.2817 9.36962 13.0517 8.81828 12.92 8.24002C13.01 8.24002 13.38 8.48002 14.03 9.62002L14.43 10.33C14.3291 10.346 14.2326 10.3826 14.1465 10.4377C14.0604 10.4928 13.9867 10.5651 13.93 10.65L12.45 13.08C12.4008 13.145 12.3666 13.2202 12.35 13.3C12.2756 13.6405 12.329 13.9964 12.5 14.3L16.13 20.69C16.2547 20.9 16.4317 21.0739 16.6438 21.1949C16.856 21.3158 17.0958 21.3796 17.34 21.38C17.5788 21.3831 17.814 21.3209 18.02 21.2L21.54 19.2C21.7018 19.1124 21.8445 18.9932 21.9596 18.8496C22.0748 18.706 22.16 18.5408 22.2103 18.3638C22.2606 18.1867 22.275 18.0014 22.2526 17.8187C22.2303 17.6361 22.1716 17.4597 22.08 17.3ZM17.4 19.83L13.88 13.64L15 11.78H15.17C15.3983 12.1717 15.5383 12.6086 15.58 13.06C15.4284 13.1723 15.3246 13.3375 15.2894 13.5229C15.2542 13.7082 15.2901 13.9 15.39 14.06C15.4544 14.1757 15.5487 14.272 15.6631 14.3389C15.7774 14.4057 15.9076 14.4406 16.04 14.44C16.1693 14.4349 16.2958 14.4008 16.41 14.34C17.25 13.86 17.2 12.91 16.79 11.79H17.18L20.7 17.98L17.4 19.83Z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">NFT Sales &amp; Listing</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="cryptocoin" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M3.69995 11.1833C3.7092 10.9705 3.79162 10.7674 3.93328 10.6083C4.07221 10.4324 4.24156 10.2828 4.43328 10.1666C4.67855 10.0097 4.94519 9.88902 5.22495 9.8083C4.94519 9.72758 4.67855 9.60689 4.43328 9.44997C4.24156 9.33382 4.07221 9.18423 3.93328 9.0083C3.74375 9.10492 3.56733 9.22534 3.40828 9.36663C3.24025 9.49427 3.08904 9.64268 2.95828 9.8083C2.63483 10.194 2.45518 10.68 2.44995 11.1833C2.47898 11.6576 2.63824 12.1147 2.91024 12.5043C3.18223 12.8939 3.55641 13.2009 3.99162 13.3916L4.29995 12.8583L4.61662 12.3083C4.37846 12.2178 4.16835 12.0662 4.00742 11.8687C3.8465 11.6712 3.74045 11.4348 3.69995 11.1833V11.1833Z" fill="currentColor" data-fill="main"></path>
                                       <path d="M10.05 7.05831C9.91934 6.89016 9.76817 6.739 9.60002 6.60831C9.44216 6.47566 9.27193 6.35846 9.09169 6.25831C8.74522 6.66059 8.28688 6.95068 7.77502 7.09164C8.05559 7.16618 8.32273 7.28428 8.56669 7.44164C8.76554 7.558 8.9408 7.71065 9.08335 7.89164C9.22259 8.05152 9.30211 8.25472 9.30835 8.46664C9.30546 8.62716 9.25627 8.78342 9.16669 8.91664L9.76669 9.12498L10.3584 9.33331C10.4852 9.07352 10.5535 8.78904 10.5584 8.49998C10.5674 7.97399 10.387 7.46228 10.05 7.05831V7.05831ZM4.43335 9.44998C4.24163 9.33383 4.07228 9.18424 3.93335 9.00831C3.78561 8.85333 3.7032 8.64743 3.7032 8.43331C3.7032 8.21919 3.78561 8.01329 3.93335 7.85831C4.07228 7.68238 4.24163 7.53279 4.43335 7.41664C4.67679 7.25636 4.94395 7.13544 5.22502 7.05831C4.71598 6.92156 4.26181 6.63043 3.92502 6.22498C3.74189 6.32787 3.5689 6.44785 3.40835 6.58331C3.23823 6.71173 3.08678 6.86318 2.95835 7.03331C2.63086 7.41659 2.45093 7.90417 2.45093 8.40831C2.45093 8.91245 2.63086 9.40003 2.95835 9.78331C3.08678 9.95344 3.23823 10.1049 3.40835 10.2333C3.57002 10.3688 3.74608 10.4862 3.93335 10.5833C4.35943 10.8216 4.82078 10.9904 5.30002 11.0833L5.63335 10.5083L5.95835 9.99998C5.71021 9.97016 5.46494 9.91999 5.22502 9.84998C4.94291 9.75627 4.67616 9.62148 4.43335 9.44998V9.44998Z" fill="currentColor" data-fill="main"></path>
                                       <path d="M6.49995 2.875C4.23328 2.875 2.44995 4.10833 2.44995 5.68333C2.45518 6.18668 2.63483 6.67263 2.95828 7.05833C3.22627 7.39661 3.5574 7.67963 3.93328 7.89167C4.72185 8.31467 5.60519 8.52977 6.49995 8.51667C7.40013 8.53077 8.28911 8.3157 9.08328 7.89167C9.45617 7.67875 9.78441 7.39578 10.05 7.05833C10.3734 6.67263 10.5531 6.18668 10.5583 5.68333C10.5583 4.10833 8.77495 2.875 6.49995 2.875ZM7.77495 7.04167C7.36018 7.15913 6.93103 7.21804 6.49995 7.21667C6.06883 7.2187 5.63958 7.15978 5.22495 7.04167C4.71591 6.90492 4.26174 6.61379 3.92495 6.20833C3.7857 6.05175 3.70604 5.85113 3.69995 5.64167C3.69995 4.94167 4.84995 4.16667 6.49995 4.16667C8.14995 4.16667 9.30828 5 9.30828 5.725C9.30175 5.93538 9.22554 6.13763 9.09162 6.3C8.73525 6.67473 8.27791 6.93814 7.77495 7.05833V7.04167Z" fill="currentColor" data-fill="main"></path>
                                       <path d="M17.1084 4.00001C17.1084 3.70835 16.7918 3.51668 16.6001 3.66668L13.1751 6.16668C13.1302 6.20893 13.0957 6.26099 13.0742 6.31878C13.0527 6.37658 13.0449 6.43856 13.0514 6.49988C13.0578 6.56119 13.0784 6.62019 13.1114 6.67225C13.1444 6.72432 13.189 6.76804 13.2418 6.80001L14.0751 7.35001L11.6751 11.5167L8.20842 10.3083C8.16485 10.2958 8.11865 10.2958 8.07509 10.3083C7.96229 10.2706 7.83925 10.2782 7.73196 10.3295C7.62466 10.3808 7.54152 10.4719 7.50009 10.5833L4.40009 16.0417C4.34728 16.1318 4.31481 16.2324 4.30496 16.3364C4.2951 16.4403 4.30809 16.5452 4.34302 16.6436C4.37795 16.7421 4.43397 16.8317 4.50716 16.9062C4.58036 16.9807 4.66896 17.0383 4.76675 17.075C4.91057 17.1327 5.0691 17.1428 5.21907 17.1038C5.36904 17.0648 5.50257 16.9788 5.60009 16.8583L8.70009 13.1167L12.3501 14.5417H12.4584H12.5751C12.651 14.5302 12.7232 14.5008 12.7855 14.4558C12.8478 14.4109 12.8985 14.3518 12.9334 14.2833L16.0918 8.63335L17.1168 9.30001C17.3418 9.45001 17.5834 9.30001 17.5584 9.00001L17.1084 4.00001Z" stroke="currentColor" data-stroke="main" fill="transparent" data-fill="secondary" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Crypto Statistics</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="crypto_queries" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <path d="M9.93006 5.93002C10.7956 5.90899 11.6503 6.12698 12.4001 6.56002C12.7842 6.19541 13.2146 5.88275 13.6801 5.63002C12.6051 4.81096 11.2808 4.38719 9.93006 4.43002C7.20006 4.43002 5.06006 5.91002 5.06006 7.79002C5.06401 8.39748 5.27974 8.98453 5.67006 9.45002C5.27707 9.90995 5.06115 10.4951 5.06115 11.1C5.06115 11.705 5.27707 12.2901 5.67006 12.75C5.28192 13.2129 5.06633 13.796 5.06006 14.4C5.06006 16.04 6.67006 17.4 8.87006 17.69L10.0001 16.27C8.00006 16.27 6.63006 15.27 6.63006 14.4C6.64116 14.1446 6.74006 13.9009 6.91006 13.71C7.85947 14.2189 8.92302 14.477 10.0001 14.46C10.4258 14.4599 10.8507 14.4231 11.2701 14.35C11.0141 13.9 10.8159 13.4196 10.6801 12.92C10.4537 12.9354 10.2265 12.9354 10.0001 12.92C9.48271 12.9225 8.96762 12.8518 8.47006 12.71C7.86027 12.5435 7.31594 12.1946 6.91006 11.71C6.73277 11.524 6.63387 11.277 6.63387 11.02C6.63387 10.7631 6.73277 10.516 6.91006 10.33C7.55184 10.7164 8.26101 10.9777 9.00006 11.1C9.29495 11.1409 9.59235 11.161 9.89006 11.16C10.0399 11.1702 10.1902 11.1702 10.3401 11.16C10.3469 10.6473 10.414 10.1371 10.5401 9.64002C10.3237 9.65555 10.1064 9.65555 9.89006 9.64002C9.38703 9.64525 8.88567 9.58132 8.40006 9.45002C7.78768 9.28303 7.24029 8.93437 6.83006 8.45002C6.66297 8.25816 6.56756 8.01432 6.56006 7.76002C6.56006 6.91002 8.00006 5.93002 9.93006 5.93002Z" fill="currentColor" data-fill="main"></path>
                                       <path d="M19.85 7.13999C18.8451 6.36791 17.5897 5.99591 16.3264 6.09594C15.0631 6.19597 13.8819 6.76091 13.011 7.6815C12.1402 8.60209 11.6417 9.81292 11.612 11.0798C11.5822 12.3467 12.0233 13.5795 12.85 14.54L9.14 19.4C9.05912 19.5047 8.99984 19.6245 8.96559 19.7523C8.93134 19.8802 8.9228 20.0135 8.94048 20.1447C8.95815 20.2758 9.00168 20.4022 9.06854 20.5164C9.13541 20.6306 9.22428 20.7304 9.33 20.81L9.46 20.91C9.63777 21.0381 9.85088 21.108 10.07 21.11C10.2269 21.1116 10.382 21.0762 10.5227 21.0067C10.6635 20.9372 10.7858 20.8355 10.88 20.71L14.58 15.85C15.2549 16.1711 15.9926 16.3385 16.74 16.34C16.9698 16.3549 17.2002 16.3549 17.43 16.34C18.4343 16.203 19.3754 15.7715 20.1347 15.1001C20.894 14.4287 21.4374 13.5474 21.6963 12.5674C21.9552 11.5875 21.918 10.5528 21.5894 9.59398C21.2608 8.63515 20.6555 7.79515 19.85 7.17999V7.13999ZM19.63 13.41C19.3419 13.7899 18.9815 14.1092 18.5697 14.3494C18.1578 14.5897 17.7025 14.7462 17.23 14.81C16.7585 14.8758 16.2787 14.8469 15.8185 14.725C15.3583 14.603 14.9271 14.3906 14.55 14.1C13.9489 13.6388 13.5071 13.0011 13.2867 12.2762C13.0662 11.5513 13.0781 10.7756 13.3207 10.0578C13.5633 9.34003 14.0243 8.71614 14.6393 8.27358C15.2543 7.83103 15.9923 7.592 16.75 7.58999C17.5419 7.58694 18.3123 7.84726 18.94 8.32999C19.704 8.91293 20.2057 9.77507 20.3351 10.7274C20.4644 11.6796 20.2109 12.6444 19.63 13.41Z" fill="currentColor" data-fill="main"></path>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Crypto Queries</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="gas_tracker" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <g clip-path="url(#clip0_6229_18889)">
                                          <path d="M9.02 7.00005C8.66 7.00005 8.34 7.13005 8.14 7.36005C8 7.53005 7.91999 7.82005 7.94999 8.03005L8.35 10.4701C8.43 10.9301 8.85 11.2401 9.41 11.2401H11.99C12.55 11.2401 12.98 10.9301 13.05 10.4701L13.45 8.03005C13.49 7.81005 13.4 7.52005 13.26 7.35005C13.07 7.12005 12.75 6.99005 12.38 6.99005H8.99L9.02 7.00005ZM11.67 9.74005H9.76L9.55 8.50005H11.87L11.66 9.74005H11.67Z" fill="currentColor"></path>
                                          <path d="M19.04 5.14003L17.96 3.14003C17.76 2.78003 17.31 2.64003 16.94 2.84003C16.58 3.04003 16.44 3.49003 16.64 3.86003L17.63 5.69003V6.25003H15.85C15.52 6.25003 15.21 6.41003 15.03 6.69003C14.85 6.96003 14.81 7.31003 14.93 7.61003L15.8 9.78003C15.91 10.07 16.19 10.25 16.5 10.25H17.64V14.23C17.64 14.51 17.41 14.75 17.12 14.75H15.26L15.53 11.24C15.14 11.02 14.82 10.67 14.65 10.24L14.2 9.11003L13.53 17.75H7.91L6.98 6.25003L13.87 6.21003C13.9 6.13003 13.94 6.06003 13.99 5.99003C14.31 5.51003 14.8 5.18003 15.34 5.06003C15.09 4.86003 14.77 4.75003 14.44 4.75003H6.98C6.58 4.75003 6.19 4.92003 5.91 5.22003C5.63 5.52003 5.49 5.92003 5.52 6.33003L6.4 17.75H5.62C5.21 17.75 4.87 18.09 4.87 18.5C4.87 18.91 5.21 19.25 5.62 19.25H15.81C16.22 19.25 16.56 18.91 16.56 18.5C16.56 18.09 16.22 17.75 15.81 17.75H15.02L15.14 16.23C15.14 16.23 15.19 16.25 15.22 16.25H17.12C18.23 16.25 19.14 15.35 19.14 14.23V5.50003C19.14 5.38003 19.11 5.25003 19.05 5.14003H19.04ZM16.6 7.75003H17.63V8.75003H17L16.6 7.75003Z" fill="currentColor"></path>
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_6229_18889">
                                             <rect width="24" height="24" fill="white"></rect>
                                          </clipPath>
                                       </defs>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Gas Tracker</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div id="gating" class="flex items-center justify-between rounded py-2 px-3 group w-full hover:bg-gray-700 z-[999] cursor-pointer">
                                 <div class="flex flex-1 whitespace-nowrap items-center text-ellipsis hover:text-gray-100 cursor-pointer gap-4 text-sm font-medium">
                                    <div class="w-[6px] h-[6px] min-w-[6px] min-h-[6px] rounded-full bg-gray-300"></div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] group-hover:text-gray-100">
                                       <g clip-path="url(#clip0_6101_17485)">
                                          <path d="M11.71 2.25002H10.29C8.7658 2.25266 7.3048 2.85931 6.22703 3.93707C5.14927 5.01484 4.54262 6.47583 4.53998 8.00002V17.42C4.53998 18.038 4.78546 18.6306 5.22242 19.0676C5.65938 19.5045 6.25202 19.75 6.86998 19.75H11V16.55C10.9961 15.8139 11.2631 15.1021 11.75 14.55V3.75002C12.8771 3.75002 13.9582 4.19778 14.7552 4.99481C15.5522 5.79184 16 6.87285 16 8.00002V10.43H17.5V8.00002C17.4987 7.24191 17.3477 6.49153 17.0558 5.79188C16.7639 5.09224 16.3367 4.45711 15.7988 3.92291C15.2609 3.38871 14.6228 2.96595 13.9211 2.67888C13.2195 2.39181 12.4681 2.24607 11.71 2.25002ZM10.25 18.25H6.86998C6.75766 18.2554 6.64542 18.238 6.54005 18.1987C6.43469 18.1594 6.33841 18.0991 6.25705 18.0215C6.17569 17.9439 6.11095 17.8506 6.06676 17.7472C6.02257 17.6438 5.99985 17.5325 5.99998 17.42V8.00002C5.99993 6.87974 6.4422 5.80476 7.2306 5.00887C8.019 4.21298 9.08975 3.76056 10.21 3.75002L10.25 18.25Z" fill="currentColor" data-fill="main"></path>
                                          <path d="M20.15 14.52V13.44C20.15 12.9705 19.9635 12.5203 19.6316 12.1884C19.2997 11.8565 18.8495 11.67 18.38 11.67H15.62C15.1506 11.67 14.7004 11.8565 14.3684 12.1884C14.0365 12.5203 13.85 12.9705 13.85 13.44V14.52C13.5018 14.6337 13.1983 14.8544 12.9828 15.1507C12.7673 15.4469 12.6509 15.8036 12.65 16.17V20.17C12.65 20.6368 12.8355 21.0844 13.1655 21.4145C13.4956 21.7446 13.9432 21.93 14.41 21.93H19.59C19.8212 21.93 20.05 21.8845 20.2635 21.796C20.4771 21.7076 20.6711 21.5779 20.8345 21.4145C20.998 21.2511 21.1276 21.057 21.2161 20.8435C21.3045 20.63 21.35 20.4011 21.35 20.17V16.17C21.3492 15.8036 21.2327 15.4469 21.0172 15.1507C20.8018 14.8544 20.4983 14.6337 20.15 14.52ZM15.62 13.17H18.38C18.4516 13.17 18.5203 13.1984 18.5709 13.2491C18.6216 13.2997 18.65 13.3684 18.65 13.44V14.44H15.35V13.44C15.35 13.4045 15.357 13.3694 15.3706 13.3367C15.3841 13.3039 15.404 13.2741 15.4291 13.2491C15.4542 13.224 15.4839 13.2041 15.5167 13.1905C15.5495 13.177 15.5846 13.17 15.62 13.17ZM19.85 20.17C19.85 20.2389 19.8226 20.3051 19.7739 20.3538C19.7251 20.4026 19.659 20.43 19.59 20.43H14.41C14.3411 20.43 14.2749 20.4026 14.2262 20.3538C14.1774 20.3051 14.15 20.2389 14.15 20.17V16.17C14.1526 16.1028 14.1811 16.0392 14.2296 15.9926C14.2781 15.9459 14.3428 15.9199 14.41 15.92H19.59C19.6573 15.9199 19.7219 15.9459 19.7704 15.9926C19.8189 16.0392 19.8474 16.1028 19.85 16.17V20.17Z" fill="currentColor" data-fill="main"></path>
                                          <path d="M18 17.67C18 17.4048 17.8946 17.1504 17.7071 16.9629C17.5196 16.7753 17.2652 16.67 17 16.67C16.7348 16.67 16.4804 16.7753 16.2929 16.9629C16.1054 17.1504 16 17.4048 16 17.67C16.0033 17.854 16.0574 18.0335 16.1562 18.1888C16.255 18.344 16.3947 18.469 16.56 18.55L16 19.67H18L17.44 18.55C17.6053 18.469 17.745 18.344 17.8438 18.1888C17.9426 18.0335 17.9967 17.854 18 17.67Z" fill="currentColor" data-fill="main"></path>
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_6101_17485">
                                             <rect width="24" height="24" fill="white"></rect>
                                          </clipPath>
                                       </defs>
                                    </svg>
                                    <div><a class="bg-gradient-to-r text-transparent bg-clip-text from-gray-300 to-gray-300">Gating</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
        </div>
      </div>
    </div>
    
        
      
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js">
    </script>
</body>