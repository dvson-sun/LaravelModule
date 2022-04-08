<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\EditOrderRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const PAGINATE_NUMBER = 5;

    public function index()
    {
        $orders = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.username')
            ->orderBy('orders.id', 'desc')
            ->paginate(self::PAGINATE_NUMBER);

        return view('pages.orders.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.orders.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrderRequest $request)
    {
        Order::create($request->all());

        return redirect()->route('orders.index')->with('success','Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show order";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $user = User::findOrFail($order->user_id);

        return view('pages.orders.edit', compact('order','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditOrderRequest $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->name = $request->name;
        $order->price = $request->price;
        $order->quantity = $request->quantity;
        $order->user_id = $request->user_id;
        $order->update();

        return redirect()->route('orders.index')->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Order::findOrFail($id);
        $user->delete();

        return redirect()->route('orders.index')->with('success','Delete success');
    }

    public function search(Request $request)
    {
        if ($request->ajax()){
            $output = '';
            $username = DB::table('users')->where('username', 'LIKE', '%' . $request->search . '%')->get();
            if (strlen($request->search) > 0) {
                foreach ($username as $key => $item) {
                    $output .= '<option class="list-group-item" value="'.$item->id.'">'.$item->username.': '.$item->first_name.' '.$item->last_name.'</option>';
                }
            }
            
            return Response($output);
        }
    }
}
