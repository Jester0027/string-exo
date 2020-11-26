<?php
/**
 * @author Jester0027 <paul.ned@outlook.com>
 */

namespace App\Model;

use Core\Str;

class Person
{
    private Str $name;
    private Str $surname;
    private int $age;

    /**
     * @return Str
     */
    public function getName(): Str
    {
        return $this->name;
    }

    /**
     * @param Str $name
     */
    public function setName(Str $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Str
     */
    public function getSurname(): Str
    {
        return $this->surname;
    }

    /**
     * @param Str $surname
     */
    public function setSurname(Str $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }


}
