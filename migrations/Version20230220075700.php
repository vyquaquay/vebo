<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220075700 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE club DROP FOREIGN KEY Player ID');
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, match_id INT NOT NULL, club_1 INT NOT NULL, club1_score INT NOT NULL, club2_score INT NOT NULL, club_2 INT NOT NULL, stadium VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, player_id INT NOT NULL, name VARCHAR(255) NOT NULL, club_id INT NOT NULL, number INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY Club 1');
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY Club 2');
        $this->addSql('ALTER TABLE players DROP FOREIGN KEY Player to Club');
        $this->addSql('DROP TABLE `match`');
        $this->addSql('DROP TABLE players');
        $this->addSql('ALTER TABLE club MODIFY Club ID INT NOT NULL');
        $this->addSql('DROP INDEX Player ID ON club');
        $this->addSql('DROP INDEX `primary` ON club');
        $this->addSql('ALTER TABLE club ADD player VARCHAR(255) NOT NULL, CHANGE Club ID id INT AUTO_INCREMENT NOT NULL, CHANGE Player Id club_id INT NOT NULL');
        $this->addSql('ALTER TABLE club ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `match` (Match ID INT AUTO_INCREMENT NOT NULL, Club 1 INT NOT NULL, Club 1 Score INT NOT NULL, Club 2 Score INT NOT NULL, Club 2 INT NOT NULL, Stadium VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, INDEX Club 1 (Club 1), INDEX Club 2 (Club 2), PRIMARY KEY(Match ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE players (Player Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Club ID INT NOT NULL, Number INT NOT NULL, INDEX Player to Club (Club ID), PRIMARY KEY(Player Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE `match` ADD CONSTRAINT Club 1 FOREIGN KEY (Club 1) REFERENCES club (Club ID) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `match` ADD CONSTRAINT Club 2 FOREIGN KEY (Club 2) REFERENCES club (Club ID) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE players ADD CONSTRAINT Player to Club FOREIGN KEY (Club ID) REFERENCES club (Club ID) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE player');
        $this->addSql('ALTER TABLE club MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON club');
        $this->addSql('ALTER TABLE club DROP player, CHANGE id Club ID INT AUTO_INCREMENT NOT NULL, CHANGE club_id Player Id INT NOT NULL');
        $this->addSql('ALTER TABLE club ADD CONSTRAINT Player ID FOREIGN KEY (Player Id) REFERENCES players (Player Id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX Player ID ON club (Player Id)');
        $this->addSql('ALTER TABLE club ADD PRIMARY KEY (Club ID)');
    }
}
