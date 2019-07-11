<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190711122030 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category ADD name VARCHAR(255) NOT NULL, DROP chien, DROP chat, DROP oiseau, DROP poisson, DROP cheval, DROP bovin');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category ADD chat VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD oiseau VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD poisson VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD cheval VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD bovin VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE name chien VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
