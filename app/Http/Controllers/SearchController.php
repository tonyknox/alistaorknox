<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Akimage;
use App\Chapter;
use App\Plan;
use App\Address;
use App\Person;
use App\Book;
use App\Directory;

class SearchController extends Controller
{
// BUILDINGS------------------------------------------------------------
	public function searchbuildings(Request $request)
	{
		list($buildings,$num) = searchQuery($request,'App\Building');

		if( $num>1){
			return view('Building.index', compact('buildings'));
		}
		elseif($num == 1){
			$build = $buildings[0]['buildid'];	
			$building = $buildings[0];
			
			list($prevPage,$nextPage) = nextBook('App\Building','buildid',$building->buildid,'');
			
			if(preg_match('/YLTAD28 \d+/',$building->drawinglocation,$match)){
				$location = $match[0];
			}

	        if(isset($location)){
	            $builds = Building::where('client', 'like', "%".$building->client."%")->orWhere('drawinglocation',$location)->get();
	            return view('Building.show', compact(['building', 'addresses','akimages','projects']))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('builds',$building);
	        }
	        else{
	            $builds = Building::where('client', 'like', "%".$building->client."%")->get();
	            return view('Building.show', compact(['building', 'addresses','akimages','projects']))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('builds',$builds[0]);
	        } 
        }  		
	}

// ADDRESSES------------------------------------------------------------

	public function searchaddresses(Request $request)
	{
		list($addresses,$num) = searchQuery($request,'App\Address');
		
			if( $num>1){
				return view('Address.index', compact('addresses'));
			}
			elseif($num == 1){
				$adr = $addresses[0]['adrid'];
				$addresses = Address::find($adr);
				list($prevPage,$nextPage) = nextBook('App\Address','adrid',$adr,'');
				return view('Address.show', compact('addresses'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('address',$addresses);
			}
			else{	

				return view('Address.index', ['noresult'=>'No address matches your query. Try again . . .']);
			}
		
	}

// IMAGES------------------------------------------------------------

	public function searchimages(Request $request)
	{
		list($akimages,$num) = searchQuery($request,'App\Akimage');
		
		if(isset($num)){

			if( $num>1){
				return view('Akimage.index', compact('akimages'));
			}
			elseif($num == 1){
				$img = $akimages[0]['imgid'];
				$akimage = $Akimages[0];
				list($big,$small,$thumb,$width) = imgsze($akimage->imgpath,$akimage->imgname,$akimage->imgextension);
				list($prevPage,$nextPage) = nextBook('App\Akimage','imgid',$akimage->imgid,'');
	    		list($prevChap,$nextChap) = nextChapter('App\Akimage','imgid',$akimage->imgid,'building_buildid',$akimage->building_buildid);
			
				return view('Akimage.show', compact('akimage'))->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('nextChap', $nextChap)->with('prevChap', $prevChap)->with('big', $big)->with('small', $small)->with('thumb', $thumb)->with('width', $width)->with('akimages',$akimage);
			}
			else{
				return view('Akimage.index', ['noresult'=>'No image matches your query. Try again . . .']);
			}
		}
		else{
			return view('Akimage.index', ['noresult'=>'No image matches your query. Try again . . .']);
		}		
	}

// PLANS------------------------------------------------------------

	public function searchplans(Request $request)
	{
		list($plans,$num) = searchQuery($request,'App\Plan');
		
		if( $num>1){
			return view('Plan.index', compact('plans'))->with('plan',$plans);
		}
		elseif($num == 1){
			$id = $plans[0]['plid'];
			$plans = $plans[0];	
			
			list($prevPage,$nextPage) = nextBook('App\Plan','plid',$id,'');

			return view('Plan.show', compact('plans'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('plan',$plans);
		}
		else{
			return view('Plan.index', ['noresult'=>'No plan matches your query. Try again . . .'])->with('plans',$num);	
		}
	}

// CHAPTERS------------------------------------------------------------

	public function searchchapters(Request $request)
	{	
		list($chapter,$num) = searchQuery($request,'App\Chapter');
			
		if( $num > 1){
			$bks = Book::get();
			return view('Chapter.index', compact('chapter'))->with('bks',$bks);
		}
		elseif($num == 1){
			$id = $chapter[0]['book_bkid'];
			$chaps = Chapter::where('book_bkid',$id)->get(); 
			$book = Book::where('bkid',$id)->get();
			$chapters = $chapter[0];

			list($prevPage,$nextPage) = nextBook('App\Chapter','chapid',$chapters->chapid,'chapid');
        	list($prevChap,$nextChap) = nextChapter('App\Chapter','chapid',$chapters->chapid,'book_bkid',$chapters->book_bkid);

			return view('Chapter.show', compact('chapters'))->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('nextChap', $nextChap)->with('prevChap', $prevChap)->with('chapter',$chapters)->with('chaps',$chaps);
		}
		else{	 
			return view('Chapter.index', ['noresult'=>'No chapter matches your query. Try again . . .']);
		}
	}

// PEOPLE------------------------------------------------------------

	public function searchpeople(Request $request)
	{
		list($people,$num) = searchQuery($request,'App\Person');

		if( $num>1){ 
			return view('Person.index', compact('people'))->with('person',$people);
		}
		elseif($num == 1){
			$ppid = $people[0]['ppid']; 
			$ppl = Person::orderBy('pptype')->orderBy('ppname')->orderBy('ppfirst_name')->get();
			list($prevPage,$nextPage) = nextBook('App\Person','ppid',$ppid,'');
			return view('Person.show', compact('people'))->with('person',$people[0])->with('ppl',$ppl)->with('prevPage',$prevPage)->with('nextPage',$nextPage);
		}
		else{	
			return view('Person.index', ['noresult'=>'No person matches your query. Try again . . .']);
		}
	}


// DIRECTORIES------------------------------------------------------------

	public function searchdirectories(Request $request)
	{
		list($directories,$num) = searchQuery($request,'App\Directory');
			
		if( $num>1){
			
			return view('Directory.index', compact('directories'))->with('directory',$directories);
		}
		elseif($num == 1){
			$dir = $directories[0]['dirid'];
			$directory = Directory::find($dir);
			
			list($prevPage,$nextPage) = nextBook('App\Directory','dirid',$dir,'');
    		// list($prevChap,$nextChap) = nextChapter('App\Directory','dirid',$dir,'building_buildid',$directory->building_buildid);
		
			return view('Directory.show', compact('directories'))->with('directory',$directory)->with('prevPage', $prevPage)->with('nextPage', $nextPage);
		}
		else
		{	
			return view('Directory.index', ['noresult'=>'No image matches your query. Try again . . .']);
		}
	}
}
