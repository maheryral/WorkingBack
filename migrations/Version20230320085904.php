<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230320085904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commandes (id INT AUTO_INCREMENT NOT NULL, depart INT DEFAULT NULL, nombre INT DEFAULT NULL, semainec INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fondmur (id INT AUTO_INCREMENT NOT NULL, fm VARCHAR(30) DEFAULT NULL, semainf VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rvente (id INT AUTO_INCREMENT NOT NULL, rv VARCHAR(30) DEFAULT NULL, semainr VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statu (id INT AUTO_INCREMENT NOT NULL, stat VARCHAR(10) DEFAULT NULL, semains VARCHAR(10) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE totaldepart (id INT AUTO_INCREMENT NOT NULL, depart INT DEFAULT NULL, total INT DEFAULT NULL, semaind INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiches ADD agent VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commandes');
        $this->addSql('DROP TABLE fondmur');
        $this->addSql('DROP TABLE rvente');
        $this->addSql('DROP TABLE statu');
        $this->addSql('DROP TABLE totaldepart');
        $this->addSql('ALTER TABLE fiches DROP agent');
    }
}
