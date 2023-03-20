<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230320083359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fiches (id INT AUTO_INCREMENT NOT NULL, semaine VARCHAR(255) NOT NULL, date_fiche DATE NOT NULL, numdep INT NOT NULL, activite VARCHAR(255) DEFAULT NULL, enseigne VARCHAR(255) NOT NULL, nomf VARCHAR(255) DEFAULT NULL, prenomf VARCHAR(255) DEFAULT NULL, sexef VARCHAR(255) DEFAULT NULL, telfixe VARCHAR(20) DEFAULT NULL, telmobile VARCHAR(20) DEFAULT NULL, email VARCHAR(50) DEFAULT NULL, adresef VARCHAR(100) DEFAULT NULL, codpost VARCHAR(50) DEFAULT NULL, ville VARCHAR(50) DEFAULT NULL, fondm VARCHAR(100) NOT NULL, prixv VARCHAR(100) DEFAULT NULL, jourfer VARCHAR(100) DEFAULT NULL, affairet VARCHAR(100) DEFAULT NULL, raisonv VARCHAR(20) DEFAULT NULL, statusf VARCHAR(50) DEFAULT NULL, nbresal VARCHAR(20) DEFAULT NULL, chiffred VARCHAR(20) DEFAULT NULL, dispof VARCHAR(20) DEFAULT NULL, observation VARCHAR(100) DEFAULT NULL, demarche VARCHAR(5) DEFAULT NULL, vendeurd VARCHAR(20) DEFAULT NULL, id_sem VARCHAR(30) DEFAULT NULL, etat VARCHAR(10) DEFAULT NULL, raison VARCHAR(100) DEFAULT NULL, fin_mois VARCHAR(10) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE fiches');
    }
}
