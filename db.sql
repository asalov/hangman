CREATE DATABASE hangman;
USE hangman;

CREATE TABLE IF NOT EXISTS categories(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS words(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	cat_id INT NOT NULL,
	name VARCHAR(30) NOT NULL,
	clue TEXT NOT NULL,
	FOREIGN KEY(cat_id) REFERENCES categories(id)
);

CREATE TABLE IF NOT EXISTS users(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(80) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	played INT NOT NULL DEFAULT 0,
	won INT NOT NULL DEFAULT 0,
	lost INT NOT NULL DEFAULT 0,
	letter_guesses INT NOT NULL DEFAULT 0,
	full_words_guessed INT NOT NULL DEFAULT 0
);

INSERT INTO categories(id, name) VALUES
(1, 'Cities'),
(2, 'Animals'),
(3, 'Countries');

INSERT INTO words(cat_id, name, clue) VALUES
(1, 'Sofia', 'The Silicon Valley of Eastern Europe'),
(1, 'Ottawa', 'The capital of Canada'),
(1, 'Las Vegas', 'Sin City'),
(1, 'Istanbul', 'A city located on the Bosphorus'),
(1, 'Shanghai', 'The biggest city in China'),
(2, 'Jaguar', 'Cat/Automobile brand'),
(2, 'Python', 'Snake/Programming language'),
(2, 'Tapir', 'A weird mix between a pig and an elephant that inhabits South America'),
(2, 'Orangutan', 'A big orange anthropoid ape'),
(2, 'Mammoth', 'A prehistoric elephant'),
(3, 'Japan', 'The land of the rising sun'),
(3, 'Argentina', 'The birthplace of Leo Messi'),
(3, 'New Zealand', 'The film set of "The Lord of the Rings"'),
(3, 'Egypt', 'Pyramids, pharaohs...'),
(3, 'Switzerland', 'Country famous for its clocks, chocolate and cheese');