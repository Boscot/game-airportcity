<?php
/**
 * AirportcityTest
 *
 * PHP Version 5.3
 *
 * @category Test
 * @package  Boscot
 * @license  http://www.gnu.org/licenses/gpl-3.0.txt GPL v3
 * @link     None
 */

require_once __DIR__."/../vendor/autoload.php";

use Boscot\Test\GameTest;


/**
 * Class: AirportcityTest
 * 
 * Test Airportcity classes
 *
 * @category Test
 * @package  Boscot
 * @license  http://www.gnu.org/licenses/gpl-3.0.txt GPL v3
 * @link     None
 * @see      PHPUnit_Framework_TestCase
 */
class AirportcityTest extends GameTest
{
								public $domain = "ipad.mobileairport.road404.ru";

    /**
     * Configuration
     *
     * Create Airportcity object
     *
     * @return void
     */
    protected function setUp()
				{

    }

    
    /**
     * Test all action method of the controller
     *
     * @return void
     */
    public function testHack()
				{
												$request =
<<<EOF
GET /logic?cmd=promo_friend.get_reward HTTP/1.1
Host: $this->domain
Connection: close


EOF;
$content = $this->sendData($request, GameTest::DOMAIN);

$this->assertSame(1, preg_match('#money_game=10000#ms', $content));
$this->assertSame(1, preg_match('#money_real=100#ms', $content));

    }


}

