<?php
if (strtolower($message['text']) == "start" || strtolower($message['text']) == "介紹") {
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
                                                    "size" => "5xl",
                                                    "aspectMode" => "cover",
                                                    "aspectRatio" => "150:196",
                                                    "gravity" => "center",
                                                    "flex" => 1,
                                                    "url" => "https://i.ibb.co/Zg837Yf/DSC-0138-1.jpg"
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "image",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip8.jpg",
                                                            "size" => "full",
                                                            "aspectMode" => "cover",
                                                            "aspectRatio" => "150:98",
                                                            "gravity" => "center"
                                                        ),
                                                        array(
                                                            "type" => "image",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip9.jpg",
                                                            "size" => "full",
                                                            "aspectMode" => "cover",
                                                            "aspectRatio" => "150:98",
                                                            "gravity" => "center"
                                                        )
                                                    ),
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
                                                            "url" => "https://i.ibb.co/8KG397b/DSC-0020.jpg",
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
                                                                    "text" => "     "
                                                                ),
                                                                array(
                                                                    "type" => "span",
                                                                    "text" => "Hi, I can introduce some yummy food for you in Taiwan, enjoy it !
                                                                    input \"list\" to get more information"
                                                                )
                                                            ),
                                                            "size" => "sm",
                                                            "wrap" => true
                                                        ),
                                                        array(
                                                            "type" => "box",
                                                            "layout" => "baseline",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "text",
                                                                    "text" => "1,140,753 used",
                                                                    "size" => "sm",
                                                                    "color" => "#bcbcbc"
                                                                )
                                                            ),
                                                            "spacing" => "sm",
                                                            "margin" => "md"
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
            else if (strtolower($message['text']) == "六千" || strtolower($message['text']) == "六千牛肉湯")  {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => array(
                        array(
                            "type" => "flex",
                            "altText" => "Input your income and expense!",
                            "contents" => 
                            array(
                                "type" => "bubble",
                                "hero" => array(
                                    "type" => "image",
                                    "url" => "https://margaret.tw/wp-content/uploads/nEO_IMG_DSC08040.jpg",
                                    "size" => "full",
                                    "aspectRatio" => "20:13",
                                    "aspectMode" => "cover",
                                    "action" => array(
                                        "type" => "uri",
                                        "uri" => "http://linecorp.com/"
                                    )
                                ),
                                "body" => array(
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => array(
                                        array(
                                            "type" => "text",
                                            "text" => "六千牛肉湯",
                                            "weight" => "bold",
                                            "size" => "xl"
                                        ),
                                        array(
                                            "type" => "box",
                                            "layout" => "baseline",
                                            "margin" => "md",
                                            "contents" => array(
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                ),
                                                array(
                                                    "type" => "text",
                                                    "text" => "4.0",
                                                    "size" => "sm",
                                                    "color" => "#999999",
                                                    "margin" => "md",
                                                    "flex" => 0
                                                )
                                            )
                                        ),
                                        array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "margin" => "lg",
                                            "spacing" => "sm",
                                            "contents" => array(
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "spacing" => "sm",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "text",
                                                            "text" => "Place",
                                                            "color" => "#aaaaaa",
                                                            "size" => "sm",
                                                            "flex" => 1
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "700台南市中西區海安路一段63號",
                                                            "wrap" => true,
                                                            "color" => "#666666",
                                                            "size" => "sm",
                                                            "flex" => 5
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "spacing" => "sm",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "text",
                                                            "text" => "Time",
                                                            "color" => "#aaaaaa",
                                                            "size" => "sm",
                                                            "flex" => 1
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "05:00 - 11:00",
                                                            "wrap" => true,
                                                            "color" => "#666666",
                                                            "size" => "sm",
                                                            "flex" => 5
                                                        )
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "footer" => array(
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "spacing" => "sm",
                                    "contents" => array(
                                        array(
                                            "type" => "button",
                                            "style" => "link",
                                            "height" => "sm",
                                            "action" => array(
                                                "type" => "uri",
                                                "label" => "CALL",
                                                "uri" => "https://www.google.com/search?q=%E5%85%AD%E5%8D%83&source=lmns&bih=722&biw=1536&hl=zh-TW&sa=X&ved=2ahUKEwj3ur3W6dTtAhUKBN4KHT6pDRcQ_AUoAHoECAEQAA#"
                                            )
                                        ),
                                        array(
                                            "type" => "button",
                                            "style" => "link",
                                            "height" => "sm",
                                            "action" => array(
                                                "type" => "uri",
                                                "label" => "WEBSITE",
                                                "uri" => "https://www.facebook.com/%E5%85%AD%E5%8D%83%E6%B3%93%E4%BD%90%E7%89%9B%E8%82%89%E6%B9%AF-226368674708166/"
                                            )
                                        ),
                                        array(
                                            "type" => "spacer",
                                            "size" => "sm"
                                        )
                                    ),
                                    "flex" => 0
                                )
                            )
                        )
                        
                    )
                ));
               
            }else if (strtolower($message['text']) == "樂熊" || strtolower($message['text']) == "樂熊pasta")  {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => array(
                        array(
                            "type" => "flex",
                            "altText" => "Input your income and expense!",
                            "contents" => 
                            array(
                                "type" => "bubble",
                                "hero" => array(
                                    "type" => "image",
                                    "url" => "https://i3.achangpro.com/img.13shaniu.tw/uploads/20200204210244_40.jpeg",
                                    "size" => "full",
                                    "aspectRatio" => "20:13",
                                    "aspectMode" => "cover",
                                    "action" => array(
                                        "type" => "uri",
                                        "uri" => "http://linecorp.com/"
                                    )
                                ),
                                "body" => array(
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => array(
                                        array(
                                            "type" => "text",
                                            "text" => "樂熊Pasta",
                                            "weight" => "bold",
                                            "size" => "xl"
                                        ),
                                        array(
                                            "type" => "box",
                                            "layout" => "baseline",
                                            "margin" => "md",
                                            "contents" => array(
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                ),
                                                array(
                                                    "type" => "text",
                                                    "text" => "4.6",
                                                    "size" => "sm",
                                                    "color" => "#999999",
                                                    "margin" => "md",
                                                    "flex" => 0
                                                )
                                            )
                                        ),
                                        array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "margin" => "lg",
                                            "spacing" => "sm",
                                            "contents" => array(
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "spacing" => "sm",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "text",
                                                            "text" => "Place",
                                                            "color" => "#aaaaaa",
                                                            "size" => "sm",
                                                            "flex" => 1
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "701台南市東區裕學路185巷135號",
                                                            "wrap" => true,
                                                            "color" => "#666666",
                                                            "size" => "sm",
                                                            "flex" => 5
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "spacing" => "sm",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "text",
                                                            "text" => "Time",
                                                            "color" => "#aaaaaa",
                                                            "size" => "sm",
                                                            "flex" => 1
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "11:00–14:00, 16:30–20:00",
                                                            "wrap" => true,
                                                            "color" => "#666666",
                                                            "size" => "sm",
                                                            "flex" => 5
                                                        )
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "footer" => array(
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "spacing" => "sm",
                                    "contents" => array(
                                        array(
                                            "type" => "button",
                                            "style" => "link",
                                            "height" => "sm",
                                            "action" => array(
                                                "type" => "uri",
                                                "label" => "CALL",
                                                "uri" => "https://www.google.com/search?q=%E6%A8%82%E7%86%8Apasta&source=lmns&bih=722&biw=1536&hl=zh-TW&sa=X&ved=2ahUKEwjQr_DX6tTtAhXSAt4KHSy3BAsQ_AUoAHoECAEQAA#"
                                            )
                                        ),
                                        array(
                                            "type" => "button",
                                            "style" => "link",
                                            "height" => "sm",
                                            "action" => array(
                                                "type" => "uri",
                                                "label" => "WEBSITE",
                                                "uri" => "https://www.facebook.com/%E6%A8%82%E7%86%8APasta-160528101032085/"
                                            )
                                        ),
                                        array(
                                            "type" => "spacer",
                                            "size" => "sm"
                                        )
                                    ),
                                    "flex" => 0
                                )
                            )
                        )
                        
                    )
                ));
               
            }else if (strtolower($message['text']) == "辣訣")  {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => array(
                        array(
                            "type" => "flex",
                            "altText" => "Input your income and expense!",
                            "contents" => 
                            array(
                                "type" => "bubble",
                                "hero" => array(
                                    "type" => "image",
                                    "url" => "https://lh3.googleusercontent.com/MM_AZX0NGMdSbj8MQYUwfOmWYp4m8XkmsCqCPYMy-laHaIDN9--wK0xXsZafN1r2XUVVn8JXifDKf9M70_TQuoTAvzNY17J3=s600",
                                    "size" => "full",
                                    "aspectRatio" => "20:13",
                                    "aspectMode" => "cover",
                                    "action" => array(
                                        "type" => "uri",
                                        "uri" => "http://linecorp.com/"
                                    )
                                ),
                                "body" => array(
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => array(
                                        array(
                                            "type" => "text",
                                            "text" => "辣訣",
                                            "weight" => "bold",
                                            "size" => "xl"
                                        ),
                                        array(
                                            "type" => "box",
                                            "layout" => "baseline",
                                            "margin" => "md",
                                            "contents" => array(
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                ),
                                                array(
                                                    "type" => "icon",
                                                    "size" => "sm",
                                                    "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                ),
                                                array(
                                                    "type" => "text",
                                                    "text" => "4.5",
                                                    "size" => "sm",
                                                    "color" => "#999999",
                                                    "margin" => "md",
                                                    "flex" => 0
                                                )
                                            )
                                        ),
                                        array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "margin" => "lg",
                                            "spacing" => "sm",
                                            "contents" => array(
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "spacing" => "sm",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "text",
                                                            "text" => "Place",
                                                            "color" => "#aaaaaa",
                                                            "size" => "sm",
                                                            "flex" => 1
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "701台南市東區東寧路205號",
                                                            "wrap" => true,
                                                            "color" => "#666666",
                                                            "size" => "sm",
                                                            "flex" => 5
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "spacing" => "sm",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "text",
                                                            "text" => "Time",
                                                            "color" => "#aaaaaa",
                                                            "size" => "sm",
                                                            "flex" => 1
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "11:00–14:00, 17:00–22:00",
                                                            "wrap" => true,
                                                            "color" => "#666666",
                                                            "size" => "sm",
                                                            "flex" => 5
                                                        )
                                                    )
                                                )
                                            )
                                        )
                                    )
                                ),
                                "footer" => array(
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "spacing" => "sm",
                                    "contents" => array(
                                        array(
                                            "type" => "button",
                                            "style" => "link",
                                            "height" => "sm",
                                            "action" => array(
                                                "type" => "uri",
                                                "label" => "CALL",
                                                "uri" => "https://www.google.com/search?q=%E8%BE%A3%E8%A8%A3&source=lmns&bih=722&biw=1536&hl=zh-TW&sa=X&ved=2ahUKEwjcsMiV7NTtAhXihMYKHaOEDIcQ_AUoAHoECAEQAA#"
                                            )
                                        ),
                                        array(
                                            "type" => "button",
                                            "style" => "link",
                                            "height" => "sm",
                                            "action" => array(
                                                "type" => "uri",
                                                "label" => "WEBSITE",
                                                "uri" => "https://www.facebook.com/%E8%BE%A3%E8%A8%A3-%E7%A7%98%E8%97%8F%E9%8D%8B%E7%89%A9-%E5%8F%B0%E5%8D%97%E6%9D%B1%E5%AF%A7%E5%BA%97-588786088443012/"
                                            )
                                        ),
                                        array(
                                            "type" => "spacer",
                                            "size" => "sm"
                                        )
                                    ),
                                    "flex" => 0
                                )
                            )
                        )
                        
                    )
                ));
               
            }else if (strtolower($message['text']) == "list")  {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => array(
                        array(
                            "type" => "flex",
                            "altText" => "Input your income and expense!",
                            "contents" => 
                            array(
                                "type" => "carousel",
                                "contents" => array(
                                    array(
                                        "type" => "bubble",
                                        "size" => "micro",
                                        "hero" => array(
                                            "type" => "image",
                                            "url" => "https://margaret.tw/wp-content/uploads/nEO_IMG_DSC08040.jpg",
                                            "size" => "full",
                                            "aspectMode" => "cover",
                                            "aspectRatio" => "320:213"
                                        ),
                                        "body" => array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "contents" => array(
                                                array(
                                                    "type" => "text",
                                                    "text" => "六千牛肉湯",
                                                    "weight" => "bold",
                                                    "size" => "sm",
                                                    "wrap" => true
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "4.0",
                                                            "size" => "xs",
                                                            "color" => "#8c8c8c",
                                                            "margin" => "md",
                                                            "flex" => 0
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "box",
                                                            "layout" => "baseline",
                                                            "spacing" => "sm",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "text",
                                                                    "text" => "文章跟六千比，文章是竹筍湯",
                                                                    "wrap" => true,
                                                                    "color" => "#8c8c8c",
                                                                    "size" => "xs",
                                                                    "flex" => 5
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            ),
                                            "spacing" => "sm",
                                            "paddingAll" => "13px"
                                        )
                                    ),
                                    array(
                                        "type" => "bubble",
                                        "size" => "micro",
                                        "hero" => array(
                                            "type" => "image",
                                            "url" => "https://i3.achangpro.com/img.13shaniu.tw/uploads/20200204210244_40.jpeg",
                                            "size" => "full",
                                            "aspectMode" => "cover",
                                            "aspectRatio" => "320:213"
                                        ),
                                        "body" => array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "contents" => array(
                                                array(
                                                    "type" => "text",
                                                    "text" => "樂熊pasta",
                                                    "weight" => "bold",
                                                    "size" => "sm",
                                                    "wrap" => true
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "4.0",
                                                            "size" => "sm",
                                                            "color" => "#8c8c8c",
                                                            "margin" => "md",
                                                            "flex" => 0
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "box",
                                                            "layout" => "baseline",
                                                            "spacing" => "sm",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "text",
                                                                    "text" => "想成為Gangstar的必經之路",
                                                                    "wrap" => true,
                                                                    "color" => "#8c8c8c",
                                                                    "size" => "xs",
                                                                    "flex" => 5
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            ),
                                            "spacing" => "sm",
                                            "paddingAll" => "13px"
                                        )
                                    ),
                                    array(
                                        "type" => "bubble",
                                        "size" => "micro",
                                        "hero" => array(
                                            "type" => "image",
                                            "url" => "https://lh3.googleusercontent.com/MM_AZX0NGMdSbj8MQYUwfOmWYp4m8XkmsCqCPYMy-laHaIDN9--wK0xXsZafN1r2XUVVn8JXifDKf9M70_TQuoTAvzNY17J3=s600",
                                            "size" => "full",
                                            "aspectMode" => "cover",
                                            "aspectRatio" => "320:213"
                                        ),
                                        "body" => array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "contents" => array(
                                                array(
                                                    "type" => "text",
                                                    "text" => "辣訣",
                                                    "weight" => "bold",
                                                    "size" => "sm"
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "4.0",
                                                            "size" => "sm",
                                                            "color" => "#8c8c8c",
                                                            "margin" => "md",
                                                            "flex" => 0
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "box",
                                                            "layout" => "baseline",
                                                            "spacing" => "sm",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "text",
                                                                    "text" => "辣到哭，愛吃辣最愛",
                                                                    "wrap" => true,
                                                                    "color" => "#8c8c8c",
                                                                    "size" => "xs",
                                                                    "flex" => 5
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            ),
                                            "spacing" => "sm",
                                            "paddingAll" => "13px"
                                        )
                                    )
                                )
                            )
                        )
                        
                    )
                ));
               
            }else if (strtolower($message['text']) == "fsm") {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => array(
                        array(
                            'type' => 'image', //訊息類型 (圖片)
                            'originalContentUrl' => 'https://i.ibb.co/18MmmSc/1.png', //回復圖片
                            'previewImageUrl' => 'https://i.ibb.co/18MmmSc/1.png' //回復的預覽圖片
                        )
                    )
                ));
            }