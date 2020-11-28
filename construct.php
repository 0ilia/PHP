<?php

class BaseClass {
    function __construct() {
        print "Конструктор класса BaseClass</br>";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "Конструктор класса SubClass</br>";
    }


    function __destruct() {
        print "Уничтожается " . __CLASS__  . "</br>";
    }


}

$baseclass = new BaseClass();
$baseclass = new SubClass();


#Пример #1 Использование :: вне объявления класса
class MyClass {
    const CONST_VALUE = 'Значение константы </br> ';
}
echo MyClass::CONST_VALUE;

#Пример #2 Использование :: внутри объявления класса
class OtherClass extends MyClass
{
    public static $my_static = 'статическая переменная </br>';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}


OtherClass::doubleColon();


#Пример #3 Обращение к методу в родительском классе

class MyClass1
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass1 extends MyClass1
{
    // Переопределить родительское определение
    public function myFunc()
    {
        // Но все еще вызываем родительскую функцию
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass1();
$class->myFunc();
?>

