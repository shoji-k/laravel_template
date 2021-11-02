<x-layout>
    <x-slot name="title">Edit Property</x-slot>
    <h1>Edit Property</h1>
    <div>
        <a href="{{ route('admin.properties.index') }}">Back to list</a>
    </div>
    <div>
        <form name="editform" action="{{ route('admin.properties.update', ['property' => $data->id]) }}" method="post" id="editform">
            @method('PUT')
            @csrf
            <dl>
                <dt>Name</dt>
                <dd>
                    <x-input id="name" type="text" name="name" value="{{ old('name', $data->name) }}" class="block mt-1 w-full" required />
                    <span style="color: red;">{{ $errors->first('name') }}</span>
                </dd>
            </dl>
            <button type="submit" name="action" value="send">Update</button>
        </form>
        <form method="POST" action="{{ route('admin.properties.destroy', ['property' => $data->id]) }}">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
</x-layout>