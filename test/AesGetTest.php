<?php
require_once ("../lib/YopClient.php");

//Get请求 对称秘钥
function get_aes(){
    YopConfig::$debug=true;

    $appKey = "yop-boss";
    $secretKey = "PdZ74F6sxapgOWJ31QKmYw==";
    $request = new YopRequest($appKey, $secretKey);

    //加入请求参数
    $request->addParam("request_flow_id", "12345678");//请求流水标识
    $request->addParam("name", "张文康");//请求流水标识
    $request->addParam("id_card_number", "370982199101186691");//请求流水标识

    //提交Get请求
    $response = YopClient::get("/rest/v3.0/auth/idcard", $request);
}

get_aes();
