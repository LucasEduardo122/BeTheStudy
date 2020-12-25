<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\video;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $course = new Course();

        $products = $course->offset(0)->limit(6)->get(); 

        return view('site.cursos', ['courses' => $products]);
    }

    public function course(string $name) {
        $course = Course::where(['uri' => $name])->first();

        if(empty($course)){
            return redirect()->route('course');
        }

        $video = video::where(['course_id' => $course->id])->get();

        return view('site.course.index', ['courses' => $course, 'video' => $video]);
    }

    public function aula(string $name, string $uri) {
        $course = Course::where(['uri' => $name])->first();

        if(empty($course)){
            return redirect()->route('course');
        }

        $video = video::where(['uri' => $uri])->first();

        if(empty($video)){
            return redirect()->route('course');
        }
        $valor = "$video->status_comment";

        if($valor === "sim"){
            $comment = Comment::where(['video_id' => $video->id])->get();

        } else {
            $comment = [];
        }

        return view('site.course.video', ['video' => $video, 'comments' => $comment]);
    }
}
