@extends('dashboard.results.index')

@section('contentgame')
                            <form role="form" method="post"
                                action="{{isset($result)?route('resultDetails.update',$result->id):route('result.details.store', $game->id)}}">
                                    @if(isset($result))
                                        {{ method_field("PUT") }}
                                    @endif

                                    @csrf


                                <randomizer-component
                                    v-bind:figures='@json($figures)'
                                    v-bind:levels='@json($levels)'
                                >
                                </randomizer-component>

                                <div class="form-group">
                                        <label for="total_time">Time (s)</label>
                                        <input type="number" min="0" class="form-control" id="time" name="time"
                                            placeholder="Length of training after the bell sounds"
                                            value="{{isset($result)?$result->total_time:''}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="completed">Correct</label>
                                        <input type="number" min="0" class="form-control" id="correct" name="correct"
                                            placeholder="Number of correctly placed pegs"
                                            value="{{isset($result)?$result->completed:''}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="incorrect">Incorrect</label>
                                        <input type="number" min="0" class="form-control" id="incorrect" name="incorrect"
                                            placeholder="Number of incorrectly placed pegs"
                                            value="{{isset($result)?$result->incorrect:''}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="used_figures">Success Rate (%)</label>
                                        <input type="number" step="0.01" min="0"  class="form-control" id="success_rate" name="success_rate"
                                            placeholder="Success rate"
                                            value="{{isset($result)?$result->used_figures:''}}">
                                    </div>

                                    <div class="form-group">
                                            <label for="avrage_time">Average time (s)</label>
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



