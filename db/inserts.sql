--LAPTOP VARIETY
INSERT INTO laptop(img, name_laptop) VALUES ('Dell.png','Dell');
INSERT INTO laptop(img, name_laptop) VALUES ('Apple.png','Apple');
INSERT INTO laptop(img, name_laptop) VALUES ('Hp.png','HP');
INSERT INTO laptop(img, name_laptop) VALUES ('Lenovo.png','Lenovo');
INSERT INTO laptop(img, name_laptop) VALUES ('Toshiba.png','Toshiba');
INSERT INTO laptop(img, name_laptop) VALUES ('Acer.png','Acer');


--STORAGE VARIETY
INSERT INTO storage(capacity) VALUES('64GB');
INSERT INTO storage(capacity) VALUES('128GB');
INSERT INTO storage(capacity) VALUES('256GB');


--COMPLETE PRODUCT
INSERT INTO laptop_storage(price, laptop_id, storage_id) VALUES (500, 1, 1);
INSERT INTO laptop_storage(price, laptop_id, storage_id) VALUES (700, 2, 2);
INSERT INTO laptop_storage(price, laptop_id, storage_id) VALUES (600, 3, 3);
INSERT INTO laptop_storage(price, laptop_id, storage_id) VALUES (600, 4, 2);
INSERT INTO laptop_storage(price, laptop_id, storage_id) VALUES (450, 5, 1);
INSERT INTO laptop_storage(price, laptop_id, storage_id) VALUES (550, 6, 3);

