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
        $servers = Server::with('server_details','data_center')->get();
        return view('admin.servers.index',compact('servers','details'));
    }

    public function create()
    {
        return view('admin.servers.create');
    }

    public function store(Request $request)
    {     
        $servers = Server::create($request->all());
        $servers->server_details()->create($request->all());
        $servers->data_center()->create($request->all());
        $servers->network_management()->create($request->all());
        $servers->platform()->create($request->all());
        return redirect()->route('admin.servers.index');
    }

    public function show($id)
    {
        $server = Server::findOrFail($id);
        return view('admin.servers.show',compact('server'));
    }

    public function edit($id)
    {
        $server = Server::findOrFail($id);
        return view('admin.servers.edit',compact('server'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $server = Server::findOrFail($id);
        $server->server_details->update($data);
        $server->data_center->update($data);
        $server->network_management->update($data);
        $server->platform->update($data);
        $server->update($data);

        return redirect()->route('admin.servers.index');
    }

    public function destroy($id)
    {
        $server = Server::findOrFail($id);
        $server->delete();  
        return redirect()->route('admin.servers.index');
    }

    public function archives(){
        $servers = Server::with('server_details','data_center')->onlyTrashed()->get();
        // return $servers;
        return view('admin.servers.trashed',compact('servers'));
    }

    public function restore($id)
    {
        $server = Server::withTrashed()->findOrFail($id)->restore();
        return redirect ('admin/servers');
    }

    public function permanentDelete($id)
    {
        $server = Server::withTrashed()->findOrFail($id)->forceDelete();
        return redirect ('admin/archives');
    }

    public function viewArchive($id){
        $server = Server::withTrashed()->findOrFail($id);
        return view('admin.servers.servers_ar',compact('server'));
    }
}
