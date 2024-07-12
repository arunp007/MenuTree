<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ThirdMenu;
use Inertia\Inertia;

class ThirdMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
        $thirdMenus = ThirdMenu::all();
        return Inertia::render('MenuTree', [
            'thirdMenus' => $thirdMenus, 
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        return Inertia::render('CreateThirdMenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'main_menu_id' => 'required|exists:main_menus,id',
            'sub_menu_id' => 'required|exists:sub_menus,id',
        ]);

        ThirdMenu::create([
            'main_menu_id' => $request->input('main_menu_id'),
            'sub_menu_id' => $request->input('sub_menu_id'),
            'name' => $request->input('name'),
        ]);

        return redirect()->back()->with('success', 'Third menu created successfully!');
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
