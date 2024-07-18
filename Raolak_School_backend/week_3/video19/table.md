How to slect a data and show it on the website
SELECT username, email FROM users WHERE id = 3;

another example
SELECT username, comment_text FROM comments WHERE users_id = 3;
SELECT * FROM comments WHERE users_id = 3; this will give you all data

selecting two different data from two or more different table called joining

this is inner join
SELECT * FROM users INNER JOIN comments ON users.id = comment.users_id;
SELECT users.username, comments.comment_text, comments.created_at FROM users INNER JOIN comments ON users.id = comments.users_id; this will only give you comment you asked for from both of the table

this is left join
SELECT users.username, comments.comment_text, comments.created_at FROM users LEFT JOIN comments ON users.id = comments.users_id;

this is RIGHT join
SELECT users.username, comments.comment_text, comments.created_at FROM users RIGHT JOIN comments ON users.id = comments.users_id; ;left and right join will include the users with no comment with your and put null in the column