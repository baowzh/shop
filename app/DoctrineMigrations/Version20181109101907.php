<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181109101907 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("UPDATE dtb_page SET page_name = '商品購入/遷移', url = 'shopping_redirect_to' WHERE id = 42");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("UPDATE dtb_page SET page_name = '商品購入/お届け先変更', url = 'shopping_shipping_edit_change' WHERE id = 42");
    }
}
