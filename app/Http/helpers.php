<?php

function nextPage($mdl,$fld,$fldval,$relatedfld,$rfval){
dd($mdl);
	$page = $mdl::where($relatedfld,$rfval)->orderBy($fld)->get()->pluck($fld);
	$pos = $page->search($fldval);

	list($prevName,$nextName) = nextPrevious($pos,$page);
	
   	return [$prevName,$nextName];
}

function nextChapter($mdl,$fld,$fldval,$relatedfld,$rfval){	
	if(preg_match('/Akimage/', $mdl) || preg_match('/Chapter/', $mdl)){ 
		$chapter = $mdl::distinct($relatedfld)->orderBy($fld)->get([$relatedfld])->pluck($relatedfld);
		$pos = $chapter->search($rfval);

		list($prev,$next) = nextPrevious($pos,$chapter);

		$p = $mdl::where($relatedfld,$prev)->first();
		$n = $mdl::where($relatedfld,$next)->first();
	}
	else{
		$chapter = $mdl::distinct()->where($relatedfld, $rfval)->orderBy($fld)->get([$fld])->pluck($fld);
		$pos = $chapter->search($fldval);	

		list($prev,$next) = nextPrevious($pos,$chapter);	

		$p = $mdl::where($fld,$prev)->first();
		$n = $mdl::where($fld,$next)->first();
	}
	return [$p,$n];
}

function nextBook($mdl,$fld,$fldval,$id ){

	if(!strlen($id)){$id = $fld;}
	
	$bk = $mdl::distinct()->orderBy($id)->get([$fld])->pluck($fld);
	$pos = $bk->search($fldval);

	list($prev,$next) = nextPrevious($pos,$bk);

	$prev = $mdl::where($fld,$prev)->first();
	$next = $mdl::where($fld,$next)->first();
	
   	return [$prev,$next];
}

function nxtPge($mdl,$fld,$fldval){

	$page = $mdl::orderBy($fld)->select($fld)->get()->pluck($fld);
	$pos = $page->search($fldval);

	list($prevName,$nextName) = nextPrevious($pos,$page);
	
   	return [$prevName,$nextName];
}

function nextPrevious($pos,$chapter){

	$prev = $chapter[$pos];
	$next = $chapter[$pos];

	if($pos>0){ 
	    $prev = $chapter[$pos-1];
	}
	if($pos<=count($chapter)-2){
	    $next = $chapter[$pos+1];
	}	

	return [$prev,$next];
}

// - * - * - * - * - * - * - * - * -

function imgsze($path,$name,$ext){

	$fullName = $name.'.'.$ext;
	$big    = preg_replace('/150/', '1800', $path); 
    $small  = preg_replace('/1800/', '600', $big); 
    $big    = "$big/$fullName";
    $small  = "$small/$fullName"; 
    $thumb  = "$path/$fullName";
    $width  = '100%';
    $file = public_path("$thumb");	
    list($w,$h) = getimagesize($file);	
    if($h>$w){$width = $w / $h * 100; };  
    $width = "$width%"; 
    $width = preg_replace('/%%/','%', $width);

	return [$big,$small,$thumb,$width];
}

// - * - * - * - * - * - * - * - * -

function abbreviate($inf,$id,$table,$length){

	$inf = preg_replace("[<.*?>]",'',$inf);

    if (preg_match("/^.{1,$length}\b/s", $inf, $match)){
    	$inf = $match[0];
    }

    $info = $inf."<a href='/$table/$id'> ... read more</a>";
    
    return $info;
}

// - * - * - * - * - * - * - * - * - * - * 

function addressString($suite,$lotnmbr,$stnmbr,$street,$suburb,$pc,$state){
	$adr = '';
	if(strlen($suite)){
		$adr .= $suite." ";
	}
	if(strlen($stnmbr)){
		$adr .= $stnmbr." ";
	}
	elseif(strlen($lotnmbr)){
			$adr .= $lotnmbr." ";
	}
	if(strlen($street)){
		$adr .= $street.", ";
	}
	if(strlen($suburb)){
		$adr .= $suburb.". ";
	}
	if(strlen($pc)){
		$adr .= $pc;
	}
	if(strlen($state)){
		$state = strtoupper($state);
		$adr .= " ".$state;
	}
	return $adr;
}

function address($suite,$lotnmbr,$stnmbr,$street,$suburb,$pc,$state){
	$adr = '';
	if(strlen($suite)){
		$adr .= $suite."<br />";
	}
	if(strlen($stnmbr)){
		$adr .= $stnmbr." ";
	}
	elseif(strlen($lotnmbr)){
			$adr .= $lotnmbr." ";
	}
	if(strlen($street)){
		$adr .= $street.",<br />";
	}
	if(strlen($suburb)){
		$adr .= $suburb.". ";
	}
	if(strlen($pc)){
		$adr .= $pc;
	}
	if(strlen($state)){
		$state = strtoupper($state);
		$adr .= " ".$state;
	}
	return $adr;
}

// - * - * - * - * - * - * - * - * - * - * - * 

function searchQuery($req,$mdl){
	if($req->has('search')){
		$r = $req->input('search');
		$sq = $mdl::search($r)->paginate(15); 
	}
	if($req->has('query')){
		$srch = preg_replace('/query/','search',$req['query']);;
		$sq = $mdl::search($srch)->paginate(15);
	}
	
	$num = count($sq);
	return [$sq,$num];
}

// - * - * - * - * - * - * - * - * - * - * - * 

function bigSmall($path,$name,$ext){
			$big 	= preg_replace('/150/', '1800', $path); 
			$small 	= preg_replace('/1800/', '600', $big); 
			$big 	= "$big/$name.$ext";
			$small	= "$small/$name.$ext"; 
			return [$big,$small];
}


// - * - * - * - * - * - * - * - * - * - * - * 



