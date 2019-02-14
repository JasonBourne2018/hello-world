<?php 

use Clue\React\Buzz\Browser;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\DomCrawler\Crawler;

final class Scraper {
    private $client;

    public function __construct(Browser $client) {
        $this->client = $client;
    }

    public function scrape(array $urls) {
        foreach ($urls as $url) {
            echo '111';
            var_dump($url);
            $this->client->get($url)->then(function (ResponseInterface $response) {
                echo '222';
                
                $this->processResponse((string) $response->getBody());
            });
        }
    }

    private function processResponse(string $html) {
        $crawler = new Crawler($html);
        $imageUrl = $crawler->filter('.image-section__image')->attr('src');
        var_dump($imageUrl);
        echo $imageUrl.PHP_EOL;
    }
}


?>