<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use Searchable;

    protected $primaryKey = 'adrid';

    protected $fillable = ['suite', 'stnmbr', 'street', 'suburb', 'state', 'postcode', 'lot_number', 'municipality', 'sla'];


    public function buildings()
    {
        return $this->belongsTo(Building::class, 'building_buildid');
    }

    public function people()
    {
          return $this->belongsTo(Person::class);
    }

    public function plans()
    {
      return $this->hasMany(Plan::class);
    }

    /**
     * @var string
     */
    protected $indexConfigurator = AddressConfigurator::class;

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
          'suite' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'stnmbr' => [
              'type' => 'text'  
          ],
          'street' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'suburb' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'postcode' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'lot_number' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'adrid' => [
              'type' => 'long'
          ],
          
        ]
    ];
}