<?php

namespace App\Members;

class Triggers
{
    private const TRIGGER = "trigger";
    public const ACCEPT = "accept";
    public const WARNING = "warning";
    public const ERROR = "error";

    private static $message;
    private static $errorType;
    private static $error;

    private static function setError($message, $errorType)
    {

    }
}