<x-admin-layout>
    <div class="max-w-4xl min-h-screen p-4 pb-32 mx-auto">
        <h1 class="pt-20 mb-4 text-2xl font-bold sm:text-4xl sm:pt-28">Create Tag</h1>

        <form action="{{ route('tags.store') }}" method="POST">
            @csrf

            <!-- Name -->   
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                @error('name')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-4">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                @error('slug')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <x-primary-button type="submit" class="px-4 py-2 rounded-lg">Create Tag</x-primary-button>
            </div>
        </form>
    </div>
</x-admin-layout>