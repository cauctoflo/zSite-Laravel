<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
        rel='stylesheet'>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js']) <style>
        .logo {
              filter: drop-shadow(0px 0 10px orange);
            }
    </style>
</head>
<body>
    <h1 class="bg-slate-900">adsqijdjdkdlkpdsqkdsqdsqidiqdskkqoskdoksqodkoqskdo</h1>
    <h2>GET Request Parameters:</h2>
    <ul>
        <li>_token: {{ request()->input('_token') }}</li>
        <li>channelid: {{ request()->input('channelid') }}</li>
        <li>module: {{ request()->input('bvn') }}</li>
        <li>roleid: {{ request()->input('roleid') }}</li>
        <li>message: {{ request()->input('message') }}</li>
        <li>file_upload: {{ request()->input('file_upload') }}</li>
    </ul>

    <?php
    $id = request()->input('channelid');
    $module = request()->input('bvn');

    $existingRow = DB::table('module_accueil')->where('id', $id)->where('module', $module)->first();

    if ($existingRow) {
        // Modify existing row
        DB::table('module_accueil')
            ->where('id', $id)
            ->where('module', $module)
            ->update([
                'message' => request()->input('message'),
                'toggle' => 'Activé',
                'type' => 'Message',
                'channel' => request()->input('channelid'),
                'role' => request()->input('roleid'),
                'log' => '-'
            ]);
    } else {
        // Create new row
        DB::table('module_accueil')->insert([
            'id' => $id,
            'module' => $module,
            'message' => request()->input('message'),
            'toggle' => 'Activé',
            'type' => 'Message',
            'channel' => request()->input('channelid'),
            'role' => request()->input('roleid'),
            'log' => '' // Provide a non-null value for 'log' field
        ]);
    }
?>


    

</body>
</html>