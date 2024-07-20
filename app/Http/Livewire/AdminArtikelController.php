<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use App\Models\GaleriFoto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use WireUi\Traits\Actions;

class AdminArtikelController extends Component
{

    use Actions;
    use WithFileUploads;

    public $artikelId   = null;
    public $name        = null;
    public $description = null;
    public $article_link = null;
    public $image_article;

    public $modalCreate = false;
    public $modalEdit   = false;

    public function render()
    {
        $artikels = Artikel::all();
        return view('admin.artikel.index', compact('artikels'));
    }

    public function create()
    {
        $this->reset();

        $this->modalCreate = true;
    }

    public function store()
    {
        $this->validate(rules: [
            'name'           => 'required',
            'description'    => 'required',
            'article_link'    => 'required',
            'image_article'  => 'required',
        ]);

        $galeri = new Artikel();
        $galeri->name          = $this->name;
        $galeri->description   = $this->description;
        $galeri->article_link  = $this->article_link;
        $galeri->image_article = $this->image_article->store(path: 'brosur');
        $galeri->save();

        $this->modalCreate = false;
        session()->flash('message', 'Artikel successfully created.');
    }

    public function edit(Artikel $artikel)
    {
        $this->reset(['modalCreate', 'modalEdit']);
        $this->modalEdit    = true;

        $this->artikelId    = $artikel->id;
        $this->name         = $artikel->name;
        $this->description  = $artikel->description;
        $this->article_link = $artikel->article_link;
    }

    public function update(Artikel $artikel)
    {
        $artikel->name         = $this->name;
        $artikel->description  = $this->description;
        $artikel->article_link = $this->article_link;
        if ($this->image_article) {
            $artikel->image_article = $this->image_article->store(path: 'artikel');
        }

        $artikel->save();

        $this->modalEdit = false;
        session()->flash('message', 'Artikel successfully updated.');
    }

    public function delete(Artikel $artikel)
    {
        $this->dialog()->confirm([
            'title'       => 'DELETE',
            'description' => 'Yakin ingin menghapus data?',
            'acceptLabel' => 'Delete',
            'method'      => 'destroy',
            'params'      => $artikel,
        ]);
    }

    public function destroy(Artikel $artikel)
    {
        Storage::delete($artikel->image_article);
        $artikel->delete();

        session()->flash('message', 'Artikel successfully deleted.');
    }
}
