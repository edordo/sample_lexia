<?php declare(strict_types=1);

/**
 * Animal
 */
class Animal
{
    protected string $name;
    // Expect anyone who extends this class will change the greeting
    protected string $greeting = "\"Hello\"";
    
    /**
     * Constructor for the base animal class
     *
     * @param  string $name The name of the animal
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    /**
     * Return the greeting this animal would use
     *
     * @return string
     */
    public function speak(): string
    {
        return "$this->name says $this->greeting";
    }
}

/**
 * Cat
 */
class Cat extends Animal
{
    protected string $greeting = "\"meow\"";
}

/**
 * Dog
 */
class Dog extends Animal
{
    protected string $greeting = "\"Woof!\"";
}

/**
 * Cow
 */
class Cow extends Animal
{
    protected string $greeting = "\"Moo\"";
}

/**
 * Unicorn
 */
class Unicorn extends Animal
{
    
    /**
     * This doesn't follow the same format as all other animals
     *
     * @return void
     */
    public function speak(): string
    {
        return "Unicorns are not real!";
    }
}

/**
 * Returns an array with the names of all animals this project can handle
 *
 * @return array
 */
function get_valid_animals(): array
{
    $animals = array('cat', 'dog', 'cow', 'unicorn');
    return $animals;
}

/**
 * Either returns an instance of the specied animal, or if not a valid animal, returns null
 *
 * @param  string $animal Type of animal to create
 * @param  string $name   name of the animal to create
 * @return animal
 */
function create_animal_from_name(string $animal, string $name) : ?animal
{
    $valid_animals = get_valid_animals();
    if (in_array($animal, $valid_animals)) {
        return new $animal($name);
    }
    else {
        return null;
    }
}
