<?php 

use Wohali\OAuth2\Client\Provider\Discord;
use App\Models\UserDiscord; // Assurez-vous que ce chemin est correct

$provider = new Discord([
    'clientId' => '1117699457778192414',
    'clientSecret' => 'M7-tdx-51BSRNZaxDUoHh426DpJnqXDT',
    'redirectUri' => 'http://127.0.0.1:8000/discord/callback'
]);

$code = request()->code;

if (!empty($code)) {
    try {
        // Get the access token
        $accessToken = $provider->getAccessToken('authorization_code', [
            'code' => $code
        ]);

        // Use the access token to get user details
        $user = $provider->getResourceOwner($accessToken);

        // Insert user details into the database
        $userDiscord = new UserDiscord;
        $userDiscord->username = $user->getUsername();
        $userDiscord->discord_id = $user->getId();
        // Add other fields as necessary
        $userDiscord->save();

        echo 'User details saved successfully';
    } catch (\Exception $e) {
        echo 'Failed to get user details or save to database: ' . $e->getMessage();
    }
} else {
    echo('NULL');
    // Handle the case when the code is missing or invalid
    // You can display an error message or redirect the user to the authorization page
}
?>