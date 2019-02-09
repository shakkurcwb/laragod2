@extends('shared.theme')

@section('scripts')

    <script>

        $(function() {

            $('.tag-editor').tagEditor();

        });

    </script>

@endsection

@section('header')

    <div class="container-fluid">

        @header([
            'name' => __('Profile'),
            'title' => __('we take care of your data'),
        ])

    </div>

@endsection

@section('content')

    <div class="container-fluid">

        @success(['message' => session('success')])

        <section>

            @form(['method' => 'patch', 'url' => '/profile'])

                @tab

                @tabNav

                    @tabItem([
                        'idx' => 1,
                        'is_active' => 1,
                        'icon' => 'user',
                        'text' => __('Personal'),
                    ])

                    @tabItem([
                        'idx' => 2,
                        'icon' => 'shield',
                        'text' => __('Interests'),
                    ])

                    @tabItem([
                        'idx' => 3,
                        'icon' => 'briefcase',
                        'text' => __('Professional'),
                    ])

                    @tabItem([
                        'idx' => 4,
                        'icon' => 'photo',
                        'text' => __('Avatar'),
                    ])

                    @tabItem([
                        'idx' => 5,
                        'icon' => 'hashtag',
                        'text' => 'Social',
                    ])

                @endtabNav

                @tabContent

                    @tabPanel(['idx' => 1, 'is_active' => 1])

                        <article>

                            <div class="row">

                                <label class="col-sm-2 form-control-label">@lang('Name')</label>
                                <div class="col-sm-10">

                                    @formGroup([
                                        'error' => $errors->has('name') ? $errors->first('name') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'name',
                                            'has_error' => $errors->has('name'),
                                            'value' => Request::user()->name,
                                        ])
                    
                                        @icon(['icon' => 'font', 'has_error' => $errors->has('name')])
                    
                                    @endformGroup

                                </div>

                            </div>

                            <div class="row">

                                <label class="col-sm-2 form-control-label">@lang('Gender')</label>
                                <div class="col-sm-4">

                                    @formGroup([
                                        'no_icon' => 1,
                                        'error' => $errors->has('gender') ? $errors->first('gender') : '',
                                    ])
                    
                                        @select([
                                            'name' => 'gender',
                                            'has_error' => $errors->has('gender'),
                                            'selected' => Request::user()->meta->gender,
                                            'options' => [

                                                'male' => __('Male'),
                                                'female' => __('Female'),

                                            ],
                                        ])
                    
                                    @endformGroup

                                </div>

                                <label class="col-sm-2 form-control-label">@lang('Birth')</label>
                                <div class="col-sm-4">

                                    @formGroup([
                                        'no_icon' => 1,
                                        'error' => $errors->has('birth') ? $errors->first('birth') : ''
                                    ])
                    
                                        @input([
                                            'name' => 'birth',
                                            'type' => 'date',
                                            'has_error' => $errors->has('birth'),
                                            'value' => Request::user()->meta->birth,
                                        ])
                    
                                    @endformGroup

                                </div>

                            </div>

                            <div class="row">

                                <label class="col-sm-2 form-control-label">@lang('Password')</label>
                                <div class="col-sm-4">

                                    @formGroup([
                                        'error' => $errors->has('password') ? $errors->first('password') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'password',
                                            'type' => 'password',
                                            'has_error' => $errors->has('password'),
                                        ])

                                        @icon(['icon' => 'key', 'has_error' => $errors->has('password')])
                    
                                    @endformGroup

                                </div>

                                <label class="col-sm-2 form-control-label">@lang('Confirmation')</label>
                                <div class="col-sm-4">

                                    @formGroup([
                                        // 
                                    ])
                    
                                        @input([
                                            'name' => 'password_confirmation',
                                            'type' => 'password',
                                            'has_error' => $errors->has('password'),
                                        ])

                                        @icon(['icon' => 'asterisk', 'has_error' => $errors->has('password')])
                    
                                    @endformGroup

                                </div>

                            </div>

                        </article>

                    @endtabPanel

                    @tabPanel(['idx' => 2])

                        <article>

                            <div class="row">

                                <label class="col-sm-2 form-control-label">@lang('Headline')</label>
                                <div class="col-sm-10">

                                    @formGroup([
                                        'error' => $errors->has('headline') ? $errors->first('headline') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'headline',
                                            'title' => __('Write an amazing title.'),
                                            'has_error' => $errors->has('headline'),
                                            'value' => Request::user()->meta->headline,
                                        ])
                    
                                        @icon(['icon' => 'bolt', 'has_error' => $errors->has('headline')])
                    
                                    @endformGroup

                                </div>

                            </div>

                            <div class="row">

                                <label class="col-sm-2 form-control-label">@lang('Summary')</label>
                                <div class="col-sm-10">

                                    @formGroup([
                                        'error' => $errors->has('summary') ? $errors->first('summary') : ''
                                    ])
            
                                        @textarea([
                                            'name' => 'summary',
                                            'title' => __('Share something great about yourself.'),
                                            'rows' => 4,
                                            'has_error' => $errors->has('summary'),
                                        ])
            
                                        @icon(['icon' => 'align-left', 'has_error' => $errors->has('summary')])

                                    @endformGroup

                                </div>

                            </div>

                            <div class="row">

                                <label class="col-sm-2 form-control-label">@lang('Interests')</label>
                                <div class="col-sm-10">

                                    @formGroup([
                                        'no_icon' => 1,
                                        'error' => $errors->has('interests') ? $errors->first('interests') : ''
                                    ])
            
                                        @textarea([
                                            'name' => 'interests',
                                            'with_tags' => 1,
                                            'has_error' => $errors->has('interests'),
                                        ])

                                        <small>@lang('Type a word then press Enter to add more.')</small>

                                    @endformGroup

                                </div>

                            </div>

                        </article>

                    @endtabPanel

                    @tabPanel(['idx' => 3])

                        <article>

                            <div class="row">

                                <label class="col-sm-2 form-control-label">@lang('Company')</label>
                                <div class="col-sm-4">

                                    @formGroup([
                                        'error' => $errors->has('company') ? $errors->first('company') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'company',
                                            'has_error' => $errors->has('company'),
                                            'value' => Request::user()->meta->company,
                                        ])
                    
                                        @icon(['icon' => 'building-o', 'has_error' => $errors->has('company')])
                    
                                    @endformGroup

                                </div>

                                <label class="col-sm-2 form-control-label">@lang('Position')</label>
                                <div class="col-sm-4">

                                    @formGroup([
                                        'error' => $errors->has('position') ? $errors->first('position') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'position',
                                            'has_error' => $errors->has('position'),
                                            'value' => Request::user()->meta->position,
                                        ])
                    
                                        @icon(['icon' => 'at', 'has_error' => $errors->has('position')])
                    
                                    @endformGroup

                                </div>

                            </div>

                            <div class="row">

                                <label class="col-sm-2 form-control-label">@lang('Country')</label>
                                <div class="col-sm-4">

                                    @formGroup([
                                        'error' => $errors->has('country') ? $errors->first('country') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'country',
                                            'has_error' => $errors->has('country'),
                                            'value' => Request::user()->meta->country,
                                        ])
                    
                                        @icon(['icon' => 'globe', 'has_error' => $errors->has('country')])
                    
                                    @endformGroup

                                </div>

                                <label class="col-sm-2 form-control-label">@lang('City')</label>
                                <div class="col-sm-4">

                                    @formGroup([
                                        'error' => $errors->has('city') ? $errors->first('city') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'city',
                                            'has_error' => $errors->has('city'),
                                            'value' => Request::user()->meta->city,
                                        ])
                    
                                        @icon(['icon' => 'map-marker', 'has_error' => $errors->has('city')])
                    
                                    @endformGroup

                                </div>

                            </div>

                        </article>

                    @endtabPanel

                    @tabPanel(['idx' => 4])

                        <article>

                            <div class="row">

                                <div class="col-sm-2">

                                    @img([
                                        'avatar' => 1,
                                        'class' => 'img-fluid img-thumbnail',
                                        'url' => Request::user()->meta->avatar ?? ''
                                    ])

                                </div>

                                <div class="col-sm-4">

                                    @formGroup([
                                        'no_icon' => 1,
                                        'error' => $errors->has('avatar') ? $errors->first('avatar') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'avatar',
                                            'type' => 'file',
                                            'has_error' => $errors->has('avatar'),
                                        ])
                    
                                    @endformGroup

                                </div>

                            </div>

                        </article>

                    @endtabPanel

                    @tabPanel(['idx' => 5])

                        <article>

                            <div class="row">

                                <div class="col-sm-4">

                                    @formGroup([
                                        'on_left' => 1,
                                        'error' => $errors->has('facebook') ? $errors->first('facebook') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'facebook',
                                            'has_error' => $errors->has('facebook'),
                                        ])

                                        @icon(['type' => 'font', 'icon' => 'facebook', 'has_error' => $errors->has('facebook')])
                    
                                    @endformGroup

                                </div>

                                <div class="col-sm-4">

                                    @formGroup([
                                        'on_left' => 1,
                                        'error' => $errors->has('instagram') ? $errors->first('instagram') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'instagram',
                                            'has_error' => $errors->has('instagram'),
                                        ])

                                        @icon(['type' => 'font', 'icon' => 'instagram', 'has_error' => $errors->has('instagram')])
                    
                                    @endformGroup

                                </div>

                                <div class="col-sm-4">

                                    @formGroup([
                                        'on_left' => 1,
                                        'error' => $errors->has('linkedin') ? $errors->first('linkedin') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'linkedin',
                                            'has_error' => $errors->has('linkedin'),
                                        ])

                                        @icon(['type' => 'font', 'icon' => 'linkedin', 'has_error' => $errors->has('linkedin')])
                    
                                    @endformGroup

                                </div>

                                <div class="col-sm-4">

                                    @formGroup([
                                        'on_left' => 1,
                                        'error' => $errors->has('twitter') ? $errors->first('twitter') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'twitter',
                                            'has_error' => $errors->has('twitter'),
                                        ])

                                        @icon(['type' => 'font', 'icon' => 'twitter', 'has_error' => $errors->has('twitter')])
                    
                                    @endformGroup

                                </div>

                                <div class="col-sm-4">

                                    @formGroup([
                                        'on_left' => 1,
                                        'error' => $errors->has('youtube') ? $errors->first('youtube') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'youtube',
                                            'has_error' => $errors->has('youtube'),
                                        ])

                                        @icon(['type' => 'font', 'icon' => 'youtube', 'has_error' => $errors->has('youtube')])
                    
                                    @endformGroup

                                </div>

                                <div class="col-sm-4">

                                    @formGroup([
                                        'on_left' => 1,
                                        'error' => $errors->has('github') ? $errors->first('github') : '',
                                    ])
                    
                                        @input([
                                            'name' => 'github',
                                            'has_error' => $errors->has('github'),
                                        ])

                                        @icon(['type' => 'font', 'icon' => 'github', 'has_error' => $errors->has('github')])
                    
                                    @endformGroup

                                </div>

                            </div>

                        </article>

                    @endtabPanel

                    <div class="m-t">
                    
                        <button type="submit" class="btn btn-info">@lang('Save')</button>
    
                    </div>

                @endtabContent
                
                @endtab

            @endform

        </section>

    </div>

@endsection