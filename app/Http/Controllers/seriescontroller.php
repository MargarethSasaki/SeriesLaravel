<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seriescontroller extends Controller
{
    public function index(Request $request)
    {
    $series = [
        'punidor',
        'lala',
    ];


$html = '<ul>';
foreach ($series as $serie) {
    $html .= "<li>$serie</li>";
}
$html .= '</ul>';

return $html;
}

}
