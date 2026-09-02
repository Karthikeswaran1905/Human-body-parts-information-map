CREATE DATABASE bodydb;
 
USE bodydb;

CREATE TABLE parts(

id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50),
description TEXT, image VARCHAR(100)
);

INSERT INTO parts(name,description,image) VALUES ('Heart',
'The heart pumps blood throughout the body and supplies oxygen and nutrients.', 'heart.png'),
('Brain',

'The brain controls thinking, memory, emotions and body activities.', 'brain.png'),
('Eye',

'The eye helps us see colors, shapes and movement.', 'eye.png'),
('Lungs',

'The lungs help us breathe by taking in oxygen and removing carbon dioxide.', 'lungs.png'),
('Liver',

'The liver removes toxins from the blood and helps digestion.', 'liver.png'),
('Kidney',

'The kidneys filter waste products and excess water from the blood.', 'kidney.png'),
 
('Stomach',

'The stomach breaks down food and begins digestion.', 'stomach.png'),
('Ear',

'The ear helps us hear sounds and maintain body balance.', 'ear.png'),
('Nose',

'The nose helps us smell and breathe air.', 'nose.png'),
('Skin',

'The skin protects the body from germs and regulates temperature.', 'skin.png');
