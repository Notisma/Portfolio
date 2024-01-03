INSERT IGNORE INTO Skill (name, skillType, masteryLevelOutOfTen) VALUES
	('Java', 'LANGUAGE', 9),
	('C', 'LANGUAGE', 7),
	('PHP', 'LANGUAGE', 8),
	('SQL (My/Oracle)', 'LANGUAGE', 8),
	('C#', 'LANGUAGE', 6),
	('HTML', 'LANGUAGE', 9),
	('CSS', 'LANGUAGE', 6),
	('Git', 'TOOL', 7),
	('Teamwork', 'OTHER', 6),
	('Unity', 'TOOL', 8),
	('PhpMyAdmin', 'TOOL', 6),
	('Bash', 'LANGUAGE', 4),
	('JavaScript', 'LANGUAGE', 6),
	('C++', 'LANGUAGE', 5),
	('Electronics', 'OTHER', 4)
;

INSERT IGNORE INTO Realisation (codename, title) VALUES
	('formatiut', 'Format''IUT'),
	('badarduino', 'Arduino Project')
;

INSERT IGNORE INTO Uses (realisation_name, skill_name) VALUES
	('formatiut', 'PHP'),
	('formatiut', 'SQL'),
	('formatiut', 'HTML'),
	('formatiut', 'CSS'),
	('formatiut', 'Git'),
	('formatiut', 'Teamwork'),
	('formatiut', 'JavaScript'),
	('badarduino', 'C++'),
	('badarduino', 'Electronics')
;
