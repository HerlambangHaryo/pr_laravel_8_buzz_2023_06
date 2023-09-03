@extends('templates.'.$template.'.new_blank')

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
                        <div class="col-2 mt-1">
                            <span class="badge bg-gray-800">
                                {{ $row->pre_ah_pattern_4 }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-800">
                                {{ $row->pre_gou_pattern_4 }}
                            </span>
                        </div>
                        <div class="col-2  mt-1">
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
                        <div class="col-2  mt-1">
                            <span class="badge bg-gray-800">
                                {{ $row->end_ah_pattern_4 }}
                            </span>
                            <br/>
                            <span class="badge bg-gray-800">
                                {{ $row->end_gou_pattern_4 }}
                            </span>
                        </div>
                    </div>

                </div>
            </div>

            @include('contents.includes.data_list_details')


            <div class="row d-flex justify-content-center mt-3">
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    Pre Anytime
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->pre_anytime_goal_scorer != "")
                                        {
                                            $temp_row =  $row->pre_anytime_goal_scorer;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    if($temp_exp2[1] <= 2.20)
                                                    {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    End Anytime
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->end_anytime_goal_scorer != "")
                                        {
                                            $temp_row =  $row->end_anytime_goal_scorer;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    if($temp_exp2[1] <= 2.20)
                                                    {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-center mt-3">

                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    Pre first_goal_scorer
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->pre_first_goal_scorer != "")
                                        {
                                            $temp_row =  $row->pre_first_goal_scorer;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    End first_goal_scorer
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->end_first_goal_scorer != "")
                                        {
                                            $temp_row =  $row->end_first_goal_scorer;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row d-flex justify-content-center mt-3">
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    Pre last_goal_scorer
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->pre_last_goal_scorer != "")
                                        {
                                            $temp_row =  $row->pre_last_goal_scorer;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    End last_goal_scorer
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->end_last_goal_scorer != "")
                                        {
                                            $temp_row =  $row->end_last_goal_scorer;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-center mt-3">
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    Pre to_score_two_or_more_goals
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->pre_to_score_two_or_more_goals != "")
                                        {
                                            $temp_row =  $row->pre_to_score_two_or_more_goals;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    End to_score_two_or_more_goals
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php

                                        if($row->end_to_score_two_or_more_goals != "")
                                        {
                                            $temp_row =  $row->end_to_score_two_or_more_goals;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-center mt-3">
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    Pre last_goal_scorer2
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->pre_last_goal_scorer2 != "")
                                        {
                                            $temp_row =  $row->pre_last_goal_scorer2;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    End last_goal_scorer2
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php

                                        if($row->end_last_goal_scorer2 != "")
                                        {
                                            $temp_row =  $row->end_last_goal_scorer2;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-center mt-3">
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    Pre player_to_be_booked
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php


                                        if($row->pre_player_to_be_booked != "")
                                        {
                                            $temp_row =  $row->pre_player_to_be_booked;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    End player_to_be_booked
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1 text-center">
                                    <?php

                                        if($row->end_player_to_be_booked != "")
                                        {
                                            $temp_row =  $row->end_player_to_be_booked;

                                            $temp_exp = explode(";",$temp_row );
                                            foreach($temp_exp as $rowx)
                                            {
                                                $temp_exp2 = explode(":",$rowx );

                                                if(isset($temp_exp2[1]))
                                                {
                                                    // if($temp_exp2[1] <= 2.20)
                                                    // {
                                                        echo $rowx;
                                                        echo '<br/>';
                                                    // }
                                                }
                                            }
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
















        </div>
    </div>
@endsection
