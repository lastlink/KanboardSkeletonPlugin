
<?php

require_once 'tests/units/Base.php';

use Kanboard\Core\Plugin\Loader;
use Kanboard\Plugin\PluginNameExampleStudlyCaps\Helper\MyHelper;

class MyHelpertTest extends Base
{
    /**
     * @var Plugin
     */
    protected $plugin;

    protected function setUp(): void
    {
        parent::setUp();

        $plugin = new Loader($this->container);
        $plugin->scan();
    }

    public function testBytes(){
        $helper = new MyHelper($this->container);

        $result = $helper->testFunction();

        $this->assertEquals(true, $result);
    }
}