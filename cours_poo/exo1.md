# POO

> Découverte de la Programmation Orientée Objet  

Pour la réalisation de vos diagrammes de classe, il faudra au préalable installer :  

* **StarUML** ( http://staruml.io/download ).  

***Penser à respecter l'utilisation de l'anglais dans tous les exercices.***  
***Pour les exercices, les attributs seront de type PRIVATE et les méthodes seront de type PUBLIC.***  

> **CONCEPTION/CREATION** : Commençons par une petite introduction simple via un diagramme de classes et une petite notion d'héritage ;)

## Exercice 1
Sous ***StarUML***, créer la classe : **Employé**.  

Un **Employé** aura comme attributs :
* un **nom** de type *string*.
* un **prénom** de type *string*.
* un **salaire** de type *integer*.

## Exercice 2
Sous ***StarUML***, rajouter à la classe : **Employé**, la méthode suivante :
* **travailler**.

## Exercice 3
Sous ***StarUML***, créer la classe : **Cadre** qui hérite de la classe **Employé**.  

Un **Cadre** aura comme attribut :
* une **prime** de type *integer*.

## Exercice 4
Sous ***StarUML***, rajouter à la classe : **Cadre**, la méthode suivante :
* **avoir des responsabilités**.

## Exercice 5
Sous ***StarUML***, dans **Tools**, rajouter l'extension **PHP** puis générer les 2 classes :
- **Employé.php**
- **Cadre.php**