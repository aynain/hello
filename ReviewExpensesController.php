<?php

namespace App\Http\Controllers;
use DB;
use App\ReviewExpense;
use Illuminate\Http\Request;

class ReviewExpensesController extends Controller
{
    public function showData()
    {
//        $result= DB::table('review_expenses')->where('id', $id)->where('status', 1)->get();
//        where('status', 1)->get();
        $result = DB::select('select * from review_expenses where status=1');
        return json_encode($result);

//        $id = [];
//       $status= DB::table('review_expenses')->where('id', $id)->where('status', 1)->get();
//       return $status;
//        $id = 1;
//        $status=ReviewExpense::where("id", $id)->first();
//        return json_encode($status);

    }

    public function update($ReviewExpense, $id)
    {
        $status = ReviewExpense::find($id);
            if ($status) {
                $result= ReviewExpense::where('id', $id)
                    ->update(['status' => $ReviewExpense]);
                return json_encode($result);
            }
            else {
                    return false;
            }


        }

    public function approvedExpense($ReviewExpense, $id)
    {
        $status = ReviewExpense::find($id);
        if ($status) {
            $result= ReviewExpense::where('id', $id)
                ->update(['status' => $ReviewExpense]);
            return json_encode($result);
        }
        else {
            return false;
        }
    }
    }

