SELECT etage.nom, MAX(salles.capacite), salles.nom AS'Biggest Room' FROM etage INNER JOIN salles WHERE etage.id = salles.id_etage;