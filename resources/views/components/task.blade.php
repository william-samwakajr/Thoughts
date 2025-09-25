@props(['task'])

<div class="card bg-base-100 shadow w-full max-w-2xl mx-auto mt-4">
    <div class="card-body">
        <div class="flex space-x-3">
            <div class="min-w-0">
                <div>
                    <div class="flex items-center gap-1">
                        <span class="text-lg font-semibold">
                            {{ $task->title }}
                        </span>
                        <div class="flex gap-1">
                            <a href="/tasks/{{ $task->id }}/edit" class="btn btn-ghost btn-xs">
                                Edit
                            </a>

                            <form method="POST" action="/tasks/{{ $task->id }}">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    onclick="return confirm('Are you sure you want to delete this task?')"
                                    class="btn btn-ghost btn-xs text-error"
                                >
                                    Delete
                                </button>
                            </form>
                            
                        </div> <!-- flex gap-1 -->
                    </div> <!-- flex items-center gap-1 -->

                    <p class="mt-1">
                        {{ $task->description }}
                    </p>
                    <p class="text-sm text-base-content/60">
                        {{ $task->updated_at->diffForHumans() }}
                    </p>
                </div>
            </div> <!-- min-w-0 -->
        </div> <!-- flex space-x-3 -->
    </div> <!-- card-body -->
</div> <!-- card -->
