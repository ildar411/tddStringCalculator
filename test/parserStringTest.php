<?php
    require_once '../lib/stringCalc.php';
    use StrCalc\ParserString as ParserString;
    use \PHPUnit\Framework\TestCase;

    class ParserStringTest extends TestCase{
        public function testString1(){
            $input = "((1+2)+3)";
            $this->assertEquals(array('(', '(', '1', '+', '2', ')', '+', '3', ')'), ParserString::parserString($input));
        }
    }