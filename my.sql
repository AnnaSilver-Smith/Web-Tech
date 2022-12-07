-- create
CREATE TABLE groupmates (
  Id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age TEXT NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO groupmates VALUES (0001, 'Тина', 25, 'Москва');
INSERT INTO groupmates VALUES (0002, 'Олег', 30, 'Каменск-Уральский');
INSERT INTO groupmates VALUES (0003, 'Анна', 32, 'Екатеринбург');
INSERT INTO groupmates VALUES (0004, 'Дарья', 37, 'Иваново');
INSERT INTO groupmates VALUES (0005, 'Дмитрий', 18, 'Москва');
INSERT INTO groupmates VALUES (0006, 'Елена', 17, 'Серов');
INSERT INTO groupmates VALUES (0007, 'Александра', 19, 'Москва');
INSERT INTO groupmates VALUES (0008, 'Филипп', 29, 'Москва');
INSERT INTO groupmates VALUES (0009, 'Ирина', 29, 'Новый-Уренгой');
INSERT INTO groupmates VALUES (0010, 'Роман', 22, 'Москва');


-- fetch 
SELECT name FROM groupmates WHERE address = 'Москва' AND age BETWEEN 18 and 29;