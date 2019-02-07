<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Searchable;

    protected $primaryKey = 'pjid';

    protected $fillable = ['pjname', 'pjtype', 'pjinfo'];

    public function buildings()
    {
        return $this->belongsToMany(Building::class);
    }
    
    /**
     * @var string
     */
    protected $indexConfigurator = ProjectConfigurator::class;

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
          'pjname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'plname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'pjinfo' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
        ]
    ];
}