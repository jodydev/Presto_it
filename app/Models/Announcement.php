<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['title', 'price', 'description'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function category(){
        //relazione one to may 
        return $this->belongsTo(Category::class);
    }

    public static function setAccepted($value, $id){
        $announcement = self::find($id);
        //assegno alla colonna is_accepted dell'annuncio il valore scelto dall'utente (true o false a seconda del tasto che preme)
        $announcement->is_accepted = $value;
        $announcement->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        //se il valore è null il conteggio aumenta
        return Announcement::where('is_accepted', null)->where('user_id','!=',Auth::id())->count();
    }

    public function toSearchableArray()
{
    $category = $this->category;


    $array =[
        'id' => $this->id,
        'title' => $this->title,
        'description' => $this->description,
        'price' => $this->price,
        'category' => $this->category,
        'user_id' => $this->user_id,

    ];

    // Define the searchable attributes of your model
    return $array;
}

    public function images(){
        return $this->hasMany(Image::class);
    }
}
