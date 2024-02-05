<?php

class Products
{
    public $nome;
    public $prezzo;
    public $immagini;
    public $categoria;

    public function __construct($nome, $prezzo, $immagini, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagini = $immagini;
        $this->categoria = $categoria;
    }
}

class Categoria
{

    public $icona;

    public function __construct()
    {
        $this->icona = "https://www.emanuelatosti.it/wp-content/uploads/2015/05/Punto_interrogativo.png";
    }
}

// creo le classi figlie CANE e GATTO che mi estendono l'elemento padre CATEGORIA

class Cane extends Categoria
{
    public function __construct()
    {
        $this->icona = "https://thumbs.dreamstime.com/z/dog-icon-puppy-outline-head-cut-out-symbol-sign-isolated-vector-logotype-funny-pictogram-label-cute-cartoon-pet-simple-face-black-223796771.jpg?ct=jpeg";
    }
}

class Gatto extends Categoria
{
    public function __construct()
    {
        $this->icona = "https://previews.123rf.com/images/ironsv/ironsv2003/ironsv200300204/142464426-cat-icon-kitty-vector-icon-cat-symbol-isolated-on-background.jpg";
    }
}

// creo componenti figli CIBO, GIOCHI, CUCCE, SHAMPOO di PRODOTTI

class Cibo extends Products
{
    public function __construct($nome, $prezzo, $immagini, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagini = $immagini;
        $this->categoria = $categoria;
    }
}

class Giochi extends Products
{
    public function __construct($nome, $prezzo, $immagini, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagini = $immagini;
        $this->categoria = $categoria;
    }
}

class Cucce extends Products
{
    public function __construct($nome, $prezzo, $immagini, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagini = $immagini;
        $this->categoria = $categoria;
    }
}

class Shampoo extends Products
{
    public function __construct($nome, $prezzo, $immagini, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagini = $immagini;
        $this->categoria = $categoria;
    }
}

$cane = new Products("Cibo per cani", 15.99, "https://www.lasorgente.net/594033-large_default/scatolette-cani-miglior-cane-gr150-carni-bianche-carote.jpg", new Cane());
var_dump($cane);

echo $cane;

echo "<br><br>";

$gatto = new Products("Cibo per gatti", 15.99, "https://petmarket.it/12695-thickbox_default/mistercat-kitten-con-pollo-gr100.jpg", new Gatto());

echo $gatto;