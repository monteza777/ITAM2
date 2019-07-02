<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Server;
use App\ServerDetails;

class ServersController extends Controller
{
    public function index()
    {
        $servers = Server::all();
        return view('admin.servers.index',compact('servers'));
    }

    public function create()
    {
        return view('admin.servers.create');
    }

    public function store(Request $request)
    {
        $servers = Server::create($request->all());

        foreach($request->input('server_details',[]) as $data){
            $servers->server_details()->create($data);
        }

        return redirect()->route('admin.servers.index');
    }

    public function show($id)
    {
        $server = Server::findOrFail($id);
        return view('admin.servers.show',compact('server'));
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
