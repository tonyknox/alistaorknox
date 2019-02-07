<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use Searchable;

    protected $primaryKey = 'ppid';

    protected $fillable = ['pptype', 'ppinfo', 'ppdescription', 'ppfirst_name', 'ppname','ppimgname','ppimgpath','ppimgext','ppalt','ppcaption'];

    public function akimages()
    {
      return $this->hasMany(Akimage::class);
    }
    
    /**
     * @var string
     */
    protected $indexConfigurator = PersonConfigurator::class;

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
          'ppinfo' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'ppdescription' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'ppfirst_name' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'ppname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'ppcaption' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
        ] 
    ];
}