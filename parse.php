<?php

    function getUrls($href, $kol)
    {
        $html = file_get_contents($href);
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        $node = $dom->getElementsByTagName('a');
        $node = $dom->getElementsByTagName('a');

        for ($i = 0; $i < min($node->length,$kol); $i++) {
            $hrefText[] = $node->item($i)->getAttribute('href');
        }
        if(!isset($hrefText))
            return false;
        foreach($hrefText as $hrefTextItem){
            if(strpos($hrefTextItem,"?") === false  && $hrefTextItem !== "/" && $hrefTextItem !== $href){
                if($hrefTextItem[0]==='/' || $hrefTextItem[0]==='h')
                    $clearHrefs[]=$hrefTextItem;
        }
    }
    unset($hrefTextItem);
    unset($dom);
    unset($html);
    unset($node);
    if (isset($clearHrefs)){
        $clearHrefs = array_unique($clearHrefs);
        return $clearHrefs;
    }
    else
        return false;
    }

    $href =  $_POST['href'];
    $vol1 = getUrls($href,20);
    if(isset($vol1) === false)
    {
        echo '<p>Fail((((</p>';
        exit();
    }
    $vol1 = array_unique($vol1);
    $vol2 = array();
    //print_r($vol1);
    echo '<div class="row text-center">';
    echo '<div class="col-12"><h3>';
    echo $href;
    echo '</h3></div>';
    echo '</div>';

    foreach($vol1 as $item)
    {   
        if($item[0] === '/')
        {
            $item = $href .substr($item,1);
        }
        $vol2[$item] = getUrls($item,20);
        if($vol2[$item] === false)
            unset($vol2[$item]);
        else
        {
            $vol2[$item] = array_unique($vol2[$item]);
        }
   }

   echo '<div class="row">';
   foreach($vol1 as $item)
   {
        if($item[0] === '/')
        {
            $item = $href .substr($item,1);
        }
        
        echo '<div class="col-4"> <div class="card"> <h5 class="card-header">';
        echo $item . '</h5><div class="card-body">';
        foreach($vol2[$item] as $tmp)
        {
            if($tmp[0] === '/')
            {
                $tmp = $href .substr($tmp,1);
            }
            echo '<p>' . $tmp . '</p>';
        }
        echo '</div></div></div>';
   }
   echo '</div>';
?>