<?php
namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
class OrderController extends Controller
{
// Retrieve all orders with associated user and student data
public function index()
{
$orders = Order::with('user:id,name', 'student')->get();
return response()->json(['message' => 'Successfully fetched orders', 'data'
=> $orders], 200);
}
// Create a new order with user ID, student ID, quantity, total price, and status
public function store(Request $request)
{
$request->validate([
'user_id' => 'required|exists:users,id',
'student_id' => 'required|exists:students,id',
'grade_id' => 'required|exists:grades,id',

]);
$order = Order::create($request->all());
return response()->json(['message' => 'Order successfully created', 'data' => 
$order], 201);
}
// Retrieve an order by ID with associated user and student data
public function show(Order $order)
{
$order->load(['user', 'student']);
return response()->json(['message' => 'Successfully fetched order', 'data' => 
$order]);
}
// Update an existing order with optional user ID, student ID, quantity, total price, and status
public function update(Request $request, Order $order)
{
$request->validate([
'user_id' => 'sometimes|required|exists:users,id',
'student_id' => 'sometimes|required|exists:students,id',
'grade_id' => 'sometimes|required|exists:grades,id',

]);
$order->update($request->all());
return response()->json(['message' => 'Order successfully updated', 'data' => 
$order]);
}
// Delete an existing order by ID
public function destroy(Order $order)
{
$order->delete();
return response()->json(['message' => 'Order successfully deleted'], 200);
}
}