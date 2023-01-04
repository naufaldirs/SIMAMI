<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'nik' => 'required',
            'nisn' => 'required',
            'name' => 'required',
            'npwp' => 'required',
            'gender' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|date',
            'goldar' => 'required',
            'ibu' => 'required',
            'ayah' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'kodepos' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'nama_sekolah' => 'required',
            'nilai_raport' => 'required',
            'alamat_sekolah' => 'required',
            'kota_sekolah' => 'required',
            'tahunlulus'=> 'required',
            'jurusan1' => 'required',
            'jurusan2' => 'required',
        ];
    }
}
