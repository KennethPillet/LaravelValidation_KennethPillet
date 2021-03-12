Laravel Validation de KennethPillet


Veuillez récuperez seulement le dossier bandeDessinees dans data (data/bandeDessinees)
Ouvrez phpMyAdmin et Créer une base de données du meme nom (bandeDessinees)

Dans le dossier copier le fichier .env.example (renommez le .env)
Changer le DB_PORT  Par le Numéro qui correspond à votre environnement de travail (MAMP, XAMP, etc...)

DB_DATABASE, DB_USERNAME, DB_PASSWORD sont déja configurer.

Ensuite ouvrez un terminal à partir du dossier récupérer
Copier/Coller cette commande sur votre terminal -> php artisan migrate:fresh --seed
Enfin lancer le serveur -> php artisan serve

url: http://127.0.0.1:8000/