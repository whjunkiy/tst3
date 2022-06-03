<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use App\Building;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {

    /**
     * Show buildings Dashboard
     */
    Route::get('/', function () {
        return view('buildings', [
            //'buildings' => Building::orderBy('created_at', 'asc')->get(),
            'buildings' => []
        ]);
    });

    Route::get('/building/{id}', function ($id) {
        return view('building', [
            //'buildings' => Building::orderBy('created_at', 'asc')->get(),
            'building' => Building::where('id', '=', $id)->first(),
        ]);
    });

    Route::post('/getbuildings','AjaxController@buildings');

    Route::post('/filtrbuildings', 'AjaxController@forfiltr');


    /**
     * Show Task Dashboard
     */
    Route::get('/tasks', function () {
        return view('tasks', [
            'tasks' => Task::orderBy('created_at', 'asc')->get()
        ]);
    });

    /**
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    });

    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();

        return redirect('/');
    });
});
