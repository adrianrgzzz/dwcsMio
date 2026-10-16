<?php

class Direccion
{
    private string $calle;
    private string $ciudad;
    private int $codigoPostal;

    public function __construct(string $calle, string $ciudad, int $codigoPostal)
    {
        $this->calle = $calle;
        $this->ciudad = $ciudad;
        $this->codigoPostal = $codigoPostal;
    }

    public function getCalle(): string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): void
    {
        $this->calle = $calle;
    }

    public function getCiudad(): string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): void
    {
        $this->ciudad = $ciudad;
    }

    public function getCodigoPostal(): int
    {
        return $this->codigoPostal;
    }

    public function setCodigoPostal(int $codigoPostal): void
    {
        $this->codigoPostal = $codigoPostal;
    }
}

class Persona
{
    private string $nombre;
    private int $edad;
    private Direccion $direccion;

    public function __construct(string $nombre, int $edad, Direccion $direccion)
    {
        $this->nombre = $nombre;
        $this->setEdad($edad);
        $this->direccion = $direccion;
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

    public function getDireccion(): Direccion
    {
        return $this->direccion;
    }

    public function setDireccion(Direccion $direccion): void
    {
        $this->direccion = $direccion;
    }

    public function mostrarDireccionCompleta(): string
    {
        return "{$this->direccion->getCalle()}, {$this->direccion->getCodigoPostal()} {$this->direccion->getCiudad()}";
    }
}

$dir = new Direccion("Calle Mayor 12", "Ourense", 32001);
$persona = new Persona("Adrián", 20, $dir);

echo $persona->getNombre() . "<br>";
echo "Dirección: " . $persona->mostrarDireccionCompleta();