<?php
/**
 * @author Jester0027 <paul.ned@outlook.com>
 */

namespace Core\Tests;

use Core\Str;

trait StrAssertionsTrait
{
    /**
     * @param array<Str|string> $expected
     * @param array<Str> $actual
     */
    private function assertArrayOfStringsEquals(array $expected, array $actual)
    {
        $strArray = [];
        $count = count($expected);
        foreach ($expected as $item) {
            $strArray[] = new Str($item);
        }
        $this->assertIsArray($actual);
        $this->assertCount($count, $actual);
        $this->assertEquals($expected, $actual);
        $this->assertEquals($strArray, $actual);
    }

    /**
     * @param Str|string $expected
     * @param Str $actual
     */
    private function assertStrEquals($expected, $actual)
    {
        $this->assertEquals($expected, $actual);
        $this->assertInstanceOf(Str::class, $actual);
    }
}
