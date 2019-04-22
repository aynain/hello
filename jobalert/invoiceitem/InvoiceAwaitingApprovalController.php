<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\invoice;

class InvoiceAwaitingApprovalController extends Controller
{
    public function showData()
    {
        $invoice = DB::select('select * from invoices where status=1');
        return json_encode($invoice);

//        $invoice=DB::table('invoices')->get();
//        return $invoice;

    }
    public function showItem($id){
        $item=DB::table('items')->where('invoice_id', $id)->get();
        return json_encode($item);
    }
}
