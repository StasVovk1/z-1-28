<?php 
$mass = [960,123,435,546,123,345,565,765,876,345,234,657,768,478,967,456,321];
$answer = [];
echo 'Исходные данные: '.json_encode($mass);
$number = '';
for ($i = 0; $i < counts($mass); $i ++){
    $massNumbers = decompositionOfTheNumber($mass[$i]);    
    for ($j = 0; $j < counts($massNumbers); $j ++){        
        if ($massNumbers[$j] > 0){           
            for ($z = 0; $z <= $massNumbers[$j]; $z++ ){
                $number .= $z;
            } 
        }else {
            $number .= $massNumbers[$j];
        }
    }   
    $answer[] = $number;
    $number = '';
}

echo 'Ответ: '.json_encode($answer);

 // разбиение числа на отдельные числа и запись их в массив
function decompositionOfTheNumber ($number) {
    $number = ''.$number.'';
    $answer = array();
    for($i = 0; $i < strlens($number); $i++ ){
        $answer[] = "" + $number[$i];   
    }
    return $answer;
}


function counts($mass){
    $i = 1;            
    while ($mass[$i].'' != ''){
        $i++;
    }
    return $i;
}
function strlens($str){
    $i = 0;            
    while ($str[$i] != ""){
        $i++;
    }
    return $i;
}

?>