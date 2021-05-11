<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210511134754 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stadium ADD longitude NUMERIC(20, 15) NOT NULL, ADD latitude NUMERIC(20, 15) NOT NULL, DROP stadium_longitude, DROP stadium_latitude, CHANGE stadium_name name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stadium ADD stadium_longitude NUMERIC(20, 15) NOT NULL, ADD stadium_latitude NUMERIC(20, 15) NOT NULL, DROP longitude, DROP latitude, CHANGE name stadium_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
