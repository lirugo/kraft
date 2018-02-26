<?php

namespace App\Http\Controllers\Report;

use App\Object;
use App\Report;
use App\ReportPhoto;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index($id){
        $reports = Report::all()->where('object_id', '=', $id);
        return view('report.index')->with('reports', $reports);
    }

    public function show($id){
        $report = Report::find($id);
        return view('report.show')->with('report', $report);
    }

    public function submit($id){
        $report = Report::find($id);
        return view('report.submit')->with('report', $report);
    }

    public function upload(Request $request, $id){
        $report = Report::find($id);
        $end = Carbon::parse($report->dateofreport);
        $diff = $end->diff(Carbon::now());
        if($diff->days > 3 && $diff->invert == 1)
        {
            Session::flash('warning', 'Вы можете подать отчет за три дня до его даты.');
            return redirect(url('report/'.$report->object_id));
        }
            $report->comments = $request->comments;
            $report->done = true;
        $report->save();

        $reports = Report::all()->where('object_id', '=', $report->object_id);
        if($reports->last()->done == true)
        {
            $r = new Report();
            $r->object_id = $report->object_id;
            $r->dateofreport = Carbon::parse($reports->last()->dateofreport)->addDays($report->object->reporttime);
            $r->save();
        }

        if($request->photos)
            foreach($request->photos as $photo){
                $ph = new ReportPhoto();
                $ph->object_id = $report->object_id;
                $ph->name = $photo;
                $ph->save();
            }

        Session::flash('success', 'Report was send.');
        return redirect(url('report/'.$report->object_id));
    }
}
