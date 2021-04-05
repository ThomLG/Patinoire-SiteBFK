<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210405174518 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE preinscription (id INT AUTO_INCREMENT NOT NULL, pre_inscription_category_id INT NOT NULL, pre_inscription_last_name VARCHAR(255) NOT NULL, pre_inscription_first_name VARCHAR(255) NOT NULL, pre_inscription_date_birth DATE NOT NULL, pre_inscription_email VARCHAR(255) NOT NULL, pre_inscription_phone_number VARCHAR(255) NOT NULL, pre_inscription_position VARCHAR(255) NOT NULL, pre_inscription_last_club VARCHAR(255) NOT NULL, INDEX IDX_649A5F6FD653663B (pre_inscription_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE preinscription ADD CONSTRAINT FK_649A5F6FD653663B FOREIGN KEY (pre_inscription_category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A6512469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_98197A6512469DE2 ON player (category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE preinscription');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A6512469DE2');
        $this->addSql('DROP INDEX IDX_98197A6512469DE2 ON player');
    }
}
