<?php

class Cards
{
    protected $cards = [];

    public function addCard(Card $card){
        array_push($this->cards, $card );
    }

    public function getCards(){
        return $this->cards;
    }
}









