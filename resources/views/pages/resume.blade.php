@extends('layouts.app')

@section('meta-tags')
<title>Espiridion Larosa is a Full-stack developer from Philippines</title>
<meta name="description" content="Espiridion Larosa is a Full-stack developer from Philippines." />
<meta name="keywords" content="dev, laravel, laravel-dev, Full-stack, php" />

<meta property="og:title" content="Espiridion Larosa" />
<meta property="og:description" content="Espiridion Larosa is a Full-stack developer from Philippines." />
<meta property="og:url" content="https://edionme.com/resume" />

<meta property="og:url" content="https://edionme.com/resume" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Espiridion Larosa is a Full-stack developer from Philippines." />
<meta property="og:description" content="Espiridion Larosa is a Full-stack developer from Philippines." />
@endsection

@section('content')
<section id="resume" class="pt-10 bg-gray-200 pb-10">
    <div class="px-3 md:px-10 max-w-6xl m-auto">
        <div class="mb-10 header">
            <h1 class="mb-0">{{$data->general_information['name']}}</h1>
            <p class="mb-5">{{$data->general_information['expertise']}}</p>
            @foreach ($data->online_accounts as $key => $onlineAccount)
            <small class="text-sm font-bold">
                <a href="{{$onlineAccount['link']}}" target="_blank">
                    <i class="{{$onlineAccount['icon']}} text-xl text-gray-600 hover:text-blue-800 mr-4"></i>
                </a>
            </small>
            @endforeach
        </div>
        <div class="content">
            <div class="md:flex">
                <div class="w-auto">
                    <div class="work-experiences">
                        <h2 class="mb-3">
                            <span class="text-white rounded p-1 text-base">Work Experiences</span>
                        </h2>
                        @foreach ($data->experiences as $experience)
                        <div class="mb-5">
                            <p class="p-0">
                                <strong>{{$experience['company']}}</strong>,
                                <small>{{$experience['year']}}</small>
                            </p>
                            <ul>
                                @foreach ($experience['work'] as $work)
                                <li>{{$work}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                    <div class="stacks mb-5">
                        <h2 class="mb-5">
                            <span class="text-white rounded p-1 text-base">Recent Projects</span>
                        </h2>
                        @foreach ($data->projects as $key => $project)
                        <p class="mt-2 mb-2 leading-6">
                            <strong class="block">{{$project['name']}}
                                (<a href="{{$project['link']}}" target="_blank" class="text-sm">visit</a>)
                            </strong>
                            {{$project['description']}}
                        </p>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <div class="w-auto">
                    <div class="stacks mb-5">
                        <h2 class="mb-5">
                            <span class="text-white rounded p-1 text-base">Stacks</span>
                        </h2>
                        @foreach ($data->stacks as $key => $stack)
                        <p class="mt-2 mb-2 leading-6">
                            <strong class="block">{{$key}}</strong>
                        </p>
                        <p class="leading-5">{{$stack}}</p>
                        @endforeach
                        </ul>
                    </div>
                    <div class="stacks mb-5">
                        <h2 class="mb-5">
                            <span class="text-white rounded p-1 text-base">Talks</span>
                        </h2>
                        @foreach ($data->talks as $key => $talk)
                        <p class="mt-2 mb-2 leading-6">
                            <strong class="block">{{$talk['event']}}</strong>
                            {{$talk['description']}}
                            <small class="block">{{$talk['date']}}</small>
                            <small>{{$talk['location']}}</small>
                        </p>
                        @endforeach
                        </ul>
                    </div>
                    <div class="stacks mb-5">
                        <h2 class="mb-5">
                            <span class="text-white rounded p-1 text-base">Organisation</span>
                        </h2>
                        @foreach ($data->organizations as $key => $organization)
                        <p class="mt-2 mb-2 leading-6">
                            <strong class="block">{{$organization['name']}}
                                (<a href="{{$organization['link']}}" target="_blank" class="text-sm">visit</a>)
                            </strong>
                            {{$organization['description']}}
                        </p>
                        @endforeach
                        </ul>
                    </div>
                    <div class="achievements">
                        <h2 class="mb-5">
                            <span class="text-white rounded p-1 text-base">Certificates</span>
                        </h2>
                        @foreach ($data->certificates as $key => $certificate)
                        <p class="p-0 leading-6">
                            <strong class="block">{{$certificate['name']}}</strong>
                            <small>{{$certificate['year']}}</small>
                        </p @endforeach </div> <div class="education mt-5">
                        <h2 class="mb-3">
                            <span class="text-white rounded p-1 text-base">Education</span>
                        </h2>
                        <p class="leading-6">
                            <strong>{{$data->education['institution']}}</strong>
                        </p>
                        <p class="leading-6">
                            <small>{{$data->education['address']}}</small>
                        </p>
                        <p class="leading-6"><small>{{$data->education['course']}}</small></p>
                        <p class="leading-6"><small>{{$data->education['year']}}</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-20">
            <a class="text-xl underline" href="{{url('/resume.pdf')}}" target="_blank">
                Pdf Version</a>
        </div>
    </div>
</section>
@endsection