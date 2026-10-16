<?php

class Persona
{
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): Persona
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getEdad(): int
    {
        
        return $this->edad;
    }

    public function setEdad(int $edad):Persona
    {
        
        $this->edad = $edad;
        return $this;
    }
}