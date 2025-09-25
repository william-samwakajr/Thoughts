
<x-layout>
    <x-slot:title>
        Taskmately
</x-slot:title>
        <div class="max-w-2xl mx-auto">
            @forelse ($tasks as $task)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                      <div class ="font-semibold text-lg" >{{ $task['title']}}</div>
                      <div class ="mt-1 ">{{$task['description']}}</div>
                      <div class = "text-sm text-gray-500 mt-2">{{$task->created_at->diffForHumans()}}
                    </div>
                </div>
            </div>
            @empty
                <p class ="text-gray-500"> No tasks added yet. </p>
            @endforelse
        </div>
    </x-layout>