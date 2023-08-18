
<div id="datatable" class="mt-3 mb-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h1>
                        Double Chance
                    </h1>
                </div>
                <div class="col-6 text-center">
                    {!! $row->preend->double_chance_home_draw_perc !!} -
                    {!! $row->preend->double_chance_home_away_perc !!} -
                    {!! $row->preend->double_chance_draw_away_perc !!}
                </div>
            </div>
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
                            <x-html.th-content title="Pre 1x" />
                            <x-html.th-content title="Pre 12" />
                            <x-html.th-content title="Pre 2x" />
                            <x-html.th-content title="End 1x" />
                            <x-html.th-content title="End 12" />
                            <x-html.th-content title="End 2x" />
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
                                    <small >
                                        {{ $row->pre_double_chance_home_draw }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_double_chance_home_away }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_double_chance_draw_away }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_double_chance_home_draw }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_double_chance_home_away }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_double_chance_draw_away }}
                                    </small>
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
