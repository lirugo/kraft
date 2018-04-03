<?php

namespace App\Http\Controllers\Report;

use App\Object;
use App\Report;
use App\ReportPhoto;
use App\User;
use Illuminate\Support\Collection;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $object = object::find($id);
        $user = User::find($object->creatorid);
        $reports = Report::all()->where('object_id', '=', $id);
        if($reports->count() == 0){
            Session::flash('warning', 'У Вас еще нет отчетов, или объект не активирован. Ваш РМ - '.$object->rmuser->name.' '.$object->rmuser->surname.', тел:'.$object->rmuser->phone);
            return back();
        }
        $data = new Collection();
        $data->put('reports', $reports);
        $data->put('user', $user);
        return view('report.index')->with('data', $data);
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
