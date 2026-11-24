# Portfolio Laravel : installation

## 1. Créer le projet Laravel (PHP 8.2+ et Composer requis)
    composer create-project laravel/laravel portfolio
    cd portfolio

## 2. Copier les fichiers de ce zip dans le projet (accepte le remplacement de routes/web.php)
    app/  config/  resources/  routes/  public/

## 3. Éviter la base de données (le site n'en a pas besoin) : dans .env
    SESSION_DRIVER=file
    CACHE_STORE=file

## 4. Lancer
    php artisan serve
    -> http://127.0.0.1:8000

## 5. Personnaliser
- Tout le texte : config/portfolio.php (liens LinkedIn, détails des stages, démo/GitHub de chaque projet).
- Captures d'écran : public/images/projects/aircloudy.png puis 'image' => 'aircloudy.png' dans le projet.
- CV PDF : public/cv/CV_Kaffo_Fomano_Wilfried_Kevin.pdf (remplace-le si tu modifies ton CV).

## 6. Mise en ligne (Hostinger ou autre)
- Le domaine doit pointer vers le dossier public/.
- .env : APP_ENV=production, APP_DEBUG=false, APP_URL=https://ton-domaine
- Puis : php artisan config:cache && php artisan route:cache
