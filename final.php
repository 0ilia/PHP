<?php
/*
 * предоставляет ключевое слово final, разместив которое перед объявлениями методов класса, можно предотвратить их переопределение в дочерних классах. Если же сам класс определяется с этим ключевым словом, то он не сможет быть унаследован.
 * */
final class BaseClass {
    public function test() {
        echo "Вызван метод BaseClass::test()\n";
    }

    // В данном случае неважно, укажете ли вы этот метод как final или нет
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends BaseClass {
}
// Выполнение заканчивается фатальной ошибкой: Class ChildClass may not inherit from final class (BaseClass)
// (Класс ChildClass не может быть унаследован от окончательного класса (BaseClass))
?>