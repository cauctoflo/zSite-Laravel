@php


   $url = request()->url();
   $serverid = explode('/', $url)[4];


   $module = new App\Models\ModuleAccueil();
   $botDashboard = $module->get();   
   


   $guildId = $serverid; // Assuming $serverid contains the guild ID

   /**
     * Récupère les canaux Discord d'une guilde spécifique.
     *
     * @param string $guildId L'identifiant de la guilde.
     * @return \Illuminate\Http\JsonResponse La liste des noms des canaux.
     */
     function getDiscordChannels($guildId)
   {
      try {
         $response = Http::withHeaders([
            'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), // Obtient le jeton du bot Discord à partir du fichier .env
         ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/channels");
         
         $channels = $response->json();
         
         $channelNames = array_column($channels, 'name');
         $Type = array_column($channels, 'type');
         $Id = array_column($channels, 'id');

         $channelData = [];
         for ($i = 0; $i < count($channelNames); $i++) {
            if ($Type[$i] == 0) { // Check si le type du canal est un texte
               $channelData[] = [
                 'name' => $channelNames[$i],
                 'type' => $Type[$i],
                 'id' => $Id[$i]
               ];
            }
         }

         return response()->json(['channelData' => $channelData]);
         
      } catch (\Exception $e) {
         return response()->json(['error' => $e->getMessage()], 500);
      }
   }

   function getDiscordRoles($guildId)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), // Obtient le jeton du bot Discord à partir du fichier .env
            ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/roles");
            
            $roles = $response->json();
            
            $roleNames = array_column($roles, 'name');
            
            return response()->json(['roleNames' => $roleNames]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


function getDiscordRoleName($guildId, $roleId)
{
   try {
      $response = Http::withHeaders([
         'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'),
      ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/roles");

      $roles = $response->json();

      foreach ($roles as $role) {
         if ($role['id'] === $roleId) {
            return $role['name'];
         }
      }

      return null;
   } catch (\Exception $e) {
      return response()->json(['error' => $e->getMessage()], 500);
   }
}

   /**
    * Get the ID of a specific Discord role.
    *
    * @param string $guildId The guild ID
    * @param string $roleName The role name 
    * @return int|null The role ID, or null if not found
    */
    function getDiscordRoleId($guildId, $roleName) {

        $roles = getDiscordRoles($guildId)->original['roleNames'] ?? [];

        foreach ($roles as $role) {
            if ($role === $roleName) {
            
            $response = Http::withHeaders([
                'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN'), 
            ])->timeout(30)->get("https://discord.com/api/v10/guilds/{$guildId}/roles");

            $roles = $response->json();
            
            return array_column($roles, 'id', 'name')[$roleName]; 
            }
        }

        return null;

    }
   

/**
 * Get the ID of a specific Discord channel.
 *
 * @param string $guildId The guild ID
 * @param string $channelName The channel name
 * @return int|null The channel ID, or null if not found
 */
 function getDiscordChannelId($guildId, $channelName)
{

    $response = Http::withHeaders([
    'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN')
    ])->timeout(30)->get("https://discord.com/api/v10/guilds/$guildId/channels");

    $channels = $response->json();

    foreach ($channels as $channel) {
        if ($channel['name'] === $channelName) {
        return $channel['id'];
        }
    }

return null;
}




     
     


   $channelNames = getDiscordChannels($guildId); 
   $RoleName = getDiscordRoles($guildId); 



   


// var_dump($botDashboard);
$bvnMessage = '';
      $bvnChannel = '';
      $bvnType = '';
      $bvnToggle = '';
      $bvnRole = '';
      $bvnLog = '';
      $bmpMessage = '';
      $bmpChannel = '';
      $bmpType = '';
      $bmpToggle = '';
      $bmpRole = '';
      $bmpLog = '';
      $aurMessage = '';
      $aurChannel = '';
      $aurType = '';
      $aurToggle = '';
      $aurRole = '';
      $aurLog = '';

      foreach ($botDashboard as $discords) {
         if ($discords->id == $serverid) {
             if ($discords->module == 'Bvn') {
               $bvnsChannel = getDiscordChannels($serverid, $discords->channel);
               $bvnRole = getDiscordRoleName($serverid, $discords->role);
               
               foreach ($bvnsChannel->original['channelData'] as $channelName) {
                  if ($channelName['id'] == $discords->channel) {
                     $bvnChannel = $channelName['name'];
                  }
                  if ($channelName['id'] == $discords->log) {
                     $bvnLog = $channelName['name'];
                  }                  
                  else {
                     $aurLog = 'Erreur ! Contacté un administrateur';
                     $aurChannel = 'Erreur ! Contacté un administrateur';
                  
                  }
               }



               $bvnMessage = $discords->message;
               $bvnType = $discords->type;
               $bvnToggle = $discords->toggle;
             } elseif ($discords->module == 'BMP') {

               $bmpsChannel = getDiscordChannels($serverid, $discords->channel);
               $bmpRole = getDiscordRoleName($serverid, $discords->role);
               
               foreach ($bmpsChannel->original['channelData'] as $channelName) {
                  if ($channelName['id'] == $discords->channel) {
                     $bmpChannel = $channelName['name'];
                  }
                  if ($channelName['id'] == $discords->log) {
                     $bmpLog = $channelName['name'];
                  }
                  else {
                     $aurLog = 'Erreur ! Contacté un administrateur';
                     $aurChannel = 'Erreur ! Contacté un administrateur';
                  
                  }
               }

               $bmpMessage = $discords->message;
               $bmpType = $discords->type;
               $bmpToggle = $discords->toggle;
             } elseif ($discords->module == 'Aur') {
               $aursChannel = getDiscordChannels($serverid, $discords->channel);
               $aurRole = getDiscordRoleName($serverid, $discords->role);

               foreach ($aursChannel->original['channelData'] as $channelName) {
                  if ($channelName['id'] == $discords->channel) {
                     $aurChannel = $channelName['name'];
                  }
                  if ($channelName['id'] == $discords->log) {
                     $aurLog = $channelName['name'];
                  }
                  else {
                     $aurLog = 'Erreur ! Contacté un administrateur';
                     $aurChannel = 'Erreur ! Contacté un administrateur';
                  
                  }
               }
               $aurMessage = $discords->message;
               $aurType = $discords->type;
               $aurToggle = $discords->toggle;
             }
         }
      }
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
                                  {{ $bvnChannel }}
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


                                    @foreach ($channelNames->original['channelData'] as $channelName)


                                
                                    <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                       <input type="radio" id="channel" name="channel1" value="{{ $channelName['name'] }}" onclick="">
                                       {{ $channelName['name'] }}
                                    </label>
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
                                 {{ $bvnRole }}
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
                                    @foreach ($RoleName->original['roleNames'] as $channelName)
                                    <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                       <input type="radio" id="role" name="role" value="{{ $channelName }}" onclick="">
                                       {{ $channelName }}
                                    </label>
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
                                    {{ $bvnLog }}
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
                                       @foreach ($channelNames->original['channelData'] as $channelName)
                                       <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                          <input type="radio" id="channel3" name="channel3" value="{{ $channelName['name'] }}" onclick="">
                                          {{ $channelName['name'] }}
                                       </label>
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
                           id="role" placeholder="" value="" rows="1">{{ $bvnMessage }}</textarea>
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
                                 </ul>
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
      <div id="container" class="bg-custom-color mt-32 p-4 mx-auto max-w-[60rem] overflow-y-hidden w-auto   rounded-lg">

         <form action="accueil/Aur/save" method="POST" enctype="multipart/form-data">
            <input name="bvn" class="hidden" id="module" type="text" placeholder="bvn" value="BVN">
   
            @csrf
            <div class="flex items-center justify-center">
               <h1 class="text-gray-400 font-bold text-2xl text-center mb-12">Configuration du départ d'un membre</h1>
            </div>
            <div class="flex items-center justify-center w-[45rem] text-center mx-auto">
               <p class="text-gray-400 mb-12">
                  Envoyez automatiquement des messages lorsque vos membres quitte votre serveurs.
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
                                    {{ $aurChannel }}

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
                                          <input type="radio" id="channel" name="channel1" value="Aucun" onclick="">
                                          Aucun
                                       </label>
                                       @foreach ($channelNames->original['channelData'] as $channelName)
                                       <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                          <input type="radio" id="channel" name="channel1" value="{{ $channelName['name'] }}" onclick="">
                                          {{ $channelName['name'] }}
                                       </label>
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
   
                     <div class="hidden">
                        <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                           <label class="block text-gray-400 font-bold mb-2" for="number">
                              Rôle
                           </label>
                           <p class="text-red-500 text-xs italic mt-2">Role ID incorect </p>
   
                           <div class="relative inline-block text-left ">
                              <div class="group">
                                 <button type="button"
                                    class="inline-flex justify-center items-center w-[17rem] rounded-xl px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                    {{ $aurLog }}
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
                                          <input type="radio" id="channel" name="channel1" value="Aucun" onclick="">
                                          Aucun
                                       </label>
                                       @foreach ($RoleName->original['roleNames'] as $channelName)
                                       <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                          <input type="radio" id="role" name="role" value="" onclick="">
                                          {{ $channelName }}
                                       </label>
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
   
                              <div class="relative inline-block text-left ">
                                 <div class="group">
                                    <label for="channel" class="inline-flex justify-center items-center w-[17rem] rounded-xl px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 cursor-pointer">
                                       {{ $aurLog }}
                                       <!-- Dropdown arrow -->
                                       <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                          <path fill-rule="evenodd" d="M10 12l-5-5h10l-5 5z" />
                                       </svg>
                                    </label>
   
                                    <!-- Dropdown menu -->
                                    <div class="absolute left-0 w-[17rem] max-h-[10rem] overflow-y-auto text-center origin-top-left bg-gray-900 divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                       <div class="py-4 -mt-4">
                                          <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer ">
                                             <input type="radio" id="channel" name="channel1" value="Aucun" onclick="">
                                             Aucun
                                          </label>
                                          @foreach ($channelNames->original['channelData'] as $channelName)
                                          <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                             <input type="radio" id="channel3" name="channel3" value="{{ $channelName['name'] }}" onclick="">
                                             {{ $channelName['name'] }}
                                          </label>
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
                              id="role" placeholder="" value="" rows="1">{{ $message }}</textarea>
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
                                    </ul>
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
         
         
         <div id="container" class="bg-custom-color mt-32 p-4 mx-auto max-w-[60rem] overflow-y-hidden w-auto   rounded-lg">

         <form action="accueil/BMP/save" method="POST" enctype="multipart/form-data">
            <input name="bvn" class="hidden" id="module" type="text" placeholder="bvn" value="BVN">
   
            @csrf
            <div class="flex items-center justify-center">
               <h1 class="text-gray-400 font-bold text-2xl text-center mb-12">Configuration de message privée</h1>
            </div>
            <div class="flex items-center justify-center w-[45rem] text-center mx-auto">
               <p class="text-gray-400 mb-12">
                  Envoyez automatiquement des messages privés lorsque vos membres rejoint votre serveurs.
               </p>
            </div>
   
            <div class="w-full pt-10 dark:bg-gray-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
               <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
   
                  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                     <div class="hidden">
                        <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                           <label class="block text-gray-400 font-bold mb-2" for="number">
                              Channel
                           </label>
                            {{-- <p class="text-red-500 text-xs italic mt-2">Role ID incorect</p> --}}
   
                           <div class="relative inline-block text-left ">
                              <div class="group">
                                 <button type="button"
                                    class="inline-flex justify-center items-center w-[17rem] rounded-xl px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                    Choisir un Channel
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
                                          <input type="radio" id="channel" name="channel1" value="Aucun" onclick="">
                                          Aucun
                                       </label>
                                       @foreach ($channelNames->original['channelData'] as $channelName)
                                       <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                          <input type="radio" id="channel" name="channel1" value="" onclick="">
                                          {{ $channelName['name'] }}
                                       </label>
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
   
                     <div class="hidden">
                        <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                           <label class="block text-gray-400 font-bold mb-2" for="number">
                              Rôle
                           </label>
                           <p class="text-red-500 text-xs italic mt-2">Role ID incorect </p>
   
                           <div class="relative inline-block text-left ">
                              <div class="group">
                                 <button type="button"
                                    class="inline-flex justify-center items-center w-[17rem] rounded-xl px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                    Choisir un Channel
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
                                          <input type="radio" id="channel" name="channel1" value="Aucun" onclick="">
                                          Aucun
                                       </label>
                                       @foreach ($RoleName->original['roleNames'] as $channelName)
                                       <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                          <input type="radio" id="role" name="role" value="" onclick="">
                                          {{ $channelName }}
                                       </label>
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
   
                     <div class="hidden">
                        <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                           <label class="block text-gray-400 font-bold mb-2" for="number">
                              Channel Log
                           </label>

   
                              <div class="relative inline-block text-left ">
                                 <div class="group">
                                    <label for="channel" class="inline-flex justify-center items-center w-[17rem] rounded-xl px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 cursor-pointer">
                                       Choisir un Channel
                                       <!-- Dropdown arrow -->
                                       <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                          <path fill-rule="evenodd" d="M10 12l-5-5h10l-5 5z" />
                                       </svg>
                                    </label>
   
                                    <!-- Dropdown menu -->
                                    <div class="absolute left-0 w-[17rem] max-h-[10rem] overflow-y-auto text-center origin-top-left bg-gray-900 divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                                       <div class="py-4 -mt-4">
                                          <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer ">
                                             <input type="radio" id="channel" name="channel1" value="Aucun" onclick="">
                                             Aucun
                                          </label>
                                          @foreach ($channelNames->original['channelData'] as $channelName)
                                          <label class="block px-4 py-2 text-sm text-white hover:bg-gray-500 cursor-pointer">
                                             <input type="radio" id="channel3" name="channel3" value="" onclick="">
                                             {{ $channelName['name'] }}
                                          </label>
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
                              id="role" placeholder="" value="" rows="1">{{ $message }}</textarea>
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
                                    </ul>
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