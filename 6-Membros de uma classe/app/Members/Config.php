<?php

namespace App\Members;
class Config
{
    private const COMPANY = "Developer PHP";
    private const DOMAIN = "Allan";
    private const SECTOR = "TI";

    public static $company;
    public static $domain;
    public static $sector;

    public static function setConfig(string $company, string $domain, string $sector): void
    {
        self::$company = $company;
        self::$domain = $domain;
        self::$sector = $sector;
    }
}