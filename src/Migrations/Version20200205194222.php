<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200205194222 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE console_constructor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE console (id INT AUTO_INCREMENT NOT NULL, constructor_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_3603CFB62D98BF9 (constructor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE console ADD CONSTRAINT FK_3603CFB62D98BF9 FOREIGN KEY (constructor_id) REFERENCES console_constructor (id)');
        $this->addSql('ALTER TABLE game ADD console_id INT NOT NULL');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C72F9DD9F FOREIGN KEY (console_id) REFERENCES console (id)');
        $this->addSql('CREATE INDEX IDX_232B318C72F9DD9F ON game (console_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE console DROP FOREIGN KEY FK_3603CFB62D98BF9');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318C72F9DD9F');
        $this->addSql('DROP TABLE console_constructor');
        $this->addSql('DROP TABLE console');
        $this->addSql('DROP INDEX IDX_232B318C72F9DD9F ON game');
        $this->addSql('ALTER TABLE game DROP console_id');
    }
}
