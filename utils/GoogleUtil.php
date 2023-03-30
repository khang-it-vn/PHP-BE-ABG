<?php
    class GoogleUtil{
        public static function setupEnviromentLoginGoogle()
        {
              // init configuration
              $clientID = CLIENT_ID;
              $clientSecret = CLIENT_SECRET;
              $redirectUri = CLIENT_REDIRECT;
  
              // create Client Request to access Google API
              $client = new Google_Client();
              $client->setClientId($clientID);
              $client->setClientSecret($clientSecret);
              $client->setRedirectUri($redirectUri);
              $client->addScope("email");
              $client->addScope("profile");

              return $client;
        }
    }
?>