<?php

namespace Tests\BestIt\Sniffs\Formatting;

use PHP_CodeSniffer\Files\File;
use Tests\BestIt\SniffTestCase;

class SingleMethodCallPerLineSniffTest extends SniffTestCase
{
    public function testCorrectObjectMethodCall()
    {
        $this->assertNoSniffErrorInFile(
            $this->checkSniffFile($this->getFixtureFilePath('Correct.php'))
        );
    }

    /**
     * Checks the given file with defined error codes.
     *
     * @param string $file            Filename of the fixture
     * @param array  $sniffProperties Array of sniff properties
     *
     * @return File The php cs file
     */
    protected function checkSniffFile(string $file, array $sniffProperties = []): File
    {
        return $this->checkFile(
            $file,
            $sniffProperties,
            [

            ]
        );
    }
}
