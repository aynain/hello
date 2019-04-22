<?php
namespace tests\Unit\app\Http\Controllers;
use App\Http\Controllers\InvoiceAwaitingPaymentController;
use Illuminate\Http\Request;
use Mockery;
use Tests\TestCase;

class InvoiceAwaitingPaymentControllerTest extends TestCase
{

    public function test_invoice_awaiting_payment_controller_save_invoice_payment()
    {
        $mock = Mockery::mock(InvoiceAwaitingPaymentController::class);
        $mock->shouldReceive('saveInvoicePayment')
            ->once()->andReturn(true);
        $request = Request::create('/save-invoice-payment', 'POST', [
            'amount_paid' => ' 2000',
            'date_paid' => '2019-1-1',
            'paid_from' => 'check',
            'paid_by' => 12
        ]);
        $payment = $mock->saveInvoicePayment($request);
        $invoice = json_decode($payment);
        $this->assertEquals(true, $invoice);
    }


    public function test_invoice_awaiting_payment_controller_show_invoice_payment_data()
    {
        $expected = array(
            'to' => 'abiha',
            'reference' => 'fatima',
            'create_date' => '2019-1-1',
            'due_date' => '2019-1-2'
        );
        $mock = Mockery::mock(InvoiceAwaitingPaymentController::class);
        $mock->shouldReceive('showInvoicePaymentData')
            ->once()->andReturn($expected);

        $payment = $mock->showInvoicePaymentData();
        $invoice = json_encode($payment);
        $data = json_decode($invoice);
        $this->assertEquals($expected['to'], $data->to);
    }

    public function test_invoice_awaiting_payment_controller_show_invoice_payment_detail()
    {
        $expected = array(
            'invoice_id' => '001',
            'invoice_item' => 'bread',
            'description' => 'this is sample',
            'qty' => '1',
            'unit_price' =>'100',
            'account' => '201233323456',
            'amount' =>'100'
        );
        $mock = Mockery::mock(InvoiceAwaitingPaymentController::class);
        $mock->shouldReceive('showInvoicePaymentDetail')
            ->once()->andReturn($expected);

        $payment = $mock->showInvoicePaymentDetail(1);
        $invoice = json_encode($payment);
        $data = json_decode($invoice);
        $this->assertEquals($expected['invoice_id'], $data->invoice_id);
    }
}
