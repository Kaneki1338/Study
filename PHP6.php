<?php    
    //Класс бутылка
class bottle{
    public function asd($g){
    $this->drink = $g;
    }
    // атрибуты бутылки
    // —----------------------------------------—
    public $plastik;
    public $liquidinplastikbottle;
    public $cap;
    // —----------------------------------------—
    // поведение бутылки
    // —----------------------------------------—
    // Ф-ия снять крышку
    public function takeoffcap(){
    $this->$cap = false;
    echo "Cняли крышку ";
    }
    // Ф-ия выпить содержимое бутылки
    public function drink(){
    $this->$liquidinplastikbottle = false;
    echo "Выпили содержимое ";
    }
    //Ф-ия закрыть крышку
    public function closethecap(){
        $this->$cap = true;
        echo "Закрыли крышку";
    }
    // —----------------------------------------—
    }
    // Создаю объект ручки
    $bottle = new bottle();
    // —--------------------------------—
    // Жизненный цикл
    $bottle->takeoffcap();
    $bottle->drink();
    $bottle->closethecap();
    // —----------------------------------