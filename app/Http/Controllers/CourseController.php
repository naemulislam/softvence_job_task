<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Content;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function createCourse()
    {
        return view('course.create');
    }
    public function store(CourseRequest $request)
    {
        //Create course
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $course =  Course::create($data);

        // Create modules
        $modules = $request->input('modules');

        if ($modules) {
            foreach ($modules as $mod) {
                $module = Module::create([
                    'course_id' => $course->id,
                    'title' => $mod['title'],
                ]);

                // Create contents for this module (if any)
                if (!empty($mod['contents'])) {
                    foreach ($mod['contents'] as $content) {
                        Content::create([
                            'course_id' => $course->id,
                            'module_id' => $module->id,
                            'title' => $content['title'],
                        ]);
                    }
                }
            }
        }

        return back()->with('success', 'Course created successfully.');
    }
}
