<?php
$authtoken= "****************";

$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/contact/form/contacts/record/update";

$post_fields= array();
$post_fields['authtoken']= "*******************";
$post_fields['scope']= "creatorapi";
$post_fields['criteria']= "ID == 369606900***********";
$post_fields['Your_Name.first_name'] = "maddy";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
$response = curl_exec($ch);
curl_close($ch);
print_r($response);
?>