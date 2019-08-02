<?php
    namespace StrCalc;

    class Add{
        public function add($input){
            if($input == ''){
                return 0;
            }
            if(is_numeric($input)){
                return $input;
            }
            $result = 0;
            
            for($i = 0; $i < count($input); ++$i){
                if($input[$i] == '+'){
                    continue;
                }
                else{
                    $result += $input[$i];
                }
            }
            return $result;

            
        }
    }
    class Subtarct {
        public function subtarct($input){
            if($input == ''){
                return 0;
            }
            if(is_numeric($input)){
                return $input;
            }
            $result = 0;
            
            for($i = 0; $i < count($input); ++$i){
                if($input[$i] == '-'){
                    continue;
                }
                else{
                    $result -= $input[$i];
                }
            }
            return $result;
        }
    }
    class BracetsBalance {
        public static function bracetsBalance($input){
            $balance = 0;
            if(is_array($input)){
                if($input[0] == ')'){
                    return FALSE;
                }
                foreach($input as $item){
                    if($item == '('){
                        ++$balance;
                    }
                    if($item == ')'){
                        --$balance;
                    }
                }
                if($balance){
                    return FALSE;
                }
                else{
                    return TRUE;
                }
            }
            else{
                if(($input == ')')or($input == '(')){
                    return FALSE; 
                }
                else{
                    return TRUE;
                }
            }
        }
    }

    class ParserString {
        
        const paternNumeric = "/[\d]/";

        public static function parserString($input){
            $singArr;
            $numericArr;
            $inputArr;
            $outputArr;
            for($i = 0; $i < strlen($input); ++$i){
                $inputArr[] = $input[$i];

            }
            for($i = 0; $i < count($inputArr); ++$i){
                if(!preg_match(ParserString::paternNumeric, $inputArr[$i])){
                    $singArr[$i] = $inputArr[$i];
                }
                else{
                    $numericArr = preg_grep(ParserString::paternNumeric, $inputArr);
                
                }
                

            }
            $j = 0;
            for($i = 0; $i < count($inputArr); ++$i){
                $number = '';
                
                if($singArr[$i]){
                    $outputArr[$j] = $singArr[$i];
                    ++$j;
                }
                if($numericArr[$i]){
                    while($numericArr[$i]){
                        $number .= $numericArr[$i];
                        ++$i;
                    }
                    $outputArr[$j] = $number;
                    ++$j;
                }
                
            }
            print_r($outputArr);
            return $outputArr;    
        }
    }
    
?>