<?php

use App\Kernel;

require dirname(__DIR__).'/vendor/autoload.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
