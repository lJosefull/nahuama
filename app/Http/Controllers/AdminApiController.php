<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_Category;
use Illuminate\Support\Facades\DB;
class AdminApiController extends Controller
{
    public function subCat(Request $request)
    {
        $value = $request->get('q');

        return Sub_Category::where("category_id",$value)->get(['id', DB::raw("name as text")]);
    }
    public function sCat(Request $request)
    {
        $value = $request->get('q');

        return Sub_Category::where('name', 'like', "%$value%")->paginate(null, ['id', 'name as text']);
    }
}
