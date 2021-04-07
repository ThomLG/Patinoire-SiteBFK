<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407102042 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE match_convocation (id INT AUTO_INCREMENT NOT NULL, player_convocation_id INT DEFAULT NULL, match_day_id INT DEFAULT NULL, INDEX IDX_F2A24E7724ADF88C (player_convocation_id), INDEX IDX_F2A24E77A8ADB827 (match_day_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE match_convocation ADD CONSTRAINT FK_F2A24E7724ADF88C FOREIGN KEY (player_convocation_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE match_convocation ADD CONSTRAINT FK_F2A24E77A8ADB827 FOREIGN KEY (match_day_id) REFERENCES football_match (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE match_convocation');
    }
}
