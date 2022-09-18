<?php

namespace Spatie\Ignition\ErrorPage;

class Renderer
{
    /**
     * @param array<string, mixed> $data
     *
     * @return void
     */
    public function render(array $data, bool $return = false): void|string
    {
        $viewFile = __DIR__ . '/../../resources/views/errorPage.php';

        extract($data, EXTR_OVERWRITE);

        if (true === $return) {
            ob_start();
            include $viewFile;
            return ob_get_clean();
        }
        include $viewFile;
    }
}
