<?php
/**
 * Tests for BlockLot
 */

use PHPUnit\Framework\TestCase;
use Blocklot\Blocklot;

class BlocklotTest extends TestCase {
    private Blocklot $instance;

    protected function setUp(): void {
        $this->instance = new Blocklot(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocklot::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
