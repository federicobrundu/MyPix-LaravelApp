<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    /* Ai  model tendenzialmente va associata una tabella sul db
        Questo processo viene eseguito utilizzando le migration messe
        a disposizione da Laravel;

        Attraverso il comando php artisan make:migration <nome>
        Se utilizzi la convenzione di nomenclatura create_<nameModelPl>_table
        Laravel saprà già quale tabella referenziare;
    */
}
