<?php
    require_once 'stringCalc.php';
    use StrCalc\BracetsBalance as BracetsBalance;
    use \PHPUnit\Framework\TestCase;
    
    class BracetsBalanceTest extends TestCase{
        
        public function testRightString(){
            $input = array('(', '2', ')', '(', '(', '(', '123', ')', '0', ')', '34', ')');
            echo "проверка правильно строки \n";
            $this->assertEquals(TRUE, BracetsBalance::bracetsBalance($input));

        }
        public function testWrongString(){
            $input = array('(', '2', '(', '4', '(', '5', ')');
            echo "проверка не правильной строки \n";
            $this->assertEquals(FALSE, BracetsBalance::bracetsBalance($input));

        }
        public function testEmptyString(){
            $input = '';
            echo "тест пустой строки \n";
            $this->assertEquals(TRUE, BracetsBalance::bracetsBalance($input));

        }
        public function testSingleString1(){
            $input = '(';
            echo "НА ВХОД ПОДАНО ТОЛЬКО ( \n";
            $this->assertEquals(FALSE, BracetsBalance::bracetsBalance($input));

        }
        public function testSingleString2(){
            $input = ')';
            echo "на вход поддано только ) \n";
            $this->assertEquals(FALSE, BracetsBalance::bracetsBalance($input));

        }
        public function testSingleStringNumber(){
            $input = '3';
            echo "на вход поданно только число \n";
            $this->assertEquals(TRUE, BracetsBalance::bracetsBalance($input));

        }
    }
?>