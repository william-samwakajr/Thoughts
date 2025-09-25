@props(['task'])

<div = class="card bg-base-100 shadow">
    <div class = "card-body">

        <div class = "flex space-x-3">
                <div class="min-w-0">

                <div class="flex items-center gap-1">

                    <span class="text-lg font-semibold">
                        {{ $task->title}}

                    </span>
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