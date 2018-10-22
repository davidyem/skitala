<?php
define("c", 4);
if(!empty($_POST['messagetodecrypt'])) {
    $message = str_split($_POST['messagetodecrypt']);
    $countstr = count(array_chunk($message, c));
    $message = array_chunk($message, $countstr);
    for ($i = 0; $i < $countstr; $i++) {
        foreach ($message as &$mes) {
            $m = array_shift($mes);
            $res .= $m;
        }
        $resultdec .= $res;
        $res = '';
    }
    $resultdecrypt = array('textdecrypt' => $resultdec);
    echo json_encode($resultdecrypt);
}
?>