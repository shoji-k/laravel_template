<x-layout>
    <x-slot name="title">物件一覧</x-slot>

    <h1 class="text-lg mb-2">物件一覧</h1>
    <div>
        @empty($data)
            データはありません
        @endempty
        @foreach ($data as $datum)
        <div class="mb-2 p-2 box-border border-2">
            {{ $datum->name }}
        </div>
        @endforeach
    </div>
</x-layout>