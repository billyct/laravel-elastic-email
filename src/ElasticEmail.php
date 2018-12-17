<?php

namespace Billyct\ElasticEmail;

use ElasticEmailEnums\ContactSource;
use ElasticEmailEnums\ConsentTracking;
use ElasticEmailClient\ElasticClient;

class ElasticEmail
{
    /**
     * Add contact
     * @param string $email
     * @param string|array $listName
     * @param array $fields
     */
    public static function addContact($email, $listName, $fields = [])
    {
        /** @var \ElasticEmailClient\ElasticClient $client */
        $client = app(ElasticClient::class);

        $client->Contact->Add(
            config('elastic.public_account_id'),
            $email,
            [],
            array_wrap($listName),
            null,
            null,
            ContactSource::ContactApi,
            null,
            null,
            null,
            null,
            true,
            null,
            null,
            $fields,
            null,
            null,
            ConsentTracking::Allow
        );
    }
}
