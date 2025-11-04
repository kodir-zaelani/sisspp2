<div>
    <x-filament::breadcrumbs :breadcrumbs="[
    '/manajemen' => 'Dashboard',
    '' => 'Satuan Pendidikan',
    ]" />
    <div class="flex justify-between mt-1">
        <div class="font-bold text-3xl">
            Satuan Pendidikan
        </div>
        <div>
            {{$data}}
        </div>
    </div>
    {{-- <form wire:submit="import" class="w-full max-w-sm flex mt-2"  method="POST" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="" class="block text-gray-700 text-sm font-bold mb-2" for="fileInput">
                Pilih Berkas
            </label>
            <input type="file" wire:model="file" id="fileInput" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between mt-3">
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded ml-3" type="submit">
                Unggah
            </button>
        </div>
    </form> --}}
</div>
