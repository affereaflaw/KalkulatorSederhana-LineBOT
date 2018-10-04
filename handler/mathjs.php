<?php

use LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

function hitung($query){
    $query = urlencode($query);
    $result = file_get_contents('http://api.mathjs.org/v4/?expr='.$query);
    $result = new TextMessageBuilder($result);

    return $result;
}