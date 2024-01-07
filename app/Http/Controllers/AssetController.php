<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $event = Event::all();
        return view('admin.asset.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $countAsset = User::query()->where('role', 'student')->count();
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/assets', [
            'page' => 1,
            'perpage' => $countAsset,
        ]);
        // dd($response->json());
        $event_id=$request->event_id;
        $event=Event::query()->where('id',$event_id)->first();
        $point_event=$event->point_max;

        $responseData = $response->json()['data'];

        foreach ($responseData as $data) {
            $name = $data['name'];
            if($name==$request->email){
                $foundRecord = $data;
                break;
            }
        }
        if (isset($foundRecord)) {
            // Xử lý bản ghi đã tìm thấy

            $id = $foundRecord['id'];
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'content-type' => 'application/json',
                'x-api-key' => env('API_KEY'),
            ])->put("https://api.gameshift.dev/assets/$id", [
                    'attributes' => [
                        [
                            'traitType' => 'Point',
                            'value' => strval( $foundRecord['attributes'][0]['value']+ $point_event),
                        ],
                    ],
                ]);
            if ($response->successful()) {
                toastr()->success('Create Teacher Success.');
                return redirect('/admin');
            } else {
                toastr()->error('There was an error sending information to blockChain!');
                return Redirect::back();
            }
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
    public function update(Request $request)
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
