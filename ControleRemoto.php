<?php

require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //Atributos 
    private $volume;
    private $ligado;
    private $tocando;
    //Metodos Especiais 
     function __construtor(){
         $this->volume   = 50;
         $this->ligado   = false;
         $this->tocando  = false;
     }
     function getVolume(){
         return $this->volume;
     }
     function setVolume($volume){
         $this->volume = $volume;
     }
     function getLigado(){
         return $this->ligado;
     }
     function setLigado($ligado){
         $this->ligado = $ligado;
     }
     function getTocando(){
         return $this->tocando;
     }
     function setTocando($tocando){
         $this->Tocando = $tocando;
     }

   
    public function desligar() {
        $this->setLigado(false);
    }
    
     public function ligar() {
        $this->setLigado(true);
    }
     public function abrirMenu() {
        print "<br>Está Ligado?: " . ($this->getLigado()?"SIM":"NÂO");
        print "<br>Está Tocando?: " . ($this->getTocando()?"SIM":"NÂO");
        print "<br>Volume: " . $this->getVolume();
          for($i=0; $i <= $this->GetVolume(); $i+=10){
              print "|";
          }
          print"<br>";
    }
    public function fecharMenu() {
         print"Fechando  Menu...";
    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() ==0){
            $this->setVolume(0);
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function maisVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume()+ 5);
        }
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5 );
        }
    }
    public function pause() {
        if($this->getLigado() && ! ($this->getTocando())) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

}
