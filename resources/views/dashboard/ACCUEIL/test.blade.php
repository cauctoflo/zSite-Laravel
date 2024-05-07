@php 

$url = request()->url();
$serverid = explode('/', $url)[4];

use Illuminate\Support\Facades\Log;
function SendRequestAPIDiscord($serverid, $reference) {
    $cacheKey = 'discord_api_' . $serverid;
    $cacheDuration = 60; // 1 minute

    // Check if the cache exists
    if (Cache::has($cacheKey)) {
        $cachedData = Cache::get($cacheKey);

        // Check if the cache is still valid
        if (time() - $cachedData['timestamp'] < $cacheDuration) {
            return $cachedData['response'];
        }
    }

    // Wait for 10 seconds if the previous request was made less than 1 minute ago
    if (Cache::has('discord_api_last_request')) {
        $lastRequestTimestamp = Cache::get('discord_api_last_request');
        if (time() - $lastRequestTimestamp < 60) {
            sleep(10);
        }
    }

    // Make the API request and store the response in the cache
    if ($reference === 'channel') {
        $response = Http::withHeaders([
            'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), // Obtient le jeton du bot Discord à partir du fichier .env
         ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$serverid}/channels");
        Log::info('API request made: Server ID - ' . $serverid . ', Reference - ' . $reference .  ', Response - ' . $response);

        $channels = $response->json();
        if (!is_array($channels)) {
            $channels = [];
        }
        return $channels;
    } else if ($reference === 'role') {
        $response = Http::withHeaders([
            'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), // Obtient le jeton du bot Discord à partir du fichier .env
         ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$serverid}/roles");
        Log::info('API request made: Server ID - ' . $serverid . ', Reference - ' . $reference .  ', Response - ' . $response);

        $role = $response->json();
        if (!is_array($role)) {
            $role = [];
        }
        return $role;
    }

    Cache::put($cacheKey, [
        'timestamp' => time(),
        'response' => $response,
    ], $cacheDuration);

    // Update the last request timestamp
    Cache::put('discord_api_last_request', time(), $cacheDuration);

    // Log the API request

    return $response;
}

$channels = SendRequestAPIDiscord($serverid, 'channel');


foreach ($channels as $channel) {
    echo "Name: " . $channel['name'] . ", Type: " . $channel['type'] . ", ID: " . $channel['id'] . "<br>";
}


$roles = SendRequestAPIDiscord($serverid, 'role');
foreach ($roles as $channel) {
    echo "Name: " . $channel['name'] . ", ID: " . $channel['id'] . "<br>";
}






$columns = Schema::getColumnListing('module_accueil');
$table = ['Bvn' => []];

foreach ($columns as $column) {
    $value = DB::table('module_accueil')->where('module', 'Bvn')->where('id', $serverid)->value($column);
    $table['Bvn'][$column] = $value;
}
@endphp






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
      @vite(['resources/css/app.css', 'resources/js/app.js']) 
	  <link rel="stylesheet" href="/app.css">

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


      <div class="xl:ml-[4rem] md:ml-[4rem] lg:ml-[4rem]  sm-ml-10 z-99  ">

      <div id="container" class="bg-custom-color mt-32 p-4 mx-auto max-w-[60rem] overflow-y-hidden w-auto   rounded-lg">

      <form action="accueil/Bvn/save" method="POST" enctype="multipart/form-data">
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

         <div class="w-full pt-10 dark:bg-gray-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">

               <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                  <div class="">
                     <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                        <label class="block text-gray-400 font-bold mb-2" for="number">
                           Channel
                        </label>
                         {{-- <p class="text-red-500 text-xs italic mt-2">Role ID incorect</p> --}}

                        <div class="relative inline-block text-left ">
                           <div class="group">
                              <button type="button"
                                 class="inline-flex justify-center items-center w-[17rem] rounded-xl px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                @foreach ($table as $key => $values)
                                    @if ($key === 'Bvn')

                                            @foreach ($values as $column => $value)
                                                @if ($column === 'channel')
                                                    
                                                    @foreach ($channels as $channel)
                                                    @if ($channel['id'] === $value)
                                                        {{ $channel['name'] }}
                                                    @endif

                                                   
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        
                                        @endif
                                @endforeach
                                 <!-- Dropdown arrow -->
                                 <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 12l-5-5h10l-5 5z" />
                                 </svg>
                              </button>

                              <!-- Dropdown menu -->
                              <div
                                 class="absolute left-0 w-[17rem] max-h-[10rem] overflow-y-auto text-center  origin-top-left bg-gray-900 divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                 <div class="py-4 -mt-4">
                                    <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer ">
                                       <input type="radio" id="channel" name="channel1" value="" onclick="">
                                       Aucun
                                    </label>

{{-- 
                                    @foreach ($channelNames->original['channelData'] as $channelName)


                                
                                    <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                       <input type="radio" id="channel" name="channel1" value="{{ $channelName['name'] }}" onclick="">
                                       {{ $channelName['name'] }}
                                    </label>
                                    @endforeach --}}
                                    
                                    @foreach ($channels as $channel)
                                        <label class="block font-thin px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                            <input class="font-thin" type="radio" id="channel" name="channel1" value="{{ $channel['name'] }}" onclick="">
                                            {{ $channel['name'] }}
                                        </label>
                                        {{-- Name: {{ $channel['name'] }}, Type: {{ $channel['type'] }}, ID: {{ $channel['id'] }} <br> --}}
                                    @endforeach

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="">
                     <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                        <label class="block text-gray-400 font-bold mb-2" for="number">
                           Rôle
                        </label>
                         {{-- <p class="text-red-500 text-xs italic mt-2">Role ID incorect</p> --}}

                        <div class="relative inline-block text-left ">
                           <div class="group">
                              <button type="button"
                                 class="inline-flex justify-center items-center w-[17rem] rounded-xl px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                 @foreach ($table as $key => $values)
                                    @if ($key === 'Bvn')

                                            @foreach ($values as $column => $value)
                                                @if ($column === 'role')

                                                @if ($value !== '-')
                                                    @foreach ($roles as $channel)
                                                        @if ($channel['id'] === $value)
                                                            {{ $channel['name'] }}
                                                        @endif
                                                    @endforeach
                                                    
                                                @endif

                                                
                                               
                    
                                                @endif
                                            @endforeach
                                        
                                        @endif
                                @endforeach
                                 <!-- Dropdown arrow -->
                                 <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 12l-5-5h10l-5 5z" />
                                 </svg>
                              </button>

                              <!-- Dropdown menu -->
                              <div
                                 class="absolute left-0 w-[17rem] max-h-[10rem] overflow-y-auto text-center  origin-top-left bg-gray-900 divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                 <div class="py-4 -mt-4">
                                    <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer ">
                                       <input type="radio" id="channel" name="role" value="" onclick="">
                                       Aucun
                                    </label>
                                    @foreach ($roles as $channel)
                                        <label class="block font-thin px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                            <input class="font-thin" type="radio" id="channel" name="channel1" value="{{ $channel['name'] }}" onclick="">
                                            {{ $channel['name'] }}
                                        </label>
                                        {{-- Name: {{ $channel['name'] }}, Type: {{ $channel['type'] }}, ID: {{ $channel['id'] }} <br> --}}
                                    @endforeach
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="">
                     <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                        <label class="block text-gray-400 font-bold mb-2" for="number">
                           Channel Log
                        </label>
                         {{-- <p class="text-red-500 text-xs italic mt-2">Role ID incorect</p> --}}

                           <div class="relative inline-block text-left ">
                              <div class="group">
                                 <label for="channel" class="inline-flex justify-center items-center w-[17rem] rounded-xl px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 cursor-pointer">
                                    @foreach ($table as $key => $values)
                                        @if ($key === 'Bvn')

                                                @foreach ($values as $column => $value)
                                                    @if ($column === 'log')
                                                        {{ $value }}
                                                    @endif
                                                @endforeach
                                            
                                            @endif
                                    @endforeach
                                    <!-- Dropdown arrow -->
                                    <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                       <path fill-rule="evenodd" d="M10 12l-5-5h10l-5 5z" />
                                    </svg>
                                 </label>

                                 <!-- Dropdown menu -->
                                 <div class="absolute left-0 w-[17rem] max-h-[10rem] overflow-y-auto text-center origin-top-left bg-gray-900 divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                    <div class="py-4 -mt-4">
                                       <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer ">
                                          <input type="radio" id="channel" name="channel3" value="" onclick="">
                                          Aucun
                                       </label>
                                       @foreach ($channels as $channel)
                                       <label class="block font-thin px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                           <input class="font-thin" type="radio" id="channel3" name="channel3" value="{{ $channel['name'] }}" onclick="">
                                           {{ $channel['name'] }}
                                       </label>
                                       {{-- Name: {{ $channel['name'] }}, Type: {{ $channel['type'] }}, ID: {{ $channel['id'] }} <br> --}}
                                   @endforeach
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
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
                           id="role" placeholder="" value="" rows="1">
                           @foreach ($table as $key => $values)
                                @if ($key === 'Bvn')

                                        @foreach ($values as $column => $value)
                                            @if ($column === 'message')
                                                {{ $value }}
                                            @endif
                                        @endforeach
                                    @endif
                            @endforeach
                        
                        </textarea>
                        <p class="text-sm text-gray-500  max-w-96">Rentrez un message qui sera envoyé lors de l'arrivée d'un utilisateur sur votre serveur discord</p>
                        <p><a href="#" class="text-gray-500 hover:text-orange-500" onclick="showSlide()">En savoir plus sur les placeholders</a></p>
                     </div>

                     <div class=" sm:w-12 xl:w-auto fixed right-0 top-24 items-center justify-center mx-auto">
                        <div class="hidden" id="slide">
                           <div class=" mx-auto mt-8 h-screen max-w-[22rem] bg-gray-700 text-white p-6 rounded-lg shadow-md">
                              <h1 class="text-2xl font-bold mb-4"> <span class="text-orange-400 font-bold">zPoq</span> | Placeholders</h1>
                              <div class="mb-8">
                                 <h2 class="text-lg font-semibold mb-2">Informations</h2>
                                 <ul>
                                    <li class="mb-4">
                                       <span class="font-semibold text-red-600">[MEMBER.MENTION]</span><br>
                                       Permet de mentionner le membre !<br>
                                       <span class="italic text-orange-400">Exemple: @.cauctoflo</span>
                                    </li>
                                    <li class="mb-4">
                                       <span class="font-semibold text-red-600">[MEMBER.NAME]</span><br>
                                       Permet d'afficher le nom du membre !<br>
                                       <span class="italic text-orange-400">Exemple: .cauctoflo</span>
                                    </li>
                                    <li class="mb-4">
                                       <span class="font-semibold text-red-600">[DISCORD.NAME]</span><br>
                                       Permet d'afficher le nom du discord !<br>
                                       <span class="italic text-orange-400">Exemple: ✨ zPoq | Discord Support</span>
                                    </li>
                                    <li class="mb-4">
                                       <span class="font-semibold text-red-600">[DISCORD.MEMBERSCOUNT]</span><br>
                                       Permet d'afficher le nombre de membres du discord !<br>
                                       <span class="italic text-orange-400">Exemple: 21</span>
                                    </li>
                                    <li class="mb-4">
                                       <span class="font-semibold text-red-600">[NL]</span><br>
                                       Permet de d'aller à la ligne [NL] ou de sauter une ligne [NL][NL] !<br>
                                       <span class="italic text-orange-400">Exemple: Vous avez été averti !([NL])<br>Par: zPoq([NL][NL])</span>
                                    </li>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <script>
                        function showSlide() {
                          var slide = document.getElementById("slide");
                          slide.classList.toggle("hidden");
                        }
                      </script>
                  </div>
                  <div class="hidden">ac</div>
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
                  </div>
               </div>
            </div>
         </div>
      </form>
      </div>
      

   </body>
      
      
      

            
     
</html>