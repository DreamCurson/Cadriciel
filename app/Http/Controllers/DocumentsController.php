<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Document;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentsController extends Controller
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

        if (!$studentName) {
            return redirect('login');
        }

        $documents = Document::all();

        return view('document.index', ['student' => $studentName, 'documents' => $documents]);
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

        return view('document.create', ['student' => $studentName]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $studentName = $this->getStudentName();

        if (!$studentName) {
            return redirect('login');
        }

        $request->validate([
            'title' => 'required|max:40',
            'author' => 'required',
            'document' => 'required|file|mimes:pdf,zip,doc|max:10240',
            'lang' => 'required|max:2',
        ], [
            'title.required' => __('validation.title_required'),
            'title.max' => __('validation.title_max'),

            'author.required' => __('validation.author_required'),

            'document.required' => __('validation.document_required'),
            'document.file' => __('validation.document_file'),
            'document.mimes' => __('validation.document_mimes'),
            'document.max' => __('validation.document_max'),

            'lang.required' => __('validation.lang_error'),
            'lang.max' => __('validation.lang_error'),
        ]);

        $file = $request->file('document');

        // Sauvegarde dans 'storage/app/public/documents'
        $path = $file->store('documents', 'public');

        $document = Document::create([
            'title' => $request->title,
            'original_name' => $file->getClientOriginalName(),
            'author' => $request->author,
            'document' => $path,
            'lang' => $request->lang,
        ]);

        return redirect()->route('document.index')->with('success', __('lang.success_add_document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        $studentName = $this->getStudentName();

        if (!$studentName) {
            return redirect('login');
        }

        return view('document.edit', ['document' => $document, 'student' => $studentName]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $studentName = $this->getStudentName();

        if (!$studentName) {
            return redirect('login');
        }
        
        $request->validate([
            'title' => 'required|max:40',
            'author' => 'required',
            'document' => 'file|mimes:pdf,zip,doc|max:10240',
            'lang' => 'required|max:2',
        ], [
            'title.required' => __('validation.title_required'),
            'title.max' => __('validation.title_max'),

            'author.required' => __('validation.author_required'),

            'document.file' => __('validation.document_file'),
            'document.mimes' => __('validation.document_mimes'),
            'document.max' => __('validation.document_max'),

            'lang.required' => __('validation.lang_error'),
            'lang.max' => __('validation.lang_error'),
        ]);

        $document->update([
            'title' => $request->title,
            'author' => $request->author,
            'lang' => $request->lang,
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');

            $path = $file->store('documents', 'public');

            $document->update([
                'document' => $path,
                'original_name' => $file->getClientOriginalName(),
            ]);
        }

        return redirect()->route('document.index')->with('success', __('lang.success_edit_document'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $studentName = $this->getStudentName();

        if (!$studentName) {
            return redirect('login');
        }

        $document->delete();
        return redirect()->route('document.index')->withSuccess(__('lang.success_delete_document'));
    }
}
