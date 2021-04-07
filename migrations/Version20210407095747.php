<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407095747 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_convocation_bfk_team DROP FOREIGN KEY FK_2C259E0661DD1B58');
        $this->addSql('ALTER TABLE match_convocation_football_match DROP FOREIGN KEY FK_9C1BBBA461DD1B58');
        $this->addSql('ALTER TABLE match_convocation_player DROP FOREIGN KEY FK_5B3F0A8561DD1B58');
        $this->addSql('DROP TABLE match_convocation');
        $this->addSql('DROP TABLE match_convocation_bfk_team');
        $this->addSql('DROP TABLE match_convocation_football_match');
        $this->addSql('DROP TABLE match_convocation_player');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE match_convocation (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE match_convocation_bfk_team (match_convocation_id INT NOT NULL, bfk_team_id INT NOT NULL, INDEX IDX_2C259E0659F613E1 (bfk_team_id), INDEX IDX_2C259E0661DD1B58 (match_convocation_id), PRIMARY KEY(match_convocation_id, bfk_team_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE match_convocation_football_match (match_convocation_id INT NOT NULL, football_match_id INT NOT NULL, INDEX IDX_9C1BBBA4E1DA134D (football_match_id), INDEX IDX_9C1BBBA461DD1B58 (match_convocation_id), PRIMARY KEY(match_convocation_id, football_match_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE match_convocation_player (match_convocation_id INT NOT NULL, player_id INT NOT NULL, INDEX IDX_5B3F0A8599E6F5DF (player_id), INDEX IDX_5B3F0A8561DD1B58 (match_convocation_id), PRIMARY KEY(match_convocation_id, player_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE match_convocation_bfk_team ADD CONSTRAINT FK_2C259E0659F613E1 FOREIGN KEY (bfk_team_id) REFERENCES bfk_team (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE match_convocation_bfk_team ADD CONSTRAINT FK_2C259E0661DD1B58 FOREIGN KEY (match_convocation_id) REFERENCES match_convocation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE match_convocation_football_match ADD CONSTRAINT FK_9C1BBBA461DD1B58 FOREIGN KEY (match_convocation_id) REFERENCES match_convocation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE match_convocation_football_match ADD CONSTRAINT FK_9C1BBBA4E1DA134D FOREIGN KEY (football_match_id) REFERENCES football_match (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE match_convocation_player ADD CONSTRAINT FK_5B3F0A8561DD1B58 FOREIGN KEY (match_convocation_id) REFERENCES match_convocation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE match_convocation_player ADD CONSTRAINT FK_5B3F0A8599E6F5DF FOREIGN KEY (player_id) REFERENCES player (id) ON DELETE CASCADE');
    }
}
