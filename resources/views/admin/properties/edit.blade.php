<x-layout>
    <x-slot name="title">Edit Property</x-slot>
    <h1 class="mb-2">Edit Property</h1>
    <div class="mb-2">
        <a href="{{ route('admin.properties.index') }}" class="hover:underline">Back to list</a>
    </div>
    <div class="mb-4">
        <form name="editform" action="{{ route('admin.properties.update', ['property' => $data->id]) }}" method="post" id="editform">
            @method('PUT')
            @csrf
            <dl class="mb-2">
                <dt class="mb-1">Name</dt>
                <dd class="mb-1">
                    <x-input id="name" type="text" name="name" value="{{ old('name', $data->name) }}" class="block" required />
                    <span style="color: red;">{{ $errors->first('name') }}</span>
                </dd>
            </dl>
            <x-button>
                {{ __('Update') }}
            </x-button>
        </form>
    </div>
    <div>
        <form method="POST" action="{{ route('admin.properties.destroy', ['property' => $data->id]) }}">
            @method('DELETE')
            @csrf
            <x-button>
                {{ __('Delete') }}
            </x-button>
        </form>
    </div>
</x-layout>