<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Http\Requests\TaskStoreRequest;
    
class TasksController extends Controller
{
    private $tasks;
    public function __construct() {
    $this->tasks = collect([
    ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
    ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]
    ])->keyBy('id');
    }
    
    public function index () {
        //return view('index');
        //return view('tasks.index')->with('tasks', $this->tasks);
        return view('tasks.index')->with('tasks', Task::all());
    }
    
    public function show ($id) {
        //return view('tasks.show')->with('task', $this->tasks[$id]);
        return view('tasks.show')->with('task', Task::all($id));
    }
    
    public function create () {
            return view('tasks.create');
    }
    
    public function store ( TaskStoreRequest $request ) {
        $task = Task::create($request->all());
        //autre solution
        /*
        $task = new Task();
        $task->name = $request->name;
        $task->save(); */
        return redirect(route('tasks.index'));
    }
}
