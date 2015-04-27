<?php namespace App\Console\Commands;

use Laradic\Console\Command;

use LaradicAdmin\Attributes\Http\Controllers\AttributesController;

/**
 * Class Test
 *
 * @package     App\Console\Commands
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 * @method
 */
class Test extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'test:one';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $extensions = app('extensions');
        $f = app('files');
        $raw = $f->get(base_path('Laradic/Themes/resources/docs/phpdoc/structure.xml'));
        $xml = simplexml_load_string($raw);
        $xml = json_encode($xml);
        $xml = json_decode($xml, true);
        $this->dump($xml);
        #$extensions->get('laradic/admin')->runSeeders();
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            #	['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            #['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
