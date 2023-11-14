<?php

class Sensor {

    public function isLocal() {
        $localIP = getHostByName(getHostName());
        $serverIP = $_SERVER["SERVER_ADDR"];

        return $localIP;
    }

    public function addrIp($getProxy = null) {
        $remote = $_SERVER["REMOTE_ADDR"];
        $http = $_SERVER["HTTP_X_FORWARDER_FOR"];
        return $remote;
    }

    public function browser() {
        $result = new WhichBrowser\Parser(getallheaders());
        $out = $result->browser->toString();
        
        return $out;
    }

    public function system() {
        $result = new WhichBrowser\Parser(getallheaders());
        $out = $result->os->toString();
        
        return $out;
    }

    public function genFingerprint($algorytm="sha512") {
        $User_Agent = $_SERVER['HTTP_USER_AGENT'];
        $hash = hash_hmac($algorytm, $User_Agent, hash($algorytm, $User_Agent), true);
        
        return $hash;
    } 

}
?>
