
SELECT `salles`.nom, `etages`.nom FROM `salles` INNER JOIN `etages` ON `salles`.`ide_etage` = `etages`.id;

