<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class VersionCreateExactTables extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE exact (id INT AUTO_INCREMENT NOT NULL, access_token LONGTEXT NOT NULL, code LONGTEXT NOT NULL, token_expires INT NOT NULL, refresh_token LONGTEXT NOT NULL, enabled TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE `UTF8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exact_logger (id INT AUTO_INCREMENT NOT NULL, code LONGTEXT NOT NULL, message LONGTEXT NOT NULL, called LONGTEXT NOT NULL, occured LONGTEXT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE `UTF8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exact_import_log (id INT AUTO_INCREMENT NOT NULL, batch_id INT NOT NULL, message VARCHAR(255) NOT NULL, type INT NOT NULL, topic_node VARCHAR(255) NOT NULL, topic_code VARCHAR(255) NOT NULL, data_key VARCHAR(255) DEFAULT NULL, datetime DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE `UTF8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE exact');
        $this->addSql('DROP TABLE exact_logger');
        $this->addSql('DROP TABLE exact_import_log');
    }
}
