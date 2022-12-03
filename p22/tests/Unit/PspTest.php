<?php
declare(strict_types=1);

namespace Tests\Unit;

class PspTest extends \Tests\TestCase
{
    public function test_create()
    {
        $reference = 'UA412149712233373117557365853';

        $this->assertStringEndsNotWith('ABC', $reference);
    }
}
