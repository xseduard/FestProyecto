<?php

use Faker\Factory as Faker;
use App\Models\GrupoJurado;
use App\Repositories\GrupoJuradoRepository;

trait MakeGrupoJuradoTrait
{
    /**
     * Create fake instance of GrupoJurado and save it in database
     *
     * @param array $grupoJuradoFields
     * @return GrupoJurado
     */
    public function makeGrupoJurado($grupoJuradoFields = [])
    {
        /** @var GrupoJuradoRepository $grupoJuradoRepo */
        $grupoJuradoRepo = App::make(GrupoJuradoRepository::class);
        $theme = $this->fakeGrupoJuradoData($grupoJuradoFields);
        return $grupoJuradoRepo->create($theme);
    }

    /**
     * Get fake instance of GrupoJurado
     *
     * @param array $grupoJuradoFields
     * @return GrupoJurado
     */
    public function fakeGrupoJurado($grupoJuradoFields = [])
    {
        return new GrupoJurado($this->fakeGrupoJuradoData($grupoJuradoFields));
    }

    /**
     * Get fake data of GrupoJurado
     *
     * @param array $postFields
     * @return array
     */
    public function fakeGrupoJuradoData($grupoJuradoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo' => $fake->word,
            'regional_id' => $fake->word,
            'observaciones' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $grupoJuradoFields);
    }
}