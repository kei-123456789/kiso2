<?php
class MyClass
{
    protected $myProperty;

    public static $myStaticProperty;

    public static function myStaticMethod($x)
    {
        echo self::$myStaticProperty . " / " . $x . PHP_EOL;
    }

    public function __construct($myProperty)
    {
        $this->myProperty = $myProperty;
    }

    public function myMethod($x)
    {
        if ($x === "") {
            $e = new Exception("Invalid argument.");
            throw $e;
        }
        echo $this->myProperty . " " . $x . PHP_EOL;
    }

    public function setMyProperty($myProperty)
    {
        $this->myProperty = $myProperty;
    }

    public function getMyProperty()
    {
        return $this->myProperty;
    }
}