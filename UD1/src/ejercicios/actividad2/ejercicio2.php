<?php

class Persona
/**
 * geters y seters con hooks
 */
{
    public string $nombre{
        get{
            error_log("Accedo a nombre y puedo hacer otras cosas");
            return $this->nombre;
        }

        set(string $valor){
            error_log("Modifico nombre y puedo hacer otras cosas");
            $this->nombre=$valor;
        }
    }
    public int $edad{
        get=> $this->edad;

        set(int $edad){
            if($edad<0){
                throw new Exception("La edad no puede ser menor a 0");
            }
            $this->edad = $edad;

        }
    }

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->setEdad($edad);
    }

   // public function getNombre(): string
    //{
      //  return $this->nombre;
    // }

    // public function setNombre(string $nombre): Persona
    // {
    //     $this->nombre = $nombre;
    //     return $this;
    // }

    // public function getEdad(): int
    // {
    //     return $this->edad;
    // }

    // public function setEdad(int $edad): Persona
    // {
    //     if ($edad <=0) {
    //         throw new InvalidArgumentException("La edad debe ser un número positivo.");
    //     }
    //     $this->edad = $edad;
    //     return $this;
    // }

    public function esMayorDeEdad(): bool
    {
        return $this->edad >= 18;
    }
}

// Prueba rápida
$pepe = new Persona("Pepe", 30);

var_dump($pepe);

$pepe->nombre;