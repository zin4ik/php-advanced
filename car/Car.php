<?php

class Car implements MovableInterface{

    public $color;
    public $maxSpeed;
    public $speed;
    public $gaz = 2;

    public function __construct( $maxSpeed = 80, $color = 'black', $speed = 0, $gaz = 2 ){

         $this->color    = $color;
         $this->maxSpeed = $maxSpeed;
         $this->speed    = $speed;
         $this->gaz      = $gaz;

    }

    public function get_max_mpeed(){

        return $this->maxSpeed;

    }

    public function get_color(){

        return  $this->color;

    }

    public function resulSpeed( int $var = 1)
    {
        $value = $this->gaz * (int)$var;
        $speed = $this->speed + $value < 1 ? 0 : $this->speed + $value;
        
        $speedNom = $speed <= $this->maxSpeed ? $speed : $this->speed;
        $this->speed = $speedNom;

        return $speedNom;
        
    }

    /**
     * Включает зажигание
     * @return mixed
     */
    public function start(){

        $this->speed = 0;

        return 'Включили зажигание ' . PHP_EOL;

    }

    /**
     * Выключает зажигание
     * @return mixed
     */
    public function stop(){
        $this->speed = 0;
        return 'Выключили зажигание ' . PHP_EOL;
    }

    /**
     * Увеличивает скорость движения
     * @return mixed
     */
    public function up(){

        $speedNow = $this->resulSpeed( 1 );

        return 'Скорость ' . $speedNow . PHP_EOL; 

    }

    /**
     * Уменьшает скорость движения
     * @return mixed
     */
    public function down(){

        $speedNow = $this->resulSpeed( -1 );

        return 'Скорость ' . $speedNow . PHP_EOL; 
    }

}