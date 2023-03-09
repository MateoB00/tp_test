<?php 

declare(strict_types = 1);
namespace Tests\Unit;
use App\Calculatrice;

use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    /** @test */
    public function testSum(): void
    {
        $greeter = new Calculatrice();

        $greeting = $greeter->sum(0,1);

        $this->assertSame(1, $greeting);
    }
}