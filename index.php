<?php

#Пример #1 Простое определение класса
class SimpleClass
{



    // объявление свойства
    public $var = 'значение по умолчанию';

    // объявление метода
    public function displayVar()
    {
        echo $this->var;
    }

//  Вызов анонимной функции, содержащейся в свойстве
    public $bar;

    public function __construct()
    {
        $this->bar = function () {
            return 42;
        };
    }
}

$instance = new SimpleClass();
$func = $instance->bar;
echo ($instance->bar)();
// Это же можно сделать с помощью переменной:
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()


#Пример #9 Простое наследование классов
class ExtendClass extends SimpleClass
{
   // Переопределение метода родителя
   function displayVar()
   {
       echo "</br>Расширенный класс\n";
       parent::displayVar();
   }

    const CONSTANT = '</br>значение константы';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}



$extended = new ExtendClass();
$extended->displayVar();

echo ExtendClass::CONSTANT . "\n";


spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$b = new B();
echo $b->b;
