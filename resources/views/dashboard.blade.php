<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

@if (auth()->user()->type == 'App\Models\Student') <a href="{{ route('grades.index') }}">My grades</a> @endif
<a href="{{ route('students.index') }}">Students</a>

</div></div>
</x-app-layout>
