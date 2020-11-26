<?php
/**
 * @author Jester0027 <paul.ned@outlook.com>
 */

namespace Core\Tests;

use PHPUnit\Framework\TestCase;
use Core\Str;

class StringTest extends TestCase
{
    use StrAssertionsTrait;

    public function testToString()
    {
        $this->assertStrEquals('Hello World !', new Str('Hello World !'));
        $this->assertEquals('Hello World !', (new Str('Hello World !'))->__toString());
    }

    public function testCount()
    {
        $count = (new Str('Hello World !'))->count();
        $this->assertEquals(13, $count);
        $this->assertCount(13, new Str('Hello World !'));
        $this->assertIsInt($count);
    }

    public function testSplit()
    {
        $splitString = (new Str('Hello World !'))->split(' ');
        $this->assertArrayOfStringsEquals(['Hello', 'World', '!'], $splitString);
    }

    public function testSplitComa()
    {
        $splitString = (new Str('apple, banana, orange, pineapple'))->split(', ');
        $this->assertArrayOfStringsEquals(['apple', 'banana', 'orange', 'pineapple'], $splitString);
    }

    public function testSplitEachCharacter()
    {
        $splitString = (new Str('Hello'))->split('');
        $this->assertArrayOfStringsEquals(['H', 'e', 'l', 'l', 'o'], $splitString);
    }

    public function testToUpper()
    {
        $str = (new Str('Hello World !'))->toUpper();
        $this->assertStrEquals('HELLO WORLD !', $str);
    }

    public function testToLower()
    {
        $str = (new Str('Hello World !'))->toLower();
        $this->assertStrEquals('hello world !', $str);
    }

    public function testTrim()
    {
        $this->assertEquals('Hello World  !', (new Str('    Hello World  !  '))->trim());
        $this->assertEquals('', (new Str('   '))->trim());
        $this->assertEquals(new Str('Hello World !'), (new Str('Hello World !'))->trim());
    }

    public function testIncludes()
    {
        $this->assertTrue((new Str('Hello World'))->includes('Hello'));
        $this->assertTrue((new Str('Hello World'))->includes(' '));
        $this->assertTrue((new Str('Hello World'))->includes('o'));
        $this->assertFalse((new Str('Hello World'))->includes('Banana'));
        $this->assertFalse((new Str('Hello World'))->includes('z'));
    }

    public function testMatch()
    {
        $this->assertTrue((new Str('Hello World'))->match("/^[a-Z]/"));
        $this->assertFalse((new Str('Hello World'))->match("/^[0-9]/"));
    }

    public function testConcatenation()
    {
        $nickname = (new Str('  John Doe    '))
            ->trim()
            ->toUpper();
        $actual = "Hello $nickname";
        $expected = "Hello JOHN DOE";
        $this->assertEquals($expected, $actual);
    }
}
