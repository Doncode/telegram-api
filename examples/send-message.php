<?php

use GuzzleHttp\Promise;
use GuzzleHttp\Exception\ClientException;
use unreal4u\Telegram\Methods\SendMessage;
use unreal4u\TgLog;

include('basics.php');

//time curl "https://api.telegram.org/bot202341246:AAE8wYVoS23N3Ur0wMkPVdv1tIPvR_2ozt0/SendMessage?chat_id=181889615&text=%D0%A2%D0%B5%D1%81%D1%82%D0%BE%D0%B2%D0%BE%D0%B5%20%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D0%BD%D0%B8%D0%B5&disable_web_page_preview=false&reply_to_message_id=0"


//$url = 'https://core.telegram.org/bots';
//$url = 'https://api.telegram.org/bot202341246:AAE8wYVoS23N3Ur0wMkPVdv1tIPvR_2ozt0/SendMessage?chat_id=181889615&text=%D0%A2%D0%B5%D1%81%D1%82%D0%BE%D0%B2%D0%BE%D0%B5%20%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D0%BD%D0%B8%D0%B5&disable_web_page_preview=false&reply_to_message_id=0';
//
////curl
//$opt = [
//    CURLOPT_URL => $url,
//    CURLOPT_HEADER => 0,
//];
//
//$t20 = microtime(true);
//$curl = curl_init($url);
//curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//$out = curl_exec($curl);
////curl_setopt($curl, CURLOPT_NOBODY, true);
////echo $out;
////curl_close($curl);
//
//
//$t30 = microtime(true);
//echo 'curl1:', $t30 - $t20, PHP_EOL;
//
//sleep(10);
//
//$t20 = microtime(true);
//$out = curl_exec($curl);
//$t30 = microtime(true);
//echo 'curl2:', $t30 - $t20, PHP_EOL;
//
//
//
//
//
//////promise
//$t20 = microtime(true);
//$client = new GuzzleHttp\Client();
////    $request = new \GuzzleHttp\Psr7\Request('GET', $url);
////$callback = function (\GuzzleHttp\Psr7\Response $response) {
////    echo $response->getBody() , PHP_EOL , PHP_EOL;
////};
//$promises = [
//    $client->getAsync($url),
//    $client->getAsync($url),
//    $client->getAsync($url),
//    $client->getAsync($url),
//    $client->getAsync($url),
//];
//$results = Promise\unwrap($promises);
//
//$t30 = microtime(true);
//echo 'Async: ', $t30 - $t20, PHP_EOL;
////sleep(10);
//
////sync
//$t20 = microtime(true);
//$client = new GuzzleHttp\Client();
//$client->get($url);
//$client->get($url);
//$client->get($url);
//$client->get($url);
//$client->get($url);
//$t30 = microtime(true);
//echo 'sync: ', $t30 - $t20, PHP_EOL;
////sleep(10);
//
//
////sync multi client
//$t20 = microtime(true);
//(new GuzzleHttp\Client())->get($url);
//(new GuzzleHttp\Client())->get($url);
//(new GuzzleHttp\Client())->get($url);
//(new GuzzleHttp\Client())->get($url);
//(new GuzzleHttp\Client())->get($url);
//
//$t30 = microtime(true);
//echo 'sync multi client: ', $t30 - $t20, PHP_EOL;
//sleep(10);




//$tgLog = new TgLog(BOT_TOKEN);
//
$sendMessage = new SendMessage();
$sendMessage->chat_id = A_USER_CHAT_ID;
$sendMessage->text = 'Тестовое сообщение bot';
try {
    $t0 = microtime(true);
    $tgLog->performApiRequest($sendMessage);
    $tgLog->performApiRequest($sendMessage);
    $tgLog->performApiRequest($sendMessage);
    $t10 = microtime(true);
    printf('Message "%s" sent!<br/>%s', $sendMessage->text, $t10 - $t0);
} catch (ClientException $e) {
    echo 'Error detected trying to send message to user: <pre>';
    var_dump($e->getRequest());
    echo '</pre>';
    die();
}


//$sendMessage = new SendMessage();
//$sendMessage->chat_id = A_GROUP_CHAT_ID;
//$sendMessage->text = 'And this is an hello the the group... also from a getMessage file';
//try {
//    $tgLog->performApiRequest($sendMessage);
//    printf('Message "%s" sent!<br/>%s', $sendMessage->text, PHP_EOL);
//} catch (ClientException $e) {
//    echo 'Error detected trying to send message to group: <pre>';
//    print_r((string)$e->getResponse()->getBody());
//    echo '</pre>';
//    die();
//}
