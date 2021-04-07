<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407131544 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE match_convocation (id INT AUTO_INCREMENT NOT NULL, match_convocation_id INT DEFAULT NULL, INDEX IDX_F2A24E7761DD1B58 (match_convocation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE match_convocation_player (match_convocation_id INT NOT NULL, player_id INT NOT NULL, INDEX IDX_5B3F0A8561DD1B58 (match_convocation_id), INDEX IDX_5B3F0A8599E6F5DF (player_id), PRIMARY KEY(match_convocation_id, player_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE match_convocation ADD CONSTRAINT FK_F2A24E7761DD1B58 FOREIGN KEY (match_convocation_id) REFERENCES football_match (id)');
        $this->addSql('ALTER TABLE match_convocation_player ADD CONSTRAINT FK_5B3F0A8561DD1B58 FOREIGN KEY (match_convocation_id) REFERENCES match_convocation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE match_convocation_player ADD CONSTRAINT FK_5B3F0A8599E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_convocation_player DROP FOREIGN KEY FK_5B3F0A8561DD1B58');
        $this->addSql('DROP TABLE match_convocation');
        $this->addSql('DROP TABLE match_convocation_player');
    }
}
