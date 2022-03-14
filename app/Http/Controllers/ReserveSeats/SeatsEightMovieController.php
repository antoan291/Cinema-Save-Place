<?php

namespace App\Http\Controllers\ReserveSeats;
use App\Http\Controllers\Controller;
use App\Models\SeatsEightMovie;
use Illuminate\Http\Request;

class SeatsEightMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(SeatsEightMovie $seats)
    {
        //
        return view('seats.seatsEightMovie',compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seats = new SeatsEightMovie;
        
        $seats->id = $request->get('id');
        $seats->row_seats = $request->get('row_seats');
        $seats->project = $request->get('project');
        $seats->seat_id = $request->get('seat_id');
        $seats->save();
    
        return redirect('/eightMovie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seats = SeatsEightMovie::find($id);
   

        if ($seats != null) {
            $seats->delete();
            return redirect('/eightMovie')->with('success', 'Post Removed Succesfully !');
        }
    
        return redirect('/eightMovie')->with('status','Something went wrong !');
    }
}
