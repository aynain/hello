<?php

namespace App\Http\Controllers;
use App\Invoice;
use App\Item;
use Illuminate\Http\Request;
use App\InvoicePayment;


class InvoiceAwaitingPaymentController extends Controller
{
    public function showInvoicePaymentData(){
        $invoice = Invoice::leftJoin('invoice_payments', 'invoices.id', 'invoice_payments.payment_id')->whereIn('status',[2,3])->get();
        return json_encode($invoice);
    }
    public function showInvoicePaymentDetail($id)
    {
        $invoice = Invoice::where('id',$id)->leftJoin('invoice_payments', 'invoices.id', 'invoice_payments.payment_id')->get();
        $item = Item::where('invoice_id', $id)->get();
        return json_encode(array("invoice" => $invoice, "item" => $item));
    }

    public function saveInvoicePayment(Request $request)
    {
        $id = $request->input('id');
        $payment = Invoice::where('id', $id)->first();
        $payment = new InvoicePayment();
        $payment->amount_paid =$request->amount_paid;
        $payment->date_paid =$request->date_paid;
        $payment->paid_from =$request->paid_from;
        $payment->paid_by =$request->paid_by;
        $payment->save();
    }
    public function makePayment($payStatus, $id)
    {
        $status = Invoice::find($id);
        if ($status) {
            $result= Invoice::where('id', $id)
                ->update(['status' => $payStatus]);
            return json_encode($result);
        }
        else {
            return false;
        }
    }
}
