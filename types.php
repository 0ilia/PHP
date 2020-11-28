<?php
#bool
$foo = True;
$foo1 = false;

#int
$a = 1234; // десятичное число
$a = 0123; // восьмеричное число (эквивалентно 83 в десятичной системе)
$a = 0x1A; // шестнадцатеричное число (эквивалентно 26 в десятичной системе)
$a = 0b11111111; // двоичное число (эквивалентно 255 в десятичной системе)
$a = 1_234_567; // десятичное число (с PHP 7.4.0)

#float double

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567; // начиная с PHP 7.4.0

#string
$string = "String";
#array
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
#*Итерируемые *
#Объекты
#Resource - это специальная переменная, содержащая ссылку на внешний ресурс. Ресурсы создаются и используются специальными функциями. Полный перечень этих функций и соответствующих типов ресурсов (resource) смотрите в приложении.
#NNll
$var = NULL;