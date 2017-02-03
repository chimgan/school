<?php
//final class BaseClass {
//    public function myMethod() {
//        echo "BaseClass method called";
//    }
//}
//
////this will cause Compile error
//class DerivedClass extends BaseClass {
//    public function myMethod() {
//        echo "DerivedClass method called";
//    }
//}
//
//$c = new DerivedClass();
//$c->myMethod();


//class BaseClass {
//    final public function myMethod() {
//        echo "BaseClass method called";
//    }
//}
//
//class DerivedClass extends BaseClass {
//    //this will cause Compile error
//    public function myMethod() {
//        echo "DerivedClass method called";
//    }
//}
//
//$c = new DerivedClass();
//$c->myMethod();




//abstract class AbstractClass
//{
//    /* Данный метод должен быть определён в дочернем классе */
//    abstract protected function getValue();
//    abstract protected function prefixValue($prefix);
//
//    /* Общий метод */
//    public function printOut() {
//        print $this->getValue() . "\n";
//    }
//}
//
//class ConcreteClass1 extends AbstractClass
//{
//    protected function getValue() {
//        return "ConcreteClass1";
//    }
//
//    public function prefixValue($prefix) {
//        return "{$prefix}ConcreteClass1";
//    }
//}
//
//class ConcreteClass2 extends AbstractClass
//{
//    public function getValue() {
//        return "ConcreteClass2";
//    }
//
//    public function prefixValue($prefix) {
//        return "{$prefix}ConcreteClass2";
//    }
//}
//
//$class1 = new ConcreteClass1;
//$class1->printOut();
//echo $class1->prefixValue('FOO_') ."\n";
//
//$class2 = new ConcreteClass2;
//$class2->printOut();
//echo $class2->prefixValue('FOO_') ."\n";


//abstract class AbstractClass
//{
//    // Наш абстрактный метод должен определять только необходимые аргументы
//    abstract protected function prefixName($name);
//
//}
//
//class ConcreteClass extends AbstractClass
//{
//
//    // Наш дочерний класс может также определять необязательные аргументы, не указанные в сигнатуре родительского метода
//    public function prefixName($name, $separator = ".") {
//        if ($name == "Pacman") {
//            $prefix = "Mr";
//        } elseif ($name == "Pacwoman") {
//            $prefix = "Mrs";
//        } else {
//            $prefix = "";
//        }
//        return "{$prefix}{$separator} {$name}";
//    }
//}
//
//$class = new ConcreteClass;
//echo $class->prefixName("Pacman"), "\n";
//echo $class->prefixName("Pacwoman"), "\n";




//// Объявим интерфейс 'iTemplate'
//interface iTemplate
//{
//    public function setVariable($name, $var);
//    public function getHtml($template);
//}
//
//// Реализуем интерфейс
//// Это сработает нормально
//class Template implements iTemplate
//{
//    private $vars = array();
//
//    public function setVariable($name, $var)
//    {
//        $this->vars[$name] = $var;
//    }
//
//    public function getHtml($template)
//    {
//        foreach($this->vars as $name => $value) {
//            $template = str_replace('{' . $name . '}', $value, $template);
//        }
//
//        return $template;
//    }
//}
//
//// Это не будет работать
//// Fatal error: Class BadTemplate contains 1 abstract methods
//// and must therefore be declared abstract (iTemplate::getHtml)
//// (Фатальная ошибка: Класс BadTemplate содержит 1 абстрактный метод
//// и поэтому должнен быть объявлен абстрактным (iTemplate::getHtml))
//class BadTemplate implements iTemplate
//{
//    private $vars = array();
//
//    public function setVariable($name, $var)
//    {
//        $this->vars[$name] = $var;
//    }
//}



//interface a
//{
//    public function foo();
//}
//
//interface b
//{
//    public function bar();
//}
//
//interface c extends a, b
//{
//    public function baz();
//}
//
//class d implements c
//{
//    public function foo()
//    {
//    }
//
//    public function bar()
//    {
//    }
//
//    public function baz()
//    {
//    }
//}




//interface a
//{
//    const b = 'Константа интерфейса';
//}
//
//// Выведет: Константа интерфейса
//echo a::b;
//
//
//// Вот это, однако, не будет работать, так как
//// константы перекрывать нельзя.
//class b implements a
//{
//    const b = 'Class constant';
//}





//trait Hello {
//    public function sayHello() {
//        echo 'Hello ';
//    }
//}
//
//trait World {
//    public function sayWorld() {
//        echo 'World';
//    }
//}
//
//class MyHelloWorld {
//    use Hello, World;
//    public function sayExclamationMark() {
//        echo '!';
//    }
//}
//
//$o = new MyHelloWorld();
//$o->sayHello();
//$o->sayWorld();
//$o->sayExclamationMark();



//trait Hello {
//    public function sayHello() {
//        echo 'Hello ';
//    }
//}
//
//trait World {
//    public function sayWorld() {
//        echo 'World!';
//    }
//}
//
//trait HelloWorld {
//    use Hello, World;
//}
//
//class MyHelloWorld {
//    use HelloWorld;
//}
//
//$o = new MyHelloWorld();
//$o->sayHello();
//$o->sayWorld();


//sudo apt-get install curl git
//curl -sS https://getcomposer.org/installer | php
//sudo mv composer.phar /usr/local/bin/composer
//composer global require "laravel/installer"
//composer create-project --prefer-dist laravel/laravel myTestProject
#.bashrc
//export PATH="$HOME/.config/composer/vendor/bin:$PATH"
//source .bashrc

echo "<h1>";

echo "</h1>";

