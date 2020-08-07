<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/blogs/search", function(Request $request) {
    $search = Request::get('search');
    $blogs = DB::table("blog_posts")
            ->join("media","blog_posts.featured_image","media.id")
            ->join("blog_categories","blog_posts.category_id","blog_categories.id")
            ->join("students","students.id","blog_posts.student_id") 
            ->select("blog_posts.id","blog_posts.title","blog_posts.published_date","media.path","blog_categories.name"
                    ,"students.name as studentName","students.profile","blog_posts.views")
            ->where('title','like','%'.$search.'%') 
            ->limit(10)
            ->get();
    foreach($blogs as $blog) {
        $path = DB::table("media")->where("id",$blog->profile)->select("path")->get();
        $likes = DB::table("blog_post_likes")->where("blog_post_id",$blog->id)->count();
        $blog->studentPath = $path[0]->path;
        $blog->likes = $likes;
    }
    return $blogs;
});


Route::get("/questions/search", function() {
    $search = Request::get('search');
    $questions = DB::table("forum_questions") 
        ->join("users","forum_questions.user_id","users.id")
        ->select("forum_questions.title","forum_questions.id","forum_questions.description","forum_questions.views","forum_questions.created_at","users.name","users.avatar")
        ->where('title','like','%'.$search.'%') 
        ->limit(10)
        ->get();

    foreach($questions as $quest) {
        $quest->likes = DB::table("forum_question_likes")->where("forum_question_id",$quest->id)->count();
        $quest->replies = DB::table("forum_question_answers")->where("question_id",$quest->id)->count();
    }
    return $questions;
});



Route::get('/get-students', function () {
    $students = DB::table('students')
            ->join("media","students.profile","media.id")
            ->select("media.path","students.id") 
            ->limit(10)
            ->inRandomOrder()
            ->get();
    return $students;
});

Route::get('/get-students/{id}', function ($id) {
    $students = DB::table('students')
            ->join("media","students.profile","media.id")
            ->join("colleges","students.college_id","colleges.id")  
            ->join("states","students.state_id","states.id")
            ->select("students.name as studentName","colleges.name as cName","students.id","students.username",
                    "media.path","states.name as stateName","students.bio")
            ->where("students.id", $id)
            ->get();
    $students[0]->blogCount = DB::table("blog_posts")->where("student_id",$id)->count();
    $students[0]->replyCount = DB::table("forum_question_answers")->where("student_id",$id)->count();
    $students[0]->blogFollowers = DB::table("blog_student_follows")->where("student_id",$id)->count();

    return $students;
});

Route::get("/blog/categories", function() {
    $cat = DB::table("blog_categories")
            ->select("name","id")->get();
    foreach($cat as $c) {
        $value = DB::table("blog_posts")->where("category_id",$c->id)->count();
        $c->count = $value;
    }
    return $cat;
});

Route::get("/blog_category/{id}", function($id) {
    $blogs = DB::table("blog_posts")
            ->join("media","blog_posts.featured_image","media.id")
            ->join("blog_categories","blog_posts.category_id","blog_categories.id")
            ->join("students","students.id","blog_posts.student_id") 
            ->select("blog_posts.id","blog_posts.title","blog_posts.published_date","media.path","blog_categories.name"
                    ,"students.name as studentName","students.profile","blog_posts.views")
            ->where("blog_posts.category_id", $id)
            ->paginate(5);

    foreach($blogs as $blog) {
        $path = DB::table("media")->where("id",$blog->profile)->select("path")->get();
        $likes = DB::table("blog_post_likes")->where("blog_post_id",$blog->id)->count();
        $blog->studentPath = $path[0]->path;
        $blog->likes = $likes;
    }

    return $blogs;
});

Route::get("/blog_post/{id}", function($id) {
    $blogs = DB::table("blog_posts")
            ->join("media","blog_posts.featured_image","media.id")  
            ->join("blog_categories","blog_posts.category_id","blog_categories.id")
            ->join("students","blog_posts.student_id","students.id")
            ->select("blog_posts.id","blog_posts.title","blog_posts.published_date","media.path","blog_categories.name"
                    ,"students.name as studentName","students.profile","blog_posts.views","blog_posts.content")
            ->where("blog_posts.id",$id)
            ->get();
    foreach($blogs as $blog) {
        $path = DB::table("media")->where("id",$blog->profile)->select("path")->get();
        $likes = DB::table("blog_post_likes")->where("blog_post_id",$blog->id)->count();
        $blog->studentPath = $path[0]->path;
        $blog->likes = $likes;
    }
    return $blogs;
});


