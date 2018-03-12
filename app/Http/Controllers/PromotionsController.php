<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class PromotionsController extends Controller
{
    public function getData()
    {
        return Datatables::of(Promotion::all())->tojson();
    }

    public function index()
    {
        return view('admin.promotions');
    }

}
