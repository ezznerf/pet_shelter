<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use App\Http\Resources\FormResource;
use App\Models\Form;
use Illuminate\Http\Request;

class FormConroller extends Controller
{
    public function index()
    {
        return FormResource::collection((Form::with('shelter', 'volunteering')->get()));
    }

    public function store(StoreFormRequest $request)
    {
        $newForm = Form::create($request->all());
        return $newForm;
        //todo cделать внесение в user_forms
    }

    public function show(Form $form){
        return $form;
    }

    public function update(UpdateFormRequest $request, Form $form){
        $form->update($request->all());
        return $form;
    }

    public function destroy(Form $form){

        //todo удалять у юзера user_forms
        $form->delete();
        return response()->json([
            'message' => 'Form deleted'
        ]);
    }
}

