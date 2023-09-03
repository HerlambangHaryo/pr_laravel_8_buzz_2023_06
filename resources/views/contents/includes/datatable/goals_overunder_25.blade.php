
<div id="datatable" class="mt-3 mb-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h1>
                        Overunder ou25
                    </h1>
                </div>
                <div class="col-6">
                    <div>
                        <div class="progress mt-3 mb-2" style="height: 15px;">
                            <div class="progress-bar bg-success" style="width: {{ $row_pattern->goals_overunder_over_25_perc }}%">
                                {{ number_format($row_pattern->goals_overunder_over_25_perc, 2, ',', ' ') }}
                            </div>
                            <div class="progress-bar  bg-warning" style="width: {{ $row_pattern->goals_overunder_under_25_perc }}%">
                                {{ number_format($row_pattern->goals_overunder_under_25_perc, 2, ',', ' ') }}
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


                            <x-html.th-content title="End o2" />
                            <x-html.th-content title="End u2" />

                            <x-html.th-content title="End o225" />
                            <x-html.th-content title="End u225" />

                            <x-html.th-content title="End o25" />
                            <x-html.th-content title="End u25" />

                            <x-html.th-content title="End o275" />
                            <x-html.th-content title="End u275" />


                            <x-html.th-content title="Pre o2" />
                            <x-html.th-content title="Pre u2" />

                            <x-html.th-content title="Pre o225" />
                            <x-html.th-content title="Pre u225" />

                            <x-html.th-content title="Pre o25" />
                            <x-html.th-content title="Pre u25" />

                            <x-html.th-content title="Pre o275" />
                            <x-html.th-content title="Pre u275" />
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
                                        {{ $row->end_goals_overunder_over_20 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_goals_overunder_under_20 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_goals_overunder_over_225 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_goals_overunder_under_225 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_goals_overunder_over_25 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_goals_overunder_under_25 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_goals_overunder_over_275 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->end_goals_overunder_under_275 }}
                                    </small>
                                </td>

                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_goals_overunder_over_20 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_goals_overunder_under_20 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_goals_overunder_over_225 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_goals_overunder_under_225 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_goals_overunder_over_25 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_goals_overunder_under_25 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_goals_overunder_over_275 }}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <small >
                                        {{ $row->pre_goals_overunder_under_275 }}
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
