<?php

namespace App\Filament\Auth;

use Filament\Pages\Auth\Login;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;

class CustomLogin extends Login
{
    /**
    * @return array<int | string, string | Form>
    */
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                ->schema([
                    $this->getLoginFormComponent(),
                    $this->getPasswordFormComponent(),
                    $this->getRememberFormComponent(),
                    ])->statePath('data'),
                ),
            ];
        }

        protected function getLoginFormComponent(): Component
        {
            return TextInput::make('login')
            ->label(__('Username / Email'))
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
        }


    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    protected function getCredentialsFromFormData(array $data): array
    {
        $login_type = filter_var($data['login'], filter:FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return [
            $login_type => $data['login'],
            'password' => $data['password'],
        ];
    }

    }
