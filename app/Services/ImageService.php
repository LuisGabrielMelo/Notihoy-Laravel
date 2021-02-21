<?php

namespace App\Services;

use Image as InterventionImage;
use App\Repositories\ImageRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use InvalidArgumentException;

class ImageService
{
    /**
     * @var ImageRepository
     */
    protected $imageRepository;

    /**
     * Constructor de ImageService.
     *
     * @param ImageRepository $imageRepository
     */
    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * Guarda un nuevo Image en la DB
     * y guarda el archivo en el storage.
     *
     * @param \Illuminate\Http\UploadedFile
     * @return Image|false
     */
    public function saveImage($file)
    {
        $data = $this->prepareImageData($file);
        $img = InterventionImage::make($file);

        DB::beginTransaction();
        try {
            $result = $this->imageRepository->save($data);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Hubo un error al guardar la imagen');

        }
        DB::commit();
        Storage::put($result->path, $img->encode());

        return $result;
    }

    /**
     * Guarda un nuevo archivo en el storage
     * y modifica la DB con el nuevo path.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @param int $id
     * @return Image|false
     */
    public function updateImage($file, $id)
    {
        $data = $this->prepareImageData($file);
        $new_img = InterventionImage::make($file);
        $old_img = $this->getImageByID($id);

        DB::beginTransaction();
        try {
            $result = $this->imageRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Hubo un error al guardar la imagen');
        }
        DB::commit();

        $this->deleteImageFile($old_img->path);
        Storage::put($result->path, $new_img->encode());

        return $result;
    }

    /**
     * Elimina una Image de la DB por su id
     * y elimina el archivo del storage.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @param int $id
     * @return Image
     */
    public function deleteImageByID(int $id)
    {
        DB::beginTransaction();
        try {
            $image = $this->imageRepository->delete($id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Hubo un error al borrar la imagen');
        }
        DB::commit();

        $this->deleteImageFile($image->path);

        return $image;
    }

    /**
     * Borra la Image del storage y la DB.
     *
     * @param string $path
     * @return bool
     */
    public function deleteImageFile(string $path)
    {
        return Storage::delete($path);
    }

    /**
     * Busca un registro de Image en la DB.
     *
     * @param int $id
     * @return Image
     */
    public function getImageByID($id)
    {
        return $this->imageRepository->findByID($id);
    }

    /**
     * Crea los datos necesarios para el nuevo archivo a guardar.
     *
     * @param \Illuminate\Http\UploadedFile
     * @return array
     */
    public function prepareImageData($file)
    {
        $extension = $file->getClientOriginalExtension();
        $hash = Str::uuid();

        $data = [];
        $data['path'] = "{$hash}.{$extension}";
        $data['uploader_id'] = Auth::guard('api')->id();

        return $data;
    }
}
