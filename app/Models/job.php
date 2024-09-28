<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{
    use HasFactory;
    protected $table = 'jobs_listings';
    protected $fillable = ['title','salary'];
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,foreignPivotKey:"job_listing_id");
    }
}


// class Job
// {
//     public static function all(): array
//     {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                 'salary' => '$30000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Software Engineer',
//                 'salary' => '$32000'
//             ]
//         ];
//     }
//     public static function find(int $id): array
//     {
//         $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
//         if (!$job) {
//             # code...
//             abort(404);
//         }
//         return $job;
//     }
// }
