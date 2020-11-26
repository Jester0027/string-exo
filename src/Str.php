<?php
/**
 * @author Jester0027 <paul.ned@outlook.com>
 */

namespace Core;

class Str implements StringInterface, \Countable, Stringable
{
    private string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }

    public function count(): int
    {
        // TODO: Implement count() method.
    }

    public function split(string $separator): array
    {
        // TODO: Implement split() method.
    }

    public function toUpper(): self
    {
        // TODO: Implement toUpper() method
    }

    public function toLower(): self
    {
        // TODO: Implement toLower() method.
    }

    public function trim(): self
    {
        // TODO: Implement trim() method.
    }

    public function includes(string $needle): bool
    {
        // TODO: Implement includes() method.
    }

    public function match(string $pattern): bool
    {
        // TODO: Implement match() method.
    }
}
