<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-zinc-950 text-zinc-100">
    <div class="min-h-full">
        <header class="border-b border-zinc-800/70 bg-zinc-950/60 backdrop-blur">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">
                <a href="/" class="text-sm text-zinc-300 hover:text-white">← Home</a>
                <a href="/posts" class="rounded-xl bg-white px-4 py-2 text-sm font-semibold text-zinc-900 hover:bg-zinc-200">Refresh</a>
            </div>
        </header>
        <main class="mx-auto max-w-6xl px-4 py-10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-zinc-400">Dashboard</p>
                    <h1 class="text-3xl font-bold">All Posts</h1>
                    <p class="mt-1 text-sm text-zinc-400">Displaying posts fetched by <strong>PostController@index</strong>.</p>
                </div>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-4 text-center">
                    <p class="text-xs text-zinc-400">Total</p>
                    <p class="text-2xl font-bold">{{ $posts->count() }}</p>
                </div>
            </div>
            <div class="mt-8 grid gap-3">
                @forelse($posts as $post)
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-5">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="font-semibold">{{ $post->title }}</p>
                            <p class="mt-1 text-sm text-zinc-400">{{ $post->text }}</p>
                        </div>
                        <div class="text-right text-xs text-zinc-400">
                            <span class="inline-flex items-center gap-1">
                                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                                {{ $post->created_at->format('Y-m-d H:i') }}
                            </span>
                            <p class="mt-1">ID: {{ $post->id }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-5 text-center text-zinc-400">
                    No posts yet.
                </div>
                @endforelse
            </div>
            <div class="mt-6 rounded-2xl border border-zinc-800 bg-zinc-900/30 p-4 text-sm text-zinc-400">
                MVC flow: <strong class="text-zinc-200">Route → Controller → Model → MySQL → View</strong>
            </div>
        </main>
    </div>
</body>
</html>