<?php

class Persona
{
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->setEdad($edad);
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): void
    {
        if ($edad < 0) {
            throw new InvalidArgumentException("La edad debe ser un número positivo.");
        }
        $this->edad = $edad;
    }

    public function esMayorDeEdad(): bool
    {
        return $this->edad >= 18;
    }
}

// Prueba rápida
$persona = new Persona("Adrián", 20);

echo $persona->getNombre() . " tiene " . $persona->getEdad() . " años.<br>";
echo "¿Es mayor de edad?: " . ($persona->esMayorDeEdad() ? "Sí" : "No") . "<br>";

$persona->setEdad(-16);
echo "Nueva edad: " . $persona->getEdad() . "<br>";
echo "¿Es mayor de edad?: " . ($persona->esMayorDeEdad() ? "Sí" : "No");