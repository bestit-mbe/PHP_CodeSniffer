<?php

declare(strict_types=1);

namespace BestIt\Sniffs\Commenting\Fixtures\MethodDocSniff;

/**
 * Class WrongFormatInReturnSummary.
 *
 * @package BestIt\Sniffs\Commenting\Fixtures\MethodDocSniff
 * @author Mika Bertels <mika.bertels@bestit-online.de>
 */
class Test
{
    /**
     * Simple method.
     *
     * @return string
     */
    public function test(): string
    {
        return 'Foo';
    }

    /**
     * Another simple method.
     *
     * @return int
     */
    public function test2(): int
    {
        return 1234;
    }
}
