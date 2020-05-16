
@extends('dashboard.results.index')

@section('contentgame')
                        <form role="form" method="post"
                            action="{{isset($result)?route('resultDetails.update',$result->id):route('result.details.store', $game->id)}}">
                                @if(isset($result))
                                   {{ method_field("PUT") }}
                                @endif

                                @csrf

                                            <div class="form-group">
                                                <label for="figure_id">Figure</label>
                                                <select class="form-control" name="figure_id" id="figure_id">
                                                <option value="0" >Select a board</option>
                                                @php
                                                    $selectedGameName = " all games";
                                                @endphp
                                                    @foreach ($figures as $figure)
                                                        <option value="{{ $figure->id }}">
                                                          {{-- {{ ( $childGame->id == \Illuminate\Support\Facades\Input::get('game_id')) ? 'selected' : '' }} --}}
                                                                {{ $figure->name  }}
                                                         </option>
                                                       {{-- @php
                                                       if ($childGame->id == \Illuminate\Support\Facades\Input::get('game_id')){
                                                        $selectedGameName = $childGame->name;
                                                          }
                                                        @endphp --}}
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="time">Total time (s)</label>
                                                <input type="number" min="0" class="form-control" id="time" name="time"
                                                    placeholder="Length of training after the bell sounds"
                                                    value="{{isset($result)?$result->total_time:''}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="used_figures">Used</label>
                                                <input type="number" min="0" class="form-control" id="used" name="used"
                                                    placeholder="Number of pegs placed upon completion of training"
                                                    value="{{isset($result)?$result->used_figures:''}}">
                                            </div>

                                            <div class="form-group">
                                                    <label for="avrage_time">Average time</label>
                                                    <input type="number" step="0.01" min="0" class="form-control" id="avg_time" name="avg_time"
                                                    placeholder="Length of time needed for each peg"
                                                        value="{{isset($result)?$result->average_time:''}}">
                                            </div>


                                   <div class="col-md-12 px-5 mt-3 text-right">
                                        <a href="{{route('patients.index')}}" class="mr-2 text-dark">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit game</button>

                                    </div>

                        </form>
@endsection


