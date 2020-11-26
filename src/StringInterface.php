<?php
/**
 * @author Jester0027 <paul.ned@outlook.com>
 */

namespace Core;

interface StringInterface
{
    /**
     * @param string $separator
     * @return array<Str>
     */
    public function split(string $separator): array;

    /**
     * @return self
     */
    public function toUpper(): self;

    /**
     * @return self
     */
    public function toLower(): self;

    /**
     * @return self
     */
    public function trim(): self;

    /**
     * @param string $needle
     * @return bool
     */
    public function includes(string $needle): bool;

    /**
     * @param string $pattern
     * @return bool
     */
    public function match(string $pattern): bool;
}
