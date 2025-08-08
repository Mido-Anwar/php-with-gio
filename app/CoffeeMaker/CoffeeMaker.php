<?php

namespace App\CoffeeMaker;
/*  مثال تغيير مستوى الوصول في use

trait MyTrait {
    public function sayHello() {
        echo "Hello!";
    }
}

class MyClass {
    use MyTrait {
        sayHello as protected; // تغييرها من public إلى protected
    }
}

$obj = new MyClass();
 $obj->sayHello(); //  خطأ: الآن أصبحت protected */

/*  مثال آخر — تغيير الاسم مع تغيير الصلاحية

يمكنك أيضًا إعادة تسمية الدالة وتغيير صلاحيتها في نفس الوقت:

trait MyTrait {
    public function sayHello() {
        echo "Hello!";
    }
}

class MyClass {
    use MyTrait {
        sayHello as private greet; // اسم جديد وصلاحية جديدة
    }
} */

/* $obj = new MyClass();
 $obj->greet(); //  خطأ لأنها أصبحت private */
interface CoffeeMachine{

}

class CoffeeMaker {
   
    public static function makeCoffee(){
        return static::class . ' is making Coffee black'. PHP_EOL;
    }
}