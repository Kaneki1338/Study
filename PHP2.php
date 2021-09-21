<?php    
    //Класс монитор
class monitor{
    public function asd($g){
    $this->display = $g;
    }
    // атрибуты монитора
    // —----------------------------------------—
    public $matrix;
    public $setup;
    public $buttons;
    public $frames;
    public $hdmi;
    public $connectTOhdmi;
    // —----------------------------------------—
    // поведение монитора
    // —----------------------------------------—
    // Ф-ия подключения к пк
    public function connect(){
    $this->connectTOhdmi = true;
    echo "Монитор успешно подключен ";
    }
    // Ф-ия отключения от пк
    public function disconnect(){
    $this->connectTOhdmi = false;
    echo "Монитор отключен ";
    }
    //Ф-ия отображения 
    public function Display(){
        if ($this->connect()){
            echo "Монитор показывает изображение ";
        }
        else {
            echo "Монитор не подключен ";
        }
    }
    // —----------------------------------------—
    }
    // Создаю объект монитор
    $monitor = new monitor();
    // —--------------------------------—
    // Жизненный цикл монитора
    $monitor->connect();
    $monitor->Display();
    $monitor->disconnect();
    // —----------------------------------