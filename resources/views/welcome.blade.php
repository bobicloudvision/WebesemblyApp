<html>
<head>

    <link rel="stylesheet" href="{{asset('webesembly-editor/webesembly-elements.css')}}" type="text/css" media="all">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;700" rel="stylesheet">

    @vite(['resources/css/theme.scss'])

</head>

<body>

<div class="bg-red-500">
    wow
</div>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }
    header {
        margin-bottom: -150px;
        z-index: 100;
        position: absolute;
        width:100%;
    }
</style>

<h1 class="h-1">
    test
</h1>

@if(isset($website['header']))
    <header>
        <nav>
            <div class="max-w-5xl mx-auto px-2 sm:px-4 lg:px-8 my-6">
                <div class="flex justify-between">
                    <div class="flex justify-between w-full px-2 lg:px-0">
                        <div class="flex-shrink-0 flex items-center">
                            @if(isset($website['header']['logo']))
                                <a class="navbar-brand" href="{{$website['header']['logo']['link']}}">
                                    @if(isset($website['header']['logo']['url']))
                                        <img class="block lg:hidden h-8 w-auto" src="{{$website['header']['logo']['url']}}" alt="{{$website['header']['logo']['alt']}}">
                                        <img class="hidden lg:block h-8 w-auto" src="{{$website['header']['logo']['url']}}" alt="{{$website['header']['logo']['alt']}}">
                                    @else
                                        <b class="font-bold text-white text-2xl"> {{$website['header']['logo']['alt']}}</b>
                                    @endif
                                </a>
                            @endif
                        </div>
                        <div class="hidden lg:ml-6 lg:flex lg:space-x-8">
                            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                            @if(isset($website['header']['menu']['items']))
                                @foreach($website['header']['menu']['items'] as $item)
                                    <a href="{{$item['url']}}" class="border-transparent text-white/90 hover:border-gray-300 hover:text-white inline-flex items-center px-1 pt-1 border-b-2 text-md font-medium">
                                        {{ $item['title'] }}
                                    </a>
                                @endforeach
                            @endif
                        </div>
                        @if(isset($website['header']['action']))
                            <div class="flex gap-2 justify-center items-center" role="search">
                                @foreach($website['header']['action'] as $action)
                                    @if($action['type'] == 'button')
                                        <button class="bg-black/90 px-3 py-2 rounded text-white" type="submit">{{$action['title']}}</button>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="flex items-center lg:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
                              Icon when menu is closed.

                              Heroicon name: outline/menu

                              Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
                              Icon when menu is open.

                              Heroicon name: outline/x

                              Menu open: "block", Menu closed: "hidden"
                            -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="lg:hidden" id="mobile-menu">
                <div class="pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800" -->

                    @if(isset($website['header']['menu']['items']))
                        @foreach($website['header']['menu']['items'] as $item)
                            <a href="{{$item['url']}}" class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                                {{ $item['title'] }}
                            </a>
                        @endforeach
                    @endif

                </div>
            </div>
        </nav>
    </header>
@endif


@if (isset($website['sections']))
    @foreach($website['sections'] as $sectionId=>$section)

        <section

            class="webesembly-section webesembly-section-{{$sectionId}}"

            @if (isset($section['backgroundSettings']))
            style="
                background-image: url('{{$section['backgroundSettings']['image']}}');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                height: 100%;
                "
            @endif

        >
            @if (isset($section['backgroundSettings']))
                {{-- <div style="
                 position: absolute;
                  z-index: 0; top: 0px; left: 0px;
                  width: 100%; height: 100%; opacity: 1;
                  pointer-events: none; mix-blend-mode: normal;
                  background-color: rgba(9,9,9,0.38);">
                 </div>--}}
            @endif

            @if(isset($section['content']))
                @php
                    if (!isset($section['gridSettings']['gridGap'])) {
                        $section['gridSettings']['gridGap'] = 12;
                    }
                    if (!isset($section['gridSettings']['gridTemplateColumns'])) {
                        $section['gridSettings']['gridTemplateColumns'] = 20;
                    }
                    if (!isset($section['gridSettings']['gridTemplateRows'])) {
                     $section['gridSettings']['gridTemplateRows'] = 20;
                    }
                @endphp

                <style class="webesembly-flex-grid-style-{{$sectionId}}">
                    .webesembly-flex-grid-{{$sectionId}} {
                        position: relative;
                        display: grid;
                        grid-template-columns: repeat({{$section['gridSettings']['gridTemplateColumns']}}, 1fr);
                        grid-template-rows: repeat({{$section['gridSettings']['gridTemplateRows']}}, 1fr);
                        grid-gap: {{$section['gridSettings']['gridGap']}}px;
                        width: 100%;
                        height: 600px;
                    }
                </style>

                @foreach($section['content'] as $contentId=>$content)
                    @php
                        if (!isset($content['gridArea'])) {
                            $content['gridArea'] = '5 / 2 / 8 / 10';
                        }
                    @endphp
                    <style class="webesembly-flex-grid-block-style-{{$contentId}}-{{$sectionId}}">
                        .webesembly-flex-grid-block-{{$contentId}}-{{$sectionId}} {
                            grid-area: {{$content['gridArea']}};
                        }
                    </style>
                @endforeach

                <div class="webesembly-flex-grid webesembly-flex-grid-{{$sectionId}}">
                    @foreach($section['content'] as $contentId=>$content)
                        @php
                            if (!isset($content['gridArea'])) {
                                $content['gridArea'] = '5 / 2 / 8 / 10';
                            }
                        @endphp
                        <div class="webesembly-flex-grid-block webesembly-flex-grid-block-{{$contentId}}-{{$sectionId}}">
                            @if($content['type'] == 'text')
                                <div class="webesembly-editable">
                                    <p>{!! $content['value'] !!}</p>
                                </div>
                            @endif
                            @if($content['type'] == 'button')
                                <button type="button" class="btn btn-dark">
                                    {{$content['value']}}
                                </button>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </section>

    @endforeach
@endif

@if(isset($website['footer']['content']))
    <footer>
        <br />
        <br />
        <center>
            @foreach($website['footer']['content'] as $content)
                @if($content['type'] == 'text')
                    <div><p>{{$content['value']}}</p></div>
                @endif
            @endforeach
        </center>
    </footer>
@endif

</body>
</html>
