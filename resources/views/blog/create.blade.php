<x-admin-layout>
    <div class="max-w-6xl min-h-screen p-10 pb-32 mx-auto">
        <h1 class="mb-4 text-2xl font-bold sm:text-4xl">Create new blog</h1>

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input id="title" type="text" name="title" value="{{ old('title') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                @error('title')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle</label>
                <input id="subtitle" type="text" name="subtitle" value="{{ old('subtitle') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                @error('subtitle')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor class="h-screen" input="body"></trix-editor>
                @error('body')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input id="slug" type="text" name="slug" value="{{ old('slug') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                @error('slug')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="excerpt" class="block text-sm font-medium text-gray-700">Excerpt</label>
                <textarea id="excerpt" name="excerpt" rows="3" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta description</label>
                <textarea id="meta_description" name="meta_description" rows="3" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('meta_description') }}</textarea>
                @error('meta_description')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="featured_image" class="block text-sm font-medium text-gray-700">Featured Image</label>
                <input id="featured_image" type="file" name="featured_image" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                @error('featured_image')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category_id" name="category_id" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 my-5 text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                Create Blog
            </button>
        </form>
    </div>
    
    {{-- <script>
        document.addEventListener('trix-change', function(event) {
            const trixInput = document.querySelector('input[name=content]');
            trixInput.value = event.target.innerHTML;
        });
    </script> --}}
</x-admin-layout>