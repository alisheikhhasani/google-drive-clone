<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

new class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ];
    }

    public function render()
    {
        return $this->view()
            ->layout('layouts::auth')
            ->title(__('titles.register'));
    }

    public function registerUser(): void
    {
        $this->validate();

        $user = User::query()->create($this->only(['name', 'email', 'password']));

        Auth::login($user);

        Session::regenerate();
        Session::regenerateToken();

        $this->redirectIntended(navigate: true);
    }

};
?>

<div>
    <form wire:submit.prevent="registerUser">
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('validation.attributes.name') }}</legend>
            <input type="text" class="input input-primary w-full" wire:model="name">
            @error('name')
            <p class="label text-error">
                {{ $message }}
            </p>
            @enderror
        </fieldset>

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

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('validation.attributes.password_confirmation') }}</legend>
            <input type="password" class="input input-primary w-full" wire:model="password_confirmation">
        </fieldset>

        <button class="btn btn-primary btn-block mt-6">
            <span class="loading loading-spinner" wire:loading wire:target="registerUser"></span>
            <span wire:loading.remove wire:target="registerUser">{{ __('forms.register.submit') }}</span>
        </button>
    </form>

    <div class="w-full flex justify-center">
        <a href="{{ route('login') }}" wire:navigate class="link link-hover link-info mt-4">{{ __('titles.login') }}</a>
    </div>
</div>
