<div class="flex gap-6">
    <div class="w-2/3 py-10">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="p-6 space-y-2 bg-gray-50 rounded-3xl">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold">
                <div>
                    <p class="text-2xl font-semibold">
                        {{ number_format($balance / 100, 2) }} {{ $currency }}
                    </p>
                </div>
                <p class="font-medium text-md">Your bank balance</p>
            </div>

            <div class="p-6 space-y-2 bg-gray-50 rounded-3xl">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold">{{ $posts->where('status', 'published')->count() }}</p>
                <p class="font-medium text-md">Active blog posts</p>
            </div>

            <div class="p-6 space-y-2 bg-gray-50 rounded-3xl">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>


                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold"> {{ $users->count() }} </p>
                <p class="font-medium text-md">Current users</p>
            </div>

            <div class="p-6 space-y-2 bg-gray-50 rounded-3xl">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold">
                    {{ $comments->where('created_at', '>=', Carbon\Carbon::now()->subDays(7))->count() }}</p>
                <p class="font-medium text-md">Weekly comments</p>
            </div>
        </div>

        <div class="flex gap-4 py-4">
            <div class="grid w-1/3 grid-cols-1 gap-4 gap-y-4">
                <div class="p-6 space-y-2 bg-gray-50 rounded-3xl">
                    <p class="text-lg font-semibold">Total clients</p>
                    <div class="flex items-center justify-around">
                        <p class="text-6xl font-bold">{{ $clients->count() }}</p>
                        <p class="py-0.5 text-sm px-3 text-green-800 bg-green-200 rounded-lg">+10%</p>
                    </div>
                </div>

                <div class="p-6 space-y-2 bg-gray-50 rounded-3xl">
                    <p class="text-lg font-semibold">Weekly blog posts</p>
                    <div class="flex items-center justify-around">
                        <p class="text-6xl font-bold">
                            {{ $posts->where('created_at', '>=', Carbon\Carbon::now()->subDays(7))->count() }}</p>
                        <p class="py-0.5 text-sm px-3 text-red-800 bg-red-200 rounded-lg">-2%</p>
                    </div>
                </div>
            </div>

            <div class="w-2/3 p-6 space-y-4 bg-gray-50 rounded-3xl">
                <p class="text-xl font-semibold">Marketing campaign</p>

                <div class="relative h-64">
                    <!-- Curve -->
                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0,80 C20,40 40,60 60,30 C80,10 100,50 120,20" stroke="black" stroke-width="2"
                            fill="none" />
                    </svg>

                    <!-- Horizontal Lines -->
                    <div class="absolute bg-gray-400" style="height: 1px; width: 90%; top: 20%; left: 5%;"></div>
                    <div class="absolute bg-gray-400" style="height: 1px; width: 90%; top: 40%; left: 5%;"></div>
                    <div class="absolute bg-gray-400" style="height: 1px; width: 90%; top: 60%; left: 5%;"></div>
                    <div class="absolute bg-gray-400" style="height: 1px; width: 90%; top: 80%; left: 5%;"></div>
                </div>
            </div>
        </div>

        <!-- Emails -->
        <div class="gap-4 p-6 space-y-4 bg-gray-50 rounded-3xl">
            <p class="text-xl font-medium">Recent emails</p>

            <div class="flex items-center justify-between">
                <svg class="text-gray-400 size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                        clip-rule="evenodd" />
                </svg>
                <p class="font-medium">Bruno</p>
                <p class="max-w-sm text-gray-600 truncate">Hey! so I noticed you have been making some corrections...
                </p>
                <p>2 hours ago</p>
            </div>

            <div class="flex items-center justify-between">
                <svg class="text-gray-400 size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                        clip-rule="evenodd" />
                </svg>
                <p class="font-medium">Camila</p>
                <p class="max-w-sm text-gray-600 truncate">Hey! I am an architect entrepreneur and I would love to
                    collaborate with your page!</p>
                <p>5 hours ago</p>
            </div>

            <div class="flex items-center justify-between">
                <svg class="text-gray-400 size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                        clip-rule="evenodd" />
                </svg>
                <p class="font-medium">Francisco</p>
                <p class="max-w-sm text-gray-600 truncate">I've been a user here in Gazette magazine since 2 years now,
                    I would like to discuss some issues I've been having...</p>
                <p>1 day ago</p>
            </div>
        </div>

    </div>

    <div class="w-1/3">
        <div class="p-6 my-8 space-y-4 bg-gray-950 rounded-3xl">
            <h3 class="text-2xl font-bold text-gray-100">Visitors</h3>
            <p class="text-gray-100">Daily, weekly, and monthly visits</p>
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mr-2 text-gray-100 size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                </svg>
                <p class="text-3xl font-bold text-gray-100">7,200/mo</p>
            </div>
            <x-secondary-button class="justify-center w-full px-4 py-2 rounded-lg text-md">View
                stats</x-secondary-button>
        </div>

        <div class="my-8 space-y-4">
            <h3 class="text-2xl font-bold">Actions</h3>

            <div class="flex items-center justify-start">
                <div class="flex items-center justify-center mr-3 rounded-2xl bg-gray-950">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="m-2 text-gray-100 size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-bold">Support ticket system</p>
                    <p class="text-gray-700">Open support tickets</p>
                </div>
            </div>

            <div class="flex items-center justify-start">
                <div class="flex items-center justify-center mr-3 rounded-2xl bg-gray-950">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="m-2 text-gray-100 size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-bold">Manage user roles</p>
                    <p class="text-gray-700">Configure permissions and access levels</p>
                </div>
            </div>

            <div class="flex items-center justify-start">
                <div class="flex items-center justify-center mr-3 rounded-2xl bg-gray-950">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="m-2 text-gray-100 size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-bold">Settings</p>
                    <p class="text-gray-700">General settings and preferences</p>
                </div>
            </div>

            <div class="flex items-center justify-start">
                <div class="flex items-center justify-center mr-3 rounded-2xl bg-gray-950">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="m-2 text-gray-100 size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                    </svg>

                </div>
                <div>
                    <p class="text-lg font-bold">API keys</p>
                    <p class="text-gray-700">Manage integrations with external services</p>
                </div>
            </div>
        </div>

        <div class="p-6 my-8 space-y-6 bg-gray-950 rounded-3xl">
            <div class="flex items-center justify-start">
                <div class="mr-3 bg-green-300 rounded-full size-3"></div>
                <div>
                    <p class="text-xl font-bold text-gray-100">Daily todos</p>
                    <p class="text-sm text-gray-100">{{ Carbon\Carbon::now()->toDayDateTimeString() }}</p>
                </div>
            </div>
            <ul>
                <li class="text-gray-100">{{ $posts->where('status', 'draft')->count() }} blog posts to check and publish</li>
                <li class="text-gray-100">{{ $uncategorizedPosts->count() }} uncategorized blog posts</li>
                <li class="text-gray-100"></li>
            </ul>
        </div>
    </div>
</div>
