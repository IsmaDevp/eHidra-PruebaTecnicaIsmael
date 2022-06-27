<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TablaUsuarios extends LivewireDatatable
{
    public function builder()
    {
       return User::query();
    }

    public function columns()
    {
        return [
            Column::name('id'),
            Column::name('name')->searchable(),
            Column::name('email')->searchable(),
            Column::callback('id, name', function ($id, $name){
                $user = User::find($id);
                return view('livewire.actions', ['user' => $user]);
            })->unsortable(),


            
        ];

    }
}