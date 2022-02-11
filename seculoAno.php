<?php

require 'funcaoSeculoAno.php';

//variável que recebe o ano para calculo do século
$recebeAno = getopt("a:");
$ano = intval($recebeAno["a"]);
echo seculoAno($ano);

//retorna o século na linha de comando
