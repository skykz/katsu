    @extends('layouts.app')
    @section('detailed')
    <div class="container container--project">
    <main class="project">
        <div class="project__hero">
            <img width="500" height="834" src="{{asset('storage')}}/{{$result['data']->image}}" sizes="(max-width: 2000px) 100vw, 2000px" alt="" />
        </div>
        <div class="project__story">
            <p class="wp-block-image"></p>

            <p class="aboutUs_textRow"><strong>{{$result['data']->title_ru}}</strong></p>

    <div class="aboutUs_textRow" style="padding-bottom: 50px">
    <u class="aboutUs_innerText_Detail">
        {{ $result['isRu'][0]->is_ru==1?$result['data']->body_ru:$result['data']->body_en}}
    </u>
    </div>
        <div class="detailed-images">
            <?php $images = json_decode($result['data']->images_url) ?>


        @for($i = 0; $i < count($images); $i++)
            <figure class="wp-block-image">
                <img class="wp-image-1626" src="{{asset('storage')}}/{{$images[$i]}}" alt=""  sizes="(max-width: 2000px) 100vw, 2000px" /></figure>
            @endfor
        </div>

        </div>
    </main>
    </div>
    @endsection
