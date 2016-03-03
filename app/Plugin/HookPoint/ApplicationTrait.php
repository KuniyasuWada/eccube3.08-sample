public function render($view, array $parameters = array(), Response $response = null)
{
    $twig = $this['twig'];

    if ($response instanceof StreamedResponse) {
        $response->setCallback(function () use ($twig, $view, $parameters) {
            $twig->display($view, $parameters);
        });
    } else {
        if (null === $response) {
            $response = new Response();
        }
        $response->setContent($twig->render($view, $parameters));
    }

    error_log("twig render");

    return $response;
}