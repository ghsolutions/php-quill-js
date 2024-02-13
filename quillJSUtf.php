<?php
/**
 * @author G. Dinnebier
 * @version 1.0 (Quill 2.0))
 * @copyright gh-solutions 2024
 */
class quillJSUtf
{
    public $jsPath;
    public $cssPath;

    public function __construct($jsPath, $cssPath)
    {
        $this->jsPath = $jsPath;
        $this->cssPath = $cssPath;
    }

    public function setCss()
    {
        return '<link rel="stylesheet" href="' . $this->cssPath . 'quill/quill.snow.css" />';
    }

    public function setInlkineCss($minHeight = '200px')
    {
        return '<style>'
            . '.ql-editor{'
            . 'min-height:'.$minHeight.';'
            . '}'
            . '</style>';
    }

    public function setJs()
    {
        return '<script src="' . $this->jsPath . 'quill/quill.min.js"></script>'
            . '<script src="' . $this->jsPath . 'quill-textarea.js"></script>';
    }

    public function setConfig()
    {
        return "modules: { toolbar: [\n"
            . "['bold', 'italic', 'underline'],\n"
            . "[{ 'list': 'ordered'}, { 'list': 'bullet' }],\n"
            . "[{ 'header': [1, 2, 3, 4, 5, 6, false] }],\n"
            . "[{ 'color': [] }, { 'background': [] }],\n"
            . "[{ 'align': [] }],\n"
            . "]},\n"
            . "theme: 'snow'\n";
    }
    public function setEditor()
    {
        return "<script>\n"
            . "(function() {\n"
            . "quilljs_textarea('.quilljs-textarea', {\n"
            . $this->setConfig()
            . "});\n"
            . "})();\n"
            . "</script>";
    }

    public function setTextField($feldName, $feldId, $feldValue){
        return '<textarea class="ql-editor quilljs-textarea" id="'.$feldId.'" name="'.$feldName.'">'.$feldValue.'</textarea>';
    }
}
