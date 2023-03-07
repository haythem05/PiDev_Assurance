<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221155245 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sous_classe (id INT AUTO_INCREMENT NOT NULL, classe_sous_classe_id INT DEFAULT NULL, code_sous_classe INT NOT NULL, nom_sous_classe VARCHAR(255) NOT NULL, INDEX IDX_5F984D61D14A64B1 (classe_sous_classe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sous_classe ADD CONSTRAINT FK_5F984D61D14A64B1 FOREIGN KEY (classe_sous_classe_id) REFERENCES classe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sous_classe DROP FOREIGN KEY FK_5F984D61D14A64B1');
        $this->addSql('DROP TABLE sous_classe');
    }
}
