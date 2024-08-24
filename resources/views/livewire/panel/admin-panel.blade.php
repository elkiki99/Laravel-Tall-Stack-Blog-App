<div class="gap-6 lg:flex">
    <div class="w-full py-10 lg:w-2/3">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4">
            <a target="_blank" rel="noopener noreferrer" href="https://dashboard.stripe.com/test/balance/overview">
                <div class="p-6 space-y-2 bg-gray-50 rounded-3xl">
                    <div class="flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                            stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
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
            </a>
            <a wire:navigate href="{{ route('posts.index') }}">
                <div class="h-full p-6 space-y-2 bg-gray-50 rounded-3xl">
                    <div class="flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                            stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                        </svg>

                    </div>
                    <p class="text-2xl font-semibold">{{ $posts->where('status', 'published')->count() }}</p>
                    <p class="font-medium text-md">Active blog posts</p>
                </div>
            </a>
            <a wire:navigate href="{{ route('users.index') }}">
                <div class="h-full p-6 space-y-2 bg-gray-50 rounded-3xl">
                    <div class="flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                            stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>



                    </div>
                    <p class="text-2xl font-semibold"> {{ $users->count() }} </p>
                    <p class="font-medium text-md">Current users</p>
                </div>
            </a>
            <a wire:navigate href="{{ route('comments.index') }}">
                <div class="h-full p-6 space-y-2 bg-gray-50 rounded-3xl">
                    <div class="flex justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                            stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>


                    </div>
                    <p class="text-2xl font-semibold">
                        {{ $comments->where('created_at', '>=', Carbon\Carbon::now()->subDays(7))->count() }}</p>
                    <p class="font-medium text-md">Weekly comments</p>
                </div>
            </a>
        </div>

        <div class="w-full gap-4 py-4 md:flex">
            <div class="grid grid-cols-2 gap-4 md:w-1/3 md:grid-cols-1 gap-y-4">
                <div class="p-6 space-y-2 bg-gray-50 rounded-3xl">
                    <p class="text-lg font-semibold">New weekly clients</p>
                    <div class="flex items-center justify-around">
                        <p class="text-6xl font-bold">
                            {{ $clients->where('created_at', '>=', Carbon\Carbon::now()->subDays(7))->count() }}</p>
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

            <!-- CHART !-->
            <div class="w-full p-6 mt-4 space-y-4 md:mt-0 md:w-2/3 bg-gray-50 rounded-3xl">
                <p class="text-xl font-semibold">Weekly sales</p>
                <canvas id="lineChart"></canvas>
            </div>
        </div>

        <!-- Comments -->
        <div class="gap-4 p-6 space-y-4 bg-gray-50 rounded-3xl">
            <p class="text-xl font-medium">Recent comments</p>
            
            <table class="min-w-full bg-gray-50">
                <tbody>
                        @foreach (App\Models\Comment::latest()->take(5)->get() as $comment)
                        <tr wire:loading.remove wire:target='deleteComment({{ $comment->id }})'
                            wire:key="{{ $comment->id }}" class="border-b-2 bg-gray-50" />
                            <td>
                                @if ($comment->user->role === 'author')
                                    <x-avatar class="m-1 border-blue-500 size-12" :user="$comment->user" />
                                @else
                                    <x-avatar class="m-1 size-12" :user="$comment->user" />
                                @endif
                            </td>
                            <td class="p-4 font-medium rounded-lg">
                                <a wire:navigate href="{{ route('posts.show', $comment->post) }}">
                                    {{ \Illuminate\Support\Str::limit($comment->body, 20) }}
                                </a>
                            </td>
                            <td class="hidden p-4 font-medium md:table-cell">
                                @if ($comment->user->id === $comment->post->author_id)
                                    <div class="flex items-center">
                                        <h3 class="font-bold text-md">
                                            <a wire:navigate
                                                href="{{ route('users.show', $comment->user) }}">{{ $comment->user->name }}
                                            </a>
                                        </h3>
                                        <x-verified class="ml-2 size-6" />
                                    <div>
                                @elseif($comment->user->role === 'author')
                                    <h3 class="font-bold text-md">
                                        <a wire:navigate
                                            href="{{ route('users.show', $comment->user) }}">{{ $comment->user->name }}
                                        </a>
                                    </h3>
                                @else
                                    <h3 class="font-bold text-md">{{ $comment->user->name }}</h3>
                                @endif
                            </td>
                            <td class="hidden p-4 text-sm font-medium lg:table-cell">
                                {{ $comment->created_at->diffForHumans() }}
                            </td>
                            <td class="p-4">
                                <div class="flex items-end justify-end">
                                    <a class="hover:blur-xs" wire:navigate
                                        href="{{ route('posts.show', $comment->post) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="w-full lg:w-1/3">
        <div class="p-6 my-8 space-y-4 bg-gray-950 rounded-3xl">
            <h3 class="text-2xl font-bold text-gray-100">Visitors</h3>
            <p class="text-gray-100">Daily, weekly, and monthly visits</p>
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mr-2 text-gray-100 size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                </svg>
                <p class="text-3xl font-bold text-gray-100">XX,XXX</p>
            </div>
            <a 
                rel="noopener noreferrer" target="_blank" href="https://marketingplatform.google.com/about/analytics/" class="inline-flex items-center justify-center w-full px-4 py-2 text-black bg-white border-2 border-gray-100 rounded-lg dark:bg-gray-900 dark:text-white hover:blur-xs hover:text-black hover:border-gray-300 dark:hover:text-white focus:text-black focus:border-gray-200 dark:focus:text-white text-md">View
                stats
            </a>
        </div>

        <div class="my-8 space-y-4">
            <h3 class="text-2xl font-bold">Actions</h3>

            <div class="flex items-center justify-start">
                <a class="flex items-center justify-center" target="_blank" rel="noopener noreferrer" href="https://mail.google.com/mail/u/0/">
                    <div class="mr-3 rounded-2xl bg-gray-950">
                        <svg class="m-2 text-gray-100 size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 49.4 512 399.42">
                            <g fill="none" fill-rule="evenodd">
                              <g fill-rule="nonzero">
                                <!-- Cambiar todos los colores a blanco -->
                                <path fill="#ffffff" d="M34.91 448.818h81.454V251L0 163.727V413.91c0 19.287 15.622 34.91 34.91 34.91z"/>
                                <path fill="#ffffff" d="M395.636 448.818h81.455c19.287 0 34.909-15.622 34.909-34.909V163.727L395.636 251z"/>
                                <path fill="#ffffff" d="M395.636 99.727V251L512 163.727v-46.545c0-43.142-49.25-67.782-83.782-41.891z"/>
                              </g>
                              <path fill="#ffffff" d="M116.364 251V99.727L256 204.455 395.636 99.727V251L256 355.727z"/>
                              <path fill="#ffffff" fill-rule="nonzero" d="M0 117.182v46.545L116.364 251V99.727L83.782 75.291C49.25 49.4 0 74.04 0 117.18z"/>
                            </g>
                          </svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold">Your e-mail</p>
                        <p class="text-gray-700">Check out your inbox</p>
                    </div>
                </a>
            </div>

            <div class="flex items-center justify-start">
                <a wire:navigate class="flex items-center justify-center" href="{{ route('users.index') }}">
                    <div class="mr-3 rounded-2xl bg-gray-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="m-2 text-gray-100 size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold">Manage user roles</p>
                        <p class="text-gray-700">Configure permissions and access levels</p>
                    </div>
                </a>
            </div>

            <div class="flex items-center justify-start">
                <a wire:navigate class="flex items-center justify-center" href="{{ route('profile.picture') }}">
                    <div class="mr-3 rounded-2xl bg-gray-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="m-2 text-gray-100 size-8">
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
                </a>
            </div>

            <div class="flex items-center justify-start">   
                <a class="flex items-center justify-center" target="_blank" rel="noopener noreferrer" href="https://dashboard.stripe.com/test/dashboard">
                    <div class="flex items-center justify-center mr-3 rounded-2xl bg-gray-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="m-2 text-gray-100 size-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold">Stripe products</p>
                        <p class="text-gray-700">Manage your stripe plans</p>
                    </div>
                </a>
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
                <a wire:navigate href="{{ route('posts.pending') }}">
                    <li class="text-gray-100">{{ $posts->where('status', 'draft')->count() }} blog posts to check and
                    publish</li>
                </a>
                <a wire:navigate href="{{ route('categories.show', 'uncategorized') }}">
                    <li class="text-gray-100">{{ $uncategorizedPosts->count() }} uncategorized blog posts</li>
                </a>
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('lineChart').getContext('2d');
            
            const labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6'];
            const salesData = @json($salesData);
            
            const data = {
                labels: labels,
                datasets: [
                    {
                        label: 'Weekly sales',
                        data: salesData,
                        borderColor: 'rgba(0, 0, 0, 1)',
                        backgroundColor: 'rgba(245, 158, 11, 1)', 
                    },
                ]
            };
    
            const config = {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: false,
                        }
                    }
                }
            };
    
            new Chart(ctx, config);
        });
    </script>
</div>

