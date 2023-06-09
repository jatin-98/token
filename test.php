<?php

use Jatin\Token;
use Jatin\TokenException;
use Jatin\TokenMiddleware;

require_once __DIR__ . '/vendor/autoload.php';


// for ($i = 0; $i <= 10; $i++) {
// $token = Token::generateToken('jatin');
// echo Token::decode('utgtkXEmwyPg4h3PCaiNNx@ECg+S6WMwesC6QcoS3F1C0hHU6l5dXJXJtzOx2x5uxWgRqddnfX1CO5BbnkJk2A==') . '<br>';
// }


// echo TokenMiddleware::checkToken('j13GGnZHz4mG4XqOo8jEzjUuwcQTd2kbE0T6H8hfF0PuOh0BbcXuKyd+NpuUQqSNU6H1njLA6e+B0HZdRh0SCA==');
// echo checkToken('');


function user(){
    TokenMiddleware::checkToken('j13GGnZHz4mG4XqOo8jEzjUuwcQTd2kbE0T6H8hfF0PuOh0BbcXuKyd+NpuUQqSNU6H1njLA6e+B0HZdRh0SCA==');
}

echo user();
