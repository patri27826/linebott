<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Text)
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api#text-message
 */
/*
陣列輸出 Json
==============================
{
    "type": "text",
    "text": "Hello, world!"
}
==============================
*/


global $client, $message, $event,$state,$income,$expense;
//$str = explode(" ",$message['text']);
if (strtolower($message['text']) == "patrick") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'Helloos, world!' //回復訊息
            )
        )
    ));

    // $str1 ="";
    // $str2 ="";
    // if($str[0] == "+"){
    //     $income += intval($str[1]);
    //     $str1 = "增加收入 : ".$str[1];
    //     $str2 = "總收支 : ".strval($income-$expense);
    // }else{
    //     $expense += intval($str[1]);
    //     $str1 = "增加支出".$str[1];
    //     $str2 = "總收支 : ".strval($income-$expense);
    // }
     
    // $client->replyMessage(array(
    //     'replyToken' => $event['replyToken'],
    //     'messages' => array(
    //         array(
    //             "type" => "flex",
    //             "altText" => "Input your income and expense!",
    //             "contents" => array(
    //                 "type" => "bubble",
    //                 "body" => array(
    //                     "type" => "box",
    //                     "layout" => "vertical",
    //                     "contents" => array(
    //                         array(
    //                             "type" => "text",
    //                             "text" => $str1
    //                         ),
    //                         array(
    //                             "type" => "text",
    //                             "text" => $str2
    //                         )
    //                     )
    //                 )
    //             )
    //         )
            
    //     )
    // ));
}