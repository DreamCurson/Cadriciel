<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', ['students' => $students]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = Country::all();
        return view('student.create', ['country' => $country]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'birth' => 'required|date',
            'country_id' => 'required|integer',
        ], [
            'name.required' => __('validation.name_required'),
            'name.max' => __('validation.name_max'),

            'address.required' => __('validation.address_required'),
            'phone.required' => __('validation.phone_required'),

            'email.required' => __('validation.email_required'),
            'email.email' => __('validation.email_email'),

            'birth.required' => __('validation.birth_required'),
            'birth.date' => __('validation.birth_date'),

            'country_id.required' => __('validation.country_id_required'),
            'country_id.integer' => __('validation.country_id_integer'),
        ]);


        $student = Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'birth' => $request->birth,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('student.show', $student->id)->with('success', __('lang.success_add_student'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $country = Country::all();
        return view('student.edit', ['student' => $student, 'country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'birth' => 'required|date',
            'country_id' => 'required|integer',
        ], [
            'name.required' => __('validation.name_required'),
            'name.max' => __('validation.name_max'),

            'address.required' => __('validation.address_required'),
            'phone.required' => __('validation.phone_required'),

            'email.required' => __('validation.email_required'),
            'email.email' => __('validation.email_email'),

            'birth.required' => __('validation.birth_required'),
            'birth.date' => __('validation.birth_date'),

            'country_id.required' => __('validation.country_id_required'),
            'country_id.integer' => __('validation.country_id_integer'),
        ]);

        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'birth' => $request->birth,
            'country_id' => $request->country_id,
        ]);

       return redirect()->route('student.show', $student->id)->with('success', __('lang.success_edit_student'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->withSuccess(__('lang.success_delete_student'));
    }
}
