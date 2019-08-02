<?php
    require_once '../lib/stringCalc';
    use StrCalc\Subtract as Sub;
    use \PHPUnit\Framework\TestCase;

    class SubtractTest extends TestCase{

        private $calc;
        protected function setUp():void{
            $this->calc = new Sub();
        }
        protected function tearDown():void{
            $this->calc = NULL;
        }
        public function testEmptyString(){
            echo "на пустую строку выводим 0 \n";
            $this->assertEquals(0, $this->calc->subtract(''));

        }
        public function testSingleNumber(){
            $input = random_int(0, 9);
            echo "на строку состоящую только из числа выводит только число  \n";
            $this->assertEquals($input, $this->calc->subtract($input));

        }
        public function testLongAdd(){
            $input = array("3" , "-" , "2" , "-" , "1");
            echo "подсчет длиного выражения  \n";
            $this->assertEquals(0, $this->calc->subtract($input));

        }
        public function testShortAdd(){
            $input = array('2', '-', '2');
            
            echo "подсчет короткого выражения  \n";
            $this->assertEquals(0, $this->calc->subtract($input));
            
        }
    
    }