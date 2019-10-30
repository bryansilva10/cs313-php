CREATE TABLE laptop (id SERIAL NOT NULL PRIMARY KEY,img TEXT NOT NULL,name_laptop VARCHAR(100) NOT NULL);
CREATE TABLE storage (id SERIAL NOT NULL PRIMARY KEY,capacity VARCHAR(100) NOT NULL UNIQUE);
CREATE TABLE laptop_storage (id SERIAL NOT NULL PRIMARY KEY,price INT NOT NULL,laptop_id INT NOT NULL REFERENCES laptop(id),storage_id INT NOT NULL REFERENCES storage(id));
CREATE TABLE wishList (id SERIAL NOT NULL PRIMARY KEY, buyer_name VARCHAR(100) NOT NULL, email_address VARCHAR(100) NOT NULL, laptop_brand VARCHAR(100) NOT NULL, laptop_storage VARCHAR(100) NOT NULL UNIQUE, request TEXT NOT NULL)