<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExpenseResource;
use App\Models\Expense;
use Exception;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    private $expense;
    public function __construct(Expense $expense)
    {
        $this->expense = $expense;
    }

    public function index()
    {
        try {
            $data['expenses'] = ExpenseResource::collection($this->expense->get());
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['expense'] = new ExpenseResource($this->expense->findorfail($id));
            return successResponse($data);
        } catch (Exception $e) {
            dd($e->getMessage());
            return failedResponse($e->getMessage());
        }
    }
}
