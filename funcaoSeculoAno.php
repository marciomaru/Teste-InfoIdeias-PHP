<?php

function seculoAno($ano)
{
    if ($ano < 1) {
        return ' ( >_<*) really? ';
    }

    $seculo = anoMenorIgualCem($ano);

    return "Ano {$ano} = século {$seculo}";
}

function anoMenorIgualCem($ano)
{
    if ($ano <= 100) {
        return 1;
    } else {
        return ultimosDigitosZeros(strval($ano));
    }
}

function ultimosDigitosZeros($ano)
{
    $doisUltimosDigitos = $ano[-2] . $ano[-1];
    if ($doisUltimosDigitos === '00') {
        $contadorAuxiliar = strlen($ano) - 2;
        $seculo = str_split($ano, $contadorAuxiliar);
        return $seculo[0];
    } else {
        return ultimosDigitosNaoZeros($ano);
    }
}

function ultimosDigitosNaoZeros($ano)
{
    $contadorAuxiliar = strlen($ano) - 2;
    $doisPrimeirosDigitos = str_split($ano, $contadorAuxiliar);
    $converteDigitos = intval($doisPrimeirosDigitos[0]);
    $seculo = $converteDigitos + 1;
    return $seculo;
}
