<?php
$api_key  = "AII KEY";
$base_url = "https://fcm.googleapis.com/fcm/send";
 // toはトピック名:testに対して一括送信するという意味
// 個別に送信したい場合はトークンID指定
 $data = array(
     "to"           => "devicd id"
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
