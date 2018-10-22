<?php
define("c", 4);
if(!empty($_POST["messagetoencrypt"])) {
    $message = str_split(trim($_POST["messagetoencrypt"], " "));
    $message = array_chunk($message, c);
    $res = array();
    for ($i = 0; $i < 4; $i++) {
        foreach ($message as &$mes) {
            $m = array_shift($mes);
            array_push($res, $m);
        }
        $r = $res;
        if(array_pop($r) == '') {
            array_push($res, " ");
        }
        array_push($res, " ");
        $resultenc = array();
        $resultenc = $resultenc + $res;
    }
    $resenc = implode($resultenc);
    $resultencrypt = array('textencrypt' => $resenc);
    echo json_encode($resultencrypt);
}
?>