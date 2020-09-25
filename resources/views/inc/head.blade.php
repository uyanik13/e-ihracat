
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="hidden" id="meta_csrf"  value="{{csrf_token()}}">
    @if ($page)
        <title>{{ $page->seo_title }}</title>
        <meta name="description" content="{{ $page->seo_description }}"/>
    @else
        <title>test</title>
        <meta name="description" content="test"/>
@endif
    <x-embed-styles />
