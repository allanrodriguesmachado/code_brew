<?php

use App\Database\Connection;
use PHPUnit\Framework\TestCase;
class ConnectionTest extends TestCase
{
    public function testInstanceConnect()
    {
        $connection = Connection::instanceConnect();
        $this->assertInstanceOf(PDO::class, $connection);
    }
}