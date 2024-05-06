function SendRequestAPIDiscord($serverid, $reference) {
  if ($serverid == null) {
      return response()->json([
          'error' => true,
          'code' => 500,
          'message' => 'An error occurred.'
      ]);
  } else {
      $discordGlobal = DB::table('discord_global')->where('id', $serverid)->first();
      if ($discordGlobal) {
          $lastRequestTime = Cache::get('last_request_time');
          $cachedChannels = Cache::get('last_request_channels');
          $cachedRoles = Cache::get('last_request_roles');

          if ($reference == "channels") {
              if ($lastRequestTime && time() - $lastRequestTime < 30 && $cachedChannels) {
                  return response()->json([
                      'error' => false,
                      'code' => 200,
                      'message' => 'Server ID found in the discord_global table.',
                      'channels' => $cachedChannels
                  ]);
              } else {
                  $response = Http::withHeaders([
                      'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN')
                  ])->timeout(30)->get("https://discord.com/api/v10/guilds/$serverid/channels");

                  if ($response->successful()) {
                      $channels = $response->json();
                      Cache::put('last_request_time', time(), 5);
                      Cache::put('last_request_channels', $channels, 5);
                  } else {
                      $channels = $cachedChannels;
                      echo "Anciennes données";
                  }

                  return response()->json([
                      'error' => false,
                      'code' => 200,
                      'message' => 'Server ID found in the discord_global table.',
                      'channels' => $channels
                  ]);
              }
          } else if ($reference == "roles") {
              if ($lastRequestTime && time() - $lastRequestTime < 30 && $cachedRoles) {
                  return response()->json([
                      'error' => false,
                      'code' => 200,
                      'message' => 'Server ID found in the discord_global table.',
                      'roles' => $cachedRoles
                  ]);
              } else {
                  $response = Http::withHeaders([
                      'Authorization' => 'Bot ' . env('DISCORD_BOT_TOKEN')
                  ])->timeout(30)->get("https://discord.com/api/v10/guilds/$serverid/roles");

                  if ($response->successful()) {
                      $roles = $response->json();
                      Cache::put('last_request_time', time(), 5);
                      Cache::put('last_request_roles', $roles, 5);
                  } else {
                      $roles = $cachedRoles;
                      echo "Anciennes données";
                  }

                  return response()->json([
                      'error' => false,
                      'code' => 200,
                      'message' => 'Server ID found in the discord_global table.',
                      'roles' => $roles
                  ]);
              }
          }

          return response()->json([
              'error' => false,
              'code' => 200,
              'message' => 'Server ID found in the discord_global table.'
          ]);
      } else {
          return response()->json([
              'error' => true,
              'code' => 404,
              'message' => 'Server ID not found in the discord_global table.'
          ]);
      }
  }
}