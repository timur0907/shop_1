
<?php
    function parserStringFromElement($url, $ElementParsingInFind,$num = 10)
    {
    $begin = strlen($ElementParsingInFind);
           $query = file_get_contents($url); 
           if (strpos($query,$ElementParsingInFind) !== false) { 
              $begin += strpos($query, $ElementParsingInFind);//200077
                   for ($i = $begin; $i < $begin + $num; $i++) { 
                       $result .= $query[$i];
                   }
               return $result;
           }else {
               return null;
           }
    }
    function ParsingResult($data):float {
        if(parserStringFromElement($data["url"], $data["element"], $data["num"]) !== null) {
            return preg_replace('/[^0-9\.]/', '', parserStringFromElement($data["url"], $data["element"], $data["num"]));
            // return 'hello';
        }
    }
    function ParsingFinishResult($data,$number):float {
        return number_format(1/ParsingResult($data)*$number,8);
    }
?>