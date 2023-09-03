
<div id="datatable" class="mt-3 mb-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h1>
                        Ah Home +0.5
                    </h1>
                </div>
                <div class="col-6">
                    <div>
                        <div class="progress mt-3 mb-2" style="height: 15px;">
                            <div class="progress-bar" style="width: {{ $row_pattern->asian_handicap_home_plus_05_perc }}%">
                                {{ $row_pattern->asian_handicap_home_plus_05_data }} -
                                {{ number_format($row_pattern->asian_handicap_home_plus_05_perc, 2, ',', ' ') }}
                            </div>
                            <div class="progress-bar  bg-pink" style="width: {{ $row_pattern->asian_handicap_away_plus_05_perc }}%">
                                {{ $row_pattern->asian_handicap_away_plus_05_data }} -
                                {{ number_format($row_pattern->asian_handicap_away_plus_05_perc, 2, ',', ' ') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatableDefault" class="table myTable ">
                    <thead class=" ">
                        <tr>
                            <x-html.th-content-width title="No." width="10%" />
                            <x-html.th-content title="Date"   />
                            <x-html.th-content title="Leagues"   />
                            <x-html.th-content title="Teams"   />
                            <x-html.th-content title="Goals"   />
                            <x-html.th-content title="Pre Home +0.5" />
                            <x-html.th-content title="Pre Away -0.5" />
                            <x-html.th-content title="End Home +0.5" />
                            <x-html.th-content title="End Away -0.5" />
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
                                    @if($row->statusx == 'Ori')
                                        <small >
                                            {{ $row->pre_asian_handicap_home_plus_05 }}
                                        </small>
                                    @else
                                        <small >
                                            {{ $row->pre_asian_handicap_away_plus_05 }}
                                        </small>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($row->statusx == 'Ori')
                                        <small >
                                            {{ $row->pre_asian_handicap_away_plus_05 }}
                                        </small>
                                    @else
                                        <small >
                                            {{ $row->pre_asian_handicap_home_plus_05 }}
                                        </small>
                                    @endif
                                </td>


                                <td class="text-center">
                                    @if($row->statusx == 'Ori')
                                        <small >
                                            {{ $row->end_asian_handicap_home_plus_05 }}
                                        </small>
                                    @else
                                        <small >
                                            {{ $row->end_asian_handicap_away_plus_05 }}
                                        </small>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($row->statusx == 'Ori')
                                        <small >
                                            {{ $row->end_asian_handicap_away_plus_05 }}
                                        </small>
                                    @else
                                        <small >
                                            {{ $row->end_asian_handicap_home_plus_05 }}
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
