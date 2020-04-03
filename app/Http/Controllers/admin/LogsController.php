<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $sql = 'select * from logs';
       $logs = DB::select($sql);
       return view('admin.logs', ['logs' => $logs]);
    }
}
