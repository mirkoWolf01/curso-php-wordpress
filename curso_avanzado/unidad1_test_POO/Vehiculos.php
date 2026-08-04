<?php

class Vehiculos
{

    protected bool $encendido = false;
    protected int $cant_ruedas, $combustible;

    protected string $marca, $color, $modelo;

    public function Encender(): void
    {
        if ($this->encendido) {
            return;
        }

        $this->encendido = true;
        $this->combustible -= 2;
    }

    public function Andar(int $km): void
    {
        assert($km > 0 and $this->encendido);
        $this->combustible -= $km * 5;
    }

    public function Cargar(int $cantidad): void
    {
        assert($cantidad > 0);
        $this->combustible += $cantidad;
    }

    public function Pintar(string $nuevo_color): void
    {
        $this->color = $nuevo_color;
    }

    public function Datos(): string
    {
        return $this->marca . " " . $this->modelo .
            " de color " . $this->color .
            ", con nivel de combustible: " . $this->combustible;
    }
}

class Auto extends Vehiculos
{
    private bool $esTaxi;

    public function __construct(string $marca_new, string $modelo_new, string $color_new, bool $new_taxi = false)
    {
        $this->cant_ruedas =  4;
        $this->combustible = 0;


        $this->esTaxi = $new_taxi;
        $this->marca = $marca_new;
        $this->modelo = $modelo_new;
        $this->color = $color_new;
    }
}


class Moto extends Vehiculos
{

    public function __construct(string $marca_new, string $modelo_new, string $color_new)
    {
        $this->cant_ruedas =  2;
        $this->combustible = 0;

        $this->marca = $marca_new;
        $this->modelo = $modelo_new;
        $this->color = $color_new;
    }

    public function Wheelie(): void
    {
        $this->combustible -= 5;
    }
}

class Camioneta extends Vehiculos
{
    public bool $esTodoterreno;
    public int $km_hechos;

    public function __construct(
        string $marca_new,
        string $modelo_new,
        string $color_new,
        bool $esTodoterreno_new = false
    ) {
        $this->cant_ruedas =  2;
        $this->combustible = 0;
        $this->km_hechos = 0;

        $this->marca = $marca_new;
        $this->modelo = $modelo_new;
        $this->color = $color_new;
        $this->esTodoterreno = $esTodoterreno_new;
    }

    #[Override]
    public function Andar(int $km): void
    {
        parent::Andar($km);
        $this->km_hechos += $km;
    }

    public function KM_hechos(): int
    {
        return $this->km_hechos;
    }

    public function AndarPorCaminoDeTierra(int $km): void
    {
        assert($km > 0 and $this->encendido);
        $this->combustible -= $km * 20;
        $this->km_hechos += $km;
    }
}
