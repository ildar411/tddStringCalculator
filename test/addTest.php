<?php
    //namespace StrCalcTest;

    require_once 'stringCalc.php';
    use StrCalc\Add as StrCalc;
    

    use \PHPUnit\Framework\TestCase;

    class StrCalcTest extends TestCase{
        private $calc;
        protected function setUp():void{
            $this->calc = new StrCalc();
        }
        protected function tearDown():void{
            $this->calc = NULL;
        }
        public function testEmptyString(){
            echo "на пустую строку выводим 0 \n";
            $this->assertEquals(0, $this->calc->add(''));

        }
        public function testSingleNumber(){
            $input = random_int(0, 9);
            echo "на строку состоящую только из числа выводит только число  \n";
            $this->assertEquals($input, $this->calc->add($input));

        }
        public function testLongAdd(){
            $input = array("1" , "+" , "2" , "+" , "3");
            echo "подсчет длиного выражения  \n";
            $this->assertEquals(6, $this->calc->add($input));

        }
        public function testShortAdd(){
            $input = array('1', '+', '2');
            
            echo "подсчет короткого выражения  \n";
            $this->assertEquals(3, $this->calc->add($input));
            
        }
    }
    
?>
