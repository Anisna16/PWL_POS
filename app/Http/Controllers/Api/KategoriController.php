<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        return KategoriModel::all();
    }
    public function store(Request $request)
    {
        $user = KategoriModel::create($request->all());
        return response()->json($user, 201);
    }

    public function show(KategoriModel $user)
    {
        return KategoriModel::find($user);
    }

    public function update(Request $request, KategoriModel $user)
    {
        $user->update($request->all());
        return KategoriModel::find($user);
    }

    public function destroy(KategoriModel $user)
    {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}