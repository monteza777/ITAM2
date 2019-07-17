<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;

class RolesController extends Controller
{

    public function index()
    {
        if (! Gate::allows('role_access')) {
            return abort(401);
        }
            $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        if (! Gate::allows('role_create')) {
            return abort(401);
        }
        return view('admin.roles.create');
    }


    public function store(StoreRolesRequest $request)
    {
        if (! Gate::allows('role_create')) {
            return abort(401);
        }
        $role = Role::create($request->all());

        foreach ($request->input('users', []) as $data) {
            $role->users()->create($data);
        }


        return redirect()->route('admin.roles.index');
    }

    public function edit($id)
    {
        if (! Gate::allows('role_edit')) {
            return abort(401);
        }
        $role = Role::findOrFail($id);

        return view('admin.roles.edit', compact('role'));
    }

    public function update(UpdateRolesRequest $request, $id)
    {
        if (! Gate::allows('role_edit')) {
            return abort(401);
        }
        $role = Role::findOrFail($id);
        $role->update($request->all());

        $users           = $role->users;
        $currentUserData = [];
        foreach ($request->input('users', []) as $index => $data) {
            if (is_integer($index)) {
                $role->users()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentUserData[$id] = $data;
            }
        }
        foreach ($users as $item) {
            if (isset($currentUserData[$item->id])) {
                $item->update($currentUserData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.roles.index');
    }


    /**
     * Display Role.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('role_view')) {
            return abort(401);
        }
        $users = \App\User::where('role_id', $id)->get();

        $role = Role::findOrFail($id);

        return view('admin.roles.show', compact('role', 'users'));
    }


    /**
     * Remove Role from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('role_delete')) {
            return abort(401);
        }
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('admin.roles.index');
    }

    /**
     * Delete all selected Role at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('role_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Role::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
