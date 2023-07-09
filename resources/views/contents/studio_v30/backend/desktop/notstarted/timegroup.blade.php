@extends('templates.'.$template.'.new_blank')

@section('title', $panel_name)

@section('content')  
     
    <div class="row mb-1">
        <div class="col-12 text-center"> 
            <div class="btn-group">
                <a  
                    href="{{ route('Notstarted.index') }}"
                    class="btn btn-sm btn-secondary">
                    League
                </a>   
                <a  
                    href="{{ route('Notstarted.timegroup') }}"
                    class="btn btn-sm btn-secondary">
                    Time
                </a>   
            </div>
        </div>  
    </div> 

    <div class="row mb-4">
        {!! define_date('view') !!}
    </div>

    <div class="row mb-2">
        @forelse ($data as $row)     
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="row"> 
                            <div class="col-1"> 
                                {{ $loop->iteration }}
                            </div>
                            <div class="col-2"> 
                                {{ $row->yeary }}-{{ $row->monthy }}-{{ $row->dayy }}
                            </div>
                            <div class="col-7"> 
                                {{ $row->houry }}:{{ $row->minutey }}
                            </div> 
                            <div class="col-1 text-center">   
                                ({{ $row->counter }})
                            </div> 
                            <div class="col-1"> 
                                <a    
                                    href="{{route('Notstarted.time', [
                                            'year'      => $row->yeary,
                                            'month'     => $row->monthy,
                                            'day'       => $row->dayy,
                                            'hour'      => $row->houry,
                                            'minute'    => $row->minutey
                                        ])}}"
                                    class=" "> 
                                    View
                                </a> 
                            </div>
                        </div> 
                    </div>  
                </div>
            </div>
            @empty 
                
        @endforelse  
    </div> 
@endsection
