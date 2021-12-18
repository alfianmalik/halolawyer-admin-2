<?php


namespace App\Utilities;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ImageBase64Processor
{
    protected $fileName;
    /**
     * @var UploadedFile
     */
    private $image;
    private $path;
    private $filesystems;

    /**
     * ImageProcessor constructor.
     * @param UploadedFile $image
     * @param string $path
     */
    public function __construct($image, $path)
    {
        $this->image = $image;
        $this->path = $path;
        $this->filesystems = config('filesystems.default');
        $this->fileName = Str::random(32);
    }

    /**
     * @param int $compression
     * @return $this
     */
    public function upload($compression = 75)
    {
        Storage::disk($this->filesystems)->put($this->path . '/' . $this->fileName . '.'. explode('/', mime_content_type($this->image))[1], $this->compressImage($compression));
        return $this;
    }

    /**
     * @param int $compression
     * @return string
     */
    private function compressImage($compression)
    {
        return Image::make(file_get_contents($this->image))->encode(explode('/', mime_content_type($this->image))[1], $compression)->stream()->__toString();
    }

    /**
     * @return string
     */
    public function url()
    {

        if ($this->filesystems=='local' || $this->filesystems=='public') {
            return asset(Storage::disk($this->filesystems)->url($this->path . '/' . $this->fileName . '.'. explode('/', mime_content_type($this->image))[1]));
        }

        return Storage::disk($this->filesystems)->url($this->path . '/' . $this->fileName . '.'. explode('/', mime_content_type($this->image))[1]);
    }
}
