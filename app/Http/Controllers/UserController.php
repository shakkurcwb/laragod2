<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User as Model;
use App\UserMeta as Meta;

class UserController extends Controller
{
    protected $model, $meta;

    public function __construct(Model $model, Meta $meta)
    {
        $this->model = $model;
        $this->meta = $meta;

        $this->middleware('auth');
        $this->middleware('admin')->except('show');
        $this->middleware('locale');
    }

    # Views

    public function index(Request $request)
    {
        $users = $this->model->paginate();
        return view('modules.users.index')->with('users', $users);
    }

    public function create(Request $request)
    {
        return view('modules.users.create');
    }

    public function edit(Request $request, int $id)
    {
        $user = $this->model->findOrFail($id);
        return view('modules.users.edit')->with('user', $user);
    }

    public function delete(Request $request, int $id)
    {
        $user = $this->model->findOrFail($id);
        return view('modules.users.delete')->with('user', $user);
    }

    public function show(Request $request, int $id)
    {
        $user = $this->model->findOrFail($id);
        return view('modules.users.show')->with('user', $user);
    }

    # Logics

    public function search(Request $request)
    {
        if (empty($request->search))
        {
            return redirect('/users');
        }

        $validated = $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $fields = array_merge(
            $this->model->getFillable(),
            $this->meta->getFillable()
        );

        $users = $this->model->search($validated['search'], $fields)->paginate(4);

        return view('modules.users.index')->with('users', $users);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'is_admin' => 'nullable|boolean',
        ]);

        $this->model->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => isset($validated['is_admin']) ? true : false,
        ]);

        return redirect('/users')->with('success', 'User created.');
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'is_admin' => 'nullable|boolean',
            'theme' => 'nullable|string|min:2',
            'language' => 'nullable|string|min:2',
        ]);

        $this->model->findOrFail($id)->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'is_admin' => isset($validated['is_admin']) ? true : false,
            'theme' => $validated['theme'],
            'language' => $validated['language'],
        ]);

        if (isset($validated['is_admin']))
        {
            $this->model->findOrFail($id)->update([
                'password' => Hash::make($validated['password']),
            ]);
        }

        return redirect('/users')->with('success', 'User updated.');
    }

    public function destroy(Request $request, int $id)
    {
        $this->model->findOrFail($id)->delete();
        return redirect('/users')->with('success', 'User deleted.');
    }
}
