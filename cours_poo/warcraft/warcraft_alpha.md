# POO : Programmation Orientée Objet

Vous allez commencer à créer un script de combat entre un Orc et un Héros en PHP !  
Le principe est simple : l'Orc attaque le Héros de façon répétée et le Héros contre attaque. Qui gagnera ? ;)

## Exercice 1

Créer un fichier **Character.php**, dans ce fichier créer une classe **Character** ayant pour attributs **health** et **rage**.  
Les attributs ne doivent être accessibles **pour personne !**

## Exercice 2

Créer les **méthodes** permettant d'accéder aux attributs de la classe **Character** et permettant également de les définir.

## Exercice 3

Créer la **méthode magique construct** de la classe **Character**.  
Celle-ci doit permettre la création d'un nouveau personnage et doit donc définir les valeurs de **health** et de **rage**.

## Exercice 4

Dans un nouveau fichier **Hero.php**, créer la classe **Hero héritant de Character** et ayant pour attributs **weapon**, **weaponDamage**, **shield** et **shieldValue**.  

* L'attribut **weapon** permettra de définir le nom de l'arme équipée,  
* **weaponDamage** indiquera les dégâts basiques de l'arme,  
* **shield** définira le nom du bouclier équipée,
* **shieldValue** idiquera la nombre de dégâts que le bouclier encaisse à la place du héros.  

Les attributs ne doivent être accessibles **pour personne !**

## Exercice 5

Créer les **méthodes** permettant d'accéder aux attributs de la classe **Hero** et permettant également de les définir.

## Exercice 6

Créer la **méthode magique construct** de la classe **Hero**.  
Cette méthode devra permettre le déclenchement de la **méthode construct de la classe mère (Character)** et devra également permettre de défnir les valeurs de **weapon**, **weaponDamage**, **shield** et **shieldValue**.  
**Pour finir**, cette méthode doit **retourner** une phrase contenant toutes les informations sur le Héros nouvellement créé.

## Exercice 7

Créer une **méthode attacked** dans la classe **Hero** permettant au Héros de prendre des dégâts **en considérant la valeur du bouclier**.

## Exercice 8

Pour chaque coup reçu, il faudra faire gagner de la rage à notre Héros.  
Créer une méthode permettant d'augmenter la valeur de **rage** de 30.

## Exercice 9

Dans un nouveau fichier **Orc.php**, créer la classe **Orc héritant de Character** et ayant pour attribut **damage**.  
Cet attribut ne doit être accessible **pour personne !**

## Exercice 10

Créer les **méthodes** permettant d'accéder aux attributs de la classe **Orc** et permettant également de les définir.

## Exercice 11

Créer la **méthode magique construct** de la classe **Orc**.  
Cette méthode devra permettre le déclenchement de la **méthode construct de la classe mère (Character)**.  
Elle doit **retourner** une phrase contenant toutes les informations sur l'Orc nouvellement créé.

## Exercice 12

Créer une **méthode attack** dans la classe **Orc** permettant d'initialiser la valeur de **damage** avec un nombre aléatoire compris entre 600 et 800.

## Exercice 13

Créer un fichier **index.php** sur lequel devront être appelés les fichiers **Character.php**, **Hero.php** et **Orc.php**.  
Sur ce fichier, créer 2 objets :

* **hero**, faisant appel à la classe Hero, celui-ci doit avoir 2000 points de vie, 0 points de rage, 600 points d'armure, 100 points de dégâts pour l'arme, les noms de l'arme et de l'armure vous revient,
* **orc**, faisant appel à la classe Orc, celui-ci doit avoir 500 points de vie et 0 points de rage.

## Application = Combat

Faites attaquer l'Orc **1 fois.**  
Pour chaque attaque de l'Orc, une phrase contenant toutes les informations de l'assaut doit être affichée (dégâts de l'Orc, dégâts absorbés par le bouclier, dégâts non absorbés, rage actuelle du Héros et santé restante du Héros).

Faites attaquer le Hero **1 fois**, idem que pour l'Orc, affichez les infos de la même manière :).

## BONUS

Faites vous plaisir : Let's fight ! Faire une boucle pour qu'ils combattent enfin :D.
