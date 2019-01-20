# 4.1 Fonctions prédéfinies

<br>
>Il existe de nombreuses fonctions prévues dans le langage SQL permettant de manipuler des données.

<br><br>
## Fonctions retournant des informations sur le SGBD
<br>
`DATABASE()` : Retourne le nom de la base de données actuellement sélectionnée.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT DATABASE();</code> | <code class="prettyprint full">"bibliotheque"</code> |

<br>
`VERSION()` : Retourne la version de **MySQL**.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT VERSION();</code> | <code class="prettyprint full">"10.1.30-MariaDB"</code> |

<br>
`LAST_INSERT_ID()` : Retourne le 1er **ID** de la dernière requête `INSERT`.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT LAST_INSERT_ID();</code> | <code class="prettyprint full">5</code> |

<br><br>
## Fonctions sur la date et l'heure
<br>
`DATE_ADD()` : Ajoute des **jours** (`DAY`), **semaines** (`WEEK`), **mois** (`MONTH`) ou **années** (`YEAR`) à une date.
><i class="fas fa-info-circle"></i> Fonctions inverse : `DATE_SUB()`

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT DATE_ADD('2018-09-01', INTERVAL 2 WEEK);</code> | <code class="prettyprint full">"2018-09-15"</code> |

<br>
`CURDATE()` : Retourne la date du jour.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT CURDATE();</code> | <code class="prettyprint full">"2018-09-01"</code> |

<br>
`CURTIME()` : Retourne l'heure courante.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT CURTIME();</code> | <code class="prettyprint full">"09:15:18"</code> |

<br>
`DATE_FORMAT()` : Formatte la date et l'heure dans le format indiqué.
><i class="fas fa-info-circle"></i> [Liste des **spécificateurs de format**](https://dev.mysql.com/doc/refman/5.5/en/date-and-time-functions.html#function_date-format)

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT DATE_FORMAT('2018-09-01 09:15:18', '%d/%m/%Y - %H:%i:%s');</code> | <code class="prettyprint full">"01/09/2018 - 09:15:18"</code> |

<br>
`DATEDIFF()` : Calcule la différence (nombre de jours) entre 2 dates.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT DATEDIFF('2018-09-15', 2018-09-01);</code> | <code class="prettyprint full">14</code> |

<br>
`DAYNAME()` : Retourne le nom du jour de la semaine.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT DAYNAME('2018-09-01');</code> | <code class="prettyprint full">"Saturday"</code> |

<br>
`DAYOFYEAR()` : Retourne le numéro du jour de l'année.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT DAYOFYEAR('2018-09-01');</code> | <code class="prettyprint full">244</code> |

<br>
`NOW()` : Retourne la date et l'heure courante.
><i class="fas fa-info-circle"></i> Utilisable même lorsque vous n'avez besoin que de la date/l'heure.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT NOW();</code> | <code class="prettyprint full">"2018-09-01 09:15:18"</code> |

<br><br>
## Fonctions sur les chaînes de caractères
<br>
`CONCAT()` : Concatène des chaînes de caractères (les met bout-à-bout).

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT CONCAT('a', 'b', 'c');</code> | <code class="prettyprint full">"abc"</code> |

<br>
`CONCAT_WS()` : Concatène avec un **séparateur** (*"CONCAT With Separator"*).

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT CONCAT_WS('-', 'a', 'b', 'c');</code> | <code class="prettyprint full">"a-b-c"</code> |

<br>
`LENGTH()` : Retourne la taille d'une chaîne de caractères.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT LENGTH('abc');</code> | <code class="prettyprint full">3</code> |

<br>
`LOCATE()` : Retourne la position d'une *"sous-chaîne"* dans une chaîne de caractères.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT LOCATE('b', 'abc');</code> | <code class="prettyprint full">2</code> |

<br>
`REPLACE()` : Remplace une *"sous-chaîne"* par une autre dans une chaîne de caractères.

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT REPLACE('Bonjour', 'o', '0');</code> | <code class="prettyprint full">"B0nj0ur"</code> |

<br>
`SUBSTRING()` : Retourne *"sous-chaîne"* à partir d'une position indiquée, d'une longueur indiquée, dans une chaîne de caractères.
><i class="fas fa-info-circle"></i> Peut s'écrire `SUBSTR()`.
><i class="fas fa-info-circle"></i> Utilisations possibles
>
| <code class="prettyprint full">SUBSTR(chaine, debut)</code> | <code class="prettyprint full">SUBSTR(chaine, debut, taille)</code> | <code class="prettyprint full">SUBSTR(chaine, FROM debut)</code> | <code class="prettyprint full">SUBSTR(chaine, FROM debut FOR taille)</code> |
|---|---|---|---|

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT SUBSTRING('abcdefghi', -5, 3);</code> | <code class="prettyprint full">"efg"</code> |

<br>
`TRIM()` : Retires les espaces au début et à la fin d'une chaîne de caractères.
><i class="fas fa-info-circle"></i> Retirer seulement à gauche : `LTRIM()`
><i class="fas fa-info-circle"></i> Retirer seulement à droite : `RTRIM()`

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT TRIM('   abc   ');</code> | <code class="prettyprint full">"abc"</code> |

<br>
`UPPER()` : Met les caractères d'une chaîne en majuscules.
><i class="fas fa-info-circle"></i> Fonction inverse : `LOWER()`

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT UPPER('abc');</code> | <code class="prettyprint full">"ABC"</code> |

<br><br>
## Fonction de comparaison

`COALESCE` : Retourne la première valeur non-nulle d'une liste

| Exemple d'utilisation | Résultat |
|---|---|
| <code class="prettyprint full">SELECT COALESCE(NULL, 42);</code> | <code class="prettyprint full">42</code> |

<br><br>
## Fonctions cryptographiquement non sécurisées
<br>
><i class="fas fa-exclamation-triangle"></i> **Attention:** N'utilisez jamais ces fonctions pour les mots de passe ou jetons de sécurité de vos applications, elles ne sont pas sécurisées !

<br>
`PASSWORD()` : Retourne le hash `SHA1(2)` d'une chaîne. Retirée en **MySQL 8.0.11**.
> - [Is the MySQL password function vulnerable to this?](https://stackoverflow.com/questions/10935794/is-the-mysql-password-function-vulnerable-to-this)
 - [The security of the PASSWORD function in MySQL](https://security.stackexchange.com/questions/151998/the-security-of-the-password-function-in-mysql)

<br>
`DECODE()` / `DES_DECRYPT()` / `DES_ENCRYPT()` / `ENCODE()` / `ENCRYPT()` : Retirées en **MySQL 8.0.3**.
> <i class="fas fa-info-circle"></i> Il faut utiliser `AES_ENCRYPT()` & `AES_DECRYPT()` à la place.

<br>
`MD5()` / `SHA1()` : Retourne le hash d'une chaîne. Ces algorithmes ont des failles connues.
> - [Is MD5 considered insecure?](https://security.stackexchange.com/questions/19906/is-md5-considered-insecure)
 - [Is SHA-1 secure for password storage?](https://stackoverflow.com/questions/2772014/is-sha-1-secure-for-password-storage)

<br><br>
-----
**Précédent:** [3.4 Union](?file=14_union.md)
**Suivant:** [4.2 Exercices (Pt. 3-4)](?file=16_exercices.md)