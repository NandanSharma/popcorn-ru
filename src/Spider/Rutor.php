<?php

namespace App\Spider;

use App\Service\TorrentService;
use App\Spider\Dto\ForumDto;
use App\Spider\Dto\TopicDto;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Psr\Log\LoggerInterface;

class Rutor extends AbstractSpider
{
    public const BASE_URL = 'http://tor-mega.top';

    /** @var Client */
    private $client;

    public function __construct(TorrentService $torrentService, LoggerInterface $logger)
    {
        parent::__construct($torrentService, $logger);
        $this->client = new Client([
            'base_uri' => self::BASE_URL,
            RequestOptions::TIMEOUT => 5,
        ]);
    }
    public function getForumKeys(): array
    {
        return [
            // 1, // Зарубежные Фильмы
        ];
    }

    public function getPage(ForumDto $forum): \Generator
    {
        // yield
        // return false;
    }

    public function getTopic(TopicDto $topic)
    {
    }
}