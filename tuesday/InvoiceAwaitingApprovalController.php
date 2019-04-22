<?php
namespace App\Http\Controllers;
use App\invoice;
use App\Item;
class InvoiceAwaitingApprovalController extends Controller
{
    public function showInvoiceData()
    {
        $invoice = Invoice::where('status', 1)->get();;
        return json_encode($invoice);

    }
    public function showInvoiceDetail($id)
    {
        $item = Invoice::where('id', $id)->get();
        return json_encode($item);
    }
    public function showItem($id)
    {
        $item = Item::where('invoice_id', $id)->get();
        return json_encode($item);
    }

    public function invoiceApprovalStatusUpdate($status, $id)
    {
        $result = 0;
        if ($status == 2) {
            $result = Invoice::where('id', $id)
                ->update(['status' => $status]);
        } else if ($status == 0) {
                $result = Invoice::where('id', $id)
                    ->update(['status' => $status]);

        }
        return json_encode($result);
    }

}
