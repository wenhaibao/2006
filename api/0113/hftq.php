<?php
    //使用 file_get_contents发送HTTP GET请求
    $cont = file_get_contents("https://devapi.qweather.com/v7/weather/now?location=101090301&key=17d8926e35824ffbae01e32313c33c45&gzip=n");
    echo $cont;