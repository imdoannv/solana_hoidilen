<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = Event::query()->count();
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/asset-collections', [
            'page' => 1,
            'perPage' => $count,
        ]);

        if ($response->successful()) {
            // Lấy danh sách người dùng từ response
            $events = $response->json();
            return view('admin.events.index', ['events' => $events]);
        } else {
            // Xử lý lỗi, có thể redirect hoặc hiển thị thông báo lỗi
           return abort($response->status());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Event();
        $model->fill($request->all());
        $model->save();

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->post('https://api.gameshift.dev/asset-collections', [
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'imageUrl'=>'https://picsum.photos/200/300'
        ]);
        dd($response->successful());

//        if ($response->successful()) {
//            return response()->json($response->json(), 201);
//        } else {
//            return response()->json(['error' => 'Failed to create user'], $response->status());
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
