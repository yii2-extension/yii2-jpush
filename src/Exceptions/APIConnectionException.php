<?php
namespace  szw\jpush\Exceptions;

class APIConnectionException extends JPushException {

    function __toString() {
        return "\n" . __CLASS__ . " -- {$message} \n";
    }
}
