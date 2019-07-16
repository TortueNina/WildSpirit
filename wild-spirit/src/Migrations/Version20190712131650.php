<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190712131650 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE association ADD address_number INT DEFAULT NULL, ADD address_street VARCHAR(255) NOT NULL, ADD address_town VARCHAR(255) NOT NULL, ADD telephone INT DEFAULT NULL, ADD updated_at DATETIME NOT NULL, DROP adress_number, DROP adress_street, DROP adress_town, DROP telephon, CHANGE website website VARCHAR(255) DEFAULT NULL, CHANGE picture picture VARCHAR(255) DEFAULT NULL, CHANGE logo logo VARCHAR(255) DEFAULT NULL, CHANGE adress_postcode address_postcode INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE association ADD adress_number INT DEFAULT NULL, ADD adress_street VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD adress_town VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD telephon INT DEFAULT NULL, DROP address_number, DROP address_street, DROP address_town, DROP telephone, DROP updated_at, CHANGE website website VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE picture picture VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE logo logo VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE address_postcode adress_postcode INT NOT NULL');
    }
}
