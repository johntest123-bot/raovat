@extends('layouts.app') @section('content') @section('content')
<div class="container-crumb">
    <div class="texttitle sitemaps">
        <a href="/">Trang Chủ</a>
        <a href="/guides">Hướng dẫn</a>
    </div>
</div>
<div id="body-left">
    @include('guides.menu_left')
</div>
<div id="body-right">
    <div class="middle-page">
        <div style="border: 1px solid #DDD;-moz-border-radius: 8px;-webkit-border-radius: 8px; background-color:#fff;">
            <div style="font-size:14px; font-weight:bolder; padding:6px 0 8px 16px; color:#027AC7;">
                Hướng dẫn
            </div>
            <div style="padding:12px 6px 12px 12px;">
              @foreach ($guides as $guide)
                <div class="service">
                    <div class="img-service">
                        <a href="{{ route('guides.show', ['guide' => $guide->slug]) }}">
                            <img src="{{ loadImage($guide->thumbnail) }}" class="img-thumbnail" />
                        </a>
                    </div>
                    <div class="info-service">
                        <div class="title-service">
                            <h2 style="padding: 0;margin: 0">
                              <a href="{{ route('guides.show', ['guide' => $guide->slug]) }}">
                                {{ $guide->title }}
                              </a>
                            </h2>
                        </div>
                        <div class="desc-service">
                            {!! Str::words(strip_tags($guide->content), 50, '...')  !!}
                        </div>
                    </div>
                    <div class="detail-service">
                        <a href="{{ route('guides.show', ['guide' => $guide->slug]) }}">Chi tiết</a>
                    </div>
                    <div class="clear"></div>
                </div>
              @endforeach
                <div style="margin-top: 20px;margin-left: 20px;width: 90%;float: left;text-align: center;"></div>
            </div>
        </div>
    </div>
    @include('guides.menu_right')
</div>
@endsection
