<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\CreateExpense;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ReviewExpenseController extends Controller
{
    public function showExpenseData(){
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

    public function declineExpense($ReviewExpense, $id)
    {
        $status = CreateExpense::find($id);
        if ($status) {
            $result = CreateExpense::where('id', $id)
                ->update(['status' => $ReviewExpense]);
            return json_encode($result);
        }
        else {
            return false;
        }
    }

    public function showImage($filename=""){
        $path = Storage::disk('public')->getAdapter ()->getPathPrefix().'images/'. $filename;
        if($filename==""){
            return response()->json(['message' => 'Image not found.'], 200);
        }
        if(!File::exists($path)) {
            return response()->json(['message' => 'Image not found.'], 200);
        }

        $type = File::mimeType($path);
        $headers=array("Content-Type"=>$type);

        return response()->file($path,$headers);
    }

}
