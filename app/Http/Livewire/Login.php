<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Http\Livewire\Auth\Login as BaseLogin;

class Login extends BaseLogin
{
    protected function getFormSchema(): array
    {
        return [
            TextInput::make('email')
                ->label(__('filament::login.fields.email.label'))
                ->email()
                ->required()
                ->autocomplete()
                ->default('demouser@example.com'),
            TextInput::make('password')
                ->label(__('filament::login.fields.password.label'))
                ->password()
                ->required()
                ->default('password'),
            Checkbox::make('remember')
                ->label(__('filament::login.fields.remember.label'))
                ->default(true),
        ];
    }
}
