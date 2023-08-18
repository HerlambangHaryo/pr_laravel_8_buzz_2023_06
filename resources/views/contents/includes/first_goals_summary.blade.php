<div class="row d-flex justify-content-center mt-3">
    <div class="col-6 text-center text-yellow">
        <small>
            <abbr class="initialism">
                First Half
            </abbr>
            <br/>
            <abbr class="initialism">
                {{ $row_fixture->score_halftime_home }} - {{ $row_fixture->score_halftime_away }}
            </abbr>
        </small>
    </div>
    <div class="col-6 text-center text-yellow">
        <small>
            <abbr class="initialism">
                Second Half
            </abbr>
            <br/>
            <abbr class="initialism">
                {{ $row_fixture->score_secondtime_home }} - {{ $row_fixture->score_secondtime_away }}
            </abbr>
        </small>
    </div>
</div>
