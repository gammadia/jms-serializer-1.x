<?php

namespace JMS\Serializer\Tests\Serializer;

use JMS\Serializer\TypeParser;

class TypeParserTest extends \PHPUnit\Framework\TestCase
{
    private $parser;

    /**
     * @dataProvider getTypes
     */
    public function testParse($type, $name, array $params = array())
    {
        $this->assertEquals(array('name' => $name, 'params' => $params), $this->parser->parse($type));
    }

    public function getTypes()
    {
        $types = array();
        $types[] = array('string', 'string');
        $types[] = array('array<Foo>', 'array', array(array('name' => 'Foo', 'params' => array())));
        $types[] = array('array<Foo,Bar>', 'array', array(array('name' => 'Foo', 'params' => array()), array('name' => 'Bar', 'params' => array())));
        $types[] = array('array<Foo\Bar, Baz\Boo>', 'array', array(array('name' => 'Foo\Bar', 'params' => array()), array('name' => 'Baz\Boo', 'params' => array())));
        $types[] = array('a<b<c,d>,e>', 'a', array(array('name' => 'b', 'params' => array(array('name' => 'c', 'params' => array()), array('name' => 'd', 'params' => array()))), array('name' => 'e', 'params' => array())));
        $types[] = array('Foo', 'Foo');
        $types[] = array('Foo\Bar', 'Foo\Bar');
        $types[] = array('Foo<"asdf asdf">', 'Foo', array('asdf asdf'));

        return $types;
    }

    public function testParamTypeMustEndWithBracket()
    {
        $this->expectException(\JMS\Parser\SyntaxErrorException::class);
        $this->expectExceptionMessage('Expected T_CLOSE_BRACKET, but got end of input.');
        $this->parser->parse('Foo<bar');
    }

    public function testMustStartWithName()
    {
        $this->expectException(\JMS\Parser\SyntaxErrorException::class);
        $this->expectExceptionMessage('Expected T_NAME, but got "," of type T_COMMA at beginning of input.');
        $this->parser->parse(',');
    }

    public function testEmptyParams()
    {
        $this->expectException(\JMS\Parser\SyntaxErrorException::class);
        $this->expectExceptionMessage('Expected any of T_NAME or T_STRING, but got ">" of type T_CLOSE_BRACKET at position 4 (0-based).');
        $this->parser->parse('Foo<>');
    }

    public function testNoTrailingComma()
    {
        $this->expectException(\JMS\Parser\SyntaxErrorException::class);
        $this->expectExceptionMessage('Expected any of T_NAME or T_STRING, but got ">" of type T_CLOSE_BRACKET at position 7 (0-based).');
        $this->parser->parse('Foo<aa,>');
    }

    public function testLeadingBackslash()
    {
        $this->expectException(\JMS\Parser\SyntaxErrorException::class);
        $this->expectExceptionMessage('Expected any of T_NAME or T_STRING, but got "\" of type T_NONE at position 4 (0-based).');
        $this->parser->parse('Foo<\Bar>');
    }

    protected function setUp()
    {
        $this->parser = new TypeParser();
    }
}
