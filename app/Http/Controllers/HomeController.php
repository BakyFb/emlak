<?php


namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Emlak;
use App\Models\Estate;
use App\Models\Location;
use App\Models\Realtor;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index()
    {
        $types = Type::orderBy('name')
            ->get();

        $locations = Location::whereNull('name')
            ->inRandomOrder()
            ->take(4)
            ->get();

        $comments = Comment::whereNull('name')
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('home.index')
            ->with([
                'types' => $types,
                'locations' => $locations,
                'comments' => $comments,
            ]);
    }


    public function type($slug)
    {
        $type = Type::firstWhere('slug', $slug);

        $estate = Estate::where('type_id', $type->id)
            ->paginate(24);

        return view('home.category')
            ->with([
                'type' => $type,
                'estate' => $estate,
            ]);
    }
}
