@extends('layout')

@section('title')
    | About Me
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            <h1 class="d-inline">Cody Potter</h1>
            <span><a href="mailto:me@codypotter.com">me@codypotter.com</a></span>
        </div>

        <div class="row justify-content-center">
            <div>
                <img src="{{asset('img/cody.svg')}}" alt="Cody" class="d-inline img-fluid" height="150px" width="150px">
            </div>
            <div style="padding-left:10px;">
                <p class="lead">{{$cody ? $cody->introduction : 'Hi, I\'m Cody. I\'m a 3rd year Computer Science student attending Portland State University. I mostly make web and mobile apps in my free time. I\'m currently a manager at Whole Foods Market, but I\'m actively looking for internships and job opportunities.'}}</p>
            </div>
        </div>
        <h3 class="mt-5">Education</h3>
        <hr>
            <ul>
            @foreach($educations as $education)
                <li class="mb-1">
                    <div class="container">
                        <div class="row justify-content-between">
                            <span><strong>{{$education->institution}}</strong></span>
                            <span>{{$education->cityState}}</span>
                        </div>
                        <div class="row justify-content-between">
                            <span><i>{{$education->achievement}} in {{$education->major}}; GPA: {{$education->gpa / 100}}</i></span>
                            <span><i>{{date('F Y', strtotime($education->gradDate))}}</i></span>
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>

        <h3>Experience</h3>
        <hr>
        <ul>
            @foreach($experiences as $experience)
                <li class="mb-1">
                    <div class="container">
                        <div class="row justify-content-between">
                            <span><strong>{{$experience->company}}</strong></span>
                            <span>{{$experience->cityState}}</span>
                        </div>
                        <div class="row justify-content-between">
                            <span><i>{{$experience->title}}</i></span>
                            <span><i>{{$experience->isCurrent ? date('F Y', strtotime($experience->startDate)) : date('F Y', strtotime($experience->startDate)) . ' - ' . date('F Y', strtotime($experience->endDate))}}</i></span>
                        </div>
                        <div class="row justify-content-between">
                            <p>{{$experience->responsibilities}}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <h3>Skills</h3>
        <hr>
        <ul>
            <li class="mb-1">
                <div class="container">
                    <div class="row">
                        <span><strong>Professional: </strong></span>
                        <?php
                            $techSkills = $skills->where('isTechnology', true);
                            $proSkills = $skills->where('isTechnology', false);
                        ?>
                        @foreach($proSkills as $skill)
                            <span class="pl-2">{{$skill->name}}</span>

                        @endforeach
                    </div>
                </div>
            </li>
            <li class="mb-1">
                <div class="container">
                    <div class="row">
                        <span><strong>Technology: </strong></span>
                        @foreach($techSkills as $skill)
                            <span class="pl-2">{{$skill->name}}</span>

                        @endforeach
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection
