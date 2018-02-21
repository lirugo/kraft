<?php

namespace App\Console\Commands;

use App\Object;
use Carbon\Carbon;
use Illuminate\Console\Command;

class checkDateReportObject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:checkDateReportObject';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'If in db in table objects row dateofreport == carbon::now() then dateofreport = dateofreport.adddays(reporttime)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $objects = Object::all();
        foreach ($objects as $object)
        {
            if($object->dateofreport == Carbon::now()->format('Y-m-d'))
            {
                $object->dateofreport = Carbon::parse($object->dateofreport)->addDays($object->reporttime);
                $object->save();
            }
        }
    }
}
