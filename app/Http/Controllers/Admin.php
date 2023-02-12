<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use App\Exports\ExportRundown;
use App\Models\Rundown;
use App\Models\User;
use Exception;

class Admin extends Controller
{
    public function index()
    {
        $rundownCommitteeDay1 = Rundown::where(['role' => 'committee', 'day' => '1'])->get();
        $rundownParticipantDay1 = Rundown::where(['role' => 'participant', 'day' => '1'])->get();

        return view('admin/dashboard', [
            'title' => 'Dashboard',
            'rundownCommitteeDay1' => $rundownCommitteeDay1,
            'rundownParticipantDay1' => $rundownParticipantDay1
            
        ]);
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'time' => 'required',
                'agenda' => 'required',
                'location' => 'required',
                'description' => 'required'
            ]);

            $rundown = new Rundown();
            $rundown->role = $request->role;
            $rundown->day = $request->day;
            $rundown->type = $request->type;
            $rundown->time = $request->time;
            $rundown->agenda = $request->agenda;
            $rundown->location = $request->location;
            $rundown->description = $request->description;

            $rundown->save();

            return redirect('/');
        } catch (Exception $err) {
            return response()->json([
                'success'   => false,
                'message'   => $err->getMessage()
            ], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $this->validate($request, [
                'time' => 'required',
                'agenda' => 'required',
                'location' => 'required',
                'description' => 'required'
            ]);

            $rundown = Rundown::find($request->id);

            $rundown->time = $request->time;
            $rundown->agenda = $request->agenda;
            $rundown->location = $request->location;
            $rundown->description = $request->description;

            $rundown->save();
            
            return redirect('/');
        } catch (Exception $err) {
            return response()->json([
                'success'   => false,
                'message'   => $err->getMessage()
            ], 500);
        }
    }

    public function get_rundown(Request $request){
        if ($request->id) {
            $rundown = Rundown::where(['id' => $request->id])->first();

            $response = [ 
                'id' => $rundown->id,
                'role' => $rundown->role,
                'day' => $rundown->day,
                'type' => $rundown->type,
                'time' => $rundown->time,
                'agenda' => $rundown->agenda,
                'location' => $rundown->location,
                'description' => $rundown->description,
            ];

            echo json_encode($response);
        }
    }

    public function delete(Request $request){
        try {
            $rundown = Rundown::find($request->id);

            $rundown->delete();
            
            return redirect('/');
        } catch (Exception $err) {
            return response()->json([
                'success'   => false,
                'message'   => $err->getMessage()
            ], 500);
        }
    }

    public function exportRundown(Request $request){
        return Excel::download(new ExportRundown($request), 'rundown.xlsx');
    }

    public function userTable (){
        $user = User::all();
        return view('admin/user_table', [
            'users' => $user
        ]);
    }
}
