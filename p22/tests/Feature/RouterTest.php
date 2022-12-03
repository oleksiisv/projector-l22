<?php
declare(strict_types=1);

namespace Tests\Unit;

class RouterTest extends \Tests\TestCase
{
    public function test_create()
    {
        $params = [
            'psp_reference'=>'UA412149712233373117557365853',
            'merchant_reference'=>'WC880273',
            'amount'=>224,
            'payment_method'=>'Visa',
            'status'=>3,
            'risk_score'=>26,
        ];
        $response = $this->call('GET', 'transaction/create', $params);

        $this->assertStringContainsString('Redirecting', $response->getContent());
    }
}
