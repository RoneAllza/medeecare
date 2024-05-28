<?php

namespace Tests;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Illuminate\Support\Collection;
use Laravel\Dusk\TestCase as BaseTestCase;
use Symfony\Component\Process\Process;
use PHPUnit\Framework\Attributes\BeforeClass;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Prepare for Dusk test execution.
     */
    #[BeforeClass]
    public static function prepare(): void
    {
        if (! static::runningInSail()) {
            static::startChromeDriver();
        }
    }

    /**
     * Create the RemoteWebDriver instance.
     */
    protected function driver(): RemoteWebDriver
    {
        $options = (new ChromeOptions)->addArguments(collect([
            $this->shouldStartMaximized() ? '--start-maximized' : '--window-size=1920,1080',
        ])->unless($this->hasHeadlessDisabled(), function (Collection $items) {
            return $items->merge([
                '--disable-gpu',
                '--headless=new',
            ]);
        })->all());

        return RemoteWebDriver::create(
            $_ENV['DUSK_DRIVER_URL'] ?? 'http://localhost:9515',
            DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }

    /**
     * Start the ChromeDriver process.
     *
     * @return void
     */
    public static function startChromeDriver(array $arguments = [])
    {
        $driverPath = static::findChromeDriver();

        static::stopChromeDriver();

        $process = new Process([$driverPath]);
        $process->start();

        // Give the process a second to start
        sleep(1);

        static::storeChromeDriverProcess($process);
    }

    /**
     * Find the ChromeDriver executable path.
     *
     * @return string
     */
    protected static function findChromeDriver()
{
    $driverPath = realpath(__DIR__ . '/../../vendor/laravel/dusk/bin/chromedriver');

    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $driverPath .= '.exe';
    }

    if (!file_exists($driverPath)) {
        throw new \Exception("Invalid path to Chromedriver [{$driverPath}]. Make sure to install the Chromedriver first by running the dusk:chrome-driver command.");
    }

    return $driverPath;
}


    /**
     * Stop the ChromeDriver process.
     *
     * @return void
     */
    public static function stopChromeDriver()
    {
        // Logic to stop the ChromeDriver if it's already running
    }

    /**
     * Store the ChromeDriver process instance.
     *
     * @param  \Symfony\Component\Process\Process  $process
     * @return void
     */
    protected static function storeChromeDriverProcess($process)
    {
        static::$chromeProcess = $process;
    }
}
