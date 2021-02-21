<?php

namespace App\Repositories;

use App\Models\Image;

class ImageRepository
{
    /**
     * @var Image
     */
    protected $image;

    /**
     * Constructor de ImageRepository.
     *
     * @param Image $image
     */
    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    /**
     * Guarda un nuevo Image en la DB.
     *
     * @param array $data
     * @return Image
     */
    public function save(array $data)
    {
        $image = new $this->image($data);
        $image->save();

        return $image->fresh();
    }

    /**
     * Guarda un nuevo Image en la DB.
     *
     * @param array $data
     * @param int $id
     * @return Image
     */
    public function update(array $data, $id)
    {
        $image = $this->image->find($id);
        $image->update($data);

        return $image->fresh();
    }

    /**
     * Borra un Image de la DB pro su id.
     *
     * @param int $id
     * @return Image
     */
    public function delete($id)
    {
        $image = $this->image->find($id);
        $image->delete();

        return $image;
    }

    /**
     * Retorna una Image por su ID.
     *
     * @param int $id
     * @return Image
     */
    public function findByID(int $id)
    {
        return $this->image->find($id);
    }
}
