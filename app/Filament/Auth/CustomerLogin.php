<?php

namespace App\Filament\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\Login as BaseAuth;

class CustomerLogin extends BaseAuth
{

    protected static string $layout = 'filament-panels::components.layout.base';

    protected static string $view = 'filament.customer.customer-login';


    public function form(Form $form): Form
    {
        return $form->schema([
            $this->getLoginFormComponent(), 
            $this->getPasswordFormComponent(),
            $this->getRememberFormComponent(),
        ]);
    }

    protected function getLoginFormComponent(): Component 
    {
        return TextInput::make('email')
            ->label('Email')
            ->required()
            ->autocomplete()
            ->autofocus();
    }

    protected function getCredentialsFromFormData(array $data): array
    {
 
        return [
            'email' => $data['email'],
            'password'  => $data['password'],
        ];
    }

}