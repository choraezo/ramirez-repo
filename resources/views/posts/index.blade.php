<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Posts — {{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <style>
        * { font-family: 'Poppins', sans-serif; }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 0.5s ease both; }
        .fade-up-2 { animation: fadeUp 0.5s 0.1s ease both; }
        .post-card { animation: fadeUp 0.5s ease both; }
        .post-card:nth-child(2) { animation-delay: 0.1s; }
        .post-card:nth-child(3) { animation-delay: 0.2s; }
        .post-card:nth-child(4) { animation-delay: 0.3s; }
    </style>
</head>
<body class="h-full bg-zinc-950 text-zinc-100">
    <div class="min-h-full">

        <header class="border-b border-zinc-800/70 bg-zinc-950/80 backdrop-blur sticky top-0 z-50">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">
                <a href="/" class="flex items-center gap-2 text-sm font-bold text-zinc-400 hover:text-white transition-colors">
                    ← Home
                </a>
                <a href="/posts" class="rounded-xl bg-white px-4 py-2 text-sm font-bold text-zinc-900 hover:bg-zinc-100 transition-colors">
                    Refresh
                </a>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-4 py-12">

            <div class="fade-up flex items-start justify-between">
                <div>
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-widest">Dashboard</p>
                    <h1 class="mt-1 text-4xl font-black tracking-tight">All Posts</h1>
                    <p class="mt-2 text-sm font-medium text-zinc-500">
                        Displaying posts fetched by <span class="text-zinc-300 font-bold">PostController@index</span>
                    </p>
                </div>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 px-6 py-4 text-center">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Total</p>
                    <p class="mt-1 text-3xl font-black">{{ $posts->count() }}</p>
                </div>
            </div>

            <div class="fade-up-2 mt-8 grid gap-3">
                @forelse($posts as $post)
                <div class="post-card group rounded-2xl border border-zinc-800 bg-zinc-900/40 p-5 hover:border-zinc-700 hover:bg-zinc-900/70 transition-all">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <p class="font-bold text-base group-hover:text-white transition-colors">{{ $post->title }}</p>
                            <p class="mt-1 text-sm font-medium text-zinc-500">{{ $post->text }}</p>
                        </div>
                        <div class="text-right shrink-0">
                            <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-zinc-400">
                                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                                {{ $post->created_at->format('Y-m-d H:i') }}
                            </span>
                            <p class="mt-1 text-xs font-bold text-zinc-600">ID: {{ $post->id }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-10 text-center">
                    <p class="font-bold text-zinc-500">No posts yet.</p>
                    <p class="mt-1 text-sm text-zinc-600">Add some data in your database.</p>
                </div>
                @endforelse
            </div>

            <div class="mt-6 rounded-2xl border border-zinc-800 bg-zinc-900/40 p-4">
                <p class="text-xs font-semibold text-zinc-500">
                    MVC flow: <span class="text-zinc-200 font-black">Route → Controller → Model → MySQL → View</span>
                </p>
            </div>

        </main>
    </div>
</body>
</html>