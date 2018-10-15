<?php
$api_key  = "AIzaSyBvG4W8MExIOMWoO8zi7RSQ8yITTAIH0p0";
$base_url = "https://fcm.googleapis.com/fcm/send";
//fHTn02E6UHM:APA91bE7Zca1c9E387bbZIQoog4o3UhOr4qOTTVffl0L3R-Mi530hETHQcFh-DRDDItdGBAI7eG7_4qdQ5OjQE7ra3-lv6pzNK125DA4dOjJeRuDgBG1biv_RGTJRXne4T1lVjqWV8j9

// toに指定しているのはトピック名:testに対して一括送信するという意味
// 個別に送信したい場合はここに端末に割り振られたトークンIDを指定する

//CMSからMySQL入力された条件を取得する。ex たまむすびを3回以上聞いた人
//Treasuredataから該当するuserのuser_idもしくはデバイストークンを取得する。
//該当するユーザーに登録する。

$data = array(
     "to"           => "fHTn02E6UHM:APA91bE7Zca1c9E387bbZIQoog4o3UhOr4qOTTVffl0L3R-Mi530hETHQcFh-DRDDItdGBAI7eG7_4qdQ5OjQE7ra3-lv6pzNK125DA4dOjJeRuDgBG1biv_RGTJRXne4T1lVjqWV8j9"
    ,"priority"     => "high"
    /*

    ,"notification" => array(
                             "title" => "馬川さんこんにちは"
                            ,"body"  => "馬川さんこんにちは"
    )
    */
    ,"data" => array(
         'body' => "馬川さんこんにちは" 
        ,'program_id' => "24"
    )
);
$header = array(
     "Content-Type:application/json"
    ,"Authorization:key=".$api_key
);
$context = stream_context_create(array(
    "http" => array(
         'method' => 'POST'
        ,'header' => implode("\r\n",$header)
        ,'content'=> json_encode($data)
    )
));
file_get_contents($base_url,false,$context)

?>
