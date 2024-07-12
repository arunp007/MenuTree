<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MainMenu;
use Illuminate\Http\Request;
use App\Models\SubMenu;
use Inertia\Inertia;
use Log;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subMenus = SubMenu::all(); 
        

        return Inertia::render('MenuTree', [
            'subMenus' => $subMenus ,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('CreateSubMenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'main_menu_id' => 'required|exists:main_menus,id',
            
        ]);

        SubMenu::create([
            'name' => $request->input('name'),
            'main_menu_id' => $request->input('main_menu_id'),
        ]);

        return redirect()->back()->with('success', 'SubMenu created successfully!')->header('X-Inertia-Location', url()->current());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subMenu = SubMenu::findorFail($id);
        return response()->json($subMenu);
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
