<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181204233553 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE absence ADD employee_id INT DEFAULT NULL, DROP employee');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C98C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id)');
        $this->addSql('CREATE INDEX IDX_765AE0C98C03F15C ON absence (employee_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY FK_765AE0C98C03F15C');
        $this->addSql('DROP INDEX IDX_765AE0C98C03F15C ON absence');
        $this->addSql('ALTER TABLE absence ADD employee INT NOT NULL, DROP employee_id');
    }
}
