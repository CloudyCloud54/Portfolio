<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $p['name'] }} — {{ $p['role'] }}</title>
    <meta name="description" content="{{ $p['meta_description'] }}">
    <meta name="theme-color" content="#0b1220">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $p['name'] }} — {{ $p['role'] }}">
    <meta property="og:description" content="{{ $p['meta_description'] }}">
    <meta property="og:image" content="{{ asset('images/photo.png') }}">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%232563eb'/%3E%3Ctext x='32' y='42' font-size='28' font-family='Arial' font-weight='700' text-anchor='middle' fill='white'%3EWK%3C/text%3E%3C/svg%3E">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script>
        document.documentElement.classList.add('js');
        try { var t = localStorage.getItem('theme'); if (t) { document.documentElement.dataset.theme = t; } } catch (e) {}
    </script>
</head>
<body>

<header class="nav" id="top">
    <div class="container nav__inner">
        <a class="nav__brand" href="{{ route('home') }}">WK<span>.</span></a>
        <nav class="nav__links" id="menu" aria-label="Navigation principale">
            <a href="#apropos">À propos</a>
            <a href="#competences">Compétences</a>
            <a href="#projets">Projets</a>
            <a href="#parcours">Parcours</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="nav__actions">
            <button class="icon-btn" id="theme-toggle" type="button" aria-label="Changer de thème">◐</button>
            <button class="icon-btn nav__burger" id="burger" type="button" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
        </div>
    </div>
</header>

