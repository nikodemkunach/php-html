<?php

class Fire extends Pokemon{
    public $strengths;
    public $weaknesses;
    public $cardColor;

    public function __construct($name, $type, $hp_max, $strength, $photo){
        parent::__construct($name, $type, $hp_max, $strength, $photo);
        $this->strengths = array('Bug', 'Steel', 'Grass', 'Ice');
        $this->weaknesses = array('Rock', 'Fire', 'Water', 'Dragon');
        $this->cardColor = '#fd7d24';

    }
    public function specialEffect(Pokemon $targetPokemon){
        return false;
    }
}