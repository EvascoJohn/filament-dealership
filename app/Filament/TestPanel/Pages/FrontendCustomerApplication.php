<?php

namespace App\Filament\TestPanel\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Pages\Page;

class FrontendCustomerApplication extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static $data = [];

    protected static string $view = 'filament.test-panel.pages.frontend-customer-application';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('rebate_value')
                    ->required(),
            ])
            ->statePath('data');
    }
}
