<?php
/**
 * Created by PhpStorm.
 * User: a-basov
 * Date: 25.04.16
 * Time: 23:59
 */
//Deck – колода
//Suit – масть
//Hearts – червы
//Diamonds – бубны
//Clubs – трефы
//Spades – пики
//Jack – валет
//Queen – дама
//King – король
//Ace – туз
//Joker – джокер


class Card
{
    public $suit;
    public $name;
    public $value;
    public function __construct($suit, $name)
    {
        $this->suit = $suit;
        $this->name = $name;
        switch ($name) {
            case 'J':
            case 'Q':
            case 'K':
                $this->value = 10;
                break;
            case 'A':
                $this->value = 11;
                break;
            default:
                $this->value = $name;
                break;
        }
    }

    public function __toString() {
        return $this->suit .' '. $this->name;
    }
}

class Deck
{
    public $cards = [];

    public function __construct()
    {
        $suits = ['hearts', 'diamonds', 'clubs', 'spades'];
        $names = [2,3,4,5,6,7,8,9,10,'J','Q','K','A'];
        foreach ($suits as $suit){
            foreach ($names as $name){
                $this->cards[] = new Card($suit, $name);
            }
        }
    }
}

$desc = new Deck();
foreach ($desc->cards as $c){
    echo $c , PHP_EOL;
}

