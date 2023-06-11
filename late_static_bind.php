<?php

class late_static_bind
{
    private function foo()
    {
        echo __CLASS__.'foo'.PHP_EOL;
    }

    public static function zoo()
    {
        echo __CLASS__.'zoo'.PHP_EOL;
    }

    public function test()
    {
        $this->foo();
        static::foo();
        static::zoo();
    }

}

class b extends late_static_bind
{
    private function foo()
    {

    }
    public static function zoo()
    {
        echo __CLASS__.'zoo'.PHP_EOL;
    }

    public function to()
    {
        static::zoo();
        static::foo();
    }

}

$l = new late_static_bind();
//$l->test();
$v = new b();
//$v->test();
$v->to();