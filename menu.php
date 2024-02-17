


<?php
use TheCodingMachine\Gotenberg\Client;
use TheCodingMachine\Gotenberg\DocumentFactory;
use TheCodingMachine\Gotenberg\HTMLRequest;

require_once('vendor\autoload.php');

ob_start();
require_once('validformuler.php');
$content = ob_get_clean();

$client = new Client('http://localhost:3000', new \Http\Adapter\Guzzle6\Client());
$index = DocumentFactory::makeFromString('index.html', $content);
$request = new HTMLRequest($index);
$client->store($request, 'pdf/facture.pdf');

header("Location: menu.php");

