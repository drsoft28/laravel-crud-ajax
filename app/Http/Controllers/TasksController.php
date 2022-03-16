<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= Task::orderBy('priority')->get();
        return view('tasks.index',compact('tasks'));
    }

   
    public function store(Request $request)
    {
        try {
            \DB::beginTransaction();
            $task = new Task();
            $task->name = request('name');
            $task->priority = Task::count()+1;
            $task->save();
            \DB::commit();
            $task->refresh();
            return response()->json(['success'=>true,'data'=>$task]);
        } catch (\Throwable $th) {
            report($th);
           
            \DB::rollback();
            return response()->json(['success'=>false,'data'=>$th->getMessage()]);
        }

       
    }

    
    
    public function update(Request $request)
    {
        $task = Task::find(request('id'));
        if(!$task)   return response()->json(['success'=>false,'data'=>"Task donesn't exist"]);
        try {
            \DB::beginTransaction();
            $task->name = request('name');
            $task->save();
            \DB::commit();
            
            return response()->json(['success'=>true,'data'=>$task]);
        } catch (\Throwable $th) {
            report($th);
           
            \DB::rollback();
            return response()->json(['success'=>false,'data'=>$th->getMessage()]);
        }
    }
    public function order(Request $request)
    {
        $task = Task::find(request('id'));
        if(!$task)   return response()->json(['success'=>false,'data'=>"Task donesn't exist"]);
        $old_order =$task->priority;
        $new_order = request('newOrder');
      
        
        
        if($old_order<$new_order){
           
            \DB::update(
                'update tasks set  priority=priority-1 where priority between ? and ?',
                [$old_order,$new_order]
            );
        }else{
           
            \DB::update(
                'update tasks set  priority=priority+1 where priority>= ?',
                [$new_order]
            );
        }
        $task->priority =$new_order;
        $task->save();
        return response()->json(['success'=>true,'data'=>"success"]);
    }
    public function destroy()
    {
        $task = Task::find(request('id'));
        if(!$task)   return response()->json(['success'=>false,'data'=>"Task donesn't exist"]);
       
        try {
            \DB::beginTransaction();
            $old_order =$task->priority;
           
            
            \DB::update(
                'update tasks set  priority=priority-1 where priority>= ?',
                [$old_order]
            );
            $task->delete();
            \DB::commit();
            return response()->json(['success'=>true,'data'=>"success"]);
           
        } catch (\Throwable $th) {
            report($th);
           
            \DB::rollback();
            return response()->json(['success'=>false,'data'=>$th->getMessage()]);
        }


    }
}
