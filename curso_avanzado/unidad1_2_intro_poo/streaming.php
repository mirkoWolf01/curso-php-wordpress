<?php


//Paso 1: Definición de clase base

class Video
{
    private $titulo;
    private $duracion;

    public function __construct($titulo, $duracion)
    {
        $this->titulo = $titulo;
        $this->duracion = $duracion;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function reproducir()
    {
        return "🎬 Reproduciendo: $this->titulo ({$this->duracion} min)";
    }
}

class Serie extends Video
{
    private $temporadas;
    public function __construct($titulo, $duracion, $temporadas)
    {
        parent::__construct($titulo, $duracion);
        $this->temporadas = $temporadas;
    }
    public function  mostrarEpisodios()
    {
        return "📺Serie: {$this->getTitulo()} tiene $this->temporadas temporadas.";
    }
}

class Usuario
{
    private $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function verVideo($video)
    {
        return "$this->nombre está viendo: " . $video->getTitulo();
    }
    public function __destruct()
    {
        echo "<div class='item success'>🔒 Sesión de $this->nombre cerrada</div>";
    }
}








//Instanciamos objetos
$video1 = new Video("Documental histórico", 45);
$serie1 = new Serie("Friends", 30, 10);
$serie2 = new Serie("Lost", 45, 5);
$usuario1 = new Usuario("Cosme");
$usuario2 = new Usuario("Pepito");


//Salidas
echo "<div class='item'>" . $video1->reproducir() . "</div>";
echo "<div class='item'>" . $serie1->reproducir() . "</div>";
echo "<div class='item'>" . $serie1->mostrarEpisodios() . "</div>";
echo "<div class='item'>" . $serie2->reproducir() . "</div>";
echo "<div class='item'>" . $serie2->mostrarEpisodios() . "</div>";
echo "<div class='item'>" . $usuario1->verVideo($video1) . "</div>";
echo "<div class='item'>" . $usuario1->verVideo($serie1) . "</div>";
echo "<div class='item'>" . $usuario1->verVideo($serie2) . "</div>";
echo "<div class='item'>" . $usuario2->verVideo($serie1) . "</div>";
