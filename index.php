<?php

class Character {
    public $name;
    public $lv;
    public $maxHp;
    public $hp;
    public $str;
    public $def;
    
    function __construct($name, $lv, $maxHp, $str, $def){
        $this->name = $name;
        $this->lv = $lv;
        $this->maxHp = $maxHp;
        $this->hp = $maxHp;
        $this->str = $str;
        $this->def = $def;
    }
}

function dispCharacter($c){
    $s  = $c->name . "(" . $c->lv . ") : (";
    $s .= $c->hp . "/" . $c->maxHp . ") [";
    $s .= $c->str . "/" . $c->def . "]";
    echo $s;
     
}

function main(){
    $m = new Character("ユズノハ", 1, 100, 5, 3);
    dispCharacter($m);
}

main();