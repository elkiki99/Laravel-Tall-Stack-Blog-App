<x-admin-layout>
    <div class="max-w-4xl min-h-screen p-4 pb-32 mx-auto">
        <h1 class="mb-4 text-2xl font-bold sm:text-4xl">Create author</h1>

        <form action="{{ route('authors.store') }}" method="POST" enctype="multipart/form-data">
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

            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                @error('username')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Profile Image -->
            <div class="mb-4">
                <label for="profile_image" class="block text-sm font-medium text-gray-700">Profile Image</label>
                <input type="file" id="profile_image" name="profile_image" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                @error('profile_image')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                @error('email')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- LinkedIn Profile -->
            <div class="mb-4">
                <label for="linkedin_profile" class="block text-sm font-medium text-gray-700">LinkedIn Profile</label>
                <input type="text" id="linkedin_profile" name="linkedin_profile" value="{{ old('linkedin_profile') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                @error('linkedin_profile')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Website -->
            <div class="mb-4">
                <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                <input type="text" id="website" name="website" value="{{ old('website') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                @error('website')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Bio -->
            <div class="mb-4">
                <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea id="bio" name="bio" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">{{ old('bio') }}</textarea>
                @error('bio')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Date of Birth -->
            <div class="mb-4">
                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
                @error('date_of_birth')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <x-primary-button type="submit" class="px-4 py-2 rounded-lg">Create Author</x-primary-button>
        </form>
    </div>
</x-app-layout>