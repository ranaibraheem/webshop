

<?php

require 'core/core.php';

class House

{

    public $fruitName = 'straweberry';

    protected $table;

    protected function kiwi()

    {

        echo "protected kiwi";

    }

    private function banana()

    {

        echo "private (banana)";

    }

    private function kitchen()

    {

    }

    private function livingRoom()

    {

    }

    protected function garden()

    {

        return 'garden';

    }

}

class Bowl extends House

{

    public function __construct(string $table = null)

    {

        $this->table = $table;

    }

    protected function bartosz()

    {

        return 'Bartosz';

    }

}

class SuperBowl extends Bowl 

{

    public function __construct()

    {

        dd($this->garden());

    }

}

class StringFunctions

{

    public static function trimSpaces(string $string)

    {

        return trim($string) . ' ' . self::giveMeSomeFun();

    }

    private static function giveMeSomeFun()

    {

        return 'Kiekeboo';

    }

}

class SuperHouse extends House

{

    

}


