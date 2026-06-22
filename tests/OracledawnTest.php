<?php
/**
 * Tests for OracleDawn
 */

use PHPUnit\Framework\TestCase;
use Oracledawn\Oracledawn;

class OracledawnTest extends TestCase {
    private Oracledawn $instance;

    protected function setUp(): void {
        $this->instance = new Oracledawn(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Oracledawn::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
