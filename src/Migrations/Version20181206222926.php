<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181206222926 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE absence ADD status_id INT DEFAULT NULL, DROP status');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C96BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('CREATE INDEX IDX_765AE0C96BF700BD ON absence (status_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C96BF700BD');
        $this->addSql('DROP INDEX IDX_765AE0C96BF700BD ON absence');
        $this->addSql('ALTER TABLE absence ADD status INT NOT NULL, DROP status_id');
    }
}
