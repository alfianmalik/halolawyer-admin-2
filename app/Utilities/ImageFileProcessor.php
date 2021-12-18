<?php
/**
 * Created by PhpStorm.
 * User: satria
 * Date: 12/05/2017
 * Time: 17:42
 */

namespace App\Utilities;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Str;

class ImageFileProcessor
{
    protected $fileName;
    /**
     * @var UploadedFile
     */
    private $image;
    private $path;
    private $filesystems;
    private $extension;

    /**
     * ImageProcessor constructor.
     * @param UploadedFile $file
     * @param string $path
     */
    public function __construct(UploadedFile $file, $path, $extension)
     {
	     $this->file = $file;
	     $this->path = $path;
	     $this->extension = $extension;
	     $this->filesystems = config('filesystems.default');
	     $this->fileName = Str::random(32);
	 }

	 /**
	  * @return $this
	  */
	 public function upload()
	 {
	     Storage::disk($this->filesystems)->put($this->path . '/' . $this->fileName . $this->extension, $this->file);
	     return $this;
	 }

	 /**
	  * @return string
	  */
	 public function url()
	 {

	 	if ($this->filesystems=='local' || $this->filesystems=='public') {
	 		return asset(Storage::disk($this->filesystems)->url($this->path . '/' . $this->fileName . $this->extension));
	 	}

	 	return Storage::disk($this->filesystems)->url($this->path . '/' . $this->fileName . $this->extension);
	 }
}
