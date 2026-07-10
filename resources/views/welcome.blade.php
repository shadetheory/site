<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jordan Partridge — software engineer and Laravel artisan. Packages, tools, and field notes from production.">

    <title>Jordan Partridge — Software Engineer</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-serif-display:400,400i|ibm-plex-mono:400|karla:300,400,500" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="paper-grain min-h-screen bg-burnt font-sans font-light text-paper antialiased selection:bg-ember/30 selection:text-paper">

    {{-- Candlelight: diffused warm glows, no hard shadows --}}
    <div class="pointer-events-none fixed inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute left-1/2 top-[-14rem] h-[36rem] w-[54rem] -translate-x-1/2 rounded-full bg-ember/[0.06] blur-[130px]"></div>
        <div class="absolute bottom-[-10rem] right-[-8rem] h-[26rem] w-[26rem] rounded-full bg-ember-soft/[0.04] blur-[110px]"></div>
    </div>

    <div class="relative mx-auto flex min-h-screen max-w-3xl flex-col px-6 sm:px-8">

        <header class="ink-rise flex items-baseline justify-between border-b border-ash/15 py-8">
            <a href="/" class="font-mono text-xs uppercase tracking-[0.3em] text-smoke transition hover:text-ember">
                jordanpartridge.us
            </a>
            <nav aria-label="Primary">
                <ul class="flex items-baseline gap-6 sm:gap-8">
                    <li><a href="#" class="font-mono text-xs uppercase tracking-[0.2em] text-ash transition hover:text-ember">Writing</a></li>
                    <li><a href="#" class="font-mono text-xs uppercase tracking-[0.2em] text-ash transition hover:text-ember">Projects</a></li>
                    <li><a href="#" class="font-mono text-xs uppercase tracking-[0.2em] text-ash transition hover:text-ember">About</a></li>
                </ul>
            </nav>
        </header>

        <main class="flex-1">

            <section class="pb-20 pt-24 sm:pt-32">
                <p class="ink-rise font-mono text-xs uppercase tracking-[0.35em] text-ash" style="animation-delay: 120ms">
                    Software engineer
                </p>
                <h1 class="ink-rise mt-6 font-display text-6xl leading-[1.02] text-paper sm:text-7xl" style="animation-delay: 240ms">
                    Jordan<br>Partridge<span class="text-ember">.</span>
                </h1>
                <p class="ink-rise mt-8 max-w-xl text-lg leading-relaxed text-smoke sm:text-xl" style="animation-delay: 380ms">
                    Laravel artisan. I build packages and tools that do their
                    work quietly — and keep doing it long after the excitement
                    of shipping fades.
                </p>
            </section>

            <section class="ink-rise border-t border-ash/15 py-16" style="animation-delay: 520ms">
                <h2 class="font-mono text-xs uppercase tracking-[0.35em] text-ember/90">Now</h2>
                <div class="mt-8 max-w-xl space-y-6 text-base leading-[1.75] text-smoke/90">
                    <p>
                        Most of what I make starts as a small irritation — a task
                        done twice, a seam that doesn't quite close — and ends as
                        a package with a readme and a test suite. PHP and Laravel,
                        mostly. Open source when it deserves to be.
                    </p>
                    <p>
                        This site is the notebook. Writing, projects, the
                        occasional field note from production. It's quiet here
                        on purpose.
                    </p>
                </div>
            </section>

        </main>

        <footer class="ink-rise flex flex-col gap-2 border-t border-ash/15 py-10 sm:flex-row sm:items-baseline sm:justify-between" style="animation-delay: 640ms">
            <p class="text-sm text-ash">&copy; {{ date('Y') }} Jordan Partridge</p>
            <p class="font-mono text-xs tracking-[0.2em] text-ash/70">the ash is still paper</p>
        </footer>

    </div>

</body>
</html>
