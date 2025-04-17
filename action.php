<?php
    $input_number = $_POST['display'];
    $result = 0;
    $iniResult = 1;
    if(str_contains($input_number,"+")){
        $real_number = explode("+",$input_number);
        for ($i = 0; $i < count($real_number); $i++) {
            $result = $result + $real_number[$i];
        }
        header('Location:index.php?display='.$result);
        exit();
    }
    if(str_contains($input_number,"-")){
        $real_number = explode("-",$input_number);
        for ($i = 0; $i < count($real_number); $i++) {
            $result = $real_number[$i] - $result;
        }
        header('Location:index.php?display='.$result);
        exit();
    }
    if(str_contains($input_number,"*")){
        $real_number = explode("*",$input_number);
        for ($i = 0; $i < count($real_number); $i++) {
            $iniResult = $real_number[$i] * $iniResult;
        }
        header('Location:index.php?display='.$iniResult);
        exit();
    }
    if(str_contains($input_number,"÷")){
        $real_number = explode("÷",$input_number);
        for ($i = 0; $i < count($real_number); $i++) {
            $iniResult = $real_number[$i] / $iniResult;
        }
        header('Location:index.php?display='.$iniResult);
        exit();
    }
?>