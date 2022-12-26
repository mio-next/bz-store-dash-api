<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SearchAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(SearchAdminRequest $request)
    {
        $search = $request->getSearches();
        $items = Admin::where($search)
            ->whereStatus(1)
            ->paginate($this->getPageSize());

        return success($items);
    }
}
