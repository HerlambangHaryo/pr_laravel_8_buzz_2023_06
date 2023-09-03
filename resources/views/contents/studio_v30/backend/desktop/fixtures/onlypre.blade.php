@extends('templates.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')

    <?php
        $row_fixture    = $row->fixture;
        $row_venue      = $row->venue;
    ?>
    <div class="row mb-2">
        <div class="col-6">
            <a href="{{route('Rapidapi.teams', $row_fixture->teams_homeapi_id)}}">update</a>
        </div>
        <div class="col-6 text-end">
            {{ (microtime(true) - LARAVEL_START) }}
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12 mb-3">
            <div class="card border-0 text-white overflow-hidden"  style="max-height: 400px" >
                <!-- card-img -->
                {!! define_venue($row_venue->venueapi_id, $row_venue->image) !!}

                <div class="card-img-overlay d-flex flex-column bg-gray-900 bg-opacity-70 rounded">

                    @include('contents.includes.fixture_menu')
                    @include('contents.includes.fixture_info')

                    <div class="row d-flex justify-content-center text-center mt-1">
                        <div class="col-2 mt-1">
                            <span class="badge bg-gray-900">
                                {{ $row->pre_ah_pattern }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->pre_gou_pattern }}
                            </span>
                        </div>
                        <div class="col-4  mt-1">
                        </div>
                        <div class="col-2  mt-1">
                            <span class="badge bg-gray-900">
                                {{ $row->end_ah_pattern }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-900">
                                {{ $row->end_gou_pattern }}
                            </span>
                        </div>
                    </div>


                </div>
            </div>


            <?php
                $row_pattern = $row->onlypre;
            ?>

            <div id="datatable" class="mt-3 mb-5">
                <div class="card">
                    <div class="card-header">
                        Data Only Pre
                    </div>
                    <div class="card-body">
                        <div>
                            <table id="datatableDefault" class="table  ">
                                <thead class=" ">
                                    <tr>
                                        <x-html.th-content-width title="No." width="10%" />
                                        <x-html.th-content title="Date"   />
                                        <x-html.th-content title="Leagues"   />
                                        <x-html.th-content title="Teams"   />
                                        <x-html.th-content title="Goals"   />
                                        <x-html.th-content title="1st"   />
                                        <x-html.th-content title="2nd"   />
                                        <x-html.th-content title="Pre" />
                                        <x-html.th-content title="End"   />
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($data as $row)
                                        <tr>
                                            <td class="text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="text-left">
                                                {{ $row->tanggal }}
                                                <br/>
                                                <abbr class="initialism">
                                                    {{ $row->jam }}
                                                </abbr>
                                                @if($row->league->bookmakersapi_id == 11)
                                                    <span class="badge bg-primary  ">
                                                        {{ $row->league->bookmakers_name }}
                                                    </span>
                                                @elseif($row->league->bookmakersapi_id == 8)
                                                    <span class="badge bg-success  ">
                                                        {{ $row->league->bookmakers_name }}
                                                    </span>
                                                @endif
                                                <span class="badge bg-gray-900 mt-2 ">
                                                    {{ $row->fixtureapi_id }}
                                                </span>
                                            </td>
                                            <td>
                                                <small>
                                                    {{ $row->fixture->venue->name }}
                                                    <br/>
                                                    <abbr class="initialism">
                                                        {{ $row->fixture->venue->city }}
                                                    </abbr>
                                                </small>
                                                <br/>
                                                <span class="badge bg-gray-800 mt-2 ">
                                                    {{ $row->fixture->round }}
                                                </span>
                                            </td>
                                            <td>
                                                <a
                                                    class=" ">
                                                    {{ $row->fixture->home->name }}
                                                </a>
                                                <br/>
                                                <a
                                                    class=" ">
                                                    {{ $row->fixture->away->name }}
                                                </a>
                                                <br/>
                                                <x-studio_v30.badge-fixture-status
                                                            link="https://www.google.com/search?client=firefox-b-d&q={!! $row->home->name !!}+vs+{!! $row->away->name !!}+flashscore"
                                                            nama="{{ $row->fixture_status }}"/>
                                            </td>
                                            <td class="text-center">
                                                {{ $row->fixture->goals_home }}
                                                <br/>
                                                {{ $row->fixture->goals_away }}
                                            </td>
                                            <td class="text-center">
                                                {{ $row->fixture->score_halftime_home }}
                                                <br/>
                                                {{ $row->fixture->score_halftime_away }}
                                            </td>
                                            <td class="text-center">
                                                {{ $row->fixture->score_secondtime_home }}
                                                <br/>
                                                {{ $row->fixture->score_secondtime_away }}
                                            </td>
                                            <td>
                                                <span class="badge bg-gray-900">
                                                    {{ $row->pre_ah_pattern }}
                                                </span>
                                                <br/>
                                                <span class="badge bg-gray-900">
                                                    {{ $row->pre_gou_pattern }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge bg-gray-900">
                                                    {{ $row->end_ah_pattern }}
                                                </span>
                                                <br/>
                                                <span class="badge bg-gray-900">
                                                    {{ $row->end_gou_pattern }}
                                                </span>
                                            </td>
                                        </tr>
                                        @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            @if($row_pattern->match_winner_home_perc >= 80 ||
                $row_pattern->match_winner_draw_perc >= 80 ||
                $row_pattern->match_winner_away_perc >= 80
            )
                @include('contents.includes.datatable.match_winner')
            @endif




            @if($row_pattern->asian_handicap_home_min_05_perc >= 80 ||
                $row_pattern->asian_handicap_away_min_05_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_min_05')

            @elseif($row_pattern->asian_handicap_home_min_15_perc >= 80 ||
                $row_pattern->asian_handicap_away_min_15_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_min_15')

            @elseif($row_pattern->asian_handicap_home_min_25_perc >= 80 ||
                $row_pattern->asian_handicap_away_min_25_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_min_25')

            @elseif($row_pattern->asian_handicap_home_min_35_perc >= 80 ||
                $row_pattern->asian_handicap_away_min_35_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_min_35')

            @elseif($row_pattern->asian_handicap_home_min_45_perc >= 80 ||
                $row_pattern->asian_handicap_away_min_45_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_min_45')

            @elseif($row_pattern->asian_handicap_home_min_55_perc >= 80 ||
                $row_pattern->asian_handicap_away_min_55_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_min_55')

            @elseif($row_pattern->asian_handicap_home_min_65_perc >= 80 ||
                $row_pattern->asian_handicap_away_min_65_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_min_65')
            @endif



            @if($row_pattern->asian_handicap_home_plus_05_perc >= 80 ||
                $row_pattern->asian_handicap_away_plus_05_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_plus_05')

            @elseif($row_pattern->asian_handicap_home_plus_15_perc >= 80 ||
                $row_pattern->asian_handicap_away_plus_15_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_plus_15')

            @elseif($row_pattern->asian_handicap_home_plus_25_perc >= 80 ||
                $row_pattern->asian_handicap_away_plus_25_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_plus_25')

            @elseif($row_pattern->asian_handicap_home_plus_35_perc >= 80 ||
                $row_pattern->asian_handicap_away_plus_35_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_plus_35')

            @elseif($row_pattern->asian_handicap_home_plus_45_perc >= 80 ||
                $row_pattern->asian_handicap_away_plus_45_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_plus_45')

            @elseif($row_pattern->asian_handicap_home_plus_55_perc >= 80 ||
                $row_pattern->asian_handicap_away_plus_55_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_plus_55')

            @elseif($row_pattern->asian_handicap_home_plus_65_perc >= 80 ||
                $row_pattern->asian_handicap_away_plus_65_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_home_plus_65')
            @endif


            @if($row_pattern->asian_handicap_first_half_home_min_05_perc >= 80 ||
                $row_pattern->asian_handicap_first_half_away_min_05_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_first_half_home_min_05')

            @elseif($row_pattern->asian_handicap_first_half_home_min_15_perc >= 80 ||
                $row_pattern->asian_handicap_first_half_away_min_15_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_first_half_home_min_15')

            @endif

            @if($row_pattern->asian_handicap_first_half_home_plus_05_perc >= 80 ||
                $row_pattern->asian_handicap_first_half_away_plus_05_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_first_half_home_plus_05')

            @elseif($row_pattern->asian_handicap_first_half_home_plus_15_perc >= 80 ||
                $row_pattern->asian_handicap_first_half_away_plus_15_perc >= 80
            )
                @include('contents.includes.datatable.asian_handicap_first_half_home_plus_15')

            @endif












            @if($row_pattern->goals_overunder_over_95_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_95')

            @elseif($row_pattern->goals_overunder_over_85_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_85')

            @elseif($row_pattern->goals_overunder_over_75_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_75')

            @elseif($row_pattern->goals_overunder_over_65_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_65')

            @elseif($row_pattern->goals_overunder_over_55_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_55')

            @elseif($row_pattern->goals_overunder_over_45_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_45')

            @elseif($row_pattern->goals_overunder_over_35_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_35')

            @elseif($row_pattern->goals_overunder_over_25_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_25')

            @elseif($row_pattern->goals_overunder_over_15_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_15')

            @elseif($row_pattern->goals_overunder_over_05_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_05')
            @endif

            @if($row_pattern->goals_overunder_under_05_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_05')

            @elseif($row_pattern->goals_overunder_under_15_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_15')

            @elseif($row_pattern->goals_overunder_under_25_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_25')

            @elseif($row_pattern->goals_overunder_under_35_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_35')

            @elseif($row_pattern->goals_overunder_under_45_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_45')

            @elseif($row_pattern->goals_overunder_under_55_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_55')

            @elseif($row_pattern->goals_overunder_under_65_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_65')

            @elseif($row_pattern->goals_overunder_under_75_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_75')

            @elseif($row_pattern->goals_overunder_under_85_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_85')

            @elseif($row_pattern->goals_overunder_under_95_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_95')

            @endif



            @if($row_pattern->goals_overunder_first_half_over_35_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_first_half_35')

            @elseif($row_pattern->goals_overunder_first_half_over_25_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_first_half_25')

            @elseif($row_pattern->goals_overunder_first_half_over_15_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_first_half_15')

            @elseif($row_pattern->goals_overunder_first_half_over_05_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_first_half_05')
            @endif

            @if($row_pattern->goals_overunder_first_half_under_05_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_first_half_05')

            @elseif($row_pattern->goals_overunder_first_half_under_15_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_first_half_15')

            @elseif($row_pattern->goals_overunder_first_half_under_25_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_first_half_25')

            @elseif($row_pattern->goals_overunder_first_half_under_35_perc >= 80)
                @include('contents.includes.datatable.goals_overunder_first_half_35')
            @endif


            @if($row_pattern->goals_overunder__second_half_over_35_perc >= 80)
                @include('contents.includes.datatable.goals_overunder__second_half_35')

            @elseif($row_pattern->goals_overunder__second_half_over_25_perc >= 80)
                @include('contents.includes.datatable.goals_overunder__second_half_25')

            @elseif($row_pattern->goals_overunder__second_half_over_15_perc >= 80)
                @include('contents.includes.datatable.goals_overunder__second_half_15')

            @elseif($row_pattern->goals_overunder__second_half_over_05_perc >= 80)
                @include('contents.includes.datatable.goals_overunder__second_half_05')
            @endif

            @if($row_pattern->goals_overunder__second_half_under_05_perc >= 80)
                @include('contents.includes.datatable.goals_overunder__second_half_05')

            @elseif($row_pattern->goals_overunder__second_half_under_15_perc >= 80)
                @include('contents.includes.datatable.goals_overunder__second_half_15')

            @elseif($row_pattern->goals_overunder__second_half_under_25_perc >= 80)
                @include('contents.includes.datatable.goals_overunder__second_half_25')

            @elseif($row_pattern->goals_overunder__second_half_under_35_perc >= 80)
                @include('contents.includes.datatable.goals_overunder__second_half_35')
            @endif




            @if($row_pattern->homeaway_home_perc >= 80 ||
                $row_pattern->homeaway_away_perc >= 80
            )
                @include('contents.includes.datatable.homeaway')
            @endif

            @if($row_pattern->second_half_winner_home_perc >= 80 ||
                $row_pattern->second_half_winner_draw_perc >= 80 ||
                $row_pattern->second_half_winner_away_perc >= 80
            )
                @include('contents.includes.datatable.second_half_winner')
            @endif

            @if($row_pattern->htft_double_home_home_perc >= 80 ||
                $row_pattern->htft_double_home_draw_perc >= 80 ||
                $row_pattern->htft_double_home_away_perc >= 80 ||

                $row_pattern->htft_double_draw_home_perc >= 80 ||
                $row_pattern->htft_double_draw_draw_perc >= 80 ||
                $row_pattern->htft_double_draw_away_perc >= 80 ||

                $row_pattern->htft_double_away_home_perc >= 80 ||
                $row_pattern->htft_double_away_draw_perc >= 80 ||
                $row_pattern->htft_double_away_away_perc >= 80
            )
                @include('contents.includes.datatable.second_half_winner')
            @endif


            @if($row_pattern->both_teams_score_yes_perc >= 80 ||
                $row_pattern->both_teams_score_no_perc >= 80
            )
                @include('contents.includes.datatable.btts')
            @endif

            @if($row_pattern->highest_scoring_half_first_perc >= 80 ||
                $row_pattern->highest_scoring_half_draw_perc >= 80 ||
                $row_pattern->highest_scoring_half_second_perc >= 80
            )
                @include('contents.includes.datatable.highest_scoring_half')
            @endif

            @if($row_pattern->double_chance_home_draw_perc >= 80 ||
                $row_pattern->double_chance_home_away_perc >= 80 ||
                $row_pattern->double_chance_draw_away_perc >= 80
            )
                @include('contents.includes.datatable.double_chance')
            @endif

            @if($row_pattern->first_half_winner_home_perc >= 80 ||
                $row_pattern->first_half_winner_draw_perc >= 80 ||
                $row_pattern->first_half_winner_away_perc >= 80
            )
                @include('contents.includes.datatable.first_half_winner')
            @endif

            @if($row_pattern->oddeven_odd_perc >= 80 ||
                $row_pattern->oddeven_even_perc >= 80
            )
                @include('contents.includes.datatable.oddeven')
            @endif

            @if($row_pattern->clean_sheet__home_yes_perc >= 80 ||
                $row_pattern->clean_sheet__home_no_perc >= 80
            )
                @include('contents.includes.datatable.clean_sheet__home')
            @endif

            @if($row_pattern->clean_sheet__away_yes_perc >= 80 ||
                $row_pattern->clean_sheet__away_no_perc >= 80
            )
                @include('contents.includes.datatable.clean_sheet__away')
            @endif

            @if($row_pattern->win_both_halves_home_perc >= 80 ||
                $row_pattern->win_both_halves_away_perc >= 80
            )
                @include('contents.includes.datatable.win_both_halves')
            @endif

            @if($row_pattern->both_teams_score__first_half_yes_perc >= 80 ||
                $row_pattern->both_teams_score__first_half_no_perc >= 80
            )
                @include('contents.includes.datatable.both_teams_score__first_half')
            @endif

            @if($row_pattern->both_teams_to_score__second_half_yes_perc >= 80 ||
                $row_pattern->both_teams_to_score__second_half_no_perc >= 80
            )
                @include('contents.includes.datatable.both_teams_to_score__second_half')
            @endif

            @if($row_pattern->win_to_nil_home_perc >= 80 ||
                $row_pattern->win_to_nil_away_perc >= 80
            )
                @include('contents.includes.datatable.win_to_nil')
            @endif

            @if($row_pattern->to_win_either_half_home_perc >= 80 ||
                $row_pattern->to_win_either_half_away_perc >= 80
            )
                @include('contents.includes.datatable.to_win_either_half')
            @endif

            @if($row_pattern->to_score_in_both_halves_by_teams_home_perc >= 80 ||
                $row_pattern->to_score_in_both_halves_by_teams_away_perc >= 80
            )
                @include('contents.includes.datatable.to_score_in_both_halves_by_teams')
            @endif

            @if($row_pattern->total_goals_under_2_perc >= 80 ||
                $row_pattern->total_goals_2_or_3_perc >= 80 ||
                $row_pattern->total_goals_over_3_perc >= 80
            )
                @include('contents.includes.datatable.total_goals')
            @endif







            @if($row_pattern->total_home_over_65_perc >= 80)
                @include('contents.includes.datatable.total_home_65')

            @elseif($row_pattern->total_home_over_55_perc >= 80)
                @include('contents.includes.datatable.total_home_55')

            @elseif($row_pattern->total_home_over_45_perc >= 80)
                @include('contents.includes.datatable.total_home_45')

            @elseif($row_pattern->total_home_over_35_perc >= 80)
                @include('contents.includes.datatable.total_home_35')

            @elseif($row_pattern->total_home_over_25_perc >= 80)
                @include('contents.includes.datatable.total_home_25')

            @elseif($row_pattern->total_home_over_15_perc >= 80)
                @include('contents.includes.datatable.total_home_15')

            @elseif($row_pattern->total_home_over_05_perc >= 80)
                @include('contents.includes.datatable.total_home_05')
            @endif

            @if($row_pattern->total_home_under_05_perc >= 80)
                @include('contents.includes.datatable.total_home_05')

            @elseif($row_pattern->total_home_under_15_perc >= 80)
                @include('contents.includes.datatable.total_home_15')

            @elseif($row_pattern->total_home_under_25_perc >= 80)
                @include('contents.includes.datatable.total_home_25')

            @elseif($row_pattern->total_home_under_35_perc >= 80)
                @include('contents.includes.datatable.total_home_35')

            @elseif($row_pattern->total_home_under_45_perc >= 80)
                @include('contents.includes.datatable.total_home_45')

            @elseif($row_pattern->total_home_under_55_perc >= 80)
                @include('contents.includes.datatable.total_home_55')

            @elseif($row_pattern->total_home_under_65_perc >= 80)
                @include('contents.includes.datatable.total_home_65')

            @endif



            @if($row_pattern->total_away_over_65_perc >= 80)
                @include('contents.includes.datatable.total_away_65')

            @elseif($row_pattern->total_away_over_55_perc >= 80)
                @include('contents.includes.datatable.total_away_55')

            @elseif($row_pattern->total_away_over_45_perc >= 80)
                @include('contents.includes.datatable.total_away_45')

            @elseif($row_pattern->total_away_over_35_perc >= 80)
                @include('contents.includes.datatable.total_away_35')

            @elseif($row_pattern->total_away_over_25_perc >= 80)
                @include('contents.includes.datatable.total_away_25')

            @elseif($row_pattern->total_away_over_15_perc >= 80)
                @include('contents.includes.datatable.total_away_15')

            @elseif($row_pattern->total_away_over_05_perc >= 80)
                @include('contents.includes.datatable.total_away_05')
            @endif

            @if($row_pattern->total_away_under_05_perc >= 80)
                @include('contents.includes.datatable.total_away_05')

            @elseif($row_pattern->total_away_under_15_perc >= 80)
                @include('contents.includes.datatable.total_away_15')

            @elseif($row_pattern->total_away_under_25_perc >= 80)
                @include('contents.includes.datatable.total_away_25')

            @elseif($row_pattern->total_away_under_35_perc >= 80)
                @include('contents.includes.datatable.total_away_35')

            @elseif($row_pattern->total_away_under_45_perc >= 80)
                @include('contents.includes.datatable.total_away_45')

            @elseif($row_pattern->total_away_under_55_perc >= 80)
                @include('contents.includes.datatable.total_away_55')

            @elseif($row_pattern->total_away_under_65_perc >= 80)
                @include('contents.includes.datatable.total_away_65')

            @endif




            @if($row_pattern->results_both_teams_score_home_yes_perc >= 80 ||
                $row_pattern->results_both_teams_score_draw_yes_perc >= 80 ||
                $row_pattern->results_both_teams_score_away_yes_perc >= 80 ||

                $row_pattern->results_both_teams_score_home_no_perc >= 80 ||
                $row_pattern->results_both_teams_score_draw_no_perc >= 80 ||
                $row_pattern->results_both_teams_score_away_no_perc >= 80
            )
                @include('contents.includes.datatable.results_both_teams_score')
            @endif



            @if($row_pattern->result_total_goals_home_over_25_perc >= 80 ||
                $row_pattern->result_total_goals_draw_over_25_perc >= 80 ||
                $row_pattern->result_total_goals_away_over_25_perc >= 80 ||

                $row_pattern->result_total_goals_home_under_25_perc >= 80 ||
                $row_pattern->result_total_goals_draw_under_25_perc >= 80 ||
                $row_pattern->result_total_goals_away_under_25_perc >= 80

            )
                @include('contents.includes.datatable.result_total_goals_25')
            @endif


            @if($row_pattern->result_total_goals_home_over_35_perc >= 80 ||
                $row_pattern->result_total_goals_draw_over_35_perc >= 80 ||
                $row_pattern->result_total_goals_away_over_35_perc >= 80 ||

                $row_pattern->result_total_goals_home_under_35_perc >= 80 ||
                $row_pattern->result_total_goals_draw_under_35_perc >= 80 ||
                $row_pattern->result_total_goals_away_under_35_perc >= 80

            )
                @include('contents.includes.datatable.result_total_goals_35')
            @endif


            @if($row_pattern->exact_goals_number_0_perc >= 80 ||
                $row_pattern->exact_goals_number_1_perc >= 80 ||
                $row_pattern->exact_goals_number_2_perc >= 80 ||

                $row_pattern->exact_goals_number_3_perc >= 80 ||
                $row_pattern->exact_goals_number_4_perc >= 80 ||
                $row_pattern->exact_goals_number_5_perc >= 80 ||

                $row_pattern->exact_goals_number_6_perc >= 80 ||
                $row_pattern->exact_goals_number_more_7_perc >= 80

            )
                @include('contents.includes.datatable.exact_goals_number')
            @endif


            @if($row_pattern->home_team_exact_goals_number_0_perc >= 80 ||
                $row_pattern->home_team_exact_goals_number_1_perc >= 80 ||
                $row_pattern->home_team_exact_goals_number_2_perc >= 80 ||

                $row_pattern->home_team_exact_goals_number_more_3_perc >= 80

            )
                @include('contents.includes.datatable.home_team_exact_goals_number')
            @endif



            @if($row_pattern->away_team_exact_goals_number_0_perc >= 80 ||
                $row_pattern->away_team_exact_goals_number_1_perc >= 80 ||
                $row_pattern->away_team_exact_goals_number_2_perc >= 80 ||

                $row_pattern->away_team_exact_goals_number_more_3_perc >= 80

            )
                @include('contents.includes.datatable.away_team_exact_goals_number')
            @endif




            @if($row_pattern->second_half_exact_goals_number_0_perc >= 80 ||
                $row_pattern->second_half_exact_goals_number_1_perc >= 80 ||
                $row_pattern->second_half_exact_goals_number_2_perc >= 80 ||

                $row_pattern->second_half_exact_goals_number_3_perc >= 80 ||
                $row_pattern->second_half_exact_goals_number_4_perc >= 80 ||
                $row_pattern->second_half_exact_goals_number_more_5_perc >= 80

            )
                @include('contents.includes.datatable.second_half_exact_goals_number')
            @endif




            @if($row_pattern->exact_goals_number__first_half_0_perc >= 80 ||
                $row_pattern->exact_goals_number__first_half_1_perc >= 80 ||
                $row_pattern->exact_goals_number__first_half_2_perc >= 80 ||

                $row_pattern->exact_goals_number__first_half_3_perc >= 80 ||
                $row_pattern->exact_goals_number__first_half_4_perc >= 80 ||
                $row_pattern->exact_goals_number__first_half_more_5_perc >= 80

            )
                @include('contents.includes.datatable.exact_goals_number__first_half')
            @endif



            @if($row_pattern->total_goals_both_teams_to_score_over_yes_25_perc >= 80 ||
                $row_pattern->total_goals_both_teams_to_score_over_no_25_perc >= 80 ||

                $row_pattern->total_goals_both_teams_to_score_under_yes_25_perc >= 80 ||
                $row_pattern->total_goals_both_teams_to_score_under_no_25_perc >= 80

            )
                @include('contents.includes.datatable.total_goals_both_teams_to_score')
            @endif


            @if($row_pattern->halftime_result_both_teams_score_home_yes_perc >= 80 ||
                $row_pattern->halftime_result_both_teams_score_draw_yes_perc >= 80 ||
                $row_pattern->halftime_result_both_teams_score_away_yes_perc >= 80 ||

                $row_pattern->halftime_result_both_teams_score_home_no_perc >= 80 ||
                $row_pattern->halftime_result_both_teams_score_draw_no_perc >= 80 ||
                $row_pattern->halftime_result_both_teams_score_away_no_perc >= 80

            )
                @include('contents.includes.datatable.halftime_result_both_teams_score')
            @endif



            @if($row_pattern->both_teams_to_score_1st_half__2nd_half_yes_yes_perc >= 80 ||
                $row_pattern->both_teams_to_score_1st_half__2nd_half_yes_no_perc >= 80 ||

                $row_pattern->both_teams_to_score_1st_half__2nd_half_no_yes_perc >= 80 ||
                $row_pattern->both_teams_to_score_1st_half__2nd_half_no_no_perc >= 80

            )
                @include('contents.includes.datatable.both_teams_to_score_1st_half__2nd')
            @endif



        </div>
    </div>
@endsection
