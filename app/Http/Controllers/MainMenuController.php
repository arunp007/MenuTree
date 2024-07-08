<?php

namespace App\Http\Controllers;

use App\Http\Resources\MainMenuResource;
use App\Models\MainMenu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mainMenus = MainMenu::all(); 

        return Inertia::render('MenuTree', [
            'mainMenus' => $mainMenus ,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

       
        MainMenu::create([
            'name' => $request->input('name'),
        ]);

        
        return redirect(url()->current())->with('success', 'Menu created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mainMenu = MainMenu::findorFail($id);
        return response()->json($mainMenu);
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
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
        ]);

        $mainMenu = MainMenu::findorFail($id);
        $mainMenu->update($request->all());
        return response()->json($mainMenu);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mainMenu = MainMenu::findorFail($id);
        $mainMenu->delete();
        return response()->jso(['message' => 'MainMenu deleted successfully']);
    }
}
