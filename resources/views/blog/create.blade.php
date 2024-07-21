<x-admin-layout>
    <div class="max-w-5xl min-h-screen p-4 pb-32 mx-auto">
        <h1 class="pt-20 mb-4 text-2xl font-bold sm:text-4xl sm:pt-36">Create New Blog</h1>

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                @error('title')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" value="{{ old('subtitle') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                @error('subtitle')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label> 
                <input id="x" value="Write something awesome!" type="hidden" name="content">
                <trix-editor input="x"></trix-editor>
                  
                {{-- <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <textarea name="body" rows="5" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror --}}
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug') }}" 
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
                <label for="featured_image" class="block text-sm font-medium text-gray-700">Featured Image</label>
                <input type="file" id="featured_image" name="featured_image" 
                    class="block w-full mt-1">
                @error('featured_image')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="author_id" class="block text-sm font-medium text-gray-700">Author</label>
                <select id="author_id" name="author_id" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Select an author</option>
                    {{-- @foreach($authors as $id => $name)
                        <option value="{{ $id }}" {{ old('author_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach --}}
                </select>
                @error('author_id')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="category_id" name="category_id" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Select a category</option>
                    {{-- @foreach($categories as $id => $name)
                        <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach --}}
                </select>
                @error('category_id')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="reading_time" class="block text-sm font-medium text-gray-700">Reading Time (minutes)</label>
                <input type="number" id="reading_time" name="reading_time" value="{{ old('reading_time') }}" 
                    min="0" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                @error('reading_time')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md">Create Blog</button>
        </form>
    </div>
</x-admin-layout>