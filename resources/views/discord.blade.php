<?php
public function handleCallback(Request $request)
{
    // ...

    $commonGuilds = $this->getCommonGuilds($accessToken);
    $this->displayGuildIcons($commonGuilds);
    $this->saveUserDetails($user, $userDiscord, $accessToken);

    return view('discord', ['discord' => $commonGuilds]);
}
?>