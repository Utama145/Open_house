<?php

namespace App\Http\Controllers;

use App\Models\Boy;
use Illuminate\Http\Request;

class BoyController extends Controller
{
    public function index()
{
$boys = Boy::all();
return response()->json(['message' => 'Successfully fetched Boys', 'data'
=> $boys], 200);
}
public function store(Request $request)
{
$boy = Boy::create($request->all());
return response()->json(['message' => 'Boy successfully created', 'data'
=> $boy], 201);
}
public function show(Boy $boy)
{
return response()->json(['message' => 'Successfully fetched boy', 'data'
=> $boy], 200);
}
public function update(Request $request, Boy $boy)
{
$boy->update($request->all());
return response()->json(['message' => 'Boy successfully updated', 'data'
=> $boy], 200);
}
public function destroy(Boy $boy)
{
$boy->delete();
return response()->json(['message' => 'Boy successfully deleted'], 200);
}

}
