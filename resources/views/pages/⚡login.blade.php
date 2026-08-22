<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

new class extends Component {
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'exists:users'],
            'password' => ['required', 'string'],
            'remember' => ['required', 'bool']
        ];
    }

    public function render()
    {
        return $this->view()
            ->layout('layouts::auth')
            ->title(__('titles.login'));
    }

    public function loginUser(): void
    {
        $this->validate();

        if (!Auth::attempt($this->only(['email', 'password']), $this->remember)) {
            $this->addError('name', __('auth.failed'));
            return;
        }

        Session::regenerate();
        $this->redirectIntended(navigate: true);
    }
};
?>

<div>
    <form wire:submit.prevent="loginUser">
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('validation.attributes.email') }}</legend>
            <input type="text" class="input input-primary w-full" wire:model="email">
            @error('email')
            <p class="label text-error">
                {{ $message }}
            </p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('validation.attributes.password') }}</legend>
            <input type="password" class="input input-primary w-full" wire:model="password">
            @error('password')
            <p class="label text-error">
                {{ $message }}
            </p>
            @enderror
        </fieldset>

        <fieldset class="fieldset my-4">
            <label class="label">
                <input type="checkbox" class="checkbox checkbox-primary" wire:model="remember">
                {{ __('validation.attributes.remember') }}
            </label>
        </fieldset>

        <button class="btn btn-primary btn-block">
            <span class="loading loading-spinner" wire:loading wire:target="loginUser"></span>
            <span wire:loading.remove wire:target="loginUser">{{ __('forms.login.submit') }}</span>
        </button>
    </form>

    <div class="w-full flex justify-center">
        <a href="{{ route('register') }}" wire:navigate class="link link-hover link-info mt-4">{{ __('titles.register') }}</a>
    </div>
</div>
