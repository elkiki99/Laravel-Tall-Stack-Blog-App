<x-admin-layout>
    <div class="max-w-4xl min-h-screen p-4 pb-32 mx-auto">
        <h1 class="mb-4 text-2xl font-bold sm:text-4xl">Create new blog</h1>

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mt-5">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')" required />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label for="subtitle" :value="__('Subtitle')" />
                <x-text-input id="subtitle" class="block w-full mt-1" type="text" name="subtitle" :value="old('subtitle')" />
                <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label for="body" :value="__('Body')" />
                <input id="x" value="Write something awesome!" type="hidden" name="content">
                <trix-editor class="h-screen" input="x"></trix-editor>
            </div>

            <div class="mt-5">
                <x-input-label for="slug" :value="__('Slug')" />
                <x-text-input id="slug" class="block w-full mt-1" type="text" name="slug" :value="old('slug')" required />
                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label for="excerpt" :value="__('Excerpt')" />
                <textarea id="excerpt" name="excerpt" rows="3" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('excerpt') }}</textarea>
                <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label for="featured_image" :value="__('Featured Image')" />
                <x-text-input id="featured_image" class="block w-full mt-1" type="file" name="featured_image" />
                <x-input-error :messages="$errors->get('featured_image')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label for="category_id" :value="__('Category')" />
                <select id="category_id" name="category_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
            </div>

            <x-primary-button type="submit" class="px-4 py-2 my-5 rounded-lg">Create Blog</x-primary-button>
        </form>
    </div>
</x-admin-layout>