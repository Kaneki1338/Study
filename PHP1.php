<?php 
    //Класс компьютерная мышь
class mouse{
    public function asd($m){
    $this->navigation = $m;
    }
    // атрибуты компьютерной мыши
    // —----------------------------------------—
    public $frame;
    public $buttons;
    public $mousewheel;
    public $ConnectToPC;
    // —----------------------------------------—
    // поведение компьютерной мыши
    // —----------------------------------------—
    // Ф-ия подключения к пк
    public function connect(){
    $this->ConnectToPC = true;
    echo "Подключено к устройству ";
    }
    // Ф-ия отключения от пк
    public function disconnect(){
    $this->ConnectToPC = false;
    echo "Отключено от устройства ";
    }
    //Ф-ия использования мыши
    public function work(){
        if ($this->connect()){
            echo "Устройство работает нормально ";
        }
        else {
            echo "Устройство не подключено к компьютеру ";
        }
    }
    // —----------------------------------------—
    }
    // Создаю объект компьютерная мышь
    $mouse = new mouse();
    // —--------------------------------—
    // Жизненный цикл компьютерной мыши
    $mouse->connect();
    $mouse->work();
    $mouse->disconnect();
    // —----------------------------------