require __DIR__ . '/vendor/autoload.php';

use Spatie\FlareClient\Flare;
use Spatie\FlareClient\FlareConfig;

$config = FlareConfig::make('zmbMTkDh5vLmSTQAgW1raLESjsfumAJ0')->useDefaults()->trace();

$flare = Flare::make($config)->registerFlareHandlers();
