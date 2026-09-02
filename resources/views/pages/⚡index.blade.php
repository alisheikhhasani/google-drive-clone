<?php

use App\Models\File;
use App\Models\Folder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public Folder $currentFolder;

    public $file;

    public function updatedFile()
    {
        $this->currentFolder->files()->create([
            'name' => $this->file->getClientOriginalName(),
            'format' => $this->file->getClientOriginalExtension()
        ]);

        Storage::putFileAs('', $this->file, $this->file->getClientOriginalname());
    }


    public function mount(?Folder $folder = null)
    {
        $this->currentFolder = !$folder ? Auth::user()->folders()->whereIsRoot()->first() : $folder;
    }

    public function getListeners(): array
    {
        return [
            'folder:created' => '$refresh'
        ];
    }

    public function render()
    {
        return $this->view()
            ->layout('layouts::app')
            ->title('Hello');
    }

    public function with()
    {
        return [
            'folders' => $this->currentFolder->children,
            'files' => $this->currentFolder->files
        ];
    }

    public function deleteFolder(Folder $folder)
    {
        Folder::descendantsAndSelf($folder)->each->delete();
    }

    public function downloadFile(File $file)
    {
        return Storage::download($file->name);
    }

    public function deleteFile(File $file)
    {
        $file->delete();
    }
};
?>

<div>
    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-between">
            <div class="breadcrumbs">
                <ul>
                    @foreach($currentFolder->ancestors->push($currentFolder) as $folder)
                        <li>
                            <a href="{{ route('index', compact('folder')) }}">
                                @if($folder->isRoot())
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                                    </svg>
                                @else
                                    {{ $folder->name }}
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <button class="btn btn-primary btn-square" popovertarget="popover-1" style="anchor-name:--anchor-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>
            </button>
            <ul class="dropdown dropdown-center menu w-40 mt-2 rounded-box bg-base-200"
                popover id="popover-1" style="position-anchor:--anchor-1">
                <li>
                    <a wire:click="$dispatch('create-folder')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"/>
                        </svg>
                        پوشه جدید
                    </a>
                </li>
                <li>
                    <a>
                        <label class="flex gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                            </svg>
                            پرونده جدید
                            <input type="file" class="hidden" wire:model="file">
                        </label>
                    </a>
                </li>
            </ul>
        </div>

        <livewire:folders.create :$currentFolder/>

        <div class="card bg-base-200">
            <div class="card-body">

                <ul class="list">
                    @forelse($folders as $folder)
                        <li class="list-row cursor-pointer">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"/>
                                </svg>
                            </div>
                            <div class="text-xl">
                                <a href="{{ route('index', ['folder' => $folder]) }}">{{ $folder->name }}</a>
                            </div>
                            <button class="btn-soft btn btn-error" wire:click="deleteFolder({{ $folder }})">
                                حذف
                            </button>
                        </li>
                    @empty
                        <li class="list-row">
                            پوشه ای برای نمایش وجود ندارد
                        </li>
                    @endforelse

                    @foreach($files as $file)
                        <li class="list-row cursor-pointer">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                                </svg>

                            </div>
                            <div class="text-xl">
                                {{ $file->name }}
                            </div>

                            <button class="btn btn-success btn-soft" wire:click="downloadFile({{ $file }})">
                                دانلود
                            </button>

                            <button class="btn btn-soft btn-error" wire:click="deleteFile({{ $file }})">
                                حذف
                            </button>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>
