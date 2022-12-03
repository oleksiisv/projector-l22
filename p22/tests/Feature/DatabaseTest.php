<?php
declare(strict_types=1);

namespace Tests\Unit;
use Illuminate\Support\Facades\DB;

class DatabaseTest extends \Tests\TestCase
{
    public function test_create()
    {
        $result = DB::connection()->getDatabaseName();

        $this->assertEquals($result, 'l4app');
    }
}
