<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch asset collections
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/asset-collections');

        $jsonData = $response->json()['meta'];
        $dataCount = $jsonData['totalResults'];

        // Fetch users
        $responseUser = Http::withHeaders([
            'Accept' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/users', [
            'page' => 1,
            'perPage' => 999,
        ]);

        $response1 = Http::withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->get('https://api.gameshift.dev/assets');

        $res = $response1->json()['data'];
        $jsonDataUser = $responseUser->json();
        $dataCountUser = count($jsonDataUser['data']);

        // Add points to users
        $usersWithPoints = [];

        foreach ($jsonDataUser['data'] as $user) {
            $count_point = 0;

            foreach ($res as $r) {
                if ($r['name'] == $user['email']) {
                    $count_point += (int) $r['attributes'][0]['value'];
                }
            }

            $usersWithPoints[] = [
                'user' => $user,
                'count_point' => $count_point,
            ];
        }

        // Sort users based on count_point in descending order
        usort($usersWithPoints, function ($a, $b) {
            return $b['count_point'] <=> $a['count_point'];
        });

        // Take the top 5 users
        $top5Users = array_slice($usersWithPoints, 0, 5);

        // Pass the data to the view
        return view('admin.layouts.partials.main', compact('dataCount', 'dataCountUser', 'res', 'top5Users'));
    }
}
