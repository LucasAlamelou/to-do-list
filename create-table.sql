CREATE DATABASE ToDoList;

CREATE TABLE list (
  id CHAR(36) NOT NULL PRIMARY KEY,
  do varchar(254)
);

INSERT INTO list (id, do) VALUES (UUID(), 'test');
