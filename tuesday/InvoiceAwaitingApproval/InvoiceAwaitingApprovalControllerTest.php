<?php
namespace tests\Unit\InvoiceAwaitingApproval\InvoiceAwaitingApprovalControllerTest;
use App\Http\Controllers\InvoiceAwaitingApprovalController;
use Mockery;
use Tests\TestCase;
class InvoiceAwaitingApprovalControllerTest extends TestCase
{
    public function testInvoiceAwaitingApprovalControllerShowInvoiceData()
    {
        $expected = array(
            'to' => 'abiha',
            'reference' => 'nabiha',
            'create_date' => '2019-4-4',
            'due_date' => '2019-4-5'
        );
        $mock = Mockery::mock(InvoiceAwaitingApprovalController::class);
        $mock->shouldReceive('showInvoiceData')
            ->once()->andReturn($expected);

        $invoice = $mock->showInvoiceData();
        $invoiceData = json_encode($invoice);
        $data = json_decode($invoiceData);
        $this->assertEquals($expected['to'], $data->to);
    }
    public function testInvoiceAwaitingApprovalControllerShowInvoiceDetail()
    {
        $expected = array(
            'to' => 'abiha',
            'reference' => 'nabiha',
            'create_date' => '2019-4-4',
            'due_date' => '2019-4-5'
        );
        $mock = Mockery::mock(InvoiceAwaitingApprovalController::class);
        $mock->shouldReceive('showInvoiceDetail')
            ->once()->andReturn($expected  );

        $invoice = $mock->showInvoiceDetail(12);
        $invoiceData = json_encode($invoice);
        $data = json_decode($invoiceData);
        $this->assertEquals($expected['to'], $data->to);
    }
    public function testInvoiceAwaitingApprovalControllerShowItemDetail()
    {
        $expected = array(
            'invoice_id' => '8',
            'invoice_item' => 'biscuits',
            'description' => 'sample of invoice description',
            'qty' => '1',
            'unit_price' => '140',
            'account' => '14556627273',
            'amount' => '140'
        );
        $mock = Mockery::mock(InvoiceAwaitingApprovalController::class);
        $mock->shouldReceive('showItem')
            ->once()->andReturn($expected);

        $invoice = $mock->showItem(8);
        $invoiceData = json_encode($invoice);
        $data = json_decode($invoiceData);
        $this->assertEquals($expected['invoice_id'], $data->invoice_id);
    }
}