<main>

    <section class="hero">
        <div class="container hero__inner">
            <div class="hero__text">
                <p class="eyebrow">Bonjour, je suis</p>
                <h1>{{ $p['name'] }}</h1>
                <p class="hero__role">{{ $p['role'] }}</p>
                <p class="hero__headline">{{ $p['headline'] }}</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('cv') }}">Télécharger mon CV</a>
                    <a class="btn btn--ghost" href="#contact">Me contacter</a>
                </div>
                <p class="hero__loc">📍 {{ $p['location'] }}</p>
                @if(!empty($p['github']))
                <a class="hero__social" href="{{ $p['github'] }}" target="_blank" rel="noopener" aria-label="Mon profil GitHub">
                    <svg class="icon" viewBox="0 0 16 16" width="20" height="20" aria-hidden="true" fill="currentColor"><path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"/></svg>
                    <span>GitHub</span>
                </a>
                @endif
            </div>
            <div class="hero__photo">
                <img src="{{ asset('images/photo.png') }}" alt="Portrait de {{ $p['first_name'] }}" width="300" height="300">
            </div>
        </div>
        <div class="container">
            <ul class="stats">
                @foreach($stats as $s)
                <li><strong>{{ $s['value'] }}</strong><span>{{ $s['label'] }}</span></li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="section" id="apropos">
        <div class="container">
            <h2 class="section__title">À propos</h2>
            <div class="about">
                <div class="about__text">
                    @foreach($p['about'] as $para)
                    <p>{{ $para }}</p>
                    @endforeach
                </div>
                <aside class="card about__facts">
                    <h3>En bref</h3>
                    <dl>
                        <dt>Localisation</dt><dd>{{ $p['location'] }}</dd>
                        <dt>Diplôme</dt><dd>{{ $p['role'] }} (2026)</dd>
                        <dt>Langues</dt>
                        <dd>
                            @foreach($p['languages'] as $lang)
                            {{ $lang['name'] }} ({{ $lang['level'] }})<br>
                            @endforeach
                        </dd>
                    </dl>
                </aside>
            </div>
        </div>
    </section>

    <section class="section section--alt" id="competences">
        <div class="container">
            <h2 class="section__title">Compétences</h2>
            <div class="skills">
                @foreach($p['skills'] as $group => $items)
                <div class="card skills__group">
                    <h3>{{ $group }}</h3>
                    <ul class="chips">
                        @foreach($items as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section" id="projets">
        <div class="container">
            <h2 class="section__title">Projets</h2>
            <div class="projects">
                @foreach($p['projects'] as $project)
                <article class="card project">
                    @if(!empty($project['image']))
                    <img class="project__img" src="{{ asset('images/projects/'.$project['image']) }}" alt="Capture de {{ $project['name'] }}" loading="lazy">
                    @else
                    <div class="project__img project__img--placeholder" aria-hidden="true"><span>0{{ $loop->iteration }}</span></div>
                    @endif
                    <div class="project__body">
                        <p class="project__type">{{ $project['type'] }}</p>
                        <h3>{{ $project['name'] }}</h3>
                        <p>{{ $project['summary'] }}</p>
                        @if(!empty($project['stack']))
                        <ul class="chips chips--small">
                            @foreach($project['stack'] as $tag)
                            <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                        @endif
                        @if(!empty($project['demo']) || !empty($project['github']))
                        <p class="project__links">
                            @if(!empty($project['demo']))
                            <a href="{{ $project['demo'] }}" target="_blank" rel="noopener">Voir la démo →</a>
                            @endif
                            @if(!empty($project['github']))
                            <a href="{{ $project['github'] }}" target="_blank" rel="noopener">Code source →</a>
                            @endif
                        </p>
                        @endif
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--alt" id="parcours">
        <div class="container">
            <h2 class="section__title">Parcours</h2>
            <div class="journey">
                <div>
                    <h3 class="journey__heading">Expérience</h3>
                    <ol class="timeline">
                        @foreach($p['experience'] as $job)
                        <li>
                            <span class="timeline__date">{{ $job['period'] }}</span>
                            <strong>{{ $job['title'] }}</strong>
                            <span class="timeline__place">{{ $job['place'] }}</span>
                            @if(!empty($job['details']))
                            <ul class="timeline__details">
                                @foreach($job['details'] as $d)
                                <li>{{ $d }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ol>
                </div>
                <div>
                    <h3 class="journey__heading">Formation</h3>
                    <ol class="timeline">
                        @foreach($p['education'] as $e)
                        <li>
                            <span class="timeline__date">{{ $e['period'] }}</span>
                            <strong>{{ $e['title'] }}</strong>
                            @if(!empty($e['place']))
                            <span class="timeline__place">{{ $e['place'] }}</span>
                            @endif
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <h3 class="journey__heading journey__heading--spaced">Centres d'intérêt</h3>
            <ul class="chips">
                @foreach($p['interests'] as $i)
                <li>{{ $i }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <h2 class="section__title">Contact</h2>
            <p class="contact__lead">Disponible pour un premier emploi dans le secteur de l'informatique. Écris-moi, je réponds rapidement.</p>
            <div class="contact">
                <a class="card contact__item" href="mailto:{{ $p['email'] }}">
                    <span class="contact__label">Email</span>
                    <strong>{{ $p['email'] }}</strong>
                </a>
                <a class="card contact__item" href="https://wa.me/{{ $p['whatsapp'] }}" target="_blank" rel="noopener">
                    <span class="contact__label">WhatsApp</span>
                    <strong>{{ $p['phone'] }}</strong>
                </a>
                @if(!empty($p['linkedin']))
                <a class="card contact__item" href="{{ $p['linkedin'] }}" target="_blank" rel="noopener">
                    <span class="contact__label">LinkedIn</span>
                    <strong>Voir mon profil</strong>
                </a>
                @endif
                @if(!empty($p['github']))
                <a class="card contact__item" href="{{ $p['github'] }}" target="_blank" rel="noopener">
                    <span class="contact__label"><svg class="icon" viewBox="0 0 16 16" width="20" height="20" aria-hidden="true" fill="currentColor"><path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"/></svg> GitHub</span>
                    <strong>Voir mes dépôts</strong>
                </a>
                @endif
                <a class="card contact__item" href="{{ route('cv') }}">
                    <span class="contact__label">CV</span>
                    <strong>Télécharger (PDF)</strong>
                </a>
            </div>
        </div>
    </section>

</main>

<footer class="footer">
    <div class="container footer__inner">
        <span>© {{ date('Y') }} {{ $p['name'] }}</span>
        <a href="#top">Haut de page ↑</a>
    </div>
</footer>

<script src="{{ asset('js/portfolio.js') }}" defer></script>
</body>
</html>
