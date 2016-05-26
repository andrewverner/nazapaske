<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 2/13/15
 * Time: 9:23 AM
 * To change this template use File | Settings | File Templates.
 */

class WaterMarkOpts {

    const VERTICAL_ALIGN_NONE = 0;
    const VERTICAL_ALIGN_TOP = 1;
    const VERTICAL_ALIGN_MIDDLE = 2;
    const VERTICAL_ALIGN_BOTTOM = 3;

    const HORIZONTAL_ALIGN_NONE = 0;
    const HORIZONTAL_ALIGN_LEFT = 1;
    const HORIZONTAL_ALIGN_CENTER = 2;
    const HORIZONTAL_ALIGN_RIGHT = 3;

    const STAMP_TYPE_IMAGE = 1;
    const STAMP_TYPE_TEXT = 2;

    const OUTPUT_TYPE_PNG = 1;
    const OUTPUT_TYPE_JPG = 2;
    const OUTPUT_TYPE_GIF = 3;
    const OUTPUT_TYPE_BMP = 4;

    public $verticalAlign = 2;
    public $horizontalAlign = 2;
    public $rotation = 0;
    public $sourceFile;
    public $stampFile;
    public $stampType = 1;
    public $scale = true;
    public $ratio = 0.5;
    public $resultFilePrefix = 'wm_';
    public $resultFilePostfix;
    public $sourceFilePath;
    public $stampFilePath;
    public $x = 50;
    public $y = 50;
    public $alpha = true;
    public $outputType = 1;
    public $rotate = 0;
    public $opacity = 0;
    public $outputFilePath;

    public function init()
    {

    }

}

class WaterMark
{

    public $opts;
    private $_errors;

    public function init()
    {
        $this->opts = new WaterMarkOpts;
        $this->_errors = array();
    }

    public function run(WaterMarkOpts $opts)
    {
        $this->_prepare($opts);
        if (empty($this->_errors)) {
            if ($source = $this->_createImage("$opts->sourceFilePath/$opts->sourceFile")) {
                list($fileName) = explode('.',basename("$opts->sourceFilePath/$opts->sourceFile"));
                $fileName = trim($fileName);
                switch ($opts->stampType) {
                    case WaterMarkOpts::STAMP_TYPE_IMAGE:
                        $stamp = $this->_createImage("$opts->stampFilePath/$opts->stampFile");
                        list($stampWidth,$stampHeight) = array(imagesx($stamp),imagesy($stamp));
                        if ($opts->scale) $stamp = imagescale($stamp,imagesx($source)*$opts->ratio,($stampHeight*imagesx($source)*$opts->ratio)/$stampWidth);
                        if ($opts->rotate) $stamp = imagerotate($stamp,$opts->rotate,imagecolorallocatealpha($stamp,255,255,255,127));
                        break;
                    case WaterMarkOpts::STAMP_TYPE_TEXT:

                        break;
                    default: $stamp = false; break;
                }
                if ($stamp) {
                    switch ($opts->horizontalAlign) {
                        case WaterMarkOpts::HORIZONTAL_ALIGN_LEFT: $x = round($opts->x*$opts->ratio); break;
                        case WaterMarkOpts::HORIZONTAL_ALIGN_CENTER: $x = round((imagesx($source)-imagesx($stamp))/2); break;
                        case WaterMarkOpts::HORIZONTAL_ALIGN_RIGHT: $x = round(imagesx($source)-($opts->x*$opts->ratio)-imagesx($stamp)); break;
                        default: $x = $opts->x*$opts->ratio; break;
                    }
                    switch ($opts->verticalAlign) {
                        case WaterMarkOpts::VERTICAL_ALIGN_TOP: $y = round($opts->y*$opts->ratio); break;
                        case WaterMarkOpts::VERTICAL_ALIGN_MIDDLE: $y = round((imagesy($source)-imagesy($stamp))/2); break;
                        case WaterMarkOpts::VERTICAL_ALIGN_BOTTOM: $y = round(imagesy($source)-($opts->y*$opts->ratio)-imagesy($stamp)); break;
                        default: $x = $opts->y*$opts->ratio; break;
                    }
                    if ($opts->opacity) imagecopymerge($source,$stamp,$x,$y,0,0,imagesx($stamp),imagesy($stamp),$opts->opacity); else imagecopy($source,$stamp,$x,$y,0,0,imagesx($stamp),imagesy($stamp));
                    $outputFileName = $opts->resultFilePrefix.$fileName.$opts->resultFilePostfix;
                    try {
                        switch ($opts->outputType) {
                            case WaterMarkOpts::OUTPUT_TYPE_BMP: imagewbmp($source,"$opts->outputFilePath/$outputFileName.wbmp"); break;
                            case WaterMarkOpts::OUTPUT_TYPE_GIF: imagegif($source,"$opts->outputFilePath/$outputFileName.gif"); break;
                            case WaterMarkOpts::OUTPUT_TYPE_JPG: imagejpeg($source,"$opts->outputFilePath/$outputFileName.jpg"); break;
                            case WaterMarkOpts::OUTPUT_TYPE_PNG: imagepng($source,"$opts->outputFilePath/$outputFileName.png"); break;
                        }
                    } catch (Exception $e) {
                        $this->_addError($e->getMessage());
                        return false;
                    }
                    imagedestroy($source);
                    imagedestroy($stamp);
                    return true;
                } else {
                    $this->_addError("Unknown stamp type or stamp file type");
                    return false;
                }
            } else {
                $this->_addError("Unsupported source file type");
                return false;
            }
        }
        else
            return false;
    }

