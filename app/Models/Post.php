<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

# Eloquent provides same API for SQL queries,
# It's also a relevant place to store business logic

class Post extends Model
{
    use HasFactory;
}
