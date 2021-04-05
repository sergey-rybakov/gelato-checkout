<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210405023209 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE good (id INT AUTO_INCREMENT NOT NULL, sku VARCHAR(64) NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE good_rule (good_id INT NOT NULL, rule_id INT NOT NULL, INDEX IDX_E484105E1CF98C70 (good_id), INDEX IDX_E484105E744E0351 (rule_id), PRIMARY KEY(good_id, rule_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rule (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, compatable SMALLINT NOT NULL, priority INT NOT NULL, enable SMALLINT NOT NULL, discount_type ENUM(\'good\',\'session\') NOT NULL, rule_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rule_good (id INT NOT NULL, amount INT NOT NULL, rule_good ENUM(\'sum_per_item\',\'sum_for_subset\',\'percent_for_subset\') NOT NULL, good_discount NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rule_session (id INT NOT NULL, description VARCHAR(1024) DEFAULT NULL, session_discount_type ENUM(\'sum_per_session\',\'percent_per_session\') NOT NULL, session_discount NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE good_rule ADD CONSTRAINT FK_E484105E1CF98C70 FOREIGN KEY (good_id) REFERENCES good (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE good_rule ADD CONSTRAINT FK_E484105E744E0351 FOREIGN KEY (rule_id) REFERENCES rule (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rule_good ADD CONSTRAINT FK_3F4011E5BF396750 FOREIGN KEY (id) REFERENCES rule (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rule_session ADD CONSTRAINT FK_20D0EC60BF396750 FOREIGN KEY (id) REFERENCES rule (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE good_rule DROP FOREIGN KEY FK_E484105E1CF98C70');
        $this->addSql('ALTER TABLE good_rule DROP FOREIGN KEY FK_E484105E744E0351');
        $this->addSql('ALTER TABLE rule_good DROP FOREIGN KEY FK_3F4011E5BF396750');
        $this->addSql('ALTER TABLE rule_session DROP FOREIGN KEY FK_20D0EC60BF396750');
        $this->addSql('DROP TABLE good');
        $this->addSql('DROP TABLE good_rule');
        $this->addSql('DROP TABLE rule');
        $this->addSql('DROP TABLE rule_good');
        $this->addSql('DROP TABLE rule_session');
    }
}
