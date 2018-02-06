<?php
/**
 * @link http://php.net/manual/en/language.oop5.interfaces.php
 *
 * Two interfaces with the same methods name is acceptable if its' signatures
 * are the same too since PHP 5.3.9
 */

interface A
{

    public function foo(int $c): void;

    public function baz();
}

interface B
{

    public function foo(int $a): void;

}


class AC implements A, B
{

    public function foo(int $c): void
    {
        echo "It is $c";
    }

    public function baz()
    {
    }

}
