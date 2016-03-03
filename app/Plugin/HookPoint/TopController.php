use Eccube\Application;

class TopController
{

    public function index(Application $app)
    {
        error_log('TopController::index')
        return $app->render('index.twig');
    }
}