<?php

/**
 * 
 * @copyright (c) 2016, Geraldo de S. Marink Filho
 */
class Status {

    var $status, $connect, $info, $ch;

    public function getStatus($url) {

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $connect = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        if ($info['http_code'] == 200) {
            $status = '<span class="label label-success">OnLine</span>';
        } else {
            $status = '<span class="label label-danger">OffLine</span>';
        }
        return $status;
    }

}
?>
