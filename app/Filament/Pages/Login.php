<?php

namespace App\Filament\Pages;

// use Filament\Pages\Page;
use Filament\Auth\Pages\Login as PagesLogin;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;

class Login extends PagesLogin
{
    // protected string $view = 'filament.pages.login';
    public function form(Schema $schema): Schema{
        return $schema->components([
            $this->getLoginFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getRememberFormComponent()
        ]);
    }

    protected function getLoginFormComponent(): Component{
        return TextInput::make('username')
                ->label('Username')
                ->required()
                ->autocomplete()
                ->autofocus()
                ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        // dd($data['login']);
        // $loginType = filter_var($data['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // return [
        //     $loginType => $data['login'],
        //     'password' => $data['password']
        // ];
        return [
            'username' => $data['username'],
            'password' => $data['password']
        ];
    }
}
