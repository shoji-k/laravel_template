<x-layout>
    <x-slot name="title">物件一覧</x-slot>

    <h1>物件一覧</h1>
    <div>
        @empty($data)
            データはありません
        @endempty
        @foreach ($data as $datum)
        <div>
            {{ $datum->name }}
        </div>
        @endforeach
    </div>
</x-layout>