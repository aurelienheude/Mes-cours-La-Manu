//PARTIE1
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1-Créer une base de données languages.
mysql> CREATE DATABASE languages;
Query OK, 1 row affected (0.00 sec)

//ex2-Créer une base de données webDevelopment avec l’encodage UTF-8.
mysql> CREATE DATABASE webDevelopment CHARACTER SET utf8;
Query OK, 1 row affected (0.00 sec)

//ex3-Créer une base de données frameworks avec l’encodage UTF-8 si elle n’existe pas.
mysql> CREATE DATABASE IF NOT EXISTS frameworks CHARACTER SET utf8;
Query OK, 1 row affected (0.00 sec)

//ex4-Créer une base de données languages avec l’encodage UTF-8 si elle n’existe pas.
mysql> CREATE DATABASE IF NOT EXISTS languages CHARACTER SET utf8;
Query OK, 1 row affected, 1 warning (0.00 sec)

//ex5-Supprimer la base de données languages.
mysql> DROP DATABASE languages;
Query OK, 0 rows affected (0.01 sec)

//ex6-Supprimer la base de données frameworks si elle existe.
mysql> DROP DATABASE IF EXISTS frameworks;
Query OK, 0 rows affected (0.00 sec)

//ex7-Supprimer la base de données languages si elle existe.
mysql> DROP DATABASE IF EXISTS languages;
Query OK, 0 rows affected, 1 warning (0.00 sec)

//PARTIE2
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1
//Dans la base de données webDevelopment, créer la table languages avec les colonnes :
//id (type INT, auto-incrémenté, clé primaire)
//language (type VARCHAR)

mysql> USE webdevelopment;
Database changed
mysql> CREATE TABLE languages (id INT PRIMARY KEY AUTO_INCREMENT, languages VARCHAR(100));
Query OK, 0 rows affected (0.01 sec)


//ex2
//Dans la base de données webDevelopment, créer la table tools avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//tool (type VARCHAR)

mysql> CREATE TABLE tool (id INT PRIMARY KEY AUTO_INCREMENT, tool VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)


//ex3
//Dans la base de données webDevelopment, créer la table frameworks avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//name (type VARCHAR)

mysql> CREATE TABLE frameworks (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)


//ex4
//Dans la base de données webDevelopment, créer la table libraries avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//library (type VARCHAR)

mysql> CREATE TABLE libraries (id INT PRIMARY KEY AUTO_INCREMENT, library VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)


//ex5
//Dans la base de données webDevelopment, créer la table ide avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//ideName (type VARCHAR)

mysql> CREATE TABLE ide (id INT PRIMARY KEY AUTO_INCREMENT, ideName VARCHAR(100));
Query OK, 0 rows affected (0.00 sec)


//ex6
//Dans la base de données webDevelopment, créer, si elle n'existe pas, la table frameworks avec les colonnes suivantes :
//id (type INT, auto-incrémenté, clé primaire)
//name (type VARCHAR)

mysql> CREATE TABLE IF NOT EXISTS frameworks (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100));
Query OK, 0 rows affected, 1 warning (0.00 sec)

//ex7-Supprimer la table tools si elle existe.
mysql> DROP TABLE IF EXISTS tool;
Query OK, 0 rows affected (0.00 sec)

//ex8-Supprimer la table libraries.
mysql> DROP TABLE libraries;
Query OK, 0 rows affected (0.00 sec)

//ex9-Supprimer la table ide.
mysql> DROP TABLE ide;
Query OK, 0 rows affected (0.00 sec)

//TP-Creer une table.
mysql> CREATE DATABASE codex;
Query OK, 1 row affected (0.00 sec)

mysql> USE CODEX
Database changed

mysql> CREATE TABLE clients (
    -> id INT PRIMARY KEY AUTO_INCREMENT,
    -> lastname VARCHAR(100),
    -> firstname VARCHAR(100),
    -> birthDate DATE,
    -> address VARCHAR(100),
    -> firstPhoneNumber INT,
    -> secondPhoneNumber INT,
    -> mail VARCHAR(100));
Query OK, 0 rows affected (0.01 sec)

//PARTIE3
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1-Dans la base de données webDevelopment, ajouter à la table languages une colonne versions (VARCHAR).
mysql> use webdevelopment
Database changed
mysql> ALTER TABLE languages
    -> ADD versions VARCHAR(100);
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0

