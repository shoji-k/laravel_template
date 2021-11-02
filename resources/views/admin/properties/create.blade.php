<x-layout>
    <x-slot name="title">Create Property</x-slot>

    <h1 class="mb-2">Create Property</h1>
    <div class="mb-2">
        <a href="{{ route('admin.properties.index') }}">Back to list</a>
    </div>
    <div class="mb-2">
        <form name="createform" action="{{ route('admin.properties.store') }}" method="post" id="createform">
            @csrf
            <dl>
                <dt class="mb-1">Property</dt>
                <dd class="mb-1">
                    <x-input id="name" name="name" class="@error('name') is-invalid @enderror" />
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </dd>
            </dl>
            <x-button>Create</x-button>
        </form>
    </div>
</x-layout>