<?php

/*
|--------------------------------------------------------------------------
| Contenu du portfolio
|--------------------------------------------------------------------------
| Tout le texte du site se modifie ICI. Mets null pour masquer un lien.
*/

return [
    'name'       => 'Wilfried Kevin KAFFO FOMANO',
    'first_name' => 'Wilfried Kevin',
    'role'       => 'Ingénieur des travaux en Génie Logiciel',
    'headline'   => "À la recherche d'un emploi dans le secteur de l'informatique",
    'location'   => 'Yaoundé, Cameroun',

    'email'      => 'kaffowilfried@yahoo.com',
    'phone'      => '+237 6 95 88 73 85',
    'whatsapp'   => '237695887385',   // indicatif + numéro, sans « + » ni espaces
    'linkedin'   => null,             // ex. 'https://www.linkedin.com/in/ton-profil'
    'github'     => 'https://github.com/CloudyCloud54',

    'cv_file'    => 'cv/CV_Kaffo_Fomano_Wilfried_Kevin.pdf', // dans public/

    'meta_description' => "Portfolio de Wilfried Kevin KAFFO FOMANO, ingénieur des travaux en génie logiciel (IAI Cameroun) : applications web, paiement Mobile Money, bots et automatisation.",

    'about' => [
        "Ingénieur des travaux en génie logiciel, diplômé de l'IAI Cameroun en 2026, je conçois des applications web, des bots et des outils d'automatisation.",
        "Mes projets intègrent le paiement Mobile Money (Campay) et répondent à des besoins concrets du marché camerounais : réservation de vols, location de voitures et d'hôtels, outils de gestion.",
        "J'ai effectué deux stages académiques et je suis à la recherche d'un premier emploi dans le secteur de l'informatique.",
    ],

    'skills' => [
        'Langages'        => ['Python', 'Java', 'JavaScript', 'Dart', 'C', 'HTML', 'CSS'],
        'Frameworks'      => ['Django', 'Flask', 'FastAPI', 'Laravel', 'Express', 'Flutter'],
        'Bases de données' => ['MySQL', 'PostgreSQL', 'SQLite', 'Firebase'],
        'Outils'          => ['Git / GitHub', 'Playwright', 'Photoshop'],
        'Bureautique'     => ['Word', 'Excel', 'IC3 (formation complète)'],
    ],

    // 'demo' et 'github' : mets une URL ou laisse null. 'image' : fichier dans public/images/projects/
    'projects' => [
        [
            'name'    => 'AirCloudy',
            'type'    => 'Réservation de vols',
            'summary' => "Application web de réservation de vols avec paiement Mobile Money (Campay), génération du billet en PDF et tableaux de bord administrateur et client.",
            'stack'   => ['Django', 'PostgreSQL', 'Campay', 'PDF'],
            'demo'    => null,
            'github'  => null,
            'image'   => null,
        ],
        [
            'name'    => 'RentCloudy',
            'type'    => "Location de voitures et d'hôtels",
            'summary' => "Plateforme de location de voitures et d'hôtels avec authentification sécurisée (JWT) et paiements par Stripe et Campay.",
            'stack'   => ['Node.js', 'Express', 'SQLite', 'JWT', 'Stripe', 'Campay'],
            'demo'    => null,
            'github'  => 'https://github.com/CloudyCloud54/RentCloudy',
            'image'   => null,
        ],
        [
            'name'    => 'Bots Telegram',
            'type'    => 'Bot public et bot admin',
            'summary' => "Un bot public pour les utilisateurs et un bot d'administration pour piloter le service, tous deux en production.",
            'stack'   => ['Python', 'SQLite', 'Telegram'],
            'demo'    => null,
            'github'  => null,
            'image'   => null,
        ],
        [
            'name'    => 'SawaTrust',
            'type'    => "Automatisation d'inscriptions",
            'summary' => "Outil d'automatisation qui inscrit des entreprises sur une plateforme grâce à un navigateur piloté par script, avec l'aide d'un modèle Ollama.",
            'stack'   => ['Python', 'Playwright', 'Ollama'],
            'demo'    => null,
            'github'  => null,
            'image'   => null,
        ],
        [
            'name'    => 'Todo list',
            'type'    => 'Gestion de tâches',
            'summary' => "Application de gestion de tâches.",
            'stack'   => [],
            'demo'    => null,
            'github'  => null,
            'image'   => null,
        ],
    ],

    // Ajoute 2 ou 3 réalisations par stage dans 'details' : c'est ce que lisent les recruteurs.
    'experience' => [
        [
            'period'  => 'Juillet – Septembre 2025/2026',
            'title'   => 'Stage académique',
            'place'   => 'ETS FOUDJIZSERVICES',
            'details' => [],
        ],
        [
            'period'  => 'Juillet – Octobre 2024/2025',
            'title'   => 'Stage académique',
            'place'   => 'ETS FOUDJIZSERVICES',
            'details' => [],
        ],
    ],

    'education' => [
        ['period' => '2026',      'title' => 'Ingénieur des travaux en Génie Logiciel', 'place' => 'IAI Cameroun, Yaoundé'],
        ['period' => '2025',      'title' => 'Diplôme de Technicien Supérieur (DTS)',   'place' => 'IAI Cameroun, Yaoundé'],
        ['period' => '2022–2023', 'title' => 'Baccalauréat',                             'place' => null],
        ['period' => '2020–2021', 'title' => 'Probatoire',                               'place' => null],
    ],

    'languages' => [
        ['name' => 'Français', 'level' => 'Courant'],
        ['name' => 'Anglais',  'level' => 'Intermédiaire'],
    ],

    'interests' => ['Meetups tech', 'Programmation', 'Intelligence artificielle', 'Maintenance', 'Réseau'],
];
