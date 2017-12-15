<h1 style="color:red;">EVALUATION DWM8 :</h1>

<h3>Compte-rendu de mon application</h3>

Application de gestion de stock d'un magasin de musique.

Jeudi 14/12/2017 Matin :

- réalisation du css pour l'accueil.blade.php
- réalisation de la base de données et du Base Controller
- Création des Models
- CreateController fait ainsi que BaseController

Jeudi 14/12/2017  Après-midi :

- Réalisation des pages pour l'insertion (formulaire) et le tableau
- Réalisation des commandes pour l'insertion.

Problème rencontré :

Message d'erreur du type :
`SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravel.classification_instrument' doesn't exist (SQL: insert into `classification_instrument` (`classification_id`, `instrument_id`) values (2, 1))`

J'ai un petit soucis au niveau de l'insertion, cela donne l'erreur ci-dessus.
Mon tableau ne s'affiche pas aussi, car ça me met une autre erreur :

`"SQLSTATE[42S02]: Base table or view not found: 1146 Table 'laravel.classification_instrument' doesn't exist (SQL: select `classifications`.\*, `classification_instrument`.`instrument_id` as `pivot_instrument_id`, `classification_instrument`.`classification_id` as `pivot_classification_id` from `classifications` inner join `classification_instrument` on `classifications`.`id` = `classification_instrument`.`classification_id` where `classification_instrument`.`instrument_id` = 15) (View: /var/www/html/evallaravel/resources/views/table.blade.php)"`

J'ai fait le test du dd($request) ... toutes mes variables sont corrects sauf celle de classification et de color, car c'est justement ses deux variables qui mettent une erreur au niveau de l'insertion.
Rappel : L'insertion se passe correctement bien dans la base de données sauf au niveau de ma table instrument_classification et instrument_color.

J'ai réglé le soucis (de même que pour la variable "color") en faisant dans Instrument.php :

`return $this->belongsToMany('App\Classification', 'instrument_classification') ; (solution trouvée sur internet)`


- Création du delete et de l'update.



Vendredi 15/12/2017 Matin :

- Réalisation du CRUD terminé.

Soucis avec google. Mon projet ne voulait pas s'afficher (alors qu'hier tout était parfait). Sur Firefox il s'affiche assez bien.

J'ai créé la barre de recherche avec le Laravel collective. Je voulais faire en sorte que dès que l'on tape le N° du stock, la barre de recherche envoie sur la page de recherche l'instrument correspondant à ce numéro. Sauf que j'ai rencontré quelques difficultés à faire cette barre de recherche, j'ai essayé toutes les manières de la faire, voir toutes les documentations sur internet mais j'y suis pas arrivé. Je laisse quand même la barre de recherche dans l'application car cela prouve que j'ai pu faire ceci, mais que même si j'y suis pas arrivé, je n'ai jamais laissé tomber.


Vendredi 15/12/2017 Après-Midi :

Continuation sur la barre de recherche ... en vain même si je me suis battu pour savoir comment faire.

Finition du CSS.
