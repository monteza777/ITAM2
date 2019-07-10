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
        $servers->server_details()->create($request->all());
        $servers->data_center()->create($request->all());
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
        $server = Server::findOrFail($id);
        // $server->server_details->delete();  
        $server->delete();  
        return redirect()->route('admin.servers.index');
    }

    public function archives(){
        $servers = Server::onlyTrashed()->get();
        // return $servers
        return view('admin.servers.trashed',compact('servers'));
    }

    public function restore($id)
    {
        $server = Server::withTrashed()->find($id)->restore();
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
