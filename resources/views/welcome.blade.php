<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jordan Partridge — software engineer, homelab operator. CLI tools, Laravel packages, and field notes from the machines that run them.">

    <title>Jordan Partridge — Software Engineer</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-serif-display:400,400i|ibm-plex-mono:400,500|karla:400,500" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="crt min-h-screen bg-burnt font-sans text-paper antialiased selection:bg-ember/30 selection:text-paper">

    {{-- Tungsten glow + background data artifacts --}}
    <div class="pointer-events-none fixed inset-0 overflow-hidden select-none" aria-hidden="true">
        <div class="absolute left-1/2 top-[-14rem] h-[36rem] w-[54rem] -translate-x-1/2 rounded-full bg-ember/[0.07] blur-[130px]"></div>
        <div class="absolute bottom-[-10rem] right-[-8rem] h-[26rem] w-[26rem] rounded-full bg-signal/[0.04] blur-[110px]"></div>

        <div class="artifact-drift absolute right-[5%] top-28 hidden text-right font-mono text-[10px] leading-[2.1] tracking-[0.15em] text-signal/[0.08] lg:block">
            [03:11:58] ash0: link up 2.5GbE<br>
            [03:12:04] zpool: scrub in progress, 61.3%<br>
            [03:12:31] sensors: intake 41.2°C, steady<br>
            [03:12:47] uptime: 412 days, 6:12<br>
            [03:13:29] signal: still here
        </div>
        <div class="artifact-drift absolute bottom-24 left-[4%] hidden font-mono text-[10px] leading-[2.1] tracking-[0.25em] text-signal/[0.06] lg:block" style="animation-delay: -45s">
            1A 16 13 C4 70 4B<br>
            F5 F0 E8 8B 86 80<br>
            D6 CF C4 E0 A4 58
        </div>
    </div>

    <div class="relative mx-auto flex min-h-screen max-w-3xl flex-col px-6 sm:px-8">

        <header class="ink-rise flex items-baseline justify-between border-b border-ash/15 py-8">
            <a href="/" class="font-mono text-xs uppercase tracking-[0.3em] text-smoke transition hover:text-ember-soft">
                jordanpartridge.us
            </a>
            <nav aria-label="Primary">
                <ul class="flex items-baseline gap-6 sm:gap-8">
                    <li><a href="#" class="font-mono text-xs uppercase tracking-[0.2em] text-ash transition hover:text-ember-soft">Writing</a></li>
                    <li><a href="#" class="font-mono text-xs uppercase tracking-[0.2em] text-ash transition hover:text-ember-soft">Projects</a></li>
                    <li><a href="#" class="font-mono text-xs uppercase tracking-[0.2em] text-ash transition hover:text-ember-soft">About</a></li>
                </ul>
            </nav>
        </header>

        <main class="flex-1">

            <section class="pb-20 pt-24 sm:pt-32">
                <p class="ink-rise font-mono text-xs tracking-[0.2em] text-ash" style="animation-delay: 120ms">
                    <span class="text-signal/70">jordan@homelab</span>:~$ whoami
                </p>
                <h1 class="ink-rise mt-6 font-display text-6xl leading-[1.02] sm:text-7xl" style="animation-delay: 240ms">
                    <span class="signal-degrade">Jordan<br>Partridge</span><span class="text-ember">.</span>
                </h1>
                <p class="ink-rise mt-8 max-w-xl text-lg leading-relaxed text-smoke sm:text-xl" style="animation-delay: 380ms">
                    Software engineer. Homelab operator. I build CLI tools and
                    Laravel packages — and run the machines they ship from.
                    The servers hum all night. Somebody has to listen.
                </p>
            </section>

            <section class="ink-rise border-t border-ash/15 py-16" style="animation-delay: 520ms">
                <h2 class="font-mono text-xs tracking-[0.2em] text-ember-soft">$ tail -n 2 /var/log/now</h2>
                <div class="mt-8 max-w-xl space-y-6 font-mono text-sm leading-[1.9] text-smoke/90">
                    <p>
                        Most tools here started as a 3 a.m. irritation and ended
                        as a package with a test suite. PHP and Laravel, mostly.
                        Open source when it earns it.
                    </p>
                    <p>
                        This site is the console. Writing, projects, field notes
                        from production. No feed. No noise. Signal only.
                    </p>
                </div>
            </section>

        </main>

        <footer class="ink-rise flex flex-col gap-2 border-t border-ash/15 py-10 sm:flex-row sm:items-baseline sm:justify-between" style="animation-delay: 640ms">
            <p class="font-mono text-xs tracking-[0.1em] text-ash">&copy; {{ date('Y') }} Jordan Partridge</p>
            <p class="font-mono text-xs tracking-[0.1em] text-signal/80">[03:12:47] ash.core: the ash is still paper <span class="text-signal/50">▌</span></p>
        </footer>

    </div>

</body>
</html>
