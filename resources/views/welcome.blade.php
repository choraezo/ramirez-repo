<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="h-full bg-zinc-950 text-zinc-100">
    <div class="min-h-full">
        <header class="border-b border-zinc-800/70 bg-zinc-950/60 backdrop-blur">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">
                <div class="flex items-center gap-3">
                    <div class="h-9 w-9 rounded-xl bg-gradient-to-br from-red-500 to-orange-400"></div>
                    <div class="leading-tight">
                        <p class="text-sm font-semibold">{{ config('app.name', 'Laravel') }}</p>
                        <p class="text-xs text-zinc-400">Starter dashboard UI</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <a href="/posts" class="text-sm text-zinc-300 hover:text-white">Posts</a>
                    <a href="#features" class="text-sm text-zinc-300 hover:text-white">Features</a>
                    <a href="#docs" class="text-sm text-zinc-300 hover:text-white">Docs</a>

                    <a href="/posts"
                       class="rounded-xl bg-white px-4 py-2 text-sm font-semibold text-zinc-900 hover:bg-zinc-200">
                        Open Posts →
                    </a>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-4 py-14">
            <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
                <div>
                    <p class="inline-flex items-center gap-2 rounded-full border border-zinc-800 bg-zinc-900/40 px-3 py-1 text-xs text-zinc-300">
                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                        Running on {{ config('app.env') }}
                    </p>

                    <h1 class="mt-5 text-4xl font-bold tracking-tight sm:text-5xl">
                        Build your Laravel project with a UI that looks like a real app.
                    </h1>

                    <p class="mt-4 text-zinc-300">
                       A streamlined interface with sharp typography and practical components, perfect for building out your Posts MVC project.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="/posts"
                           class="rounded-xl bg-gradient-to-r from-red-500 to-orange-400 px-5 py-3 text-sm font-semibold text-white hover:opacity-90">
                            View Posts
                        </a>

                        <a href="#features"
                           class="rounded-xl border border-zinc-800 bg-zinc-900/30 px-5 py-3 text-sm font-semibold text-zinc-200 hover:bg-zinc-900/60">
                            See Features
                        </a>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-3">
                        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-4">
                            <p class="text-xs text-zinc-400">Framework</p>
                            <p class="mt-1 font-semibold">Laravel</p>
                        </div>
                        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-4">
                            <p class="text-xs text-zinc-400">Database</p>
                            <p class="mt-1 font-semibold">MySQL</p>
                        </div>
                        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-4">
                            <p class="text-xs text-zinc-400">UI</p>
                            <p class="mt-1 font-semibold">Tailwind</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -inset-6 rounded-[2rem] bg-gradient-to-br from-red-500/20 to-orange-400/10 blur-2xl"></div>

                    <div class="relative rounded-[2rem] border border-zinc-800 bg-zinc-900/40 p-6 shadow-2xl">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-semibold">Quick Actions</p>
                            <span class="text-xs text-zinc-400">MVC demo</span>
                        </div>

                        <div class="mt-5 grid gap-3">
                            <a href="/posts" class="group rounded-2xl border border-zinc-800 bg-zinc-950/30 p-4 hover:bg-zinc-950/60">
                                <p class="text-sm font-semibold group-hover:text-white">Open Posts page</p>
                                <p class="mt-1 text-xs text-zinc-400">View posts pulled from MySQL (Controller → Model → View)</p>
                            </a>

                            <div class="rounded-2xl border border-zinc-800 bg-zinc-950/30 p-4">
                                <p class="text-sm font-semibold">Project Status</p>
                                <p class="mt-1 text-xs text-zinc-400">Add your Posts MVC and push to GitHub.</p>

                                <div class="mt-4 flex items-center gap-2">
                                    <div class="h-2 flex-1 rounded-full bg-zinc-800">
                                        <div class="h-2 w-2/3 rounded-full bg-gradient-to-r from-red-500 to-orange-400"></div>
                                    </div>
                                    <span class="text-xs text-zinc-300">66%</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 rounded-2xl border border-zinc-800 bg-zinc-950/30 p-4">
                            <p class="text-xs text-zinc-400">Tip</p>
                            <p class="mt-1 text-sm text-zinc-200">
                                Keep UI simple: spacing + typography + contrast. That’s 80% of “better UI”.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <section id="features" class="mt-16">
                <div class="flex items-end justify-between">
                    <div>
                        <h2 class="text-2xl font-bold">Simple components</h2>
                        <p class="mt-2 text-sm text-zinc-400">Use these patterns for your Posts page too.</p>
                    </div>
                </div>

                <div class="mt-6 grid gap-4 md:grid-cols-3">
                    <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-5">
                        <p class="text-sm font-semibold">Cards</p>
                        <p class="mt-2 text-sm text-zinc-400">Great for listing posts, stats, and actions.</p>
                    </div>
                    <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-5">
                        <p class="text-sm font-semibold">Buttons</p>
                        <p class="mt-2 text-sm text-zinc-400">Primary + secondary styles, consistent spacing.</p>
                    </div>
                    <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-5">
                        <p class="text-sm font-semibold">Layout</p>
                        <p class="mt-2 text-sm text-zinc-400">Centered container, responsive grid, clean nav.</p>
                    </div>
                </div>
            </section>

            <section id="docs" class="mt-16">
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-6">
                    <h3 class="text-lg font-semibold">Next step</h3>
                    <p class="mt-2 text-sm text-zinc-400">
                        Improve your /posts page UI using the same cards + spacing. If you want, paste your current
                        Post index Blade and I’ll redesign it to match this style.
                    </p>
                </div>
            </section>
        </main>

        <footer class="border-t border-zinc-800/70 bg-zinc-950/60">
            <div class="mx-auto max-w-6xl px-4 py-8 text-sm text-zinc-500">
                © {{ date('Y') }} {{ config('app.name', 'Laravel') }} — Built for your MVC assignment.
            </div>
        </footer>
    </div>
</body>
</html>
