# best it PHP_CodeSniffer
[![Build Status](https://travis-ci.org/bestit/PHP_CodeSniffer.svg?branch=master)](https://travis-ci.org/bestit/php_codesniffer) [![Build Status](https://scrutinizer-ci.com/g/bestit/PHP_CodeSniffer/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bestit/PHP_CodeSniffer/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bestit/PHP_CodeSniffer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bestit/PHP_CodeSniffer/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/bestit/PHP_CodeSniffer/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/bestit/PHP_CodeSniffer/?branch=master)

This package contains a default rule set and custom rules which are used in all best it projects.

## Installation
Our PHP_CodeSniffer package can be installed with composer with the following command:
```bash
composer require bestit/php_codesniffer --dev
```

## Usage
Create a PHP_CodeSniffer configuration (phpcs.xml.dist / phpcs.xml) like this:
```xml
<?xml version="1.0"?>
<ruleset name="PROJECT-X">
    <description>The coding standard for project x.</description>

    <!-- Path to best it ruleset. -->
    <rule ref="./vendor/bestit/php_codesniffer/src/Standards/BestIt/ruleset.xml" />

    <!-- Path to directory which are checked. -->
    <file>src/</file>
    <file>tests/</file>
</ruleset>
```

Execute the PHP_CodeSniffer (path can vary on your composer configuration):
```bash
./vendor/bin/phpcs
```
## Used sniffs
| Sniff | Standard | Description |
| ----- | -------- | ----------- |
| Generic.PHP.DisallowShortOpenTag.EchoFound | PSR-1 | PHP code MUST use the long <?php ?> tags or the short-echo <?= ?> tags; it MUST NOT use the other tag variations. |
| Generic.Files.ByteOrderMark | PSR-1 | PHP code MUST use only UTF-8 without BOM. |
| Squiz.Classes.ValidClassName | PSR-1 | Class names MUST be declared in StudlyCaps. |
| Generic.NamingConventions.UpperCaseConstantName | PSR-1 | Class constants MUST be declared in all upper case with underscore separators. |
| Generic.Files.LineEndings | PSR-2 | All PHP files MUST use the Unix LF (linefeed) line ending. |
| Generic.Files.LineLength  | PSR-2 | The soft limit on line length MUST be 120 characters; automated style checkers MUST warn but MUST NOT error at the soft limit. |
| Squiz.WhiteSpace.SuperfluousWhitespace" | PSR-2 | There MUST NOT be trailing whitespace at the end of non-blank lines. |
| Squiz.WhiteSpace.SuperfluousWhitespace.StartFile | PSR-2 | There MUST NOT be trailing whitespace at the end of non-blank lines. |
| Squiz.WhiteSpace.SuperfluousWhitespace.EndFile | PSR-2 | There MUST NOT be trailing whitespace at the end of non-blank lines. |
| Squiz.WhiteSpace.SuperfluousWhitespace.EmptyLines | PSR-2 | There MUST NOT be trailing whitespace at the end of non-blank lines. |
| Generic.Formatting.DisallowMultipleStatements | PSR-2 | There MUST NOT be more than one statement per line. |
| Generic.WhiteSpace.ScopeIndent | PSR-2 | Code MUST use an indent of 4 spaces. |
| Generic.WhiteSpace.DisallowTabIndent | PSR-2 | Code MUST NOT use tabs for indenting. |
| Generic.PHP.LowerCaseKeyword | PSR-2 | The PHP constants true, false, and null MUST be in lower case. |
| BestIt.Functions.FluentSetter | BestIt | Every setter function MUST return $this. |
| BestIt.Formatting.SpaceAfterDeclare | BestIt | There MUST be one empty line after declare-statement. |
| BestIt.TypeHints.DeclareStrictTypes | BestIt | Every file MUST have "declare(strict_types=1);" two line breaks after the opening tag. There MUST be no spaces aroung the equal-sign. |
| Squiz.Strings.DoubleQuoteUsage | Squiz | Every String MUST be wrapped with single quotes. |
| Generic.Formatting.SpaceAfterCast | BestIt | There MUST be a space after cast. |
| Generic.Files.LineLength | PSR-2 | Every line MUST not be longer than 120 chars. |
| Generic.Arrays.DisallowLongArraySyntax | BestIt | Every array syntax MUST be in short array syntax. |
| BestIt.Formatting.OpenTagSniff | BestIt | After the open tag there MUST be an empty line. |
| BestIt.Commenting.AbstractDocSniff.NoImmediateDocFound¹| BestIt | There MUST be a doc block before the listened token |
| BestIt.Commenting.AbstractDocSniff.NoSummary¹| BestIt | There MUST be a summary |
| BestIt.Commenting.AbstractDocSniff.SummaryNotFirst¹| BestIt | The summary MUST be the first statement in a doc block |
| BestIt.Commenting.AbstractDocSniff.SummaryTooLong¹| BestIt | The summary length MUST be maximum 120 characters |
| BestIt.Commenting.AbstractDocSniff.CommentNotMultiLine¹| BestIt | Every doc block must be multi line |
| BestIt.Commenting.AbstractDocSniff.NoLineAfterSummary¹| BestIt | There MUST be an empty line after the summary |
| BestIt.Commenting.AbstractDocSniff.LineAfterSummaryNotEmpty¹| BestIt | The line after the summary MUST be empty |
| BestIt.Commenting.AbstractDocSniff.DescriptionNotFound¹| BestIt | There MUST be doc block long description |
| BestIt.Commenting.AbstractDocSniff.NoLineAfterDescription¹| BestIt | There MUST be an empty line after the long description |
| BestIt.Commenting.AbstractDocSniff.MuchLinesAfterDescription¹| BestIt | There MUST be an empty line after the long description  |
| BestIt.Commenting.AbstractDocSniff.DescriptionTooLong¹| BestIt | Every line of the long description MUST be not longer than 120 characters |
| BestIt.Commenting.AbstractDocSniff.TagNotAllowed¹| BestIt | The given tag MUST NOT be used |
| BestIt.Commenting.AbstractDocSniff.TagOccurrenceMin¹| BestIt | The given tag MUST occur min x times |
| BestIt.Commenting.AbstractDocSniff.TagOccurrenceMax¹| BestIt | The given tag MUST occur max x times |
| BestIt.Commenting.AbstractDocSniff.TagWrongPosition¹| BestIt | The given tag MUST be at the correct position |
| BestIt.Commenting.AbstractDocSniff.SummaryUcFirst¹| BestIt | The summary first letter MUST be a capital letter |
| BestIt.Commenting.AbstractDocSniff.DescriptionUcFirst¹| BestIt | The long description first letter MUST be a capital letter |
| BestIt.Commenting.AbstractDocSniff.NoLineAfterTag¹| BestIt | There MUST be an empty line after the given tag |
| BestIt.Commenting.AbstractDocSniff.MuchLinesAfterTag¹| BestIt | There MUST be a single empty line after the given tag |
| BestIt.Commenting.AbstractDocSniff.TagFormatContentInvalid¹| BestIt | The tag content MUST match the given pattern |

¹ AbstractDocSniff means ClassDocSniff, MethodDocSniff, ConstantDocSniff and PropertyDocSniff  

## Testing
To be able to test our written sniffs ensure that composer is installed with the option `--prefer-source`.
This is needed because we use the TestCase of the SlevomatCodingStandard.

## Contributing
See [CONTRIBUTING.md](CONTRIBUTING.md).
