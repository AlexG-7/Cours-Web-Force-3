SELECT users.firstname, users.lastname, articles.content
FROM users
LEFT JOIN articles ON users.id = article.id_user
WHERE articles.id = 10
