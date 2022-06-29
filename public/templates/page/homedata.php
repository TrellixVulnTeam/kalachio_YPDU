<?php
function RenderData()
{
    return [
        "slider" => [
            "data"=>[
                [
                    "desktopimage"=>"store/slide1-desktop.gif",
                    "tabletimage"=>"store/slide1-desktop.gif",
                    "mobileimage"=>"store/slide1-mobile.gif",
                ],
                [
                    "desktopimage"=>"store/slide2-desktop.gif",
                    "tabletimage"=>"store/slide2-desktop.gif",
                    "mobileimage"=>"store/slide2-mobile.gif",
                ],
                [
                    "desktopimage"=>"store/slide3-desktop.gif",
                    "tabletimage"=>"store/slide3-desktop.gif",
                    "mobileimage"=>"store/slide3-mobile.gif",
                ],
            ],
            "template"=>file_get_contents(Template::IncludePath("slider"))
        ],
        "sm_info" => [
            "data"=>[
                [
                    "text"=>"لینک",
                    "imgsrc"=>"store/sm1.png"
                ],
                [
                    "text"=>"لینک",
                    "imgsrc"=>"store/sm2.png"
                ],
                [
                    "text"=>"لینک",
                    "imgsrc"=>"store/sm3.png"
                ],
                [
                    "text"=>"لینک",
                    "imgsrc"=>"store/sm4.png"
                ],
                [
                    "text"=>"لینک",
                    "imgsrc"=>"store/sm5.png"
                ],
                [
                    "text"=>"لینک",
                    "imgsrc"=>"store/sm6.png"
                ],
                [
                    "text"=>"لینک",
                    "imgsrc"=>"store/sm7.png"
                ],
                [
                    "text"=>"لینک",
                    "imgsrc"=>"store/sm7.png"
                ],
            ],
            "template"=>file_get_contents(Template::IncludePath("sm_info"))
        ],
        "small_card" => [
            "data"=>[
                [
                    "productimg"=>"img/p1.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p2.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p3.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p4.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p5.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p3.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p4.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p5.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p3.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p4.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p5.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
                [
                    "productimg"=>"img/p6.jpg",
                    "percent"=>"20",
                    "newprice"=>"1,000,000",
                    "curentprice"=>"1,500,000",
                ],
            ],
            "template"=>file_get_contents(Template::IncludePath("small_card"))
        ]
    ];
}