//ex2-Dans la base de données webDevelopment, ajouter à la table frameworks une colonne version (INT).
mysql> ALTER TABLE frameworks
    -> ADD versions INT;
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0

//ex3-Dans la base de données webDevelopment, dans la table languages renommer la colonne versions en version.
mysql> ALTER TABLE frameworks
    -> CHANGE versions version INT;
Query OK, 0 rows affected (0.00 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0

//ex4-Dans la base de données webDevelopment, dans la table frameworks, renommer la colonne name en framework.
mysql> ALTER TABLE frameworks
    -> CHANGE name frameworks VARCHAR(100);
Query OK, 0 rows affected (0.00 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0

//ex5-Dans la base de données webDevelopment, dans la table frameworks changer le type de la colonne version en VARCHAR de taille 10.
mysql> ALTER TABLE frameworks
    -> MODIFY version VARCHAR(10);
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0

//TP
mysql> USE codex;
Database changed
ALTER TABLE clients DROP COLUMN secondPhoneNumber;
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0
ALTER TABLE clients CHANGE firstPhoneNumber phoneNumber INT;
Query OK, 0 rows affected (0.00 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0
ALTER TABLE clients MODIFY phoneNumber VARCHAR(10);
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0
ALTER TABLE clients ADD zipCode VARCHAR(100);
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0
ALTER TABLE clients ADD city VARCHAR(100);
Query OK, 0 rows affected (0.01 sec)
Enregistrements: 0  Doublons: 0  Avertissements: 0



//PARTIE4
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//ex1
INSERT INTO languages (languages,versions)
VALUES
('javascript', 'version 5'),
('php', 'version5.2'),
('html', 'version5.4'),
('javascript', 'version 6'),
('javascript', 'version 7'),
('javascript', 'version 8'),
('php', 'version 7');

//ex2
INSERT INTO frameworks (frameworks,version)
VALUES
('Symfony', 'version 2.8'),
('Symfony', 'version 3'),
('Jquery', 'version 1.6'),
('Jquery','version 2.10');

//PARTIE5
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

On va register en .SQL POUR LA SUITE. PARCE QUE.

//Ex 1
SELECT * FROM languages;

//Ex 2
SELECT * FROM languages WHERE languages='PHP';

//ex3
SELECT * FROM languages WHERE (languages='php' OR languages='javascript');

//Ex4
SELECT * FROM languages WHERE id IN ('3','5','7');

//Ex5
SELECT * FROM languages WHERE languages='javascript' LIMIT 2;

//Ex6
SELECT * FROM languages WHERE languages!='php'; 

//Ex7
SELECT * FROM languages ORDER BY languages;


//PARTIE6
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//Ex1
SELECT * FROM ide WHERE version LIKE '3.%';

//Ex2
SELECT * FROM ide WHERE id='1' OR id='3';

//Ex3
SELECT * FROM ide WHERE ide.date BETWEEN '2010-01-01' AND '2011-12-31';



//PARTIE7
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//Ex1
DELETE FROM languages WHERE languages='HTML';
SELECT * FROM languages;

//Ex2
UPDATE frameworks
SET frameworks = 'symfony2' WHERE frameworks='symfony';

//Ex3
UPDATE languages SET versions='5.1' WHERE languages='javascript' AND versions='version 5';
SELECT * FROM languages;

//PARTIE8
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

//Ex1
SELECT * FROM languages LEFT JOIN frameworks ON languages.id = frameworks.languagesId;

//Ex2
SELECT * FROM languages RIGHT JOIN frameworks ON languages.id = frameworks.languagesId;

//Ex3
SELECT languages.name,COUNT(*) FROM languages LEFT JOIN frameworks ON languages.id = frameworks.languagesId GROUP BY languages.name;

//Ex4
SELECT languages.name,COUNT(*) FROM languages LEFT JOIN frameworks ON languages.id = frameworks.languagesId  GROUP BY languages.name HAVING COUNT(*)>3 ORDER BY COUNT(*) DESC ;

//PARTIE8
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------
//Ex1
SELECT * FROM employees;

//Ex2->Ex6
C'est pareil, flemme.
//Ex7
SELECT * FROM departments WHERE dept_name LIKE "%en%";
//Ex8
SELECT DISTINCT title FROM titles ORDER BY title;
//Ex10
SELECT COUNT(*) FROM departments;
//Ex11
SELECT COUNT(*) FROM departments WHERE dept_name LIKE "%en%";