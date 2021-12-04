# CRUD-Productos
Para ejecutar este proyecto debe realizar los siguientes pasos:

#modificar el archivo conexion.php, ubicado en public/conexion.php con su respectivo host, user y pass

#Crear una base de datos llamada shop

#Ademas debe ejecutar el siguiente script en mysql para la creacion de las tablas en la BD:

CREATE TABLE Category (
    categoryId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(90) NOT NULL UNIQUE,
    active BOOLEAN NOT NULL,
    createdAt DATE NOT NULL,
	updatedAt  DATE NOT NULL,
	PRIMARY KEY (categoryId)
);

CREATE TABLE Product (
    code VARCHAR(10) NOT NULL AUTO_INCREMENT UNIQUE,
    name VARCHAR(90) NOT NULL UNIQUE,
	description TEXT NOT NULL,
    brand VARCHAR(90) NOT NULL,
	price FLOAT NOT NULL,
    createdAt DATE NOT NULL,
	updatedAt  DATE NOT NULL,
	categoryCode INT NOT NULL,
	PRIMARY KEY (code),
	FOREIGN KEY(categoryCode) REFERENCES departamentos(categoryId)
);

INSERT INTO Category (name, active, createdAt,createdAt,updatedAt) VALUES 
 ('Frutas', '1', 'Tucano','2021-10-02','2021-10-02',);  

INSERT INTO Product (name, description, brand, price,createdAt,updatedAt,categoryCode) VALUES 
 ('Fresa', 'Fresas maduras y grandes', 'Tucano', '2500', '2021-12-02','2021-12-02',1);  
