<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(Request $request)
    {

        if($request->ajax()) {

             $data = Comment::whereDate('date', '>=', $request->start)
                    //    ->whereDate('end_date',   '<=', $request->end)
                       ->get(['id', 'title', 'date']);

             return response()->json($data);
        }

        return view('calendar.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {

        switch ($request->type) {
           case 'add':
              $event = Comment::create([
                  'title' => $request->title,
                  'date' => $request->start,
                //   'end_date' => $request->end,
              ]);

              return response()->json($event);
             break;

           case 'update':
              $event = Comment::find($request->id)->update([
                  'title' => $request->title,
                  'date' => $request->start,
                //   'end_date' => $request->end,
              ]);

              return response()->json($event);
             break;

           case 'delete':
              $event = Comment::find($request->id)->delete();

              return response()->json($event);
             break;

           default:
             # code...
             break;
        }
    }
}
