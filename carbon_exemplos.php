<?php


require_once('vendor/autoload.php');

use Carbon\Carbon;

date_default_timezone_set('America/Sao_paulo');

echo 'Olimpíadas: '.
    Carbon::createFromDate(2024)->addYears(4)->year.
    '<br>';
echo {
    echo 'aula';
}
echo '<br>';

$nascimento = Carbon::createFromDate('2010,07,23');
echo 'Diferença de data:'
    Carbon::now()->diff($nascimento);

