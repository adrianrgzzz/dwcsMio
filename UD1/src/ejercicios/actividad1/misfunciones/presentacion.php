<?php
function printPotencia(int $base, int $exponente): string
{
    return "$base<sup>$exponente</sup> = " . potencia($base, $exponente);
}