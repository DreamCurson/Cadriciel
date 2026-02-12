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
        ],
        [
            'name.required' => 'Le nom est obligatoire.',
            'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',

            'address.required' => 'L’adresse est obligatoire.',

            'phone.required' => 'Le numéro de téléphone est obligatoire.',

            'email.required' => 'L’email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',

            'birth.required' => 'La date de naissance est obligatoire.',
            'birth.date' => 'La date de naissance doit être une date valide.',

            'country_id.required' => 'Veuillez sélectionner un pays.',
            'country_id.integer' => 'Le pays sélectionné est invalide.',
        ]);


        $student = Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'birth' => $request->birth,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('student.show', $student->id)->with('success', 'Nouvel(le) élève ajouté avec succès!');
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
        ],
        [
            'name.required' => 'Le nom est obligatoire.',
            'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',

            'address.required' => 'L’adresse est obligatoire.',

            'phone.required' => 'Le numéro de téléphone est obligatoire.',

            'email.required' => 'L’email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',

            'birth.required' => 'La date de naissance est obligatoire.',
            'birth.date' => 'La date de naissance doit être une date valide.',

            'country_id.required' => 'Veuillez sélectionner un pays.',
            'country_id.integer' => 'Le pays sélectionné est invalide.',
        ]);

        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'birth' => $request->birth,
            'country_id' => $request->country_id,
        ]);

       return redirect()->route('student.show', $student->id)->with('success', 'Élève modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->withSuccess('Élève supprimé avec succès');
    }
}
