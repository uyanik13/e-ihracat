@isset($itemId)
@php
    if ($category == ''){
        $itemForSeo = App\Models\Post::where('type','page')->where('slug', 'anasayfa')->first();
        $seo_title = $itemForSeo->seo_title. ' | Legal Pros';
              $seo_description= $itemForSeo->seo_description;
    }else{
        switch ($category) {
           case 'blog':
              $itemForSeo = App\Models\Post::where('type','post')->where('slug', $itemId)->first();
              $seo_title = $itemForSeo->seo_title. ' | Legal Pros';
              $seo_description= $itemForSeo->seo_description;
               break;
           case 'blog-single':
              $itemForSeo = App\Models\Post::where('type','post')->where('slug', $itemId)->first();
              $seo_title = $itemForSeo->seo_title. ' | Legal Pros';
              $seo_description= $itemForSeo->seo_description. ' | Legal Pros';
               break;
            case 'service':
              $itemForSeo = App\Models\Post::where('slug', $itemId)->first();
              $seo_title = $itemForSeo->seo_title. ' | Legal Pros';
              $seo_description= $itemForSeo->seo_description;
              break;
          case 'partner-details':
              $itemForSeo = App\Models\User::where('id', $itemId)->first();
              $seo_title = $itemForSeo->name. ' | Legal Pros';
              $seo_description= $itemForSeo->name . '| Legal Pros';
             break;
           default:
               $itemForSeo = App\Models\Post::where('slug',$category)->first();
               $seo_title = $itemForSeo->title. ' | Legal Pros';
              $seo_description= $itemForSeo->title . '| Legal Pros';
               break;
           }
           }
@endphp
@endisset
    <!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]>
<html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="hidden" id="meta_csrf" value="{{csrf_token()}}">
    @if ($page)
        <title>{{ $page->seo_title }}</title>
        <meta name="description" content="{{ $page->seo_description }}"/>
    @else
        <title>test</title>
        <meta name="description" content="test"/>
@endif
