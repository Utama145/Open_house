<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
{
$grades = Grade::all();
return response()->json(['message' => 'Successfully fetched grades', 'data'
=> $grades], 200);
}
public function store(Request $request)
{
$grade = Grade::create($request->all());
return response()->json(['message' => 'grade successfully created', 'data'
=> $grade], 201);
}
public function show(Grade $grade)
{
return response()->json(['message' => 'Successfully fetched grade', 'data'
=> $grade], 200);
}
public function update(Request $request, Grade $grade)
{
$grade->update($request->all());
return response()->json(['message' => 'grade successfully updated', 'data'
=> $grade], 200);
}
public function destroy(Grade $grade)
{
$grade->delete();
return response()->json(['message' => 'grade successfully deleted'], 200);
}
}

