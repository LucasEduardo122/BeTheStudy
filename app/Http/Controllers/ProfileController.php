<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course;
use App\Models\Course as ModelsCourse;
use App\Models\User;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {

        $user = User::where(['id' => Auth::id()])->first();

        return view('site.users.perfil', ['user' => $user]);
    }

    public function registerCourse()
    {
        return view('site.adm.registerCourse');
    }

    public function registerCourseGo(Course $request)
    {
        $course = new ModelsCourse();

        $course->name = $request->name;
        $course->image = $request->file('image')->store('site/cursos/' . $request->name);
        $course->description = $request->description;
        $course->value = $request->value;
        $course->professor_user_id = $request->professor_user_id;
        $course->Uri = $request->name;

        if ($course->save()) {
            return redirect()->route('registerCourse')->with('notify-success', 'Curso cadastrado');
        } else {
            return redirect()->route('registerCourse')->with('notify-error', 'Falha ao cadastrar');
        }
    }

    public function listCourse()
    {
        $course = ModelsCourse::all();

        return view('site.adm.listCourse', ['courses' => $course]);
    }

    public function editCourse(string $name)
    {
        $course = ModelsCourse::where(['uri' => $name])->first();

        if (empty($course)) {
            return redirect()->route('listCourse');
        }

        return view('site.adm.editCourse', ['course' => $course]);
    }

    public function registerVideo(string $name)
    {
        $course = ModelsCourse::where(['uri' => $name])->first();

        return view('site.adm.registervideo', ['course' => $course]);
    }

    public function registerVideoGo(Request $request, $id)
    {

        $course = ModelsCourse::where(['id' => $id])->first();

        if (empty($course)) {
            return redirect()->route('listCourse.edit.registervideo');
        }

        $video = new video();

        $video->name_video = $request->name_video;
        $video->status_comment = $request->status_comment;
        $video->thumbnail = $request->file('thumbnail')->store('site/cursos/' . $course->name . '/aula/' . $request->name_video);
        $video->link_aula = $request->link_aula;
        $video->course_id = $course->id;
        $video->Uri = $request->name_video;

        if ($video->save()) {
            return redirect()->route('listCourse.edit.registervideo', ['name' => $course->uri])->with('notify-success', 'Video cadastrado');
        } else {
            return redirect()->route('listCourse.edit.registervideo', ['name' => $course->uri])->with('notify-error', 'Falha ao cadastrar');
        }
    }
}
