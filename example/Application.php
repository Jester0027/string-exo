<?php
/**
 * @author Jester0027 <paul.ned@outlook.com>
 */

namespace App;

use App\Model\Person;
use Core\Str;

class Application
{
    public static function main()
    {
        $person = new Person();
        $person->setName(new Str("John"));
        $person->setSurname(new Str("Doe"));
        $person->setAge(30);

//        echo "{$person->getName()->trim()} {$person->getSurname()->trim()} is {$person->getAge()} years old";
    }
}
