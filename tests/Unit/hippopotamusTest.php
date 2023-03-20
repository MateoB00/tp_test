<?php 

declare(strict_types = 1);
namespace Tests\Unit;
use App\Hippopotamus;

use PHPUnit\Framework\TestCase;

class HippopotamusTest extends TestCase
{
    /** @test */
    public function testFight(): void
    {
        $hippo1 = new Hippopotamus('hippo1', 3000, 50);
        $hippo2 = new Hippopotamus('hippo2', 5000, 100);

        $winner = $hippo1->fight($hippo2); 

        $this->assertSame("hippo2 t'as battut", $winner);
    }
}