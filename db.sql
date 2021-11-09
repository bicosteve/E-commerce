CREATE TABLE users (
  userid INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  username VARCHAR(40) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE customerdetails(
  customerid INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  title VARCHAR(20) NOT NULL,
  phone INT NOT NULL,
  firstname VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  userid INT NOT NULL,
  address VARCHAR(50) NOT NULL,
  city VARCHAR(100) NOT NULL,
  province VARCHAR(100) NOT NULL,
  country VARCHAR(100) NOT NULL,
  payment VARCHAR(50) NOT NULL,
  FOREIGN KEY(userid) REFERENCES users(userid);
);

CREATE TABLE products(
  productid INT PRIMARY KEY AUTO_INCREMENT NOT NULL,

);

CREATE TABLE orders(
  orderid INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  quantity INT NOT NULL,
  userid INT NOT NULL,
  customerid INT NOT NULL,
  productid INT NOT NULL,
  FOREIGN KEY (userid) REFERENCES users(userid),
  FOREIGN KEY(customerid) REFERENCES customerdetails(customerid),
  FOREIGN KEY (productid) REFERENCES products(productid) 
);