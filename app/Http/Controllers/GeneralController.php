<?php

namespace App\Http\Controllers;

use App\Model\Land;
use App\Model\Settings;
use Hamcrest\Core\Set;


class GeneralController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $industrys = Land::where('land_type_id', '=', 1)->get();
        $industrys->load('land_type', 'land_images');

        $gardenings = Land::where('land_type_id', '=', 2)->get();
        $gardenings->load('land_type', 'land_images');

        $agriculturals = Land::where('land_type_id', '=', 3)->get();
        $agriculturals->load('land_type', 'land_images');

        // Получи главные настройки
        $globalSettings = Settings::find(1);

        return view('general', compact(['industrys', 'gardenings', 'agriculturals', 'globalSettings']));
    }

    public function oneLand($id)
    {
        $land = Land::find($id);

        if ($land) {
            return view('more-general', compact(['land']));
        } else {
            abort(404);
        }
    }
}
