
defined('BASEPATH') OR exit('No direct script access allowed');

class <?php echo 'Migration_'.$classname;?>  extends CI_Migration {

        public function up()
        {
                
        }

        public function down()
        {
                $this->dbforge->drop_table('blog');
        }
}