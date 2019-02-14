<?php 

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/Scraper.php';

use Clue\React\Buzz\Browser;

$loop = \React\EventLoop\Factory::create();

//$client = new Browser($loop);
//$client->get('https://www.pexels.com/photo/kitten-cat-rush-lucky-cat-45170/')->then(function(\Psr\Http\Message\ResponseInterface $response) {
//    echo $response->getBody();
//});

$scraper = new Scraper(new Browser($loop));
echo '123';
$scraper->scrape([
    'https://www.pexels.com/photo/adorable-animal-blur-cat-617278/'
]);
echo '123';
$loop->run();

?>