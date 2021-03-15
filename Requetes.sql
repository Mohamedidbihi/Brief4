CREATE TABLE `classe` ( `IdClasse` INT NOT NULL AUTO_INCREMENT , `Classe` VARCHAR(50) NOT NULL , PRIMARY KEY (`IdClasse`))
INSERT INTO `classe`(`Classe`) VALUES ('Classe A'),('Classe B'),('Classe C')

CREATE TABLE `etudiant` ( `idEt` INT NOT NULL AUTO_INCREMENT , `Nom` VARCHAR(30) NOT NULL , `prenom` VARCHAR(30) NOT NULL , `Datenaissance` DATE NOT NULL , `IdC` INT NOT NULL , PRIMARY KEY (`idEt`))
INSERT INTO `etudiant`( `Nom`, `prenom`, `Datenaissance`, `IdC`) VALUES ('Idbihi','Med','1998-08-31','1'),
('Maacha','othman','1998-08-31','1'),
('elhhoubi','Yassin','1997-08-31','2'),
('atlassi','moncef','2002-08-31','2'),
('elhhoubi','Yassin','1998-08-31','2'),
('hicham','hicham','1998-08-31','2'),
('Ouchen','med','1998-08-31','1')


alter table etudiant
ADD CONSTRAINT  FkIdE FOREIGN KEY(IdC)REFERENCES classe(idclasse)

CREATE TABLE `module` ( `IdM` INT NOT NULL AUTO_INCREMENT , `LebelleM` int NOT NULL , `coefficient` INT NOT NULL , PRIMARY KEY (`IdM`))
alter TABLE module
MODIFY COLUMN LebelleM varchar(50);
INSERT INTO `module`(`LebelleM`, `coefficient`) VALUES ('Css',2),('html',3),('sass',2),('sql',2)

CREATE TABLE `campus`.`examen` ( `IdM` INT NOT NULL , `Idet` INT NOT NULL , `Note` INT NOT NULL , `DateExam` DATE NOT NULL , PRIMARY KEY (`IdM`, `Idet`))
INSERT INTO `examen`(`IdM`, `Idet`, `Note`, `DateExam`)VALUES (5,1,14,'2021-03-12'),(5,2,16,'2021-03-12'),(5,3,16,'2021-03-12')

alter table examen
ADD CONSTRAINT  FkIdEt FOREIGN KEY(Idet)REFERENCES etudiant(idEt),
ADD CONSTRAINT  FkIdMo FOREIGN KEY(IdM)REFERENCES module(IdM)

//Trier ordre decroissant 
SELECT * FROM `module` ORDER BY coefficient DESC

//Trier ordre croissant
SELECT * FROM `module` ORDER BY coefficient ASC

//les etudiants qui n'a pas passe exam Css
SELECT e.Nom,e.prenom,m.LebelleM,m.coefficient FROM etudiant e, module m ,examen ex 
WHERE e.idEt=ex.Idet AND m.LebelleM="Css" 

//Les modules qui n'ons pas examine
SELECT m.LebelleM FROM  module m  
WHERE  m.IdM NOT IN (SELECT idm FROM examen)

//MAX coefficient
SELECT *
FROM module
WHERE coefficient=MAX(coefficient)


SELECT c.Nom
FROM campus c, user u,formateur f, etudiant e
WHERE u.idUser=1 AND u.idUser=f.IdUser AND f.IDF=e.idF AND e.idcampus=c.idC