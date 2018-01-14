CREATE TABLE posts( \
    id int(11) PRIMARY KEY AUTO_INCREMENT, \
    dt TIMESTAMP, \
    author varchar(50) not null, \
    title varchar(100) not null, \
    body varchar(2000) not null
);

INSERT INTO posts (author, title, body) VALUES ('Author','Test title','Test body');
INSERT INTO posts (author, title, body) VALUES ('Author 2','Test title 2','Test body 2');