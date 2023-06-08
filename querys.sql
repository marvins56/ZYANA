CREATE TABLE admin (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  profile_picture VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
drop table categories;
CREATE TABLE products (
  product_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  description TEXT,
	
	price	decimal(10,2),			
	image	varchar(255)	,		
	category_id	int		,
	
  likes INT DEFAULT 0,
   FOREIGN KEY (category_id) REFERENCES categories( category_id ),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE categories (
category_id INT AUTO_INCREMENT PRIMARY KEY,
name	varchar(100)	,		
imagename	varchar(150)	,		
image	varchar(150)	,			
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE ADMIN
ADD name  varchar(255) AFTER email ;

CREATE TABLE cart (
  cart_id INT AUTO_INCREMENT PRIMARY KEY,
user_id	int	,	
product_id	int	,	
quantity	int	,		
price	int	,		
name	varchar(150),		
image	varchar(150),	

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(user_id),
  FOREIGN KEY (product_id) REFERENCES products(product_id)
);

INSERT INTO categories (name) VALUES
('Bread'),
('Pastries'),
('Cakes'),
('Cookies'),
('Muffins');


CREATE TABLE page_banner (
  banner_id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  image VARCHAR(255) NOT NULL
);
select * from products;
desc page_banner;
SHOW DATABASES;
use bakery;
show tables;
TRUNCATE TABLE `categories`

