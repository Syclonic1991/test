<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Promotion;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Transliterate;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.promotions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        if ($request->status != 'draft') {
            $validator = Validator::make($request->all(), [
                'promotion_name' => 'required|max:255',
                'promotion_description' => 'required|max:255',
                'meta_title' => 'max:255',
                'meta_description' => 'max:255',
                'meta_keywords' => 'max:255',
            ]);

            if ($validator->fails()) {
                return redirect('admin/promotions/create')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                if ($request->has('meta_title')) {
                    $metaTitle = $request->meta_title;
                } else {
                    $metaTitle = Transliterate::make($request->name, ['type' => 'url', 'lowercase' => 'true']);
                }

                if ($request->has('meta_description')) {
                    $metaDescription = $request->meta_description;
                }

                Promotion::create([
                    'name' => $request->promotion_name,
                    'description' => $request->promotion_description,
                    'status' => $request->status,
                    'started_date' => Carbon::createFromFormat('d.m.Y', $request->started_date, 'UTC'),
                    'end_date' => Carbon::createFromFormat('d.m.Y', $request->end_date, 'UTC'),
                    'created_by_user_id' => $userId,
                    'meta_title' => $metaTitle,
                    'meta_description' => $metaDescription
                ]);
                //return view('admin/promotions/vardump')->with('myVar', $request->started_at);
                return redirect('/admin/promotions/')->with('successMessage', 'Статья успешно добавлена в базу данных');
            }
        } else {
            return redirect('/admin/promotions')->with('successMessage', 'Черновик статьи успешно добавлен в базу данных');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getData()
    {
        return Datatables::of(Promotion::all())->tojson();
    }
}
