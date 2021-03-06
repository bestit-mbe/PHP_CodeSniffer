<?php

declare(strict_types = 1);

namespace Tests\BestIt\Sniffs\Formatting;

use BestIt\Sniffs\Formatting\OpenTagSniff;
use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer_File;
use Tests\BestIt\SniffTestCase;

/**
 * Class OpenTagSniffTest
 *
 * @package Tests\BestIt\Sniffs\Formatting
 *
 * @author Nick Lubisch <nick.lubisch@bestit-online.de>
 */
class OpenTagSniffTest extends SniffTestCase
{
    /**
     * Test empty line after open tag with no errors.
     *
     * @return void
     */
    public function testCorrectSpaceAfterOpenTag()
    {
        $this->assertNoSniffErrorInFile(
            $this->checkSniffFile($this->getFixtureFilePath('Correct.php'))
        );
    }

    /**
     * Test empty line after open tag line not empty error and fix.
     *
     * @return void
     */
    public function testLineNotEmpty()
    {
        $report = $this->checkSniffFile(
            $this->getFixtureFilePath('LineNotEmpty.php')
        );

        $this->assertSniffError(
            $report,
            2,
            OpenTagSniff::CODE_LINE_NOT_EMPTY
        );

        $this->assertAllFixedInFile($report);
    }

    /**
     * Test empty line after open tag no space after open tag error and fix.
     *
     * @return void
     */
    public function testNoSpaceAfterOpenTag()
    {
        $report = $this->checkSniffFile(
            $this->getFixtureFilePath('NoSpaceAfterOpenTag.php')
        );

        $this->assertSniffError(
            $report,
            2,
            OpenTagSniff::CODE_NO_SPACE_AFTER_OPEN_TAG
        );

        $this->assertAllFixedInFile($report);
    }

    /**
     * Test empty line after open tag not first statement error and fix.
     *
     * @return void
     */
    public function testNotFirstStatement()
    {
        $report = $this->checkSniffFile(
            $this->getFixtureFilePath('NotFirstStatement.php')
        );

        $this->assertSniffError(
            $report,
            1,
            OpenTagSniff::CODE_NOT_FIRST_STATEMENT
        );

        $this->assertAllFixedInFile($report);
    }

    /**
     * Checks the given file with defined error codes.
     *
     * @param string $file Filename of the fixture
     * @param array $sniffProperties Array of sniff properties
     *
     * @return File The php cs file
     */
    protected function checkSniffFile(string $file, array $sniffProperties = []): File
    {
        return $this->checkFile(
            $file,
            $sniffProperties,
            [
                OpenTagSniff::CODE_LINE_NOT_EMPTY,
                OpenTagSniff::CODE_NO_SPACE_AFTER_OPEN_TAG,
                OpenTagSniff::CODE_NOT_FIRST_STATEMENT,
            ]
        );
    }
}
