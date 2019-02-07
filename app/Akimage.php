<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Akimage extends Model
{
    use Searchable;

    protected $primaryKey = 'imgid';
    protected $fillable = ['imgname','imgpath','imgextension','alt','caption','credit','buildings_buildid','people_ppid','directories_dirid','chapters_id'];

    public function imgwidth()
    {
      list($w,$h) = getimagesize("imgpath/imgname.imgextension");
        if($h > $w){
          $width = $w / $h * 100;
          $width = "$width%";
        };     
      return $width;
    }

    public function buildings()
    {
      return $this->belongsTo(Building::class, 'building_buildid');
    }
    public function people()
    {
          return $this->belongsTo(Person::class);
    }

    public function directories()
    {
          return $this->belongsTo(Directory::class, 'directories_dirid');
    }

    public function chapters()
    {
          return $this->belongsTo(Chapter::class, 'chapters_chapid');
    }
    
    /**
     * @var string
     */
    protected $indexConfigurator = AkimageConfigurator::class;

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
          'imgname' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'imgpath' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'alt' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'caption' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          
        ]
    ];
}