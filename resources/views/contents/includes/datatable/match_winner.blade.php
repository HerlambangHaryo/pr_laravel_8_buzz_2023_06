
<div id="datatable" class="mt-3 mb-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h1>
                        Match Winner
                    </h1>
                </div>
                <div class="col-6">
                    <div>
                        <div class="progress mt-3 mb-2" style="height: 15px;">
                            <div class="progress-bar" style="width: {{ $row_pattern->match_winner_home_perc }}%">
                                {{ $row_pattern->match_winner_home_perc }}
                            </div>
                            <div class="progress-bar bg-gray-400" style="width: {{ $row_pattern->match_winner_draw_perc }}%">
                                {{ $row_pattern->match_winner_draw_perc }}
                            </div>
                            <div class="progress-bar bg-pink" style="width: {{ $row_pattern->match_winner_away_perc }}%">
                                {{ $row_pattern->match_winner_away_perc }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatableDefault" class="table  table-sm myTable ">
                    <thead class=" ">
                        <tr>
                            <x-html.th-content-width title="No." width="10%" />
                            <x-html.th-content title="Date"   />
                            <x-html.th-content title="Teams"   />
                            <x-html.th-content title="Goals"   />
                            <x-html.th-content title="Home" />
                            <x-html.th-content title="Draw" />
                            <x-html.th-content title="Away" />
                            <x-html.th-content title="Home" />
                            <x-html.th-content title="Draw" />
                            <x-html.th-content title="Away" />
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($data as $row)
                            <tr>
                                <td class="text-center">
                                    {{ $loop->iteration }}
                                    <br/>
                                    {{$row->statusx}}
                                </td>
                                <td class="text-left">
                                    <small>
                                        {{ $row->tanggal }}
                                        <br/>
                                        <abbr class="initialism">
                                            {{ $row->jam }}
                                        </abbr>
                                    </small>

                                    <small>
                                        {{ $row->leagueapi_id }} -
                                        {{ $row->season }}
                                    </small>

                                    <br/>
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
                                                link="halo"
                                                nama="{{ $row->fixture_status }}"/>
                                </td>
                                <td class="text-center">
                                    {{ $row->fixture->goals_home }}
                                    <br/>
                                    {{ $row->fixture->goals_away }}
                                </td>

                                <td class="text-center">
                                    @if($row->statusx == 'Ori')
                                        <small >
                                            {{ $row->pre_match_winner_home }}
                                        </small>
                                    @else
                                        <small >
                                            {{ $row->pre_match_winner_away }}
                                        </small>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_match_winner_draw }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    @if($row->statusx == 'Ori')
                                        <small >
                                            {{ $row->pre_match_winner_away }}
                                        </small>
                                    @else
                                        <small >
                                            {{ $row->pre_match_winner_home }}
                                        </small>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($row->statusx == 'Ori')
                                        <small >
                                            {{ $row->end_match_winner_home }}
                                        </small>
                                    @else
                                        <small >
                                            {{ $row->end_match_winner_away }}
                                        </small>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_match_winner_draw }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    @if($row->statusx == 'Ori')
                                        <small >
                                            {{ $row->end_match_winner_away }}
                                        </small>
                                    @else
                                        <small >
                                            {{ $row->end_match_winner_home }}
                                        </small>
                                    @endif
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
