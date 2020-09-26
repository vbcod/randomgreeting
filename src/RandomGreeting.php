<?php

namespace vbcod;

class RandomGreeting
{
    protected $greetings = array(
        'Hello, World',
        'Hello!',
        'Hey!',
        'Hi!',
    );

    public function getRandomGreeting(){
        $randomKey = array_rand( $this->greetings );
        return $this->greetings[$randomKey];
    }
}
