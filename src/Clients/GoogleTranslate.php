<?php

namespace App\Models;

use Stevebauman\Translation\Contracts\Client;
use Stevebauman\Translation\Clients\GoogleTranslateApi;
use Illuminate\Contracts\Foundation\Application;
use GuzzleHttp\Client as GuzzleClient;
use App;
class GoogleTranslate implements Client
{
    /** @var TranslateClient */
    protected $client;
    protected $target;

    /**
     * @param TranslateClient $client
     */
    public function __construct(Application $app, GuzzleClient  $guzzle)
    {
        
        $this->client = new GoogleTranslateApi($app, $guzzle);
        
    }

    /**
     * {@inheritdoc}
     */
    public function setSource($source = null)
    {
        return $this->client->setSource($source);
    }

    /**
     * {@inheritdoc}
     */
    public function setTarget($target)
    {
        return $this->client->setTarget($target);
    }

    /**
     * {@inheritdoc}
     */
    public function translate($text)
    {
        return $this->client->translate($text);
    }
}
