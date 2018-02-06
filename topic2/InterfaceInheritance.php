<?php
/**
 * Interfaces can be extended as classes by using extends operator
 *
 * @link http://php.net/manual/en/language.oop5.interfaces.php
 */

interface Human
{

    public function getName(): string;
}

interface Developer extends Human
{

    public function __construct(string $name, int $level);

    public const TITLE_LEVELS = [
      'junior',
      'middle',
      'senior',
    ];

    public function getTitle(): string;
}

class PHPDeveloper implements Developer
{

    private $name;

    private $level;

    public function __construct(string $name, int $level)
    {
        $this->name = $name;
        $this->level = $level;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        $title = self::TITLE_LEVELS[$this->level - 1] ?? 'some level';
        return $title . ' PHP Developer';
    }
}

$object = new PHPDeveloper('John Doe', 3);
echo $object->getName() . PHP_EOL;
echo $object->getTitle() . PHP_EOL;