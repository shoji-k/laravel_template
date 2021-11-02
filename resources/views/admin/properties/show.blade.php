<x-layout>
    <x-slot name="title">物件詳細</x-slot>

    <h1 class="text-lg mb-2">物件詳細</h1>
    <div>
        {{ $data->name }}
    </div>
    <div>
        <a href="{{ route('admin.properties.edit', ['property' => $data->id]) }}" class="hover:underline">
            Edit
        </a>
    </div>
</x-layout>