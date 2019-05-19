<?php
use Cake\Database\Exception;

class View extends CommonModel
{

    private $data = [];
    private $renderFile = false;
    private $viewRoot;

    public function __construct($template)
    {
        $this->viewRoot = SITE_ROOT . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;

        try {
            $file = $this->viewRoot . $template;

            if (file_exists($file)) {
                $this->renderFile = $file;
            } else {
                throw new Exception('Template file not found');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function render()
    {
        ob_start();
        extract($this->data);
        include($this->renderFile);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}
