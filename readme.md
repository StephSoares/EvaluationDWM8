<h1>EVALUATION DWM8 :</h1>

Application de gestion de stock d'un magasin de musique.

Jeudi matin :

- réalisation du css pour l'accueil.blade.php
- réalisation de la base de données et du Base Controller
- Création des Models
- CreateController fait ainsi que BaseController

Jeudi Après-midi :

- Réalisation des pages pour l'insertion (formulaire) et le tableau
- Réalisation des commandes pour l'insertion.
Problème rencontré :

Message d'erreur du type :
"SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravel.classification_instrument' doesn't exist (SQL: insert into `classification_instrument` (`classification_id`, `instrument_id`) values (2, 1))"

J'ai un petit soucis au niveau de l'insertion, cela donne l'erreur ci-dessus.
Mon tableau ne s'affiche pas aussi car ça me met une autre erreur :

"SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravel.classification_instrument' doesn't exist (SQL: select `classifications`.\*, `classification_instrument`.`instrument_id` as `pivot_instrument_id`, `classification_instrument`.`classification_id` as `pivot_classification_id` from `classifications` inner join `classification_instrument` on `classifications`.`id` = `classification_instrument`.`classification_id` where `classification_instrument`.`instrument_id` = 15) (View: /var/www/html/evallaravel/resources/views/table.blade.php)"

J'ai fait le test du dd($request) ... toutes mes variables sont corrects sauf celle de classification et de color car c'est justement ses 2 variables qui mettent une erreur au niveau de l'insertion.
Rappel : L'insertion se passe correctement bien dans la base de données sauf au niveau de ma table instrument_classification et instrument_color.
