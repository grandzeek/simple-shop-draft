CREATE DATABASE intouch;

USE intouch;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(60) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    meeting_location VARCHAR(80),
    preferred_date DATE,
    preferred_time TIME,
    property_location VARCHAR(180),
    message TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
