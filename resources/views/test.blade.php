<?php 

use App\Models\UserDiscord;

$id = request()->get('id'); // Replace with the desired ID parameter name

$userDiscord = UserDiscord::where('discord_id', $id)->first();

if ($userDiscord) {
    // Retrieve all information
    $discordId = $userDiscord->discord_id;
    $username = $userDiscord->username;
    $email = $userDiscord->email;

    echo $userDiscord;
} else {
    echo 'User not found';

}