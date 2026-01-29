<?php

class Response {
    public static function json($body, $status = 200) {
        return ['body' => $body, 'status' => $status];
    }
}
