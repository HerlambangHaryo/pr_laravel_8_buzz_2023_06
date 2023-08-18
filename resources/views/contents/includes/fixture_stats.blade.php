@if(!is_null($row->statistic->shots_on_goal_home) || !is_null($row->statistic->shots_on_goal_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Shots on goal
            </small>
            <?php
                $home = $row->statistic->shots_on_goal_home;
                $away = $row->statistic->shots_on_goal_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->shots_off_goal_home) || !is_null($row->statistic->shots_off_goal_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Shots off goal
            </small>
            <?php
                $home = $row->statistic->shots_off_goal_home;
                $away = $row->statistic->shots_off_goal_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->total_shots_home) || !is_null($row->statistic->total_shots_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Total shots
            </small>
            <?php
                $home = $row->statistic->total_shots_home;
                $away = $row->statistic->total_shots_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->blocked_shots_home) || !is_null($row->statistic->blocked_shots_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Blocked shots
            </small>
            <?php
                $home = $row->statistic->blocked_shots_home;
                $away = $row->statistic->blocked_shots_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->shots_inside_box_home) || !is_null($row->statistic->shots_inside_box_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Shots inside box
            </small>
            <?php
                $home = $row->statistic->shots_inside_box_home;
                $away = $row->statistic->shots_inside_box_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->shots_outside_box_home) || !is_null($row->statistic->shots_outside_box_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Shots outside box
            </small>
            <?php
                $home = $row->statistic->shots_outside_box_home;
                $away = $row->statistic->shots_outside_box_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->fouls_home) || !is_null($row->statistic->fouls_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Fouls
            </small>
            <?php
                $home = $row->statistic->fouls_home;
                $away = $row->statistic->fouls_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->corner_kicks_home) || !is_null($row->statistic->corner_kicks_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Corner kicks
            </small>
            <?php
                $home = $row->statistic->corner_kicks_home;
                $away = $row->statistic->corner_kicks_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->offsides_home) || !is_null($row->statistic->offsides_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Offsides
            </small>
            <?php
                $home = $row->statistic->offsides_home;
                $away = $row->statistic->offsides_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->ball_possession_home) || !is_null($row->statistic->ball_possession_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Ball possession
            </small>
            <?php
                $home = $row->statistic->ball_possession_home;
                $away = $row->statistic->ball_possession_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->yellow_cards_home) || !is_null($row->statistic->yellow_cards_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Yellow cards
            </small>
            <?php
                $home = $row->statistic->yellow_cards_home;
                $away = $row->statistic->yellow_cards_away;

                if($home != 0 && $away != 0)
                {
                    $home_perc = $home / ($home + $away) * 100;
                    $away_perc = $away / ($home + $away) * 100;
                }
                else
                {
                    $home_perc = 0;
                    $away_perc = 0;

                }

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->red_cards_home) || !is_null($row->statistic->red_cards_away)  )
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Red cards
            </small>
            <?php
                $home = $row->statistic->red_cards_home;
                $away = $row->statistic->red_cards_away;

                if($home != 0 && $away != 0)
                {
                    $home_perc = $home / ($home + $away) * 100;
                    $away_perc = $away / ($home + $away) * 100;
                }
                else
                {
                    $home_perc = 0;
                    $away_perc = 0;

                }

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->goalkeeper_saves_home) || !is_null($row->statistic->goalkeeper_saves_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Goalkeeper saves
            </small>
            <?php
                $home = $row->statistic->goalkeeper_saves_home;
                $away = $row->statistic->goalkeeper_saves_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->total_passess_home) || !is_null($row->statistic->total_passess_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Total passess
            </small>
            <?php
                $home = $row->statistic->total_passess_home;
                $away = $row->statistic->total_passess_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->passess_accurate_home) || !is_null($row->statistic->passess_accurate_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Passess accurate
            </small>
            <?php
                $home = $row->statistic->passess_accurate_home;
                $away = $row->statistic->passess_accurate_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->passess_home) || !is_null($row->statistic->passess_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Passess
            </small>
            <?php
                $home = $row->statistic->passess_home;
                $away = $row->statistic->passess_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif

@if(!is_null($row->statistic->expected_goals_home) || !is_null($row->statistic->expected_goals_away))
    <div class="row d-flex justify-content-center text-center mt-1">
        <div class="col-5">
            <small>
                Expected Goals
            </small>
            <?php
                $home = $row->statistic->expected_goals_home;
                $away = $row->statistic->expected_goals_away;

                $home_perc = $home / ($home + $away) * 100;
                $away_perc = $away / ($home + $away) * 100;

                $home_color = "bg-gray-600";
                $away_color = "bg-gray-600";

                if( $home > $away)
                {
                    $home_color = "bg-primary";
                }
                elseif( $home < $away)
                {
                    $away_color = "bg-warning";
                }
            ?>
            <div class="progress  " style="height: 10px;">
                <div class="progress-bar {{$home_color}}" style="width: {{ $home_perc }}%">
                    <small>
                            {{ $home }}
                    </small>
                </div>
                <div class="progress-bar {{$away_color}}" style="width: {{ $away_perc }}%">
                    <small>
                            {{ $away }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endif
