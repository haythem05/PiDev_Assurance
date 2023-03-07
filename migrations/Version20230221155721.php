<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221155721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mouvement (id INT AUTO_INCREMENT NOT NULL, compte_debit_id INT DEFAULT NULL, compte_credit_id INT DEFAULT NULL, reference_mouvement VARCHAR(255) NOT NULL, date_mouvement DATE NOT NULL, montant_mouvement DOUBLE PRECISION NOT NULL, INDEX IDX_5B51FC3EC6FE1113 (compte_debit_id), INDEX IDX_5B51FC3ED8811CB (compte_credit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mouvement ADD CONSTRAINT FK_5B51FC3EC6FE1113 FOREIGN KEY (compte_debit_id) REFERENCES compte_comptable (id)');
        $this->addSql('ALTER TABLE mouvement ADD CONSTRAINT FK_5B51FC3ED8811CB FOREIGN KEY (compte_credit_id) REFERENCES compte_comptable (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mouvement DROP FOREIGN KEY FK_5B51FC3EC6FE1113');
        $this->addSql('ALTER TABLE mouvement DROP FOREIGN KEY FK_5B51FC3ED8811CB');
        $this->addSql('DROP TABLE mouvement');
    }
}
