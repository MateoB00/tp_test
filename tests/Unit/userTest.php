<?php 

declare(strict_types = 1);
namespace Tests\Unit;
use App\User;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function testSum(): void
    {
        $greeter = new User('mateo@gmail.com', 'lol', 'lol', 15);

        $greeting = $greeter->isValid();

        $this->assertSame(true, $greeting);
    }
}