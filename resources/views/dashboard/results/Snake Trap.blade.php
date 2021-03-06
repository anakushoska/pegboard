@extends('dashboard.results.index')

@section('contentgame')
                        <form role="form" method="post"
                            action="{{isset($result)?route('resultDetails.update',$result->id):route('result.details.store', $game->id)}}">
                                @if(isset($result))
                                    {{ method_field("PUT") }}
                                @endif

                                @csrf


                                <snake-trap-component
                                    v-bind:figures='@json($figures)'
                                    v-bind:levels='@json($levels)'
                                >
                                </snake-trap-component>

                                 <div class="form-group">
                                        <label for="time">Total time (s)</label>
                                        <input type="number" min="0" class="form-control" id="time" name="time"
                                            placeholder="Length of training after the bell sounds"
                                            value="{{isset($result)?$result->total_time:''}}">
                                </div>

                                <div class="form-group">
                                        <label for="completed">Caught</label>
                                        <input type="number" class="form-control" id="correct" name="correct"
                                            placeholder="Completed"
                                            value="{{isset($result)?$result->completed:''}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="incorrect">Missed</label>
                                        <input type="number" class="form-control" id="incorrect" name="incorrect"
                                            placeholder="Uncompleted"
                                            value="{{isset($result)?$result->incorrect:''}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="used_figures">Success Rate</label>
                                        <input type="number" class="form-control" id="success_rate" name="success_rate"
                                            placeholder="Used figures"
                                            value="{{isset($result)?$result->used_figures:''}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="avrage_time">Average time</label>
                                        <input type="number" class="form-control" id="avg_time" name="avg_time"
                                            placeholder="Average time"
                                            value="{{isset($result)?$result->average_time:''}}">
                                    </div>

                            <div class="col-md-12 px-5 mt-3 text-right">
                                    <a href="{{route('patients.index')}}" class="mr-2 text-dark">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit game</button>

                            </div>
                        </form>

@endsection



