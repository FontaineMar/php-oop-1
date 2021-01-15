<?php
  class Hotel_Boolean{
    public $num;
    public $type;
    public $num_bed;
    public $floor;
    function __construct($num,$num_bed,$floor,$type = 'normale'){
      $this->num = $num;
      $this->type = $type;
      $this->num_bed = $num_bed;
      $this->floor = $floor;
    }
    function priint(){
      echo 'Numero stanza: ' . $this->num . '<br>';
      echo 'Tipologia: ' . $this->type . '<br>';
      echo 'Numero letti: ' . $this->num_bed . '<br>';
      echo 'Piano: ' . $this->floor . '<br>';
    }
  }


$room1 = new Hotel_Boolean("102","matrimoniale","primo","romantica");
$room2 = new Hotel_Boolean("120","singola","primo");
$room3 = new Hotel_Boolean("207","tripla","secondo");
$room4 = new Hotel_Boolean("230","matrimoniale","secondo",);
$room5 = new Hotel_Boolean("305","doppia matrimoniale","terzo","suite");
$room6 = new Hotel_Boolean("309","tripla","terzo","deluxe");

$rooms= [$room1,$room2,$room3,$room4,$room5,$room6];
$room1->priint();
$room2->priint();
$room3->priint();
$room4->priint();
$room5->priint();
$room6->priint();







?>
