<?php
require('../app/libs/Sensor.php');

use PHPUnit\Framework\TestCase;

class SensorTest extends TestCase {
    public function setUp() : void {
        $this->instance = new AuthBasic();
    }
    public function tearDown() : void {
        unset($this->instance);
    }
    public function isLocal() {
        $out = $this->instance->isLocal();
        $this->assertInstanceOf(String::class, $out);
    }
    public function addrIp() {
        $out = $this->instance->addrIp();
        $this->assertInstanceOf(String::class, $out);
    }

    public function browser() {
        $out = $this->instance->browser();
        $this->assertInstanceOf(String::class, $out);
    }

    public function system() {
        $out = $this->instance->browser();
        $this->assertInstanceOf(String::class, $out);
    }

    public function getFingerprint() {
        $out = $this->instance->getFingerprint();
        $this->assertInstanceOf(String::class, $out);
    }
}
?>