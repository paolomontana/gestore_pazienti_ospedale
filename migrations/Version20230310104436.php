<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310104436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE medical_examination_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE medical_examination (id INT NOT NULL, relation_id INT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, reason VARCHAR(255) DEFAULT NULL, protocol_number VARCHAR(255) NOT NULL, protocol_date VARCHAR(255) DEFAULT NULL, date_of_examination DATE DEFAULT NULL, result_of_examination VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5E2364773256915B ON medical_examination (relation_id)');
        $this->addSql('ALTER TABLE medical_examination ADD CONSTRAINT FK_5E2364773256915B FOREIGN KEY (relation_id) REFERENCES patient (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE medical_examination_id_seq CASCADE');
        $this->addSql('ALTER TABLE medical_examination DROP CONSTRAINT FK_5E2364773256915B');
        $this->addSql('DROP TABLE medical_examination');
    }
}
