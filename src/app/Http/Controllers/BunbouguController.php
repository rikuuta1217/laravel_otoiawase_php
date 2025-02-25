<?php

namespace App\Http\Controllers;

use App\Models\Bunbougu;
use App\Models\Bunrui;
use Illuminate\Http\Request;
use App\Http\Requests\BunbouguRequest;

class BunbouguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bunbougus = Bunbougu::latest()->paginate(5);
        $bunbougus = Bunbougu::select([
            'b.id',
            'b.name',
            'b.kakaku',
            'b.shosai',
            'r.str as bunrui',
        ])
        ->from('bunbougus as b')
        ->join('bunruis as r',function($join) {
            $join->on('b.bunrui','=','r.id');
        })
        ->orderBy('b.id','DESC')
        ->paginate(5);

        return view('index',compact('bunbougus'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.z
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $bunruis = Bunrui::all();
        return view('create',compact('bunruis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'kakaku' => 'required|integer',
            'bunrui' => 'required|integer',
            'shosai' => 'required|max:140'
        ]);

        $bunbougu = new Bunbougu;
        $bunbougu->name = $request->input(["name"]);
        $bunbougu->kakaku = $request->input(["kakaku"]);
        $bunbougu->bunrui = $request->input(["bunrui"]);
        $bunbougu->shosai = $request->input(["shosai"]);
        $bunbougu->save();

        return redirect()->route('index')->with('success','文房具を登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bunbougu  $bunbougu
     * @return \Illuminate\Http\Response
     */
    public function show(Bunbougu $bunbougu)
    {
        $bunruis = Bunrui::all();
        return view('show',compact('bunbougu'))
            ->with('bunruis',$bunruis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bunbougu  $bunbougu
     * @return \Illuminate\Http\Response
     */
    public function edit(Bunbougu $bunbougu)
    {
        $bunruis = Bunrui::all();
        return view('edit',compact('bunbougu'))
            ->with('bunruis',$bunruis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bunbougu  $bunbougu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bunbougu $bunbougu)
    {
        $request->validate([
        'name' => 'required|max:20',
        'kakaku' => 'required|integer',
        'bunrui' => 'required|integer',
        'shosai' => 'required|max:140'
        ]);

        $bunbougu->name = $request->input(["name"]);
        $bunbougu->kakaku = $request->input(["kakaku"]);
        $bunbougu->bunrui = $request->input(["bunrui"]);
        $bunbougu->shosai = $request->input(["shosai"]);
        $bunbougu->save();

        return redirect()->route('index')->with('success','文房具を更新しました');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bunbougu  $bunbougu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bunbougu $bunbougu)
    {
        $bunbougu->delete();
        return redirect()->route('index')
            ->with('success','文房具'.$bunbougu->name.'を削除しました');
    }
}
