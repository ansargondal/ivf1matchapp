<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Models\Backend\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {

        $tr = '<tr> <td>01</td> <td class="task done">Pay office Rent before 10 am.</td>
                            <td class="type">Office</td> <td class="start-date">oct 2, 2018</td>
                            <td class="actions text-center" data-orderable="false">
                                <a href="#" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i
                                            class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                <a href="#" class="action js-btn-delete" data-id="1" data-placement="top"
                                   data-toggle="tooltip"
                                   title="Delete">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>';


        return view('admin.index');
    }


    public function store(TaskRequest $request)
    {
//        try {

        Auth::user()->tasks()->create($request->all());

        return response()->json(['error' => false, 'message' => 'New note created successfully.']);

//        } catch (\Exception $exception) {
//
//            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
//        }
    }

    public function edit(Task $task)
    {
        return $task;
    }

    public function update($id)
    {
        $user = Auth::user()->tasks()->whereId($id);

        $task = new Task();
        $task->type = 'YOO';
        $task->body = 'yo yoo honey singh';

        $user->save($task);

        return response()->json(['error' => false, 'message' => 'Task updated successfully!']);
    }

    public function destroy($id)
    {
        try {

            Auth::user()->tasks()->whereId($id)->delete();

            return response()->json(['error' => false, 'message' => 'Note deleted successfully!']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }


    public function tasksDTData()
    {

        $tasks = Auth::user()->tasks()->latest();

        return datatables($tasks)
            ->addColumn('action', function ($donors) {
                return '<a href="' . route('admin.tasks.update', $donors->id) . '" class="action js-btn-edit" data-toggle="tooltip" data-placement="top"
                               title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                               
                            <a href="' . route('admin.tasks.destroy', $donors->id) . '" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                               title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>';
            })
            ->rawColumns(['action'])->make(true);
    }
}
