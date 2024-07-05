<?php


namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Register as BaseRegister;
use Filament\Forms\Components\Component;

class Register extends BaseRegister
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getCedulaFormComponent(),
                        $this->getTelefonoFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getCedulaFormComponent(): Component
    {
        return TextInput::make('cedula')
            ->label('Cédula')
            ->unique('users', 'cedula')
            ->required();
    }

    protected function getTelefonoFormComponent(): Component
    {
        return TextInput::make('telefono')
            ->label('Teléfono')
            ->unique('users', 'telefono')
            ->required();
    }
}

