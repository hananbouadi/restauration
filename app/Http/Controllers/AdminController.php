<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('admin.dashboard',compact('recipes'));
    }


    public function create(){
        return view('admin.create');
    }
    // Create a new recipe
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'description'=>'required|max:255|string',
            'price' => 'required|numeric|min:0',
            'image'=>'nullable|mimes:png,jpg,jpeg,webp'
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = '/uploads';
            $file->move($path,$filename);
        }

        $recipe = Recipe::create($request->all());
        return response()->json($recipe, 201);
    }

    // Get a specific recipe
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return response()->json($recipe);
    }

    // Update a specific recipe
    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image'=>'nullable|mimes:png,jpg,jpeg,webp'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $recipe->update($request->all());
        return response()->json($recipe, 200);
    }

    // Delete a specific recipe
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();
        return response()->json(null, 204);
    }

    // Get all users
    // public function indexUsers()
    // {
    //     $users = User::all();
    //     return response()->json($users);
    // }
    // public function createAdminUser(){
    //     $user = new User();
    //     $user->name = 'Admin User';
    //     $user->email = 'admin@example.com';
    //     $user->password = bcrypt('password');
    //     $user->role = 'admin'; // Set the role attribute to 'admin'
    //     $user->save();
    // }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin') {
            Session::put('username', 'admin');
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('error', 'Invalid credentials.');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
