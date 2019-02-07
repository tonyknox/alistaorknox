<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use Searchable;

     public function getElasticsearchRecord()
    {
        /**
         * Load the categories relation so that it's available
         *  in the laravel toArray method
         */
        $this->addresses;

       return $this->toArray();
    }

    protected $primaryKey = 'buildid';

    protected $fillable = ['buildname', 'builddescription', 'date_built', 'project_pjid','address_adrid','client', 'buildnote', 'buildimage', 'buildplan', 'jobnumber', 'numdrawings', 'otherprofessional', 'drawingdescription', 'drawinglocation', 'keywords', 'year_built', 'manuscriptlocation', 'manuscriptinfo', 'manuscriptcomment', 'drawinglocation2', 'buildplan2'];

    
    public function addresses()
    {
          return $this->hasOne(Address::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
     
    public function akimages()
    {
      return $this->hasMany(Akimage::class);
    }
    
    /**
     * @var string
     */
    protected $indexConfigurator = BuildingConfigurator::class;

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
          'buildname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'builddescription' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'date_built' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'client' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'jobnumber' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'buildnote' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'year_built' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'manuscriptinfo' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'drawingdescription' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'buildimage' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          
        ]
    ];
}