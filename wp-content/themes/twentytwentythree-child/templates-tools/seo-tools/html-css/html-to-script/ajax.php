<?php

    if($_POST['submit']=='php'){
        $va=$_POST['html'];

//php_code($html);
        //$va2=str_replace("<?php "," ", $va1);
        // $va=str_replace('','', $va2);
        // $vaj= preg_replace("/\s+/", " ", $va);
        //   $val=str_replace("> ",">  ", $vaj);
        if(substr_count($va, '> ')==2){
            $va2=explode("\n", $va);
        }else{
            $va2=explode("\n", $va);
        }

        $va3=array();

        if(is_array($va2)){
            for ($i=0; $i <count($va2); $i++) {

                $va3[]=$va2[$i];

            }
        }

        // $va4= preg_replace("/\s+/", " ", $va3);
        foreach ($va3 as $key => $value) {
            $va5[]='echo "'.$value.'\n";';
        }

        if(!empty($va5)){
            if(substr_count($va, '> ')==2){
                $vap=str_replace("';",">';", $va5);
                $va6=implode("\n", $vap);
            }else{
                $va6=implode("\n", $va5);
            }

            $php_file="<?php \n " . $va6. " \n ?>";
            nl2br($va6);
            echo $php_file;

        }

    }


    if($_POST['submit']=='js'){
        $va=$_POST['html'];


        // $vaj= preg_replace("/\s+/", " ", $va);
        //   $val=str_replace("> ",">  ", $vaj);
        if(substr_count($va, '> ')==2){
            $va2=explode("\n", $va);
        }else{
            $va2=explode("\n", $va);
        }

        $va3=array();

        if(is_array($va2)){
            for ($i=0; $i <count($va2); $i++) {

                $va3[]=$va2[$i];

            }
        }

        //$va4= preg_replace("/\s+/", " ", $va3);
        foreach ($va3 as $key => $value) {
            $va5[]='document.writeln("'.$value.'");';
        }

        if(!empty($va5)){
            if(substr_count($va, '> ')==2){
                $vap=str_replace("';",">';", $va5);
                $va6=implode("\n", $vap);
            }else{
                $va6=implode("\n", $va5);
            }

            $php_file="<script type='text/javascript'><!--  \n" . $va6. "\n // --> \n </script>";
            nl2br($va6);
            echo $php_file;

        }


    }


    if($_POST['submit']=='asp'){

        $va=$_POST['html'];
        // $vaj= preg_replace("/\s+/", " ", $va);
        //   $val=str_replace("> ",">  ", $vaj);
        if(substr_count($va, '> ')==2){
            $va2=explode("\n", $va);
        }else{
            $va2=explode("\n", $va);
        }

        $va3=array();

        if(is_array($va2)){
            for ($i=0; $i <count($va2); $i++) {

                $va3[]=$va2[$i];

            }
        }

        //$va4= preg_replace("/\s+/", " ", $va3);
        $i=0;
        foreach ($va3 as $key => $value) {
            $va5[]='$code['.$i.']="'.$value.'";';
            $i++;
        }

        if(!empty($va5)){
            if(substr_count($va, '> ')==2){
                $vap=str_replace("';",">';", $va5);
                $va6=implode("\n", $vap);
            }else{
                $va6=implode("\n", $va5);
            }

            $php_file='#!/usr/bin/perl
print "Content-type: text/html\n\n";'."\n". $va6. "\n".'for ($i=0;$i<scalar(@code);$i++) {print($code[$i]."\n");}';
            nl2br($va6);
            echo $php_file;

        }
    }
    exit;

