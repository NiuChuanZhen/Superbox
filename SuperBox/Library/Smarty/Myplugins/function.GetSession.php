<?php
//闪存Session,渲染后删除
function smarty_function_GetSession($params,$smarty){
    if(!isset($_SESSION)){
        session_start();
    }
    $key=$params['key'];
    if(isset($_SESSION[$key])){
        $result=$_SESSION[$key];
        return $result;
    }
    else{
        return NULL;
    }
}