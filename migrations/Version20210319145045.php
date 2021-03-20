<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319145045 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bfk_team (id INT AUTO_INCREMENT NOT NULL, bfk_team_name VARCHAR(255) NOT NULL, bfk_team_logo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bfk_team_opponent (id INT AUTO_INCREMENT NOT NULL, opponent_name VARCHAR(255) NOT NULL, opponent_logo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, contact_last_name VARCHAR(255) NOT NULL, contact_first_name VARCHAR(255) NOT NULL, contacy_email VARCHAR(255) NOT NULL, contact_nb_phone VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE football_match (id INT AUTO_INCREMENT NOT NULL, bfk_team_id INT DEFAULT NULL, bfk_team_opponent_id INT DEFAULT NULL, football_match_date DATETIME DEFAULT NULL, football_match_location VARCHAR(255) DEFAULT NULL, result VARCHAR(255) DEFAULT NULL, INDEX IDX_8CE33ACE59F613E1 (bfk_team_id), INDEX IDX_8CE33ACEF2283095 (bfk_team_opponent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `match` (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE match_article (id INT AUTO_INCREMENT NOT NULL, article_title VARCHAR(255) NOT NULL, article_description LONGTEXT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE match_convocation (id INT AUTO_INCREMENT NOT NULL, player_convocation_id INT DEFAULT NULL, match_convocation_id INT DEFAULT NULL, INDEX IDX_F2A24E7724ADF88C (player_convocation_id), UNIQUE INDEX UNIQ_F2A24E7761DD1B58 (match_convocation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE novelty (id INT AUTO_INCREMENT NOT NULL, novelty_title VARCHAR(255) NOT NULL, novelty_content LONGTEXT NOT NULL, novelty_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partner (id INT AUTO_INCREMENT NOT NULL, partner_name VARCHAR(255) NOT NULL, partner_description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, position VARCHAR(255) NOT NULL, date_of_birth DATE NOT NULL, nb_matches VARCHAR(255) NOT NULL, nb_goals VARCHAR(255) NOT NULL, nb_assits VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stadium (id INT AUTO_INCREMENT NOT NULL, stadium_name VARCHAR(255) NOT NULL, stadium_adress VARCHAR(255) NOT NULL, stadium_city VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, function VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE football_match ADD CONSTRAINT FK_8CE33ACE59F613E1 FOREIGN KEY (bfk_team_id) REFERENCES bfk_team (id)');
        $this->addSql('ALTER TABLE football_match ADD CONSTRAINT FK_8CE33ACEF2283095 FOREIGN KEY (bfk_team_opponent_id) REFERENCES bfk_team_opponent (id)');
        $this->addSql('ALTER TABLE match_convocation ADD CONSTRAINT FK_F2A24E7724ADF88C FOREIGN KEY (player_convocation_id) REFERENCES player (id)');
        $this->addSql('ALTER TABLE match_convocation ADD CONSTRAINT FK_F2A24E7761DD1B58 FOREIGN KEY (match_convocation_id) REFERENCES football_match (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE football_match DROP FOREIGN KEY FK_8CE33ACE59F613E1');
        $this->addSql('ALTER TABLE football_match DROP FOREIGN KEY FK_8CE33ACEF2283095');
        $this->addSql('ALTER TABLE match_convocation DROP FOREIGN KEY FK_F2A24E7761DD1B58');
        $this->addSql('ALTER TABLE match_convocation DROP FOREIGN KEY FK_F2A24E7724ADF88C');
        $this->addSql('DROP TABLE bfk_team');
        $this->addSql('DROP TABLE bfk_team_opponent');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE football_match');
        $this->addSql('DROP TABLE `match`');
        $this->addSql('DROP TABLE match_article');
        $this->addSql('DROP TABLE match_convocation');
        $this->addSql('DROP TABLE novelty');
        $this->addSql('DROP TABLE partner');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE stadium');
        $this->addSql('DROP TABLE user');
    }
}
