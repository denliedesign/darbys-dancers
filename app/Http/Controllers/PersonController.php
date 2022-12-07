<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\PersonRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $people;

    public function __construct()
    {
        $this->authorizeResource(Person::class);
        $this->people = Person::all()->sortBy('role');
        $this->users = User::all();
        View::share('people', $this->people);
        View::share('users', $this->users);
    }

    public function index()
    {
//        $people = Person::visibleFor(request()->user())->latest()->withQueryString();
        return view('people.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $this->authorize('update', Person::class);
        $person = new Person();
        return view('people.create', compact('person'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        Person::create($request->getData());
        return redirect('people');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('people.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
//        $this->authorize('update', Person::class);
        return view('people.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(PersonRequest $request, Person $person)
    {
        $person->update($request->getData());
        return redirect('/people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect('/people');
    }


//    private function validateRequest()
//    {
//        return request()->validate([
////            'user_id' => '',
//            'name' => 'required',
//            'role' => 'required',
//            'phone' => 'required',
//            'email' => 'required|email',
//            'addressOne' => 'required',
//            'addressTwo' => 'nullable',
//            'city' => 'required',
//            'state' => 'required',
//            'zip' => 'required',
//            'comments' => 'nullable',
//        ]);
//    }
}

