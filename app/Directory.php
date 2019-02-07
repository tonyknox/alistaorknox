<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    use Searchable;

    protected $primaryKey = 'dirid';

    protected $fillable = ['dirname', 'section_2', 'dirheader', 'title_info'];

    public function akimages()
    {
      return $this->belongsTo(Akimage::class);
    }
    
    /**
     * @var string
     */
    protected $indexConfigurator = DirectoryConfigurator::class;

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
          'section_1' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'section_2' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'section_3' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'dirheader' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'dirname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
        ]
    ];
}