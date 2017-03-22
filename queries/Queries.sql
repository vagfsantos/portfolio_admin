CREATE TABLE projects (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    img_thumb_url varchar(500) NOT NULL,
    img_large_url varchar(500) NOT NULL,
    model varchar(100) NOT NULL,
    time_year INT NOT NULL,
    site_url varchar(255) DEFAULT NULL,
    code_url varchar(255) DEFAULT NULL,
    work_done TEXT DEFAULT NULL,
    copyright varchar(255) NOT NULL,
    copyright_url varchar(255) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE skills (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    subject varchar(255) NOT NULL,
    skill varchar(255) NOT NULL,
    fluency ENUM('1','2','3','4','5','6','7','8','9','10')
);

CREATE TABLE education (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    time_from INT NOT NULL,
    time_to INT DEFAULT NULL,
    name varchar(255) NOT NULL,
    institution varchar(255) NOT NULL
);

CREATE TABLE certificates (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    time_year INT NOT NULL,
    name varchar(255) NOT NULL,
    institution varchar(255) NOT NULL,
    certificate_url varchar(500) DEFAULT NULL
);

CREATE TABLE experience (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    occupation varchar(100) NOT NULL,
    description TEXT NOT NULL,
    company varchar(255) NOT NULL,
    time_from INT NOT NULL,
    time_to INT DEFAULT NULL);