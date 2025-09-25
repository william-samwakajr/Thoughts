<div class="card bg-base-100 shadow mt-8">
    <div class="card-body">
        <form method="POST" action="/tasks">
            @csrf

            <div class="form-control w-full">
                <input 
                    name="title"
                    type="text"
                    placeholder="Name your task"
                    value="{{ old('title') }}"
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
                >{{ old('description') }}</textarea>

                @error('description')
                    <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div class="mt-4 flex items-center justify-end">
                <button type="submit" class="btn btn-primary btn-base">
                    Make Task
                </button>
            </div>
        </form>
    </div>
</div>
