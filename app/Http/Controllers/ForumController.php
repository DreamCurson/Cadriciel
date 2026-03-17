<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    
    private function getStudentName(){
        $user = Auth::user();

        if (!$user || !$user->student) {
            return null;
        }

        return $user->student->name;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentName = $this->getStudentName();

        $forum = Forum::all();

        return view('forum.index', ['articles' => $forum, 'active_student' => $studentName]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $studentName = $this->getStudentName();

        if (!$studentName) {
            return redirect('login');
        }

        return view('forum.create', ['student' => $studentName]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:40',
            'author' => 'required',
            'content' => 'required|max:2000',
            'lang' => 'required|max:2',
        ], [
            'title.required' => __('validation.title_required'),
            'title.max' => __('validation.title_max'),

            'author.required' => __('validation.author_required'),

            'content.required' => __('validation.content_required'),
            'content.max' => __('validation.content_max'),

            'lang.required' => __('validation.lang_error'),
            'lang.max' => __('validation.lang_error'),
        ]);


        $article = Forum::create([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
            'lang' => $request->lang,
        ]);

        return redirect()->route('forum.index')->with('success', __('lang.success_add_forum'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        $studentName = $this->getStudentName();
        return view('forum.show', ['article' => $forum, 'active_student' => $studentName]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        $studentName = $this->getStudentName();
        return view('forum.edit', ['article' => $forum, 'student' => $studentName]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'title' => 'required|max:40',
            'author' => 'required',
            'content' => 'required|max:2000',
            'lang' => 'required|max:2',
        ], [
            'title.required' => __('validation.title_required'),
            'title.max' => __('validation.title_max'),

            'author.required' => __('validation.author_required'),

            'content.required' => __('validation.content_required'),
            'content.max' => __('validation.content_max'),

            'lang.required' => __('validation.lang_error'),
            'lang.max' => __('validation.lang_error'),
        ]);


        $forum->update([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
            'lang' => $request->lang,
        ]);

       return redirect()->route('forum.show', $forum->id)->with('success', __('lang.success_edit_forum'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();
        return redirect()->route('forum.index')->withSuccess(__('lang.success_delete_forum'));
    }
}
