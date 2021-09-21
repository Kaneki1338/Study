<?php    
    //Класс рюкзак
class bag{
    public function asd($g){
    $this->movethings = $g;
    }
    // атрибуты рюкзака
    // —----------------------------------------—
    public $cloth;
    public $zipper;
    public $straps;
    // —----------------------------------------—
    // поведение рюкзака
    // —----------------------------------------—
    // Ф-ия расстегивания
    public function open(){
    $this->$zipper = true;
    echo "Рюкзак открыт ";
    }
    // Ф-ия положить вещи в рюкзак
    public function put(){
    $this->$bagbag = things;
    echo "Вещи сложены в рюкзак ";
    }
    //Ф-ия закрыть
    public function close(){
        $this->$zipper = false;
        echo "Рюкзак закрыт ";
    }
    //ф-ия одеть рюкзак
    public function clothe(){
        $this->$bag = $clothOnMe;
        echo "Рюкзак одет ";
    }
    // —----------------------------------------—
    }
    // Создаю объект рюкзака
    $bag = new bag();
    // —--------------------------------—
    // Жизненный цикл рюкзака
    $bag->open();
    $bag->put();
    $bag->close();
    $bag->clothe();
    // —----------------------------------