INSERT IGNORE INTO Skill (name, name_fr, skillType, masteryLevelOutOfTen) VALUES
	('Java', NULL, 'LANGUAGE', 9),
	('C', NULL, 'LANGUAGE', 7),
	('PHP', NULL, 'LANGUAGE', 8),
	('SQL (My/Oracle)', NULL, 'LANGUAGE', 8),
	('C#', NULL, 'LANGUAGE', 6),
	('HTML', NULL, 'LANGUAGE', 9),
	('CSS', NULL, 'LANGUAGE', 6),
	('Git', NULL, 'TOOL', 7),
	('Teamwork', 'Travail en équipe', 'OTHER', 6),
	('Unity', NULL, 'TOOL', 8),
	('PhpMyAdmin', NULL, 'TOOL', 6),
	('Bash', NULL, 'LANGUAGE', 4),
	('JavaScript', NULL, 'LANGUAGE', 6),
	('C++', NULL, 'LANGUAGE', 5),
	('Electronics', 'Électronique', 'OTHER', 4)
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
