@props(['task'])

<div = class="card bg-base-100 shadow">
    <div class = "card-body">

        <div class = "flex space-x-3">
                <div class="min-w-0">
                  <div>
                    <div class="flex items-center gap-1">

                        <span class="text-lg font-semibold">
                            {{ $task->title}}
                        </span>
                        <div class="flex gap-1">

                        <a href="/chirps/{{ $chirp->id }}/edit" class="btn btn-ghost btn-xs">

                            Edit

                        </a>

                        <form method="POST" action="/chirps/{{ $chirp->id }}">

                            @csrf

                            @method('DELETE')

                            <button type="submit"

                                onclick="return confirm('Are you sure you want to delete this chirp?')"

                                class="btn btn-ghost btn-xs text-error">

                                Delete

                            </button>

                        </form>

                    </div>
                    </div>
                    <p class="mt-1">

                        {{ $task->description}}

                    </p>
                    <p class="text-sm text-base-content/60 ">
                        {{ $task->updated_at->diffForHumans() }}
                    </p>
                
            </div>
        </div>

    </div>

</div>