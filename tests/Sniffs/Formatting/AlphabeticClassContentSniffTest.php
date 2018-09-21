<?php

declare(strict_types=1);

namespace BestIt\Sniffs\Formatting;

use BestIt\SniffTestCase;
use BestIt\Sniffs\DefaultSniffIntegrationTestTrait;
use BestIt\Sniffs\TestTokenRegistrationTrait;
use BestIt\TestRequiredConstantsTrait;
use PHP_CodeSniffer\Util\Tokens;

/**
 * Class AlphabeticClassContentSniffTest
 *
 * @author Nick Lubisch <nick.lubisch@bestit-online.de>
 * @package BestIt\Sniffs\Formatting
 */
class AlphabeticClassContentSniffTest extends SniffTestCase
{
    use DefaultSniffIntegrationTestTrait;
    use TestRequiredConstantsTrait;
    use TestTokenRegistrationTrait;

    /**
     * The tested class.
     *
     * We use this var to reduce the hard dependencies on internals from a specific slevomat version.
     *
     * @var AlphabeticClassContentSniff|void
     */
    protected $fixture;

    /**
     * Returns the tokens which should be checked.
     *
     * @return array The expected token ids.
     */
    protected function getExpectedTokens(): array
    {
        return Tokens::$ooScopeTokens;
    }

    /**
     * Sets up the test.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->fixture = new AlphabeticClassContentSniff();
    }

    /**
     * Returns the names of the required constants.
     *
     * @return array The required constants of a class. The second value is a possible value which should be checked.
     */
    public function getRequiredConstantAsserts(): array
    {
        return [
            'CODE_SORT_ALPHABETICALLY' => ['CODE_SORT_ALPHABETICALLY', 'SortAlphabetically'],
        ];
    }
}
