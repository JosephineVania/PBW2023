<?php

namespace App\Http\Livewire;

use App\Artikel;

use Livewire\Component;

class FormArtikel extends Component
{
    public $judul;
    public $deskripsi;
    public function render()
    {
        return view('livewire.form-artikel');
    }
    public function simpan(){
        $artikel = Artikel::create([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi
        ]);
        // manggil metode private untuk reset kolom
        $this->resetInput();
        
        // trigger
        $this->emit('indexArtikel', $artikel);
    }
    // reset kolom judul + artikel. Dibuat private krn hanya diakses di kelas sendiri
    private function resetInput(){
        $this->judul = null;
        $this->deskripsi = null;
    }
}
