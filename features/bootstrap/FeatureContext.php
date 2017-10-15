<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext
{
    private $login = '';
    private $password = 'abc123';

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @beforeScenario
     */
    public function cleanDatabase()
    {
        $config = [
            'db_host' => 'db',
            'db_user' => 'symfony',
            'db_database_name' => 'symfony',
            'db_password' => 'symfony123!#',
            'db_port' => '5432'
        ];

        $connection = new \PDO(
            'pgsql:host='. $config['db_host'] .';port='. $config['db_port'] .';dbname='. $config['db_database_name'],
            $config['db_user'],
            $config['db_password']
        );
        $connection->query('DELETE FROM users');
    }

    /**
     * @Given I has account with :email email
     */
    public function iHasAccountWithEmail($email)
    {
        $this->visitPath('/app_dev.php/register');
        $this
            ->getSession()
            ->getPage()
            ->findField('register[email]')
            ->setValue($email)
        ;

        $this
            ->getSession()
            ->getPage()
            ->findField('register[password]')
            ->setValue($this->password)
        ;

        $this
            ->getSession()
            ->getPage()
            ->pressButton('Register')
        ;

        $this->assertSession()->pageTextContains('You just registered successfully');
        $this->login = $email;
    }

    /**
     * @When I log in into system
     */
    public function iLogInIntoSystem()
    {
        if (!$this->login) {
            throw new \RuntimeException('User is not registered in');
        }

        $this->visitPath('/index.php');
        $this
            ->getSession()
            ->getPage()
            ->findField('email')
            ->setValue($this->login)
        ;

        $this
            ->getSession()
            ->getPage()
            ->findField('password')
            ->setValue($this->password)
        ;

        $this
            ->getSession()
            ->getPage()
            ->pressButton('Login')
        ;
    }

    /**
     * @Then I should see dashboard
     */
    public function iShouldSeeDashboard()
    {
        $this->assertSession()->pageTextContains('Dashboard');
        $this->assertSession()->statusCodeEquals(200);
    }
}