    private function _createImage($path) {
        switch (mime_content_type($path)) {
            case 'image/png': $image = imagecreatefrompng($path); imagesavealpha($image, true); break;
            case 'image/jpeg': $image = imagecreatefromjpeg($path); break;
            case 'image/gif': $image = imagecreatefromgif($path); break;
            case 'image/bmp': $image = imagecreatefromwbmp($path); break;
            default: $image = false; break;
        }
        return $image;
    }

    private function _prepare(WaterMarkOpts $opts)
    {
        if (!$opts->sourceFilePath) $this->_addError("Source file path is undefined");
        if (!$opts->sourceFile) $this->_addError("Source file is undefined");
        if (!file_exists("$opts->sourceFilePath/$opts->sourceFile")) $this->_addError("Source file doesn't exist");
        if ($opts->stampType == WaterMarkOpts::STAMP_TYPE_IMAGE && !$opts->stampFile) $this->_addError("Stamp file is undefined");
        if ($opts->stampType == WaterMarkOpts::STAMP_TYPE_IMAGE && !$opts->stampFilePath) $this->_addError("Stamp file path is undefined");
        if ($opts->stampType == WaterMarkOpts::STAMP_TYPE_IMAGE && !file_exists("$opts->stampFilePath/$opts->stampFile")) $this->_addError("Stamp file doesn't exist");
        if ($opts->scale) {
            list($v1,$v2,$v3) = explode(".",substr(phpversion(),0,5));
            if (!($v1 >= 5 && $v2 >= 5 && $v3 >= 0)) $this->_addError("Your version of PHP (".phpversion().") doesn't support image scaling. Update you PHP to version >= 5.5.0");
            if ($opts->ratio <= 0) $this->_addError("Incorrect ratio value");
        }
        if ($opts->verticalAlign < 0 || $opts->verticalAlign > 3) $this->_addError("Unknown vertical align type");
        if ($opts->horizontalAlign < 0 || $opts->horizontalAlign > 3) $this->_addError("Unknown horizontal align type");
        if ($opts->x < 0) $this->_addError("X coordinate can't be less than 0");
        if ($opts->y < 0) $this->_addError("Y coordinate can't be less than 0");
        if ($opts->outputType < 1 && $opts->outputType > 4) $this->_addError("Incorrect output type");
        if (!$opts->outputFilePath) $opts->outputFilePath = $opts->sourceFilePath;
    }

    private function _addError($message)
    {
        $this->_errors[] = $message;
    }

    public function error()
    {
        return $this->_errors;
    }

}