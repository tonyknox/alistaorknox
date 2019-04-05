<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use Searchable;

    protected $primaryKey = 'bkid';

    protected $fillable = ['bkname', 'bkdescription', 'bkinfo', 'author', 'book_sort','thumb','bktype'];

  
    public function chapters()
    {
        return $this->hasMany('App\Chapter', 'book_bkid');
    }
    
    /**
     * @var string
     */
    protected $indexConfigurator = BookConfigurator::class;

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
          'bkname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'bkdescription' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'author' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          
        ]
    ];
}