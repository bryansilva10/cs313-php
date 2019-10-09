CREATE DATABASE todoList;

CREATE TABLE list (
    id SERIAL NOT NULL PRIMARY KEY,
    list_name VARCHAR(50) NOT NULL UNIQUE 
)

CREATE TABLE task (
    task_id SERIAL NOT NULL PRIMARY KEY,
    list_id NOT NULL REFERENCES list(id),
    task_name VARCHAR(50) NOT NULL
    task_desc VARCHAR(255),
    completed BOOLEAN NOT NULL DEFAULT '0'
)
