<?php

class Api {

    public static function twitter() {
        $request = new GuzzleHttp\Psr7\Request('GET', 'http://twitter.com/search?f=tweets&vertical=default&q=%23NuitInfoAtos');
        return $request->getBody();
    }

}
