<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use Searchable;

    protected $primaryKey = 'chapid';

    protected $fillable = ['chapname', 'chapinfo', 'book_bkid', 'sort_order', 'keyword'];

    public function books()
    {
          return $this->belongsTo(Book::class);
    }
    
    public function akimages()
    {
      return $this->hasMany(Akimage::class);
    }

    /**
     * @var string
     */
    protected $indexConfigurator = ChapterConfigurator::class;

    /**
     * @var array
     */
    protected $searchRules = [
        //
    ];

    /**
     * @var array
     */
    protected $mapping = [
         'properties' => [
          'chapname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'chapinfo' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          
        ]
    ];
}