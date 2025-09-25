<x-layout>
    <x-slot:title>
        Edit Task
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Edit Task</h1>

        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('PUT')

                    <div class="form-control w-full">
                        <input 
                            name="title"
                            type="text"
                            placeholder="Name your task"
                            value="{{ old('title', $task->title) }}"
                            class="input input-secondary w-full @error('title') input-error @enderror"
                        />

                        @error('title')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        <textarea
                            name="description"
                            placeholder="Describe your task"
                            class="textarea textarea-bordered w-full resize-none mt-2 @error('description') textarea-error @enderror"
                            rows="4"
                            maxlength="255"
                        >{{ old('description', $task->description) }}</textarea>

                        @error('description')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="card-actions justify-between mt-4">
                        <a href="/" class="btn btn-ghost btn-sm">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Update Task
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
