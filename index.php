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

// creo componenti figli CIBO, GIOCHI, CUCCE di PRODOTTI

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

$products = [new Cibo("Cibo per cani", 15.99, "https://www.lasorgente.net/594033-large_default/scatolette-cani-miglior-cane-gr150-carni-bianche-carote.jpg", new Cane()), new Cibo("Cibo per gatti", 15.99, "https://petmarket.it/12695-thickbox_default/mistercat-kitten-con-pollo-gr100.jpg", new Gatto()), new Giochi("Pallina", 9.99, "https://arcaplanet.vtexassets.com/arquivos/ids/269841/yes-pallina-da-calcio.jpg?v=637837140110500000", new Cane()), new Giochi("Pallina", 9.99, "https://arcaplanet.vtexassets.com/arquivos/ids/269841/yes-pallina-da-calcio.jpg?v=637837140110500000", new Gatto()), new Cucce("Cuccia cane", 44.99, "https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-11-10t095241.428_1.png?width=700&height=700&store=default&image-type=image", new Cane()), new Cucce("Cuccia gatto", 44.99, "https://m.media-amazon.com/images/I/71hK+WBbldL._AC_UF894,1000_QL80_.jpg", new Gatto())];

var_dump($products);

echo "<br><br>";

$cibo_cane = new Cibo("Cibo per cani", 15.99, "https://www.lasorgente.net/594033-large_default/scatolette-cani-miglior-cane-gr150-carni-bianche-carote.jpg", new Cane());
var_dump($cibo_cane);


echo "<br><br>";

$cibo_gatto = new Cibo("Cibo per gatti", 15.99, "https://petmarket.it/12695-thickbox_default/mistercat-kitten-con-pollo-gr100.jpg", new Gatto());
var_dump($cibo_gatto);

echo "<br><br>";

$giochi_cane = new Giochi("Pallina", 9.99, "https://arcaplanet.vtexassets.com/arquivos/ids/269841/yes-pallina-da-calcio.jpg?v=637837140110500000", new Cane());
var_dump($giochi_cane);

echo "<br><br>";

$giochi_gatto = new Giochi("Pallina", 9.99, "https://arcaplanet.vtexassets.com/arquivos/ids/269841/yes-pallina-da-calcio.jpg?v=637837140110500000", new Gatto());
var_dump($giochi_gatto);

echo "<br><br>";

$cucce_cane = new Cucce("Cuccia cane", 44.99, "https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-11-10t095241.428_1.png?width=700&height=700&store=default&image-type=image", new Cane());
var_dump($cucce_cane);

echo "<br><br>";

$cucce_gatto = new Cucce("Cuccia gatto", 44.99, "https://m.media-amazon.com/images/I/71hK+WBbldL._AC_UF894,1000_QL80_.jpg", new Gatto());
var_dump($cucce_gatto);
