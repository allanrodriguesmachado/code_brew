<?php

use App\Database\Connection;
use App\Model\UserModel;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    public function testInstanceConnect()
    {
        $connection = Connection::instanceConnect();
        $this->assertInstanceOf(PDO::class, $connection);
    }
}