CREATE TABLE users (
  id        SERIAL NOT NULL PRIMARY KEY,
  username  VARCHAR(50)
);
CREATE TABLE items (
  id        SERIAL NOT NULL PRIMARY KEY,
  name      VARCHAR(100),
  user      INT NOT NULL REFERENCES users(id),
  completed BOOLEAN,
  created   DATETIME 
);
