<?php

use App\Models\Folder;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    public bool $modal = false;

    public Folder $currentFolder;

    #[Validate(['required', 'string'])]
    public string $name = '';

    public function createFolder(): void
    {
        $this->validate();

        $folder = new Folder()->fill($this->only('name'));
        $folder->user()->associate(Auth::user());
        $folder->appendToNode($this->currentFolder);
        $folder->save();
        $this->dispatch('folder:created');
        $this->modal = false;
        $this->reset('name');
    }
};
?>


<div>
    <dialog
        class="modal"
        x-data="{isOpen: $wire.entangle('modal')}"
        :class="{'modal-open': isOpen}"
        @create-folder.window="isOpen = true"
    >
        <div class="modal-box">
            <form wire:submit.prevent="createFolder" class="flex gap-2 items-center">
                <fieldset class="fieldset w-full">
                    <input type="text" class="input input-primary w-full" placeholder="نام پوشه" wire:model="name">
                    @error('name')
                    <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <button class="btn-primary btn">ثبت</button>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop" @click="isOpen = false">
            <button>close</button>
        </form>
    </dialog>
</div>
