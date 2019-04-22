<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CreateExpense;

class ReviewExpenseController extends Controller
{
    public function showData(){
        return CreateExpense::select('id','spent_at','description','amount')->where('status', 1)->get();
    }

    public function expenseDetail($id){

        $result = DB::table('create_expenses')->where('id',$id)->first();
        return json_encode($result);
    }

    public function approvedExpense($ReviewExpense, $id)
    {
        $status = CreateExpense::find($id);
        if ($status) {
            $result= CreateExpense::where('id', $id)
                ->update(['status' => $ReviewExpense]);
            return json_encode($result);
        }
        else {
            return false;
        }
    }

    public function update($ReviewExpense, $id)
    {
        $status = CreateExpense::find($id);
        if ($status) {
            $result= CreateExpense::where('id', $id)
                ->update(['status' => $ReviewExpense]);
            return json_encode($result);
        }
        else {
            return false;
        }


    }

}
