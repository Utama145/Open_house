<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
class StudentController extends Controller
{
public function index()
{
$students = Student::all();
return response()->json(['message' => 'Successfully fetched products', 'data'
=> $students], 200);
}
public function store(Request $request)
{
$student = Student::create($request->all());
return response()->json(['message' => 'Product successfully created', 'data'
=> $student], 201);
}
public function show(Student $student)
{
return response()->json(['message' => 'Successfully fetched product', 'data'
=> $student], 200);
}
public function update(Request $request, Student $student)
{
$student->update($request->all());
return response()->json(['message' => 'Product successfully updated', 'data'
=> $student], 200);
}
public function destroy(Student $student)
{
$student->delete();
return response()->json(['message' => 'Product successfully deleted'], 200);
}
}
