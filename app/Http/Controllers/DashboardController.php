<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $count = Event::query()->count();
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/asset-collections', [
            'page' => 1,
            'perPage' => 999,
        ]);
        $jsonData = $response->json();
        $dataCount = count($jsonData['data']);
//        dd($dataCount);

        $responseUser = Http::withHeaders([
            'Accept' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/users', [
            'page' => 1,
            'perPage' => 999,
        ]);
        $jsonDataUser = $responseUser->json();
        $dataCountUser = count($jsonDataUser['data']);
//        dd($dataCountUser);
        return view('admin.layouts.partials.main',compact('dataCount','dataCountUser'));
    }
}
