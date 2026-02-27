<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <style>
        * { font-family: 'Poppins', sans-serif; }
        .gradient-text {
            background: linear-gradient(135deg, #f87171, #fb923c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .glow {
            box-shadow: 0 0 40px rgba(248, 113, 113, 0.15);
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 0.6s ease both; }
        .fade-up-2 { animation: fadeUp 0.6s 0.15s ease both; }
        .fade-up-3 { animation: fadeUp 0.6s 0.3s ease both; }
        .fade-up-4 { animation: fadeUp 0.6s 0.45s ease both; }
    </style>
</head>
<body class="h-full bg-zinc-950 text-zinc-100">
    <div class="min-h-full">

        <header class="border-b border-zinc-800/70 bg-zinc-950/80 backdrop-blur sticky top-0 z-50">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">
                <div class="flex items-center gap-3">
                    <div class="h-9 w-9 rounded-xl bg-gradient-to-br from-red-500 to-orange-400 flex items-center justify-center text-white font-black text-sm">L</div>
                    <div class="leading-tight">
                        <p class="text-sm font-bold tracking-tight">{{ config('app.name', 'Laravel') }}</p>
                        <p class="text-xs text-zinc-500 font-medium">Starter dashboard UI</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="/posts" class="text-sm font-semibold text-zinc-400 hover:text-white transition-colors">Posts</a>
                    <a href="#features" class="text-sm font-semibold text-zinc-400 hover:text-white transition-colors">Features</a>
                    <a href="#docs" class="text-sm font-semibold text-zinc-400 hover:text-white transition-colors">Docs</a>
                    <a href="/posts" class="rounded-xl bg-white px-4 py-2 text-sm font-bold text-zinc-900 hover:bg-zinc-100 transition-colors">
                        Open Posts →
                    </a>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-4 py-16">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div>
                    <p class="fade-up inline-flex items-center gap-2 rounded-full border border-zinc-800 bg-zinc-900/60 px-3 py-1 text-xs font-semibold text-zinc-300">
                        <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        Running on {{ config('app.env') }}
                    </p>

                    <h1 class="fade-up-2 mt-5 text-5xl font-black tracking-tight leading-[1.1] sm:text-6xl">
                        Build your Laravel project with a
                        <span class="gradient-text"> real app UI.</span>
                    </h1>

                    <p class="fade-up-3 mt-5 text-zinc-400 font-medium leading-relaxed">
                        A streamlined interface with sharp typography and practical components, perfect for building out your Posts MVC project.
                    </p>

                    <div class="fade-up-4 mt-8 flex flex-wrap gap-3">
                        <a href="/posts" class="rounded-xl bg-gradient-to-r from-red-500 to-orange-400 px-6 py-3 text-sm font-bold text-white hover:opacity-90 transition-opacity shadow-lg shadow-red-500/20">
                            View Posts →
                        </a>
                        <a href="#features" class="rounded-xl border border-zinc-700 bg-zinc-900/50 px-6 py-3 text-sm font-bold text-zinc-200 hover:bg-zinc-800 transition-colors">
                            See Features
                        </a>
                    </div>

                    <div class="fade-up-4 mt-10 grid grid-cols-3 gap-4">
                        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-4">
                            <p class="text-xs font-semibold text-zinc-500 uppercase tracking-wider">Framework</p>
                            <p class="mt-1 font-black text-lg">Laravel</p>
                        </div>
                        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-4">
                            <p class="text-xs font-semibold text-zinc-500 uppercase tracking-wider">Database</p>
                            <p class="mt-1 font-black text-lg">MySQL</p>
                        </div>
                        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-4">
                            <p class="text-xs font-semibold text-zinc-500 uppercase tracking-wider">UI</p>
                            <p class="mt-1 font-black text-lg">Tailwind</p>
                        </div>
                    </div>
                </div>

                <div class="relative fade-up-2">
                    <div class="absolute -inset-6 rounded-[2rem] bg-gradient-to-br from-red-500/20 to-orange-400/10 blur-3xl"></div>
                    <div class="relative rounded-[2rem] border border-zinc-800 bg-zinc-900/60 p-6 shadow-2xl glow">
                        <div class="flex items-center justify-between mb-5">
                            <p class="font-bold">Quick Actions</p>
                            <span class="text-xs font-semibold text-zinc-500 bg-zinc-800 px-2 py-1 rounded-lg">MVC demo</span>
                        </div>

                        <div class="grid gap-3">
                            <a href="/posts" class="group rounded-2xl border border-zinc-800 bg-zinc-950/50 p-4 hover:border-red-500/50 hover:bg-zinc-950 transition-all">
                                <p class="text-sm font-bold group-hover:text-red-400 transition-colors">Open Posts page →</p>
                                <p class="mt-1 text-xs font-medium text-zinc-500">Controller → Model → MySQL → View</p>
                            </a>

                            <div class="rounded-2xl border border-zinc-800 bg-zinc-950/50 p-4">
                                <p class="text-sm font-bold">Project Status</p>
                                <p class="mt-1 text-xs font-medium text-zinc-500">Add your Posts MVC and push to GitHub.</p>
                                <div class="mt-4 flex items-center gap-2">
                                    <div class="h-2 flex-1 rounded-full bg-zinc-800">
                                        <div class="h-2 w-2/3 rounded-full bg-gradient-to-r from-red-500 to-orange-400"></div>
                                    </div>
                                    <span class="text-xs font-bold text-zinc-300">66%</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 rounded-2xl border border-zinc-800 bg-zinc-950/50 p-4">
                            <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Tip</p>
                            <p class="mt-1 text-sm font-medium text-zinc-300">
                                Spacing + typography + contrast = 80% of good UI.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <section id="features" class="mt-20">
                <h2 class="text-3xl font-black">Simple components</h2>
                <p class="mt-2 text-sm font-medium text-zinc-500">Use these patterns for your Posts page too.</p>

                <div class="mt-6 grid gap-4 md:grid-cols-3">
                    <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-5 hover:border-zinc-700 transition-colors">
                        <p class="font-bold">Cards</p>
                        <p class="mt-2 text-sm font-medium text-zinc-500">Great for listing posts, stats, and actions.</p>
                    </div>
                    <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-5 hover:border-zinc-700 transition-colors">
                        <p class="font-bold">Buttons</p>
                        <p class="mt-2 text-sm font-medium text-zinc-500">Primary + secondary styles, consistent spacing.</p>
                    </div>
                    <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-5 hover:border-zinc-700 transition-colors">
                        <p class="font-bold">Layout</p>
                        <p class="mt-2 text-sm font-medium text-zinc-500">Centered container, responsive grid, clean nav.</p>
                    </div>
                </div>
            </section>

            <section id="docs" class="mt-16">
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/40 p-6">
                    <h3 class="text-lg font-black">Next step</h3>
                    <p class="mt-2 text-sm font-medium text-zinc-500">
                        Improve your /posts page UI using the same cards + spacing.
                    </p>
                </div>
            </section>
        </main>

        <footer class="border-t border-zinc-800/70 mt-16">
            <div class="mx-auto max-w-6xl px-4 py-8 text-sm font-semibold text-zinc-600 text-center">
                © {{ date('Y') }} {{ config('app.name', 'Laravel') }} — Built for your MVC assignment.
            </div>
        </footer>
    </div>
</body>
</html>