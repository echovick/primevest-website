<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWaitListRequest;
use App\Models\WaitList;

class WaitListController extends Controller
{
    //
    public function store(StoreWaitListRequest $request)
    {
        $data = $request->validated();
        WaitList::create($data);
        return back()->with('success', 'Congratulation, on taking your first step to real estate investment, we will be reaching out to you soon');
    }
}
