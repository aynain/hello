<?php

namespace Tests\Unit\database;
use App\InvoicePayment;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class InvoiceAwaitingPaymentDbTest extends TestCase
{
    use DatabaseTransactions;

    public function testDatabase()
    {
        factory(InvoicePayment::class)->create([
            'amount_paid' => ' 2000',
            'date_paid' => '2019-1-1',
            'paid_from' => 'check',
            'paid_by' => 12
        ]);
        $this->assertDatabaseHas('invoice_payments', [
            'amount_paid' => ' 2000',
            'date_paid' => '2019-1-1',
            'paid_from' => 'check',
            'paid_by' => 12
        ]);


    }
}