Route::get("/blogs", function() {
    $blogs = DB::table("blog_posts")
            ->join("media","blog_posts.featured_image","media.id") 
            ->join("blog_categories","blog_posts.category_id","blog_categories.id")
            ->join("students","students.id","blog_posts.student_id") 
            ->select("blog_posts.id","blog_posts.title","blog_posts.published_date","media.path","blog_categories.name"
                    ,"students.name as studentName","students.profile")
            ->paginate(5);

    foreach($blogs as $blog) {
        $path = DB::table("media")->where("id",$blog->profile)->select("path")->get();
        $likes = DB::table("blog_post_likes")->where("blog_post_id",$blog->id)->count();
        $blog->studentPath = $path[0]->path; 
        $blog->likes = $likes;
    }
    return $blogs;
});

Route::get("/channels", function() {
    $ch = DB::table("forum_channels")->get();
    foreach($ch as $c) {
        $posts = DB::table("forum_questions")->where("channel_id",$c->id)->count();
        $c->questionCount = $posts;
    }
    return $ch;
});

Route::get("/channel/{id}", function($id) {
    $questions = DB::table("forum_questions")
        ->join("forum_channels","forum_questions.channel_id","forum_channels.id")
        ->join("users","forum_questions.user_id","users.id")
        ->select("forum_questions.title","forum_questions.id","forum_questions.description","forum_questions.views","forum_questions.created_at","users.name","users.avatar")
        ->where("forum_questions.channel_id",$id)
        ->paginate(5);
    foreach($questions as $quest) {
        $quest->likes = DB::table("forum_question_likes")->where("forum_question_id",$quest->id)->count();
        $quest->replies = DB::table("forum_question_answers")->where("question_id",$quest->id)->count();
    }
    return $questions;
});

Route::get("/questions", function() {
    $questions = DB::table("forum_questions") 
        ->join("users","forum_questions.user_id","users.id")
        ->select("forum_questions.title","forum_questions.id","forum_questions.description","forum_questions.views","forum_questions.created_at","users.name","users.avatar")
        ->paginate(5);

    foreach($questions as $quest) {
        $quest->likes = DB::table("forum_question_likes")->where("forum_question_id",$quest->id)->count();
        $quest->replies = DB::table("forum_question_answers")->where("question_id",$quest->id)->count();
    }
    return $questions;
});

Route::get("/question/{id}", function($id) {
    $questions = DB::table("forum_questions")
        ->join("users","forum_questions.user_id","users.id")
        ->select("forum_questions.title","forum_questions.id","forum_questions.description","forum_questions.views","forum_questions.created_at","users.name","users.avatar")
        ->where("forum_questions.id",$id) 
        ->get();

    foreach($questions as $quest) {
        $quest->likes = DB::table("forum_question_likes")->where("forum_question_id",$quest->id)->count();
        $quest->replies = DB::table("forum_question_answers")->where("question_id",$quest->id)->count();

        $replies = DB::table("forum_question_answers")
            ->where("question_id",$quest->id)
            ->paginate(5);

        foreach($replies as $reply) {
            $reply->likes = DB::table("forum_question_answer_likes")->where("answer_id",$reply->id)->count();

            if($reply->user_id != null) {
                $data = DB::table("users")->where("id", $reply->user_id)->select("name","avatar")->get();
                $reply->userName = $data[0]->name;
                $reply->userImage = $data[0]->avatar;
            } else if($reply->student_id != null) {
                $data = DB::table("students")
                    ->join("media","students.profile","media.id")
                    ->select("students.name","media.path")
                    ->where("students.id", $reply->student_id)
                    ->get();
                $reply->userName = $data[0]->name;
                $reply->userImage = $data[0]->path;
            }
        }
    }
    
    
    $data = [
        'question' => $questions,
        'replies' => $replies
    ];
    return $data;
});
