<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('lecturer.index') }}" role="button">Back</a>

    {{-- department --}}
    <h6>Data Department</h6>
    <ul class="list-group mb-3">
        <li class="list-group-item">Name: {{ $lecturer->department->name }}</li>
        <li class="list-group-item">
            Created At: {{ $lecturer->department->created_at->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item">
            Last Update: {{ $lecturer->department->updated_at->diffForHumans() }}
        </li>
    </ul>

    {{-- lecturer --}}
    <h6>Data Lecturers</h6>
    <ul class="list-group">
        @foreach ($lecturer->department->lecturers as $lecturer)
            <li class="list-group-item">{{ $lecturer->name }}</li>
        @endforeach

    </ul>

</x-app>