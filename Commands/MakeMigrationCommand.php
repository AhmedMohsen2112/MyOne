<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeMigrationCommand extends Command {

    protected $commandName = 'make:migration';
    protected $commandDescription = "Greets Someone";
    protected $commandArgumentName = "name";
    protected $commandArgumentDescription = "Who do you want to greet?";
    protected $commandOptionName = "cap"; // should be specified like "app:greet John --cap"
    protected $commandOptionDescription = 'If set, it will greet in uppercase letters';

    protected function configure() {
        $this
                ->setName($this->commandName)
                ->setDescription($this->commandDescription)
                ->addArgument(
                        $this->commandArgumentName, InputArgument::OPTIONAL, $this->commandArgumentDescription
                )
                ->addOption(
                        $this->commandOptionName, null, InputOption::VALUE_NONE, $this->commandOptionDescription
                )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {


        $name = $input->getArgument($this->commandArgumentName);

        if (!$name) {
            $text = 'please define migration name' . PHP_EOL;
            $output->writeln($text);
        }

//        if ($input->getOption($this->commandOptionName)) {
//            $text = strtoupper($text);
//        }
        $filename = date('ymdHis') . '_' . $name . '.php';
        try {
            $folderpath = 'application/migrations';

            if (!is_dir($folderpath)) {
                try {
                    mkdir($folderpath);
                } catch (Exception $ex) {
                    $text = 'Error ' . $ex->getMessage() . PHP_EOL;
                    $output->writeln($text);
                }
            }
            $filepath = $folderpath . '/' . $filename;
            if (file_exists($filepath)) {
                $text = 'File exists: ' . $filename . PHP_EOL;
                $output->writeln($text);
            }
            $classname = ucfirst($name);
            $template = "<?php

class Migration_$classname extends CI_Migration {

    public function up() {
        
    }

    public function down() {
    
    }

}";
            try {
                $file = fopen($filepath, "w");
                $content = $template;
                fwrite($file, $content);
                fclose($file);
            } catch (Exception $ex) {
                $text = 'Error ' . $ex->getMessage() . PHP_EOL;
                $output->writeln($text);
            }
            $text = 'migration created successfully' . PHP_EOL;
            $output->writeln($text);
            return;
        } catch (Exception $ex) {
            $text = 'can\'t create migration ' . $ex->getMessage() . PHP_EOL;
            $output->writeln($text);
        }
    }

}
