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
$a = strval($money);
$str = file_get_contents('flex.json');
$str = json_decode($str,true);
//$jj = array($json);
global $client, $message, $event;
if (strtolower($message['text']) == "flex" || $message['text'] == "22") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(

            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "bubble",
                    "body" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "image",
                                        "url" => "https://stickershop.line-scdn.net/stickershop/v1/product/3159219/LINEStorePC/main.png;compress=true",
                                        "size" => "full",
                                        "aspectMode" => "cover",
                                        "aspectRatio" => "150:196",
                                        "gravity" => "center",
                                        "flex" => 1
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "image",
                                                "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip13.jpg",
                                                "aspectMode" => "cover",
                                                "size" => "full"
                                            )
                                        ),
                                        "cornerRadius" => "100px",
                                        "width" => "72px",
                                        "height" => "72px"
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "contents" => array(
                                                    array(
                                                        "type" => "span",
                                                        "text" => "Nihao",
                                                        "weight" => "bold",
                                                        "color" => "#000000"
                                                    ),
                                                    array(
                                                        "type" => "span",
                                                        "text" => "  我是你的記帳小助手"
                                                    ),
                                                    array(
                                                        "type" => "span",
                                                        "text" => $a,
                                                        "size" => "4xl",
                                                        "style" => "normal",
                                                        "decoration" => "none",
                                                        "weight" => "bold"
                                                    )
                                                ),
                                                "size" => "sm",
                                                "wrap" => true
                                            )
                                        )
                                    )
                                ),
                                "spacing" => "xl",
                                "paddingAll" => "20px"
                            )
                        ),
                        "paddingAll" => "0px"
                    )
                )
            )
            
        )
    ));
}

