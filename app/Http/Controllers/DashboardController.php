<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/asset-collections', [
        ]);
        $jsonData = $response->json()['meta'];
        $dataCount= $jsonData['totalResults'];
        $responseUser = Http::withHeaders([
            'Accept' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/users', [
            'page' => 1,
            'perPage' => 999,
        ]);
        $jsonDataUser = $responseUser->json();
        $dataCountUser = count($jsonDataUser['data']);
        return view('admin.layouts.partials.main',compact('dataCount','dataCountUser'));
    }
}
