<?php

namespace Tests\Feature;

use Tests\TestCase;
use ohali\OAuth2\Client\Provider\Exception\DiscordIdentityProviderException;

class DiscordsTest extends TestCase
{
    /**
     * Test if the DiscordIdentityProviderException is thrown with the correct error message.
     */
    public function test_discord_identity_provider_exception(): void
    {
        $this->expectException(DiscordIdentityProviderException::class);
        $this->expectExceptionMessage('Invalid "code" in request.');

        // Replace the URL with the actual URL you want to test
        $response = $this->get('http://127.0.0.1:8000/tests?code=tqtWFGT2sEG4Diza218roXB4VvG3Ka');
        
        // Add any additional assertions you want to make on the response
        // For example, you can assert the status code
        $response->assertStatus(500);
    }
}