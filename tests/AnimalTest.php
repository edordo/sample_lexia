<?php declare(strict_types=1);
/**
 * AnimalTest.php
 *
 * @author  Ed Ordorica <ed.ordorica@gmail.com>
 * @license None
 */

// TODO: Fix this, not sure why autoloading isn't working
require_once 'src/Animal.php';
use PHPUnit\Framework\TestCase;


/**
 * Class AnimalTest
 *
 * @category Class
 */
final class AnimalTest extends TestCase
{

    
    /**
     * Simple test of cat object
     *
     * @return void
     */
    public function testCat()
    {  
        $name = "Mr Pickles"     ;
        $animal = new cat($name);
        $this->assertSame("$name says \"meow\"", $animal->speak());
    }
    
    /**
     * Simple test of dog object
     * 
     * @return void
     */
    public function testDog()
    {        
        $name = "Cormac";
        $animal = new dog($name);
        $this->assertSame("$name says \"Woof!\"", $animal->speak());
    }
    
    /**
     * Simple test of cow object
     *
     * @return void
     */
    public function testCow()
    {        
        $name = "Bessie";
        $animal = new cow($name);
        $this->assertSame("$name says \"Moo\"", $animal->speak());
    }
    
    /**
     * Simple test of Unicorn object
     *
     * @return void
     */
    public function testUnicorn()
    {
        $name = "Sparkles";
        $animal = new unicorn($name);
        $this->assertSame("Unicorns are not real!", $animal->speak());
    }
    
    /**
     * Verify the list of valid animals
     *
     * @return void
     */
    public function testGetValidAnimals()
    {
        $this->assertEqualsCanonicalizing(array('cat', 'dog', 'cow', 'unicorn'),  get_valid_animals());
    }

        
    /**
     * Make sure an invalid animal is handled gracefully
     *
     * @return void
     */
    public function testCreateInvalid()
    {
        $this->assertNull(create_animal_from_name("bogus", "bogus"));
    }

        
    /**
     * Simple test of create_animal_from_name()
     *
     * @return void
     */
    public function testCreateAnimalFromName()
    {
        $this->assertInstanceOf(cat::class, create_animal_from_name("cat", "cat"));
    }
    
    /**
     * Verify all valid animals are creatable
     *
     * @return void
     */
    public function testCreateAllAnimals()
    {
        $animals = get_valid_animals();
        //Iterate through each valid animal and make sure they are all creatable
        foreach ($animals as $animal) {
            $this->assertInstanceOf(animal::class, create_animal_from_name($animal, "Test"));
        }
    }
}
