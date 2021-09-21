<?php    
    //Класс стул
class chair{
    public function asd($g){
    $this->sit = $g;
    }
    // атрибуты стула
    // —----------------------------------------—
    public $chairlegs;
    public $thebackofthechair;
    public $cap;
    // —----------------------------------------—
    // поведение стула
    // —----------------------------------------—
    // Ф-ия поставить стул
    public function toput(){
    $this->$chair = floor;
    echo "Поставили стул в нужное место ";
    }
    // Ф-ия сесть на стул
    public function sitonchair(){
    $this->$meonchair = true;
    echo "Сели на стул ";
    }
    //Ф-ия встать со стула
    public function standup(){
        $this->$meonchair = false;
        echo "Встали со стула ";
    }
    // —----------------------------------------—
    }
    // Создаю объект стула
    $chair = new chair();
    // —--------------------------------—
    // Жизненный цикл стула
    $chair->toput();
    $chair->sitonchair();
    $chair->standup();
    // —----------------------------------