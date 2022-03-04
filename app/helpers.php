<?php
use App\Models\Page;
use Illuminate\Support\Str;


if(!function_exists('resume_page_content')){
    function resume_page_content($content){
        $dom = new DOMDocument('1.0','UTF-8');
        libxml_use_internal_errors(true); //accepter les erreurs
        $dom->loadHtml('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'.$content);
        $content = $dom->saveHTML();
        preg_match("/<body[^>]*>(.*?)<\/body>/is", $content, $resultat);
            $content = $resultat[1];

        $content = Str::words(Str::substr(strip_tags($content),0,200,"UTF-8"), 10, '...');
        
        return $content;
    }
}


?>
