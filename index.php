<!--Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà-->

<?php

class Movie {

    public $nome;
    public $anno;
    public $genere;

    public function __construct($_nome, $_anno, $_genere){
        $this -> nome = $_nome;
        $this -> anno = $_anno;
        $this -> genere = $_genere;
    }
}



$spider = new Movie ("SpiderMan 1", 2003, "Azione");
$anime = new Movie ("Dragon Ball super hero", 2022, "Anime");

echo "<p>" . $spider -> nome . "</p>";
echo "<p>" . $spider -> anno . "</p>";
echo "<p>" . $spider -> genere . "</p>";

echo "<p>" . $anime -> nome . "</p>";
echo "<p>" . $anime -> anno . "</p>";
echo "<p>" . $anime -> genere . "</p>";
?>