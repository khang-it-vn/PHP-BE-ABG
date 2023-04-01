<?php
class HttpUtil
{
    public static function get($endpoint)
    {
        $token = SessionUtil::getToken();


        $options = array(
            'http' => array(
                'method'  => 'GET',
                'header'  => 'Authorization: Bearer ' . $token . "\r\n" .
                    'Content-Type: application/json'
            )
        );

        $context = stream_context_create($options);
        $response = file_get_contents($endpoint, false, $context);
        $response =    json_decode($response);

        return $response;
    }


    public static function post($endpoint, $body)
    {

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\nAuthorization: Bearer " . SessionUtil::getToken() . "\r\n",
                'method'  => 'POST',
                'content' => http_build_query($body),
            ),
        );

        $context  = stream_context_create($options);
        $response = file_get_contents($endpoint, false, $context);


        $response = json_decode($response, true);
        return $response;
    }


    public static function put($endpoint, $body)
    {
        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . SessionUtil::getToken(),
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}
