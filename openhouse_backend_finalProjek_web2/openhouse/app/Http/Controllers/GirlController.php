<?php

namespace App\Http\Controllers;

use App\Models\Girl;
use Illuminate\Http\Request;

class GirlController extends Controller
{
   public function index()
{
$girls = Girl::all();
return response()->json(['message' => 'Successfully fetched Girls', 'data'
=> $girls], 200);
}
public function store(Request $request)
{
$girl = Girl::create($request->all());
return response()->json(['message' => 'girl successfully created', 'data'
=> $girl], 201);
}
public function show(Girl $girl)
{
return response()->json(['message' => 'Successfully fetched girl', 'data'
=> $girl], 200);
}
public function update(Request $request, Girl $girl)
{
$girl->update($request->all());
return response()->json(['message' => 'Girl successfully updated', 'data'
=> $girl], 200);
}
public function destroy(Girl $girl)
{
$girl->delete();
return response()->json(['message' => 'Girl successfully deleted'], 200);
}

}
