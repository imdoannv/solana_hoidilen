<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
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
        if (!$model->wasRecentlyCreated) {
            toastr()->error('There was an error creating the instructor!');
            return Redirect::back();
        }
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->post('https://api.gameshift.dev/asset-collections', [
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'imageUrl'=>'https://picsum.photos/200/300'
        ]);
        if ($response->successful()) {
            toastr()->success('Create Event Success.');
            return redirect('/admin');
        } else {
            $model->delete();
            toastr()->error('There was an error sending information to blockChain!');
            return Redirect::back();
        }
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
