<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use Searchable;

     public function index()
    {
      $plans = $this
      ->paginate($this->getPlans())
      ->setPath('plans');
    }

    protected $primaryKey = 'plid';

    protected $fillable = ['plinfo','plname','address_adrid','building_buildid','thumbs'];

    
    public function buildings()
    {
          return $this->belongsTo(Building::class, 'building_buildid');
    }

    public function addresses()
    {
        return $this->belongsTo(Address::class, 'address_adrid');
    }
    
    /**
     * @var string
     */
    protected $indexConfigurator = PlanConfigurator::class;

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
          'plinfo' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'plname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'plid' => [
              'type' => 'long'
          ],
        ]
    ];
}