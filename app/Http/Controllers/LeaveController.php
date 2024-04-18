<?php

namespace App\Http\Controllers;

use App\Http\Resources\LeaveResource;
use App\Models\Leave;
use App\Http\Requests\StoreLeaveRequest;
use App\Http\Requests\UpdateLeaveRequest;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use PDF;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try
        {
            Paginator::useBootstrap();
            $leave = Leave::with('user')->where('user_id','=',Auth::user()->id)->paginate(10);
            return view('pages.leave.index', ['leaveResource' => LeaveResource::collection($leave)]);
        }
        catch (\Exception $e)
        {
            return response()->json(['message' => 'Data not found', 'error' => $e->getMessage()]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.leave.apply');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeaveRequest $request)
    {
        $leave          = Leave::create($request->validated());
        $leaveResource  = LeaveResource::collection([$leave]);
        //return response()->json(['message' => 'Data stored successfully','data' => $leaveResource]);
        $notification   = array(
            'message'       => 'Leave Apply Successfully!!',
            'alert-type'    => 'success'
        );
//        $leave = Leave::with('users')->where('user_id', Auth::id())->find($leave->id);
//        $data = [
//            'title' => 'STAFF LEAVE APPLICATION FROM',
//            'date' => date('d-F-Y'),
//            'leave' => $leave
//        ];
//        $pdf = PDF::loadView('myPDF', $data);
//        $pdf->download('leaveApplication.pdf');
        return redirect()->route('apply.create')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeaveRequest $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leave)
    {
        //
    }
    public function generatePDF($leaveId)

    {
        //$users = User::get();
//        $leave = Leave::with('users')->where('user_id', Auth::id())->find($leaveId);
        $leave = Leave::with('user')->where('id', $leaveId)->first();
        //dd($leave);
        $data = [
            'title' => 'STAFF LEAVE APPLICATION FROM',
            'date' => date('d-F-Y'),
            'leave' => $leave
        ];
        $pdf = PDF::loadView('myPDF', $data);
//        return view('myPDF', $data);
        return $pdf->download('leaveApplication.pdf');
    }
}
