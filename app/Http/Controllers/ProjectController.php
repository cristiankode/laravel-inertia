<?php

namespace App\Http\Controllers;

use App\Models\Project;


class ProjectController extends Controller
{
    public function index()
    {
        if(!session()->has("search")) {
            session()->put("search", null);
            session()->put("trashed", null);
        }

        Inertia::render('Projects/Index', [
            "filters" => session()->only(["search", "trashed"]),
            "projects" => Project::with("user")
                ->orderByDesc("id")
                ->filter(request()->only("search", "trashed"))
                ->paginate(5)
        ]);
    }
}
