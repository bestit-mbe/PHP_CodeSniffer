<?php

class TypeHintDeclarationSniff
{
    /**
     * @return bool
     */
    public function testBoolMethod(): bool
    {
        return false;
    }

    /**
     * @return int
     */
    public function testIntMethod(): int
    {
        return 1;
    }

    /**
     * @return float
     */
    public function testFloatMethod(): float
    {
        return 1.01;
    }

    /**
     * @return string
     */
    public function testStringMethod(): string
    {
        return 'test';
    }

    /**
     * @return array
     */
    public function testArrayMethod(): array
    {
        return [];
    }

    /**
     * @return void
     */
    public function testVoidMethod()
    {
        //void
    }

    /**
     * @return null
     */
    public function testNullMethod()
    {
        return null;
    }

    /**
     * @return array|null
     */
    public function testMultipleTypesMethod()
    {
        if (true) {
            return [];
        }

        return null;
    }
}
