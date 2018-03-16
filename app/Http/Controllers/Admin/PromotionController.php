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

        if ($request->status != 'Черновик') {
            $validator = Validator::make($request->all(), [
                'promotion_name' => 'required|max:85',
                'promotion_description' => 'required',
                'meta_description' => 'max:180',
                'meta_keywords' => 'max:255',
            ]);
            if ($validator->fails()) {
                return redirect('admin/promotions/create')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                if ($request->filled('meta_title')) {
                    $meta_title = htmlspecialchars($request->meta_title) ;
                } else {
                    $meta_title = htmlspecialchars($request->promotion_name);
                }

                if ($request->filled('meta_description')) {
                    $meta_description = htmlspecialchars($request->meta_description) ;
                } else {
                    $shortMetaDescription = substr($request->promotion_description, 0, 180);
                    $meta_description = strip_tags($shortMetaDescription);
                }

                Promotion::create([
                    'name' => htmlspecialchars($request->promotion_name),
                    'description' => htmlspecialchars($request->promotion_description),
                    'status' => $request->status,
                    'started_date' => Carbon::createFromFormat('d.m.Y', $request->started_date, 'UTC'),
                    'end_date' => Carbon::createFromFormat('d.m.Y', $request->end_date, 'UTC'),
                    'created_by_user_id' => $userId,
                    'meta_title' => $meta_title,
                    'meta_description' => $meta_description,
                    'meta_keywords'=> htmlspecialchars($request->meta_keywords)
                ]);
                //return view('admin/promotions/vardump')->with('myVar', $request->meta_title);
                return redirect('/admin/promotions/')->with('successMessage', 'Статья успешно добавлена в базу данных');
            }
        } else {
            //Дописать логику для черновика с новым валидатором
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
