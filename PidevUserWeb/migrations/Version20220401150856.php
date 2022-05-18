<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401150856 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, blogueur_id INT NOT NULL, title VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, contenu VARCHAR(10000) NOT NULL, creation_date DATE NOT NULL, rating DOUBLE PRECISION NOT NULL, pourcentage_like INT DEFAULT NULL, INDEX IDX_23A0E667E7DE7D3 (blogueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, note INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blogueur (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_blocked TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, start DATE NOT NULL, end DATETIME NOT NULL, description LONGTEXT NOT NULL, all_day TINYINT(1) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chambre (id INT AUTO_INCREMENT NOT NULL, hotel_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, nb_lits VARCHAR(255) NOT NULL, etage INT NOT NULL, prix INT NOT NULL, vue VARCHAR(255) NOT NULL, INDEX IDX_C509E4FF3243BB18 (hotel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, avis_id INT NOT NULL, date_com DATE NOT NULL, comm_avis VARCHAR(1000) NOT NULL, INDEX IDX_67F068BC197E709F (avis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE destination (id INT AUTO_INCREMENT NOT NULL, ville_dep VARCHAR(255) NOT NULL, ville_arr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom_event VARCHAR(255) NOT NULL, date_event DATE NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hotel (id INT AUTO_INCREMENT NOT NULL, ville VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, nb_chambre INT NOT NULL, imghotel VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `like` (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, blogueur_id INT DEFAULT NULL, type_like TINYINT(1) NOT NULL, INDEX IDX_AC6340B37294869C (article_id), INDEX IDX_AC6340B37E7DE7D3 (blogueur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opinion (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, client_id INT NOT NULL, commentaire VARCHAR(1000) NOT NULL, rating DOUBLE PRECISION NOT NULL, creation_date DATE NOT NULL, INDEX IDX_AB02B0277294869C (article_id), INDEX IDX_AB02B02719EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, event_id INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, pourcentage INT NOT NULL, INDEX IDX_C11D7DD171F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclammation (id INT AUTO_INCREMENT NOT NULL, objet VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, client_id INT NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, reclamation_id INT NOT NULL, repmessage VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_5FB6DEC72D6BA2D9 (reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE res_vol (id INT AUTO_INCREMENT NOT NULL, destination_id INT DEFAULT NULL, datevoll DATE NOT NULL, prixvol DOUBLE PRECISION NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, villedep VARCHAR(255) NOT NULL, villearr VARCHAR(255) NOT NULL, INDEX IDX_65A34B87816C6140 (destination_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, vols_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, INDEX IDX_42C84955573E0EFC (vols_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE signalement (id INT AUTO_INCREMENT NOT NULL, blogueur_id INT DEFAULT NULL, opinion_id INT DEFAULT NULL, description VARCHAR(255) NOT NULL, vu TINYINT(1) NOT NULL, INDEX IDX_F4B551147E7DE7D3 (blogueur_id), INDEX IDX_F4B5511451885A6A (opinion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cin VARCHAR(8) NOT NULL, image VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, activation_token VARCHAR(255) DEFAULT NULL, reset_token VARCHAR(255) DEFAULT NULL, is_verified TINYINT(1) NOT NULL, enabled TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cin VARCHAR(8) NOT NULL, image VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vol (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, prix VARCHAR(1000) NOT NULL, villedep VARCHAR(1000) NOT NULL, villear VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE volll (id INT AUTO_INCREMENT NOT NULL, destination_id INT DEFAULT NULL, datevolll DATE NOT NULL, prixvolll DOUBLE PRECISION NOT NULL, INDEX IDX_1F743EBB816C6140 (destination_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E667E7DE7D3 FOREIGN KEY (blogueur_id) REFERENCES blogueur (id)');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FF3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC197E709F FOREIGN KEY (avis_id) REFERENCES avis (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B37294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B37E7DE7D3 FOREIGN KEY (blogueur_id) REFERENCES blogueur (id)');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B0277294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B02719EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD171F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclammation (id)');
        $this->addSql('ALTER TABLE res_vol ADD CONSTRAINT FK_65A34B87816C6140 FOREIGN KEY (destination_id) REFERENCES volll (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955573E0EFC FOREIGN KEY (vols_id) REFERENCES volll (id)');
        $this->addSql('ALTER TABLE signalement ADD CONSTRAINT FK_F4B551147E7DE7D3 FOREIGN KEY (blogueur_id) REFERENCES blogueur (id)');
        $this->addSql('ALTER TABLE signalement ADD CONSTRAINT FK_F4B5511451885A6A FOREIGN KEY (opinion_id) REFERENCES opinion (id)');
        $this->addSql('ALTER TABLE volll ADD CONSTRAINT FK_1F743EBB816C6140 FOREIGN KEY (destination_id) REFERENCES destination (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B37294869C');
        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B0277294869C');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC197E709F');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E667E7DE7D3');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B37E7DE7D3');
        $this->addSql('ALTER TABLE signalement DROP FOREIGN KEY FK_F4B551147E7DE7D3');
        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B02719EB6921');
        $this->addSql('ALTER TABLE volll DROP FOREIGN KEY FK_1F743EBB816C6140');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD171F7E88B');
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FF3243BB18');
        $this->addSql('ALTER TABLE signalement DROP FOREIGN KEY FK_F4B5511451885A6A');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC72D6BA2D9');
        $this->addSql('ALTER TABLE res_vol DROP FOREIGN KEY FK_65A34B87816C6140');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955573E0EFC');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE blogueur');
        $this->addSql('DROP TABLE calendar');
        $this->addSql('DROP TABLE chambre');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE destination');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE hotel');
        $this->addSql('DROP TABLE `like`');
        $this->addSql('DROP TABLE opinion');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE reclammation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE res_vol');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE signalement');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE vol');
        $this->addSql('DROP TABLE volll');
    }
}
