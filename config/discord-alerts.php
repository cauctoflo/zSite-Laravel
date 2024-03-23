<?php

return [
    /*
     * The webhook URLs that we'll use to send a message to Discord.
     */
    'webhook_urls' => [
        'default' => 'https://discord.com/api/webhooks/1220116355676770466/q3g8nPKd5fGdX-bWGE-6hAviIvgd5GStW2WNzcZZjmHxrp7-53weQkyhR9dLDbcBmbIB',
    ],

    /*
     * This job will send the message to Discord. You can extend this
     * job to set timeouts, retries, etc...
     */
    'job' => Spatie\DiscordAlerts\Jobs\SendToDiscordChannelJob::class,
];
