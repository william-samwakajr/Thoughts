<div class="card bg-base-100 shadow mt-8">
    <div class="card-body">
        <form method = "POST" action ="/tasks">
            @csrf
             <div class="form-control w-full">
                        <input 
                        name = "title"
                        type = "text"
                        placeholder="Name your task"
                        class="input input-secondary w-full ">
                        <textarea

                            name="description"

                            placeholder="Describe your task"

                            class="textarea textarea-bordered w-full resize-none mt-2"

                            rows="4"

                            maxlength="255"

                            required

                        ></textarea>
                        <div class="mt-4 flex items-center justify-end">
                        <button type="submit" class="btn btn-primary btn-base">
                            Make Task
                        </button>
                        </div>
                    </div    
        </form>
    </div>
</div